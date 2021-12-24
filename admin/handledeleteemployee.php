<?php @session_start();
include "dbconnect.php";


    $id=$_GET['id'];
   $sql="DELETE FROM employees WHERE emp_id='" . $id."';";
$result=mysqli_query($conn,$sql);
echo '<script>window.location.assign("admin.php?del=done");</script>';

?>