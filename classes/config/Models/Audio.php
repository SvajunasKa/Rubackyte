<?php
/**
 * Created by PhpStorm.
 * User: Svajunas
 * Date: 2017-12-26
 * Time: 17:53
 */

class Audio extends DbOptions
{
    protected static $db_table = "audio";
    protected static $db_table_fields = array('id', 'koncertas', 'pavadinimas');
    public $id;
    public $koncertas;
    public $pavadinimas;
}