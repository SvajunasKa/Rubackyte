<?php

    class Biografija extends DbOptions {
        protected static $db_table = "biografija";
        protected static $db_table_fields = array('id', 'aprasymasLt', 'aprasymasLt2', 'aprasymasLt3', 'aprasymasEn', 'aprasymasEn2', 'aprasymasEn3', 'aprasymasFr', 'aprasymasFr2', 'aprasymasFr3');
        public $id;
        public $aprasymasLt;
        public $aprasymasLt2;
        public $aprasymasLt3;
        public $aprasymasEn;
        public $aprasymasEn2;
        public $aprasymasEn3;
        public $aprasymasFr;
        public $aprasymasFr2;
        public $aprasymasFr3;
        
    }

?>