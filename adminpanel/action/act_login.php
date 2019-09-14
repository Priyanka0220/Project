<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "lifeline");

if (isset($_POST['btn_login'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $query="select * from admin where username='$username' and password='$password'" ;
    $result= mysqli_query($con, $query);
    $data= mysqli_fetch_assoc($result);
//    echo $password;
//    die();
    if ($data) {
        $_SESSION['msg']="Login Successful.";
        header("location:../ADMIN/home1.php");
    }
    else{
        $_SESSION['msg']="Login Failed.";
        header("location:../ADMIN/index.php");
    }
}
