<?php 
    require "../lib/category.php";
    require "../lib/content.php";
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
    $content = new content;
  $res = $content->deleteContent($id);
  if($res){
    header("LOCATION: content.php");
}else {
    header("LOCATION: content.php");
  }
}