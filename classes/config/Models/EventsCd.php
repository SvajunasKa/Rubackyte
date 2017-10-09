<?php

    class EventsCd extends DbOptions {
        protected static $db_table = "events_cd";
        protected static $db_table_fields = array('id', 'nuotrauka', 'aprasymasLt', 'aprasymasEn', 'aprasymasFr');
        public $id;
        public $nuotrauka;
        public $aprasymasLt;
        public $aprasymasEn;
        public $aprasymasFr;
    }

?>