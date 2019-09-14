<?php
session_start();
$user='root';
$password='';
$db='lifeline';
$con= mysqli_connect("localhost", "root", "", "lifeline");

if (isset($_POST['btn_sub'])) {
  $uname=$_POST['name'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $bgroup=$_POST['bgroup'];
  $egroup=$_POST['egroup'];
  
  $q2="select * from donors where bgroup='$bgroup' AND name = '$uname' ";
  $st= mysqli_query($con,$q2);
  $num_row = mysqli_fetch_array($st);
  $id=$num_row['id'];
//  echo $id;
  $name=$num_row['name'];
  $b1=$num_row['bgroup'];
  $cont=$num_row['contact'];
  $q1=mysqli_query($con,"insert into out_stock(bname,name,contact) values($bgroup,$uname,$contact)");
  
//  $st1=$db->prepare($q1);
//  $st1->execute([$b1,$name,$contact]);
  mysqli_query($con,"delete from donors where bgroup='$bgroup' AND name = '$uname'  ");
//  $st1=$db->prepare($delete_q);
//  $st1->execute();
  
  
 $q=mysqli_query($con,"insert into exchange(name,address,email,contact,bgroup,egroup) values('$uname','$address','$email','$contact','$bgroup','$egroup')");
//  $q=bindvalue('name',$uname);
//  $q=bindvalue('address',$address);
//  $q=bindvalue('email',$email);
//  $q=bindvalue('contact',$contact);
//  $q=bindvalue('bgroup',$bgroup);
//  $q=bindvalue('egroup',$egroup);
  
  
  $result=mysqli_query($con, $q);
    
    if ($result) {
        $_SESSION['msg']="Successful";
        header("location:../home.php");
    } else {
        $_SESSION['msg']="failed.";
        header("location:../exchange.php");
    }  
}
?>




