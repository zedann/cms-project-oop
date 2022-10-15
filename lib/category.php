<?php

require_once "db.php";
class category extends db{
    protected $table = "category";
    public function addNewCategory($data){
       $res =  $this->insert($this->table,$data)->excu();
        return $res;
    }
    public function getCategories(){
        $res = $this->select($this->table,"*")->getAll();
        return $res;
    }
    public function getOneCategory($id){
        $res = $this->select($this->table,"*")->where('id','=',$id)->getRow();
        return $res;
    }
    public function deleteCategory($id){
        $res = $this->delete($this->table)->where("id",'=',$id)->excu();
        return $res;
    }
    public function editCategory($id,$data){
        $res = $this->update($this->table,$data)->where("id",'=',$id)->excu();
        return $res;
    }
}