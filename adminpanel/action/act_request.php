<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "lifeline");

if (isset($_POST['btn_sen'])) {
  $name=$_POST['name'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $blood=$_POST['blood'];
  $quantity=$_POST['quantity'];
 
  
  $query="insert into requests(name,address,email,contact,blood,quantity)".
            "values('$name','$address','$email','$contact','$blood','$quantity')";
  
  $result=mysqli_query($con, $query);
    
    if ($result) {
        $_SESSION['msg']="Successful";
        header("location:../home.php");
    } else {
        $_SESSION['msg']="failed.";
        header("location:../request.php");
    }  
}

?>

