<?php

    class DbOptions {
        
        public $tmp_path;
        public $upload_directory = "img";
        public $errors = array();
        public $upload_errors_array = array(
            UPLOAD_ERR_OK           => "There is no error",
            UPLOAD_ERR_INI_SIZE     => "LIMIT upload max size",
            UPLOAD_ERR_PARTIAL      => "The uploaded file was only partiallu uploaded",
            UPLOAD_ERR_NO_FILE      => "No file was uploaded",
            UPLOAD_ERR_NO_TMP_DIR   => "Missing a temporary folder",
            UPLOAD_ERR_CANT_WRITE   => "Failed to write file to disk",
            UPLOAD_ERR_EXTENSION    => "A PHP extension stopped the file upload"
        );
        
        public static function all($order = '', $limit = '', $offset = '') {
            
            if(!empty($limit) AND !empty($offset)) {
                return static::find_by_query("SELECT * FROM " . static::$db_table . " ORDER BY id {$order} LIMIT {$limit} OFFSET {$offset}");
            } elseif(!empty($limit)) {
                return static::find_by_query("SELECT * FROM " . static::$db_table . " ORDER BY id {$order} LIMIT {$limit}");    
            }  else {
                return static::find_by_query("SELECT * FROM " . static::$db_table . " ORDER BY id {$order}");
            }
            
        }
        
        public static function find($id) {
            $the_result_array = static::find_by_query("SELECT * FROM " . static::$db_table . " WHERE id = {$id} LIMIT 1 ");
            return !empty($the_result_array) ? array_shift($the_result_array) : false;
        }
        
        // kad nereiketu naudoti to paties per ta pati
        // vietoj situ naudosite static::find_by_query("...");
        public static function find_by_query($sql) {
            global $database;
            
            $result_set = $database->query($sql);
            $the_object_array = array();
            while($row = mysqli_fetch_array($result_set)) {
                $the_object_array[] = static::instantation($row);
            }
            return $the_object_array; 
            
        }
    
        private static function instantation($the_record) {
            $calling_class = get_called_class();
            $the_object = new $calling_class;
            
            foreach($the_record as $the_attribute => $value) {
                if($the_object->has_the_attribute($the_attribute)) {
                    $the_object->$the_attribute = $value;
                }
            }
            return $the_object;
        }
        
        private function has_the_attribute($the_attribute) {
            $object_properties = get_object_vars($this); 
            return array_key_exists($the_attribute, $object_properties);
        }
        
        protected function properties() {
            $properties = array();
            foreach(static::$db_table_fields as $db_dield) {
                if(property_exists($this, $db_dield)) {
                    $properties[$db_dield] = $this->$db_dield; 
                }
            }
            return $properties;
        }
        
        protected function clean_properties() {
            global $database;
            $clean_properties = array();
            
            foreach ($this->properties() as $key => $value) {
                $clean_properties[$key] = $database->escape_string($value);
            }
            
            return $clean_properties;
        }
        
        // ** CRUD - CREATE, READ, UPDATE, DELETE ** //
        public function save() {
            return isset($this->id) ? $this->update() : $this->create();
        }
        
        public function create() {
            global $database;
            $properties = $this->clean_properties();
            
            $sql = "INSERT INTO " . static::$db_table . "(" . implode(",", array_keys($properties)) . ")";
            $sql .= " VALUES ('" . implode("','", array_values($properties)) . "')";
            
            if($database->query($sql)) {
                $this->id = $database->the_insert_id();
                return true;
            } else {
                return false;
            }
        }
        
        public function update() {
            global $database;
            $properties = $this->clean_properties();
            $properties_pairs = array();
            
            foreach($properties as $key => $value) {
                $properties_pairs[] = "{$key}='{$value}'";
            }
            
            $sql = "UPDATE " . static::$db_table . " SET ";
            $sql .= implode(", ", $properties_pairs);
            $sql .= " WHERE id= " . $database->escape_string($this->id);
            
            $database->query($sql);
            return (mysqli_affected_rows($database->connection) == 1) ? true : false; 
        }
        
        public function delete() {
            global $database;
            $sql = "DELETE FROM " . static::$db_table . " WHERE id =" . $database->escape_string($this->id) . " LIMIT 1";
            $database->query($sql);
            return (mysqli_affected_rows($database->connection) == 1) ? true : false;
            
        }
        
        public static function where($column, $insert) {
            global $database;
            
            $sql  = "SELECT * FROM " . static::$db_table;
            $sql .= " WHERE {$column} = '".$database->escape_string($insert)."' ";

            return static::find_by_query($sql);
        
        }
        
        public static function like($column, $search) {
            global $database;

            $sql  = "SELECT * FROM " . static::$db_table;
            $sql .= " WHERE {$column} LIKE '%".$database->escape_string($search)."%' ";

            return static::find_by_query($sql);
        
        }
        
        public function set_file($file) {
            
            if(empty($file) || !$file || !is_array($file)) {
                $this->errors[] = "There was no file uploaded here";
                return false;
            } elseif ($file['error'] != 0) {
                $this->errors[] = $this->upload_errors_array[$file['error']];
                return false;
            } else {
                $this->nuotrauka = basename(str_shuffle($file['name']));
                $this->tmp_path = $file['tmp_name'];
                $this->type = $file['type'];
                $this->size = $file['size'];
            }

        }
        
        public function picture_path() {
            return $this->upload_directory.DS.$this->nuotrauka;
        }

        
        public function save_with_foto() {
            if($this->id) {
                $this->save();
            } else {
                // ziureim ar yra kokiu error
                if(!empty($this->errors)) {
                    return false;
                }
                
                // tikriname ar yra temp path ir toks failas yra
                if(empty($this->nuotrauka) || empty($this->tmp_path)) {
                    $this->errors[] = "The file was not available";
                    return false;
                }
                
                $target_path = SITE_ROOT . 'assets' . DS . 'img' . DS . $this->nuotrauka;
                
                if(file_exists($target_path)) {
                    $this->errors[] = "File {$this->nuotrauka} already exists";
                    return false;
                }
                
                if(move_uploaded_file($this->tmp_path, $target_path)) {
                    if($this->save()) {
                        unset($this->tmp_path);
                        return true;
                    }
                } else {
                    $this->errors[] = "The file was broken";
                    return false;
                }
                
            }
        }
        
        public function delete_photo() {
            if($this->delete()) {
                $target_path = SITE_ROOT.DS.'assets'.DS. $this->picture_path();
                return unlink($target_path) ? true : false;
                
            } else {
                return false;
            }
        }
        
        // count all db
        public static function count_all() {
            global $database;
            
            $sql = "SELECT COUNT(*) FROM " . static::$db_table;
            $result_set = $database->query($sql);
            $row = mysqli_fetch_array($result_set);
            
            return array_shift($row);
        }
        
        

        function excerpt($str, $length=140, $trailing='...') {
              $length-=mb_strlen($trailing);
              if (mb_strlen($str)> $length) {
                 return mb_substr($str,0,$length).$trailing;
              }
              else {
                 $res = $str;
              }

              return $res;
        }

    }

?>