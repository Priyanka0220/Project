<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "lifeline");

if (isset($_POST['btn_reg'])) {
    $valid=TRUE; 
    
    if($_POST['name']==""){
        $valid=false;
        $_SESSION['nmsg']="Enter your Name";
        header("location=../home.php");
    }
    
    if($_POST['age']==""){
        $valid=false;
        $_SESSION['amsg']=["Enter your Age"];
        header("location=../home.php");
    }
    if($_POST['bgroup']==""){
        $valid=false;
        $_SESSION['bmsg']=["Enter your Blood Type"];
        header("location=../home.php");
    }
    if($_POST['email']==""){
        $valid=false;
        $_SESSION['emsg']=["Enter your Email"];
        header("location=../home.php");
    }
    if($_POST['password']==""){
        $valid=false;
        $_SESSION['pmsg']=["Enter your Password"];
        header("location=../home.php");
    }
    if($_POST['contact']==""){
        $valid=false;
        $_SESSION['cmsg']=["Enter your Phone No."];
        header("location=../home.php");
    }
    if($_POST['date']==""){
        $valid=false;
        $_SESSION['dmsg']=["Enter your Last Donated date"];
        header("location=../home.php");
    }
}

if (isset($_POST['btn_reg'])) {
    $uname=$_POST['name'];
    $gender=$_POST['gender'];
    $age= $_POST['age'];
    $bgroup= $_POST['bgroup'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $contact=$_POST['contact'];
    $date=$_POST['date'];
   
    
if($uname!=null && $age!=null && $bgroup!=null && $email!=null && $password!=null && $contact!=null && $date!=null){    
    
    $query="insert into donors(name,gender,age,bgroup,email,password,contact,date)".
            "values('$uname','$gender','$age','$bgroup','$email','$password','$contact','$date')";
      /*mysqli_query($con, $query);*/
}
else{
    header("location=../register.php");
}
    
$result=mysqli_query($con, $query);
    
    if ($result) {
        $_SESSION['user']="Register Successful";
        header("location:../home.php");
    } else {
        $_SESSION['user']="Register failed.";
//        header("location:../register.php");
    }  
}
?>

