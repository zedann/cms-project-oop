<?php 
    require "../lib/category.php";
    require "../lib/validation.php";
    require "../lib/helper.php";
    session_start();
    if(empty($_SESSION['user'])){
      redirect('../login',0);
    }
?>
<?php


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $category = new category;
  $res =  $category->deleteCategory($id);
  if($res){
    redirect('category',0);
}else {
    redirectWithoutTime('category');
  }
}