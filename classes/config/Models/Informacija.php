<?php

    class Informacija extends DbOptions {
        protected static $db_table = "informacija";
        protected static $db_table_fields = array(
            'id',
            'cd_lt',
            'cd_en',
            'cd_fr',
            'dvd_lt',
            'dvd_en',
            'dvd_fr',
            'nuotrauka_lt',
            'nuotrauka_en',
            'nuotrauka_fr',
            'archyvas_lt',
            'archyvas_en',
            'archyvas_fr',
            'organizavimas_lt',
            'organizavimas_en',
            'organizavimas_fr',
            'europa_lt',
            'europa_en',
            'europa_fr',
            'jav_lt',
            'jav_en',
            'jav_fr',
            'klausimai_lt',
            'klausimai_en',
            'klausimai_fr',
            'koncertai_lt',
            'koncertai_en',
            'koncertai_fr',
            'recitaliai_lt',
            'recitaliai_en',
            'recitaliai_fr',
            'kamerine_lt',
            'kamerine_en',
            'kamerine_fr'
        );
        
        public $id;
        public $cd_lt;
        public $cd_en;
        public $cd_fr;
        public $dvd_lt;
        public $dvd_en;
        public $dvd_fr;
        public $nuotrauka_lt;
        public $nuotrauka_en;
        public $nuotrauka_fr;
        public $archyvas_lt;
        public $archyvas_en;
        public $archyvas_fr;
        public $organizavimas_lt;
        public $organizavimas_en;
        public $organizavimas_fr;
        public $europa_lt;
        public $europa_en;
        public $europa_fr;
        public $jav_lt;
        public $jav_en;
        public $jav_fr;
        public $klausimai_lt;
        public $klausimai_en;
        public $klausimai_fr;
        public $koncertai_lt;
        public $koncertai_en;
        public $koncertai_fr;
        public $recitaliai_lt;
        public $recitaliai_en;
        public $recitaliai_fr;
        public $kamerine_lt;
        public $kamerine_en;
        public $kamerine_fr;
    }

?>