<?php
/**
 * Created by PhpStorm.
 * User: Svajunas
 * Date: 2017-12-19
 * Time: 17:43
 */

class Press extends DbOptions
{
    protected static $db_table = "ziniasklaida";
    protected static $db_table_fields = array('id', 'straipsnisLt', 'straipsnisEn', 'straipsnisFr');
    public $id;
    public $straipsnisLt;
    public $astraipsnisEn;
    public $straipsnisFr;
}