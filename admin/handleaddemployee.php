<?php @session_start();?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Form Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body>
         <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <form method="post" action="">
                        <div class="card-header"><strong>Employee</strong><small> Form</small></div>
                        <div class="card-body card-block">
                           <div class="form-group"><label for="Employee" class=" form-control-label">Employee</label><input type="text" id="Employee" placeholder="Enter your Employee name" name="employee" class="form-control"></div>
                           <div class="form-group"><label for="salary" class=" form-control-label">Salary</label><input type="text" id="salary" placeholder="Salary in Rupees" class="form-control" name="salry"></div>
                           <div class="form-group"><label for="Position" class=" form-control-label">Position</label><input type="text" id="Position" name="position" placeholder="Enter Designation " class="form-control"></div>
                           <div class="form-group"><label for="Mobile No" class=" form-control-label">Mobile No</label><input type="text" id="Mobile No" placeholder="Enter Mobile No " name="mno" class="form-control"></div>
                           <div class="form-group"><label for="Address" class=" form-control-label">Address</label><input type="text" id="Address" placeholder="Enter Address" name="address" class="form-control"></div>
                           <input id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                           
                        </div>
                     </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         <footer class="site-footer">
            <div class="footer-inner bg-white">
               <div class="row">
                  <div class="col-sm-6">
                     Copyright &copy; 2018 Ela Admin
                  </div>
               </div>
            </div>
         </footer>
      </div>
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>

<?php
include "dbconnect.php";
session_start();
$method=$_SERVER['REQUEST_METHOD']; 
if($method=='POST')
{
  $name=$_POST['employee'];
  $salary=$_POST['salry'];
  $position=$_POST['position'];
  $add=$_POST['address'];
  $mn=$_POST['mno'];
  $sql="INSERT INTO `employees` (`name`, `position`, `address`, `mobile_no`, `salary`, `since`) VALUES ( '$name', '$position', '$add', '$mn', '$salary', current_timestamp());";
  $result=mysqli_query($conn,$sql);
  header("Location: admin.php?add=true");
}
else {echo "error";
 }
?>
