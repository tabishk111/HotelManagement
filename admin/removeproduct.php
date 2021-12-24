<!doctype html><?php @session_start();$aid=$_SESSION['aid'];?>
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
      
     <?php include "header.php"?>
         <!--<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Product</strong><small>Edit form</small></div>
                        <div class="card-body card-block">
                           <form action="" method="post" enctype="multipart/form-data">
                           <div class="form-group">
                              <label for="Name" class=" form-control-label">Name</label><input type="text" id="Name" name="name" placeholder="Enter your product name" class="form-control"></div>-->
         <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Products </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th class="avatar">PRODUCT Avatar</th>
                                       <th>PRODUCT ID</th>
                                       <th>PRODUCT Name</th>
                                       <th>Product DESCRIPTION</th>
                                       <th>PRODUCT PRICE</th>
                                       <th>PRODUCT SELLING PRICE</th>
                                       <th>BEST SELLING</th>
                                       <th>OFFER</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    include "../dbconnect.php";
                                    if(isset($_SESSION['masteradmin']) && $_SESSION['masteradmin']=='1')
                                    $sql="SELECT * FROM `product`";
                                    else   
                                    $sql="SELECT * FROM `product` WHERE a_id=$aid";
                                    $result=mysqli_query($conn,$sql);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                       $pid=$row['p_id'];
                                      $name=$row['p_name'];
                                      $desc=$row['p_desc'];
                                      $bsl=$row['bestselling'];
                                      $off=$row['offer'];
                                      $price=$row['p_price'];
                                      $sp=$row['p_sellingprice'];
                                      $image=$row['p_image'];echo'
                                    <tr>
                                       <td class="serial">*.</td>
                                       <td class="avatar">
                                          <div class="round-img">
                                             <a href="#"><img class="rounded-circle" src="images/product/'.$image.'" alt=""></a>
                                          </div>
                                       </td>
                                       <td>'.$row['p_id'].' </td>
                                    
                                       <td> <span class="name">'.$name.'</span> </td>
                                       <td> <span class="product">'.$desc.'</span> </td>
                                       <td><span class="count">'.$price.'</span></td>
                                       <td><span class="count">'.$sp.'</span></td>

                                       <td><span class="count">'.$bsl.'</span></td>
                                       <td><span class="count">'.$off.'</span></td>
                                       <td>';
                                       echo' <td>
                                       <a href="removeproduct.php?$id='.$row['p_id'].'">Remove</a>
                                       </td>
                                    </tr>';

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

</div>
<script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
</body>
</html>
<?php

if(isset($_GET['$id'])){
include "dbconnect.php";
$sql="DELETE FROM product WHERE p_id='" . $_GET['$id'] . "';";
$result=mysqli_query($conn,$sql);

}
?>
 