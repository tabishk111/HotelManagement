<?php @session_start();
include "dbconnect.php";


    $id=$_GET['id'];
   $sql="DELETE FROM room_booking WHERE room_no='" . $id."';";
$result=mysqli_query($conn,$sql);
echo '<script>window.location.assign("roomdetails.php?del=done");</script>';

?>