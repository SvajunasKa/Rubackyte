<?php

class Interview extends DbOptions
{
    protected static $db_table = "interviu";
    protected static $db_table_fields = array('id', 'pavadinimas', 'interviu','nuotrauka');
    public $id;
    public $pavadinimas;
    public $interviu;
    public $nuotrauka;
}