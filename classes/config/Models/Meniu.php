<?php

    class Meniu extends DbOptions {
        protected static $db_table = "meniu";
        protected static $db_table_fields = array('id', 'biografijaLt', 'diskografijaLt', 'grafikasLt',
            'archyvasLt', 'galerijaLt', 'kontaktaiLt' , 'biografijaEn',
            'diskografijaEn', 'grafikasEn', 'archyvasEn', 'galerijaEn',
            'kontaktaiEn', 'biografijaFr', 'diskografijaFr', 'grafikasFr',
            'archyvasFr', 'galerijaFr', 'kontaktaiFr', 'mediaLt', 'mediaEn', 'mediaFr');
        public $id;
        public $biografijaLt;
        public $diskografijaLt;
        public $grafikasLt;
        public $archyvasLt;
        public $galerijaLt;
        public $kontaktaiLt;
        public $biografijaEn;
        public $diskografijaEn;
        public $grafikasEn;
        public $archyvasEn;
        public $galerijaEn;
        public $kontaktaiEn;
        public $biografijaFr;
        public $diskografijaFr;
        public $grafikasFr;
        public $archyvasFr;
        public $galerijaFr;
        public $kontaktaiFr;
        public $mediaLt;
        public $mediaEn;
        public $mediaFr;
    }

?>