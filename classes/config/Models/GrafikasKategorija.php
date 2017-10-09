<?php

    class GrafikasKategorija extends DbOptions {
        protected static $db_table = "grafikas_kategorijos";
        protected static $db_table_fields = array('id', 'kategorijaLt', 'kategorijaEn', 'kategorijaFr');
        public $id;
        public $kategorijaLt;
        public $kategorijaEn;
        public $kategorijaFr;
    }

?>