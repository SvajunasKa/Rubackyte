<?php
class Data {
    
    /**
     * Grazina tik diena is pilnos datos
     */
    public static function day($data) {
        return date("d", strtotime($data));
    }
    
    /**
     * Grazina tik diena is pilnos datos
     */
    public static function year($data) {
        return date("Y", strtotime($data));
    }
    
    /**
     * Grazina menesi zodziais
     */
    public static function month($data) {
        $months = [
            '',
            'Sausio',
            'Vasario',
            'Kovo',
            'Balandio',
            'Gegužės',
            'Birželio',
            'Liepos',
            'Rugpjūčio',
            'Rugsėjo',
            'Spalio',
            'Lapkričio',
            'Gruodžio'
        ];
        
        $month = date("n", strtotime($data));
        return $months[$month];
    }
    
    /**
     * Sutrumpina teksta
     */
    public static function excerpt($str, $length=110, $trailing='...') {
        $length-=mb_strlen($trailing);
        if (mb_strlen($str)> $length) {
            return mb_substr($str,0,$length).$trailing;
        } else {
            $res = $str;
        }
        return $res;
    }
    
    /**
     * Parodo dabartimi laika
     */
    public static function time() {
        return date('Y/m/d h:i:s', time());
    }
    
    /**
     * Kelis zodzius sujungia su - ir atsikrato latin raidziu
     */
    public static function slugify($title) {

        $change_whitespace = str_replace(' ', '-', $title);
        $chars = array(
            'ą' => 'a', 'Ą' => 'A', 
            'č' => 'c', 'Č' => 'C', 
            'ę' => 'e', 'Ę' => 'E', 
            'ė' => 'e', 'Ė' => 'E', 
            'į' => 'i', 'Į' => 'I',
            'š' => 's', 'Š' => 'S', 
            'ų' => 'u', 'Ų' => 'U',
            'ū' => 'u', 'Ū' => 'U',
            'ž' => 'z', 'Ž' => 'Z'
        );
        $change_latin = str_replace(array_keys($chars), array_values($chars), $change_whitespace);

        return $change_latin;
 
    }

}

?>