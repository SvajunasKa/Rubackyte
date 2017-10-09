<?php

    class Galerija extends DbOptions {
        protected static $db_table = "galerija";
        protected static $db_table_fields = array('id', 'pavadinimas', 'aprasymas', 'nuotrauka', 'aprasymasEn', 'aprasymasFr');
        public $id;
        public $pavadinimas;
        public $aprasymas;
        public $aprasymasEn;
        public $aprasymasFr;
        public $nuotrauka;
    }

?>