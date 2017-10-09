<?php

    class GrafikasMetai extends DbOptions {
        protected static $db_table = "grafikas_metai";
        protected static $db_table_fields = array('id', 'metai');
        public $id;
        public $metai;
    }

?>