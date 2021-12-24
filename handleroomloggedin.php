<?php 
session_start();
include "dbconnect.php";
$method=$_SERVER['REQUEST_METHOD']; 
if($method=='POST')
{
  $roomtype=$_POST['roomtype'];
  $type="";
  if($roomtype=="2000")
    $type="single room";
  else if($roomtype=="3000")
    $type="double room";
  else 
    $type="deluxe room";
  $nights=$_POST['nights'];
  $cust_no=$_SESSION['guest_no'];
  $cost=(int)$nights*(int)$roomtype;
  $cost=(string)$cost;
  $sql="INSERT INTO `room_booking` (`guest_id`, `cost`,`type`,  `check_in`, `no_of_days_stayed`, `bill`) VALUES ( '$cust_no', '$roomtype','$type', current_timestamp(), '$nights', '$cost')";
  $result=mysqli_query($conn,$sql);
  header("Location: rooms.php?booking=done");
    // echo $sql;
 }else
header("Location: rooms.php?booking=error");?>