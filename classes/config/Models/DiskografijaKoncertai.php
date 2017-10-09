<?php

    class DiskografijaKoncertai extends DbOptions {
        protected static $db_table = "diskografija_koncertai";
        protected static $db_table_fields = array('id', 'koncertas', 'pavadinimas');
        public $id;
        public $koncertas;
        public $pavadinimas;
    }

?>