<?php

class Validation {
    public static function string_empty($input){
       $isEmpty =  (strlen(trim($input)) == 0)? true : false ;
       return $isEmpty;
    }
}