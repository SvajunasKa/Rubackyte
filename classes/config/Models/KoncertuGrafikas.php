<?php

    class KoncertuGrafikas extends DbOptions {
        protected static $db_table = "koncertu_grafikas";
        protected static $db_table_fields = array('id', 'data', 'pavadinimasLt', 'pavadinimasEn', 'pavadinimasFr', 'metai', 'kategorija');
        public $id;
        public $data;
        public $pavadinimasLt;
        public $pavadinimasEn;
        public $pavadinimasFr;
        public $metai;
        public $kategorija;
    }

?>