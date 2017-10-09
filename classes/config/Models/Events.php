<?php

    class Events extends DbOptions {
        protected static $db_table = "events";
        protected static $db_table_fields = array('id', 'data', 'data_en', 'data_fr', 'aprasymasLt', 'aprasymasEn', 'aprasymasFr');
        public $id;
        public $data;
        public $data_en;
        public $data_fr;
        public $aprasymasLt;
        public $aprasymasEn;
        public $aprasymasFr;
    }

?>