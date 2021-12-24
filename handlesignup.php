<?php
include "dbconnect.php";
$er=true;
session_start();
$method=$_SERVER['REQUEST_METHOD']; 
if($method=='POST')
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $sql="SELECT * FROM `guest`";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_assoc($result))
  {
  	$ue=$row['guest_email'];
  	if($ue==$email)
  		$er=false;
  	else
  		$er=true;
  }
  if($er){
    $pass=password_hash($pass, PASSWORD_DEFAULT);
  $sql="INSERT INTO `guest` ( `guest_name`, `guest_email`, `guest_pass`) VALUES ( '$name', '$email', '$pass');";
  $result=mysqli_query($conn,$sql);
	$_SESSION['signup']=$email;
  header("Location: index.php?signup=true");
}
else {echo "user already exist";
}
}
 
?>