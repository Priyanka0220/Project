<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "lifeline");
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="asset/css/all.css">
        <link rel="stylesheet" type="text/css" href="asset/css/style1.css">
	
</head>
<body>

 <div class="container-fluid">
    <div class="row">
        <div class="col-2"> </div>
         <div class="col-8 mt-4 mb-3">
    <div class="card shadow-lg">
    <div class="card-header text-center pd-3 bg-danger text-light text-bold">
           <h5>DONOR REGISTRATION FORM</h5>
    </div>
     
                     
     <form class="text-center" action="action/act_register.php" method="POST">
                         
  <!--****************************Username*********************************************-->  
                 
        <div class="form-group row mt-sm-4 ">
           <label  class="col-sm-4 col-form-label">Name</label>
            <div class="col-sm-6 ml-sm-5">
              <input type="text" class="form-control" name="name" placeholder="Enter your Name">
             </div>
           <span style="color: red;">   <?php
                        if (isset($_SESSION['nmsg'])) {
                        echo $_SESSION['nmsg'];
                        unset($_SESSION['nmsg']);                   
                        }
                        ?> </span>
        </div>
  
  <!--******************************Gender***********************************************-->
               
      <div class="form-group row pl-sm-1">
        <label  class="col-sm-4 col-form-label">Gender</label>
         <div class="col-sm-6 ml-sm-5 ">
            <div class="form-check ">
         <label>
             <input class="form-check-input" type="radio"  name="gender" value="Male" >                            Male
         </label>
            </div>
       <div class="form-check">
            <label>
            <input class="form-check-input" type="radio" name="gender" value="Female">
             Female
            </label>
        </div>
          </div>
      </div>
            
    
   <!--********************************Age***************************************************-->
            
                     <div class="form-group row pl-sm-1">
            <label  class="col-sm-4 col-form-label"> Age</label>
            <div class="col-sm-6 ml-sm-5">
             <input type="number" class="form-control" name="age" placeholder="Enter your Age">
             </div>
            <span style="color: red;">   <?php
                        if (isset($_SESSION['amsg'])) {
                        echo $_SESSION['amsg'];
                        unset($_SESSION['amsg']);                   
                        }
                        ?> </span>
            </div>
    
   <!--***********************************Bloodgroup***********************************************-->
            
            <div class="form-group row pt-sm-1 pl-sm-1">
                 <label  class="col-sm-4 col-form-label">Blood Group</label> 
                 <div class="col-sm-6 ml-sm-5">
                   <select class="form-control" name="bgroup">
                       <option>Choose blood group</option>
                       <option>A+</option>
                       <option>A-</option>
                       <option>B+</option>
                       <option>B-</option>
                       <option>O+</option>
                       <option>O-</option>
                       <option>AB+</option>
                       <option>AB-</option>
                   </select>
                 </div>
                 <span style="color: red;">   <?php
                        if (isset($_SESSION['bmsg'])) {
                        echo $_SESSION['bmsg'];
                        unset($_SESSION['bmsg']);                   
                        }
                        ?> </span>
             </div>
    
   <!--*********************************Email*******************************************-->
      
            <div class="form-group row pl-sm-1">
       <label  class="col-sm-4 col-form-label">Email</label>
       <div class="col-sm-6 ml-sm-5">
      <input type="email" class="form-control" name="email" placeholder="Enter Email">
     </div>
       <span style="color: red;">   <?php
                        if (isset($_SESSION['emsg'])) {
                        echo $_SESSION['emsg'];
                        unset($_SESSION['emsg']);                   
                        }
                        ?> </span>
       </div>
    
   <!--*********************************password************************************************-->
         
            <div class="form-group row pl-sm-1">
        <label  class="col-sm-4 col-form-label">Password</label>
      <div class="col-sm-6 ml-sm-5">
      <input type="password" class="form-control" name="password" placeholder="Enter Password">
       </div>
        <span style="color: red;">   <?php
                        if (isset($_SESSION['pmsg'])) {
                        echo $_SESSION['pmsg'];
                        unset($_SESSION['pmsg']);                   
                        }
                        ?> </span>
        </div>
    
     
   <!--***********************************contact**********************************************************-->
             
            <div class="form-group row pl-sm-1">
                     <label  class="col-sm-4 col-form-label">Contact</label>
               <div class="col-sm-6 ml-sm-5">
                         <input type="number" class="form-control" name="contact" placeholder="Enter your contact no.">
               </div>
                     <span style="color: red;">   <?php
                        if (isset($_SESSION['cmsg'])) {
                        echo $_SESSION['cmsg'];
                        unset($_SESSION['cmsg']);                   
                        }
                        ?> </span>
                </div>
    
   <!--**********************************donated date*******************************************************-->
             
            <div class="form-group row pl-sm-1">
                 <label  class="col-sm-4 col-form-label">Last Donated date</label>
                 <div class="col-sm-6 ml-sm-5">
                 <input type="date" class="form-control" name="date" value="<?echo date('y-m-d');?>">
             </div>
                 <span style="color: red;">   <?php
                        if (isset($_SESSION['dmsg'])) {
                        echo $_SESSION['dmsg'];
                        unset($_SESSION['dmsg']);                   
                        }
                        ?> </span>
                 </div>
    
      <div class="form-group row text-center">
    <div class="col-sm-10 pd-1 ml-sm-5">
      <input type="submit" class="btn btn-danger" name="btn_reg" value="Register">
  </div>
      </div>
                     </form>
                 </div>
         </div>
                 <div class="col-2"></div>
              </div>
         </div>
     
    

<!--***************************************************************************************-->

<script type="text/javascript" src="asset/js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="asset/js/popper.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
</body>
</html>



