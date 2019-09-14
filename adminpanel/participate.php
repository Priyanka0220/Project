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
        <div class="col-2"></div>
        
        <div class="col-8 mt-5">
          <div class="card shadow-lg mb-3">
           <div class="card-header text-center bg-danger">
                <h5></h5>
           </div>
              
                  <form class="text-center" action="action/act_participate.php" method="post">
                      
                       <div class="form-group row mt-2">
                           <label  class="col-sm-4 col-form-label">Name</label>
                           <div class="col-sm-7 ml-sm-3">
                           <input type="text" class="form-control" name="name" >
                         </div>
                        </div>
                      
                      <div class="form-group row pl-sm-1">
                        <label  class="col-sm-4 col-form-label"> Age</label>
                        <div class="col-sm-7 ml-sm-3">
                        <input type="number" class="form-control" name="age">
                        </div>
                      </div>
                      
                       <div class="form-group row">
                         <label  class="col-sm-4 col-form-label">Gender</label>
                        <div class="col-sm-7 ">
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
                      
                      <div class="form-group row pt-sm-1 pl-sm-1">
                 <label  class="col-sm-4 col-form-label">BloodGroup</label> 
                 <div class="col-sm-7 ml-sm-3">
                   <select class="form-control" name="blood">
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
             </div>
    
                  <div class="form-group row pl-sm-1">
                     <label  class="col-sm-4 col-form-label">Contact</label>
               <div class="col-sm-7 ml-sm-3">
                         <input type="number" class="form-control" name="contact" placeholder="Enter your contact no.">
               </div>
                </div>
                      
                   <div class="form-group row pl-sm-1">
                 <label  class="col-sm-4 col-form-label">LastDonateddate</label>
                 <div class="col-sm-7 ml-sm-3">
                 <input type="date" class="form-control" name="donate" value="<?echo date('y-m-d');?>">
             </div>
                 </div>
                      
                       
                      <div class="form-group row pt-sm-1 pl-sm-1 pd-sm-3">
                 <label  class="col-sm-4 col-form-label">Time</label> 
                 <div class="col-sm-7 ml-sm-3">
                   <select class="form-control" name="time">
                       <option>Choose time</option>
                       <option>Ten to Twelve</option>
                       <option>Twelve to Two</option>
                       <option>Two to Four</option>
                   </select>
                 </div>
                      </div>
                       
                        
                 <div class="form-group row text-center ">
                       <div class="col-sm-10 ml-5 text-center">
                    <input type="submit" class="btn btn-danger" name="btn_sub" value="Submit">
                 </div>
                    </div>                      
                  
                  </form>
              
              </div>              
        </div>
        
        <div class="col-2"></div>
    
    </div>
</div>
    
<script type="text/javascript" src="asset/js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="asset/js/popper.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
</body>
</html>
