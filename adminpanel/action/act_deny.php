<?php
$con= mysqli_connect("localhost", "root", "", "lifeline");
session_start();

$toid = $_GET['srequestid'];
//echo $toid;

$sql = mysqli_query($con,"SELECT * FROM requests WHERE id = '$toid' ");
$result = mysqli_fetch_assoc($sql);
$to = $result['email'];
//$to = "somebody@example.com";
$subject = "My subject";
$txt = " Sorry we are out of stock..
        
We will contact you later !!

                      
"
        ;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

//ini_set("SMTP","ssl:smtp.gmail.com");
//ini_set("smtp_port","465");
//ini_set('sendmail_from', 'panjiyarpriyanka04@gmail.com');
$success = mail($to, $subject, $txt, $headers);
if($success == TRUE)
{
    $_SESSION['msg'] = "ok";
    header('location:../ADMIN/request_1.php');
}else{
    $_SESSION['msg'] = "fail";
    header('location:../ADMIN/request_1.php');
}

?>


