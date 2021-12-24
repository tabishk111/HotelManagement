<!doctype html>
<?php include "../dbconnect.php";?>
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
                           <h4 class="box-title">Room details </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">Room No</th>
                                       <th class="avatar">Avatar</th>
                                       <th>Guest id</th>
                                       <th>Guest name</th>
                                       <th>Room Type</th>
                                       <th>Check in</th>
                                       <th>No of Days Booked</th>
                                       <th>Cost</th>
                                       <th>Bill</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    $sql="SELECT * FROM `room_booking` ";
                                    $result=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                    echo'
                                    <tr>
                                       <td class="serial">'.$row['room_no'].'</td>
                                       <td class="avatar">
                                          <div class="round-img">
                                             <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                                          </div>
                                       </td>
                                       <td> '.$row['guest_id'].' </td>';
                                       $rid=$row['guest_id'];
                                       $sqal="SELECT * FROM `guest` WHERE guest_id=$rid; ";
                                       
                                    $resualt=mysqli_query($conn,$sqal);
                                    echo'<td>';
                                    while($rrow=mysqli_fetch_assoc($resualt))
                                    {
                                    echo'  <span >'.$rrow['guest_name'].',</span> ';}echo'</td>';
                                    echo'

                                       <td> <span class="name">'.$row['type'].'</span> </td>
                                       <td> <span class="name">'.$row['check_in'].'</span> </td>
                                       <td> <span class="name">'.$row['no_of_days_stayed'].'</span> </td>
                                       <td><span class="count">'.$row['cost'].'</span></td>
                                       <td><span class="count">'.$row['bill'].'</span></td>
                                       <td>
                                          <a href="handledeletebooking.php?id='.$row['room_no'].'" class="badge badge-pending">Delete Booking</a>
                                       </td>
                                    </tr>
                                    <tr>';
                                 }
                              
                                       ?>
                                 </tbody>
                              </table>
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