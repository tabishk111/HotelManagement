<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="Icon.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
          <link rel="stylesheet" href="admin/assets/css/style.css">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <title>City Palace</title>
</head>
<body>
 <style type="text/css"> </style>
    <?php include "header.php";
    include "dbconnect.php";?>
    <section class="heading">
        <div class="welcome">
        <!-- Ḥeading -->
        <h2 class="welcome__heading">Welcome <?php echo $_SESSION['name'];?></h2>
        <img src="Images/design.png" alt="Design" class="welcome__image">
    </section>
               <section class="cards">
                   <div class="offers">
        <h2 class="offers__heading">Rooms Booked</h2>
        <div class="row">
            <!-- Section -->
            <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title"><a href="rooms.php" style="color: red;">Add booking</a> </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">Room No</th>
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
                                    $id=$_SESSION['guest_no'];
                                    $sql="SELECT * FROM `room_booking` WHERE guest_id=$id ";
                                    $result=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                    echo'
                                    <tr>
                                       <td class="serial">'.$row['room_no'].'</td>
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

               </section>
               <section> <div class="offers">
        <h2 class="offers__heading">Your Info </h2>
        <div class="row">
        <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">Guest id</th>

                                       <th>Guest name</th>
                                       <th>Guest Email</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    $id=$_SESSION['guest_no'];
                                    
                                    $sql="SELECT * FROM `guest` WHERE guest_id=$id; ";
                                    $result=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                    echo'
                                    <tr>
                                       <td class="serial">'.$row['guest_id'].'</td>
                                       
                                       <td> <span class="name">'.$row['guest_name'].'</span> </td>
                                       <td> <span class="name">'.$row['guest_email'].'</span> </td>
                                       
                                       <td>
                                          <a href="deluser.php?id='.$row['guest_id'].'" class="badge badge-pending">Delete Account</a>

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
                  </div></section>