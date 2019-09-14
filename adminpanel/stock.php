<?php
include 'includes/header.php';
include 'includes/nav.php';
?>

<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "lifeline");

?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="asset/css/all.css">
       
    </head>
    <body>
   
        <div class="container-fluid ">
          <div class="row">
           <div class="col-2"></div>
          <div class="col-8">
      
           <table class='table table-bordered mt-sm-4'>
               <thead class='bg-info'>
                 <tr>
                    <th scope='col'><h6 class='text-center text-light'>Blood-group</h6></th>
                    <th scope='col'><h6 class='text-center text-light'>Quantity</h6></th>
                   </tr>
                   
                   <tr>
                     <td class="text-center bg-light">A+</td>
                     <td class="text-center bg-light">
                    <?php 
                    $query="select * from donors where bgroup='A+'";
                    //die();
                    $result=mysqli_query($con,$query);
                    $num_rows = mysqli_num_rows($result);
                    echo"$num_rows";

                    ?>
                     </td>                     
                   </tr>
                   
                   <tr>
                     <td class="text-center bg-light">A-</td>
                     <td class="text-center bg-light">
                    <?php 
                    $query="select * from donors where bgroup='A-'";
                    //die();
                    $result=mysqli_query($con,$query);
                    $num_rows = mysqli_num_rows($result);
                    echo"$num_rows";

                    ?>
                     </td>                     
                   </tr>
                   
                   <tr>
                     <td class="text-center bg-light">B+</td>
                     <td class="text-center bg-light">
                    <?php 
                    $query="select * from donors where bgroup='B+'";
                    //die();
                    $result=mysqli_query($con,$query);
                    $num_rows = mysqli_num_rows($result);
                    echo"$num_rows";

                    ?>
                     </td>                     
                   </tr>
                   
                   <tr>
                     <td class="text-center bg-light">B-</td>
                     <td class="text-center bg-light">
                    <?php 
                    $query="select * from donors where bgroup='B-'";
                    //die();
                    $result=mysqli_query($con,$query);
                    $num_rows = mysqli_num_rows($result);
                    echo"$num_rows";

                    ?>
                     </td>                     
                   </tr>
                   
                   <tr>
                     <td class="text-center bg-light">O+</td>
                     <td class="text-center bg-light">
                    <?php 
                    $query="select * from donors where bgroup='O+'";
                    //die();
                    $result=mysqli_query($con,$query);
                    $num_rows = mysqli_num_rows($result);
                    echo"$num_rows";

                    ?>
                     </td>                     
                   </tr>
                   
                   <tr>
                     <td class="text-center bg-light">O-</td>
                     <td class="text-center bg-light">
                    <?php 
                    $query="select * from donors where bgroup='O-'";
                    //die();
                    $result=mysqli_query($con,$query);
                    $num_rows = mysqli_num_rows($result);
                    echo"$num_rows";

                    ?>
                     </td>                     
                   </tr>
                   
                   <tr>
                     <td class="text-center bg-light">AB+</td>
                     <td class="text-center bg-light">
                    <?php 
                    $query="select * from donors where bgroup='AB+'";
                    //die();
                    $result=mysqli_query($con,$query);
                    $num_rows = mysqli_num_rows($result);
                    echo"$num_rows";

                    ?>
                     </td>                     
                   </tr>
                   
                   <tr>
                     <td class="text-center bg-light">AB-</td>
                     <td class="text-center bg-light">
                    <?php 
                    $query="select * from donors where bgroup='AB-'";
                    //die();
                    $result=mysqli_query($con,$query);
                    $num_rows = mysqli_num_rows($result);
                    echo"$num_rows";

                    ?>
                     </td>                     
                   </tr>
                    
                </thead>
           </table>
              
                     
        </div>
        <div class="col-2"></div>
    
    </div>
</div>
     
<script type="text/javascript" src="asset/js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="asset/js/popper.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>

</body>
    
</html>

               
        
 
 



