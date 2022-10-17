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
    public function deleteContent($id){
        $res = $this->delete($this->table)->where('id','=',$id)->excu();
        return $res;
    }
    public function getSingleContent($id){
         $res = $this->queryEx("SELECT content.*,users.name as user_name,category.name as category_name FROM `content` 
         INNER JOIN users 
         ON users.id = content.user_id
         INNER JOIN category
         ON category.id = content.category_id
         ")->where('content.id','=',$id)->getRow();
         return $res;
    }
}