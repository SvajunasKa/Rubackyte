<?php

    class Kontaktai extends DbOptions {
        protected static $db_table = "kontaktai";
        protected static $db_table_fields = array('id',
            'asmuo_eu', 'email_eu', 'telefonas_eu',
            'asmuo_jav', 'email_jav', 'telefonas_jav',
            'asmuo_fr', 'email_fr', 'telefonas_fr');
        public $id;
        public $asmuo_eu;
        public $email_eu;
        public $telefonas_eu;
        public $asmuo_jav;
        public $email_jav;
        public $telefonas_jav;
        public $asmuo_fr;
        public $email_fr;
        public $telefonas_fr;
    }

?>