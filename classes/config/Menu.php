<?php

class Menu {
    /**
     * Grazina paskuti url parametra
     * @param  int $uri_offset irasome kelinta url paimti
     * @return string grazinama paskutine url dalis
     */
    public static function active($uri_offset) {
        $uri = explode("/", $_SERVER['SCRIPT_NAME']);
        $target = $uri[$uri_offset];
        return $target;
    }
}