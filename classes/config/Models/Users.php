<?php

    class Users extends DbOptions {
        protected static $db_table = "users";
        protected static $db_table_fields = array('id', 'vardas', 'pastas', 'slaptazodis', 'active', 'access_level', 'created_at', 'updated_at');
        public $id;
        public $vardas;
        public $pastas;
        public $slaptazodis;
        public $active;
        public $access_level;
        public $created_at;
        public $updated_at;
        
        public static function verify_user($email, $password) {
            global $database;
            $email = $database->escape_string($email);
            $password = $database->escape_string($password);

            $sql = "SELECT * FROM " . self::$db_table . " WHERE pastas = '{$email}' AND slaptazodis = '{$password}' LIMIT 1 ";
            $result = self::find_by_query($sql);
            return !empty($result) ? array_shift($result) : false;
        }
        
    }

?>