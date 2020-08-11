<?php
/*
simple-tokenizer 
Felipe Fernandes - https://github.com/lipfreitas
Developed : 2020-08-11
*/

class simpleTokenizer{
    private $salt;
    private $hashsalt;
    public function __construct($salt, $timezone = 'America/Sao_Paulo')
    {
        $this->salt = $salt;        
        $this->hashsalt = sha1($this->salt);
        date_default_timezone_set($timezone);
    }
    public function provideSaltHash(){
        return $this->hashsalt;
    }
    //$value should be: SHA1(HashSalt + SHA1(date("YmdHi")));
    public function validateToken($value){
        //Tokens are valid for 1 minute;
        $date = date("YmdHi");
        $shaDate = sha1($date);
        $valueConfirmation = sha1($this->hashsalt . $shaDate);
        if($value == $valueConfirmation){
            return true;
        }
        return false;
    }
}