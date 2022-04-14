<?php
$username=$password=$username_login=$password_login='';
//Lấy dữ liệu từ URL phương thức get
$username=$_GET['username'];
$password=$_GET['password'];
//Lấy dữ liệu từ form phía sever với phương thức post
if(isset($_POST['username'])){
    $username_login=$_POST['username'];
}
if(isset($_POST['password'])){
    $password_login=$_POST['password'];
}
if($username==$username_login&&$password==$password_login){
    header("location:welcome.php?username=$username");
    die();
}
