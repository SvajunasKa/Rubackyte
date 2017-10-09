<?php

    class Archyvas extends DbOptions {
        protected static $db_table = "archyvas";
        protected static $db_table_fields = array('id', 'data', 'aprasymasLt', 'aprasymasEn', 'aprasymasFr');
        public $id;
        public $data;
        public $aprasymasLt;
        public $aprasymasEn;
        public $aprasymasFr;
    }

?>