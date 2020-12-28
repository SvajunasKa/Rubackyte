<?php


class IntroPopUp extends DbOptions {
    protected static $db_table = "intropopup";
    protected static $db_table_fields = array('id', 'nuotrauka', 'nuoroda');
    public $id;
    public $nuotrauka;
    public $nuoroda;
}