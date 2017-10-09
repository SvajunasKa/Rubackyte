<?php

    class Email extends DbOptions {
        protected static $db_table = "email";
        protected static $db_table_fields = array('id', 'email', 'zinuteLt', 'zinuteEn', 'zinuteFr');
        public $id;
        public $email;     
        public $zinuteLt;
        public $zinuteEn;
        public $zinuteFr;
    }

?>