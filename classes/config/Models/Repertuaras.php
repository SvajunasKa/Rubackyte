<?php

    class Repertuaras extends DbOptions {
        protected static $db_table = "repertuaras";
        protected static $db_table_fields = array('id', 'kompozitorius', 'kompozitorius_en', 'kompozitorius_fr', 'pavadinimasLt', 'pavadinimasEn', 'pavadinimasFr', 'kategorija');
        public $id;
        public $kompozitorius;
        public $kompozitorius_en;
        public $kompozitorius_fr;
        public $pavadinimasLt;
        public $pavadinimasEn;
        public $pavadinimasFr;
        public $metai;
        public $kategorija;
    }

?>