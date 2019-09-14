<?php // session_start();
//require 'phpmailer/PHPMailerAutoload.php' ;
//require 'mailer/class.phpmailer.php' ;
?>
<?php 
  
//     if (isset($_POST['submit']))  {
//        
//      $toemail = $_POST['email'];
//      echo $toemail;
//      $mail= new PHPMailer;
//      
//      
//      $mail->Host='smtp.gmail.com';
//      $mail->SMTPsecure='tls';
//      $mail->port=587;
//      $mail->SMTPAuth=true;
//      $mail->username='panjiyarpriyanka04@gmail.com';
//      $mail->password='uzum@ki123';
//      $mail->setfrom($_POST['email'],$_POST['name']);
//      $mail->addAddress('panjiyarpriyanka04@gmail.com');
//      $mail->addReplyto($_POST['email'],$_POST['name']);
//         
//      $mail->isHTML(true);
//      $mail->subject='Form Submission'.$_POST['request'];
//      $mail->Body='<h1 align=center>Name:'.$_POST['name'].'<br>Email:'.$_POST['email'].'<br>Message:'.$_POST['request'].'</h1>';
//      
//      if(!$mail->send()){
//          $_SESSION['m']="Something went wrong. Please try again.";
////          die();
//          header("location:../request.php");
//      }
//      else{
//          $_SESSION['m']="Thanks".$_POST['name']."We will contact you soon.";
//          header("location:../request.php");    
//      }
//  }
?>

<?php
$con= mysqli_connect("localhost", "root", "", "lifeline");
session_start();

$toid = $_GET['srequestid'];
//echo $toid;

$sql = mysqli_query($con,"SELECT * FROM donors WHERE id = '$toid' ");
$result = mysqli_fetch_assoc($sql);
$to = $result['email'];
//$to = "somebody@example.com";
$subject = "My subject";
$txt = "
    You are required to Come and Donate blood
    We are waiting to hear from you
    THANK YOU !!!
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
    header('location:../donorlist.php');
}else{
    $_SESSION['msg'] = "fail";
    header('location:../donorlist.php');
}

?>
