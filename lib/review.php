<?php

require_once "db.php";
class review extends db{
    protected $table = "review";
    protected $commentsNumber;
    public function addReview($data){
        $this->insert($this->table,$data)->excu();
     }
     public function getAllReviews(){
        $res = $this->select($this->table,"*")->getAll();
        return $res;
     }
     
}