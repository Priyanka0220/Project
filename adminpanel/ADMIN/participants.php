<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "lifeline");

?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../asset/css/all.css">
        
    </head>
    <body>
        <div class="container-fluid bg-danger text-light">
	<div class="container">
	<div class="row">
	    <div class="col">
                <h2><marquee> LIFELINE ! ! !</marquee></h2>          
            </div>
	</div>
	</div>
</div>
        
 <!--*******************************************************************************************-->
<div class="container-fluid">
    <div class="row">
        
        <div class="col">
            <table class="table table-bordered mt-sm-4">
             
                <thead class="bg-info">
                <tr>
                    
                 <th scope="col"><h6 class="text-center text-light">Name</h6></th>
                 <th scope="col"><h6 class="text-center text-light">Age</h6></th>
                 <th scope="col"><h6 class="text-center text-light">Gender</h6></th>
                 <th scope="col"><h6 class="text-center text-light">Blood-group</h6></th>
                 <th scope="col"><h6 class="text-center text-light">Contact</h6></th>
                 <th scope="col"><h6 class="text-center text-light">Last donated date</h6></th>
                 <th scope="col"><h6 class="text-center text-light">Time</h6></th>
                 
                </tr>
             </thead>
             <tbody>
                 <?php
                  $query="select * from part where time='Ten to Twelve'";
                  $result=mysqli_query($con,$query);
                  while($data=mysqli_fetch_assoc($result)){
                 ?>
                 <tr>
                     
                     <th class="text-center"><?= $data['name']?></th>
                     <th class="text-center"><?= $data['age']?></th>
                     <th class="text-center"><?= $data['gender']?></th>
                     <th class="text-center"><?= $data['blood']?></th>
                     <th class="text-center"><?= $data['contact']?></th>
                     <th class="text-center"><?= $data['donate']?></th>
                     <th class="text-center"><?= $data['time']?></th>
                    
                 </tr>
                  <?php } ?>
             </tbody>
            </table>   
        </div>
        
    </div>
 <!--*******************************************************************************************-->
    <div class="row mt-5">
        
        <div class="col">
            <table class="table table-bordered mt-sm-4">
             
                <thead class="bg-info">
                <tr>
                    
                 <th scope="col"><h6 class="text-center text-light">Name</h6></th>
                 <th scope="col"><h6 class="text-center text-light">Age</h6></th>
                 <th scope="col"><h6 class="text-center text-light">Gender</h6></th>
                 <th scope="col"><h6 class="text-center text-light">Blood-group</h6></th>
                 <th scope="col"><h6 class="text-center text-light">Contact</h6></th>
                 <th scope="col"><h6 class="text-center text-light">Last donated date</h6></th>
                 <th scope="col"><h6 class="text-center text-light">Time</h6></th>
                 
                </tr>
             </thead>
             <tbody>
                 <?php
                  $query="select * from part where time='Twelve to Two'";
                  $result=mysqli_query($con,$query);
                  while($data=mysqli_fetch_assoc($result)){
                 ?>
                 <tr>
                     
                     <th class="text-center"><?= $data['name']?></th>
                     <th class="text-center"><?= $data['age']?></th>
                     <th class="text-center"><?= $data['gender']?></th>
                     <th class="text-center"><?= $data['blood']?></th>
                     <th class="text-center"><?= $data['contact']?></th>
                     <th class="text-center"><?= $data['donate']?></th>
                     <th class="text-center"><?= $data['time']?></th>
                    
                 </tr>
                  <?php } ?>
             </tbody>
            </table>   
        </div>
        
    </div>
<!--*******************************************************************************************-->    
    <div class="row mt-5">
        
        <div class="col">
            <table class="table table-bordered mt-sm-4">
             
                <thead class="bg-info">
                <tr>
                    
                 <th scope="col"><h6 class="text-center text-light">Name</h6></th>
                 <th scope="col"><h6 class="text-center text-light">Age</h6></th>
                 <th scope="col"><h6 class="text-center text-light">Gender</h6></th>
                 <th scope="col"><h6 class="text-center text-light">Blood-group</h6></th>
                 <th scope="col"><h6 class="text-center text-light">Contact</h6></th>
                 <th scope="col"><h6 class="text-center text-light">Last donated date</h6></th>
                 <th scope="col"><h6 class="text-center text-light">Time</h6></th>
                 
                </tr>
             </thead>
             <tbody>
                 <?php
                  $query="select * from part where time='Two to Four'";
                  $result=mysqli_query($con,$query);
                  while($data=mysqli_fetch_assoc($result)){
                 ?>
                 <tr>
                     
                     <th class="text-center"><?= $data['name']?></th>
                     <th class="text-center"><?= $data['age']?></th>
                     <th class="text-center"><?= $data['gender']?></th>
                     <th class="text-center"><?= $data['blood']?></th>
                     <th class="text-center"><?= $data['contact']?></th>
                     <th class="text-center"><?= $data['donate']?></th>
                     <th class="text-center"><?= $data['time']?></th>
                    
                 </tr>
                  <?php } ?>
             </tbody>
            </table>   
        </div>
        
    </div>
</div>

        <div class="container-fluid fixed-bottom bg-danger text-light">
	<div class="container ">
	<div class="row">
	    <div class="col">
		<h5>Copyright@Lifeline, All rights Reserved</h5>
	    </div>
        </div>
	</div>
</div>
<script type="text/javascript" src="../asset/js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="../asset/js/popper.min.js"></script>
<script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>

    </body>
</html>



