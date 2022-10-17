<?php
$name = $_POST['name'];
$email = $_POST['email'];
$review = $_POST['review'];
$content_id = $_POST['contentId'];
// echo $name . "<br>".$id;die;
$data = [
    "name"=>$name,
    "email"=>$email,
    "comment"=>$review,
    "content_id"=>$content_id
];
$conn = mysqli_connect("localhost","root","","cms");
$query = "INSERT INTO review (name,email,comment,content_id)
VALUES('{$name}','{$email}','{$review}',{$content_id})";
 $res = mysqli_query($conn,$query);

 echo $res;

