<?php

require_once "db.php";
class user extends db{
    protected $table = "users";
    public function userAuth($email,$password){
        $res= $this->select($this->table,'*')->where('email','=',$email)->andWhere('password','=',$password)->excu();
        return $res;
    }
    public function getUserByEmail($email){
        $row =  $this->select($this->table,'*')->where('email','=',$email)->getRow();
        return $row;
    }
}