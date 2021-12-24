<?php @session_start();
include "dbconnect.php";

$method=$_SERVER['REQUEST_METHOD']; 
if($method=='POST')
{

    $id=$_GET['id'];
  $name=$_POST['name'];
  $position=$_POST['position'];
  $salry=$_POST['salry'];
  $address=$_POST['address'];
  $mno=$_POST['mno'];

   $sql="UPDATE `employees` SET `name` = '$name', `position` = '$position', `address` = '$address', `mobile_no` = '$mno', `salary` = '$salry' WHERE `employees`.`emp_id` = $id;";
$result=mysqli_query($conn,$sql);
echo '<script>window.location.assign("admin.php?edit=done");</script>';
}

?>