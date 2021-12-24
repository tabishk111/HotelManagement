<?php $login=false;
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
  	$login=true;
  	session_start();
  	$_SESSION['loggedin']=true;
  	$_SESSION['email']=$email;
    $_SESSION['guest_no']=$row['guest_id'];
    $_SESSION['guest_pass']=$row['guest_pass'];
    $_SESSION['name']=$row['guest_name'];
    header("Location:index.php?login=true");
 }
 else   echo "wrong passcode, Try again!";
}}
 else   header("Location: index.php?login=false");

}
?>