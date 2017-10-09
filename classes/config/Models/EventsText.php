<?php

    class EventsText extends DbOptions {
        protected static $db_table = "events_text";
        protected static $db_table_fields = array('id', 'pavadinimas', 'pavadinimasEn', 'pavadinimasFr', 'pavadinimas2', 'pavadinimas2En', 'pavadinimas2Fr', 'pavadinimas3', 'pavadinimas3En', 'pavadinimas3Fr');
        public $id;
        public $pavadinimas;
        public $pavadinimasEn;
        public $pavadinimasFr;
        public $pavadinimas2;
        public $pavadinimas2En;
        public $pavadinimas2Fr;
        public $pavadinimas3;
        public $pavadinimas3En;
        public $pavadinimas3Fr;
    }

?>