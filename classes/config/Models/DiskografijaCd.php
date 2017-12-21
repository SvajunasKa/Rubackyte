<?php

    class DiskografijaCd extends DbOptions {
        protected static $db_table = "diskografija_cd";
        protected static $db_table_fields = array('id', 'pavadinimasLt',
            'pavadinimasEn',
            'pavadinimasFr',
            'nuotrauka',
            'aprasymasLt',
            'aprasymasEn',
            'aprasymasFr',
            'nuotrauka1');
        public $id;
        public $pavadinimasLt;
        public $pavadinimasEn;
        public $pavadinimasFr;
        public $nuotrauka;
        public $aprasymasLt;
        public $aprasymasEn;
        public $aprasymasFr;
        public $nuotrauka1;
    }

?>