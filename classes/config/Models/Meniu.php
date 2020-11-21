<?php

    class Meniu extends DbOptions {
        protected static $db_table = "meniu";
        protected static $db_table_fields = array('id', 'biografijaLt', 'diskografijaLt', 'grafikasLt',
            'archyvasLt', 'galerijaLt', 'kontaktaiLt' , 'biografijaEn',
            'diskografijaEn', 'grafikasEn', 'archyvasEn', 'galerijaEn',
            'kontaktaiEn', 'biografijaFr', 'diskografijaFr', 'grafikasFr',
            'archyvasFr', 'galerijaFr', 'kontaktaiFr', 'mediaLt', 'mediaEn', 'mediaFr',
            'subMenu1Lt', 'subMenu1En', 'subMenu1Fr', 'subMenu2Lt', 'subMenu2En', 'subMenu2Fr',
            'subMenu3Lt', 'subMenu3En','subMenu3Fr','subMenu4Lt', 'subMenu4En', 'subMenu4Fr' );
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
        public $subMenu1Lt;
        public $subMenu1En;
        public $subMenu1Fr;
        public $subMenu2Lt;
        public $subMenu2En;
        public $subMenu2Fr;
        public $subMenu3Lt;
        public $subMenu3En;
        public $subMenu3Fr;
        public $subMenu4Lt;
        public $subMenu4En;
        public $subMenu4Fr;
    }

?>