<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "lifeline");

if (isset($_POST['btn_sub'])) {
  $uname=$_POST['name'];
  $age=$_POST['age'];
  $gender=$_POST['gender'];
  $blood=$_POST['blood'];
  $contact=$_POST['contact'];
  $donate=$_POST['donate'];
  $time=$_POST['time'];
  
  $query="insert into part(name,age,gender,blood,contact,donate,time)".
            "values('$uname','$age','$gender','$blood','$contact','$donate','$time')";
  
  $result=mysqli_query($con, $query);
    
    if ($result) {
        $_SESSION['msg']="Successful";
        header("location:../home.php");
    } else {
        $_SESSION['msg']="failed.";
        header("location:../participate.php");
    }  
}

?>


