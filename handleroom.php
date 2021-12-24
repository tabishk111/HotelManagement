<?php $login=false;
session_start();
include "dbconnect.php";
$method=$_SERVER['REQUEST_METHOD']; 
if($method=='POST')
{
  $email=$_POST['email'];
  $psw=$_POST['pass'];
  $sql="SELECT * FROM `guest` WHERE guest_email='$email';";
  $result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result);
  if($num==1){
    while($row=mysqli_fetch_assoc($result))
    {
      if(password_verify($psw, $row['guest_pass'])){
  $roomtype=$_POST['roomtype'];
  $nights=$_POST['nights'];
  $cust_no=$_SESSION['guest_no'];
  $type="";
  if($roomtype=="2000")
    $type="single room";
  else if($roomtype=="3000")
    $type="double room";
  else 
    $type="deluxe room";
  $cost=(int)$nights*(int)$roomtype;
  $cost=(string)$cost;

  $sql="INSERT INTO `room_booking` (`guest_id`, `cost`,`type`,  `check_in`, `no_of_days_stayed`, `bill`) VALUES ( '$cust_no', '$roomtype','$type', current_timestamp(), '$nights', '$cost')";
  $result=mysqli_query($conn,$sql);
  header("Location: rooms.php?booking=done");
    // echo $sql;
 }else
echo "incorrect id/pass";
}
}
else
echo "incorrect id/pass";
}
  else   header("Location: rooms.php?booking=error");
?>