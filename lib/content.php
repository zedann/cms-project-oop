<?php

require_once "db.php";
class content extends db{
    protected $table = "content";
    public function addContent($data){
        $res =  $this->insert($this->table,$data)->excu();
        return $res;
     }
     public function getAllContents(){
        $res = $this->select($this->table,"*")->getAll();
        return $res;
    }
}