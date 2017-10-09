<?php

    class Settings extends DbOptions {
        protected static $db_table = "settings";
        protected static $db_table_fields = array('id', 'language');
        public $id;
        public $language;
    }

?>