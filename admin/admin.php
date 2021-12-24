<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard Page</title>
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
      <?php include "header.php"?>
         <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Employee details </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">ID</th>
                                       <th class="avatar">Avatar</th>
                                       
                                       <th>Name</th>
                                       <th>Positions</th>

                                       <th>Address</th>

                                       <th>Mobile No</th>
                                       <th>Salary</th>
                                       <th>Employed Since</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    include "dbconnect.php";
                                    $sql="SELECT * FROM `employees` ";
                                    $result=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                    echo'
                                    <tr>
                                       <td class="serial">'.$row['emp_id'].'</td>
                                       <td class="avatar">
                                          <div class="round-img">
                                             <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                                          </div>
                                       </td>
                                       <td> <span class="name">'.$row['name'].'</span> </td>
                                       <td> <span class="product">'.$row['position'].'</span> </td>
                                       <td><span class="name">'.$row['address'].'</span></td>
                                       <td><span class="name">'.$row['mobile_no'].'</span></td>
                                       <td><span class="name">'.$row['salary'].'</span></td>
                                       <td><span class="name">'.$row['since'].'</span></td>

                                       <td>
                                          <a href="editform.php?id='.$row['emp_id'].'" class="badge badge-pending">Edit</a>
                                          <a href="handledeleteemployee.php?id='.$row['emp_id'].'" class="badge badge-pending">Delete</a>
                                       </td>
                                    </tr>';
                                        }
                                        ?>
                                 </tbody>

                              </table>
                               <a class="badge badge-complete" href="handleaddemployee.php" style="float: right;">ADD Employee</a>
                           </div>
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
                     Copyright &copy; City Palace
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