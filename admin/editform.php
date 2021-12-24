<!doctype html><?php @session_start();?>
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
                        <div class="card-header"><strong>Employee</strong><small> edit</small></div>
                        <div class="card-body card-block">
                           <?php
                               $id=$_GET['id'];
                                    include "dbconnect.php";
                                    $sql="SELECT * FROM employees WHERE emp_id='" . $id . "';";
                                    $result=mysqli_query($conn,$sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                       $id=$row['emp_id'];
                                      $name=$row['name'];
                                      $position=$row['position'];
                                      $salry=$row['salary'];
                                      $mno=$row['mobile_no'];
                                      $address=$row['address'];
                                      echo'
                           <form action="handleupdateemployee.php?id='.$id.'" method="post" >
                               
                           <div class="form-group">
                              <label for="Name" class=" form-control-label">Name</label><input type="text" id="Name" name="name" class="form-control" value="'.$name.'"></div>
                           <div class="form-group"><label for="price" class=" form-control-label">Position</label><input type="text" id="price" name="position"   class="form-control" value="'.$position.'"></div>
                           <div class="form-group"><label for="selling_price" class=" form-control-label">Salary</label><input type="text" id="selling_price" name="salry"  class="form-control" value="'.$salry.'"></div>
                           <div class="form-group"><label for="desc" class=" form-control-label">Mobile No</label><input type="text" id="desc" name="mno"  class="form-control" value="'.$mno.'"></div>
                           <div class="form-group"><label for="bsl" class=" form-control-label">Address</label><input type="text" id="bsl" name="address" class="form-control" value="'.$address.'"></div>
                           <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                           <span id="payment-button-amount">Submit</span>
                           </button>';
                        }?>
                        </form>
                        </div>
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
