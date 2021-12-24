      <?php 
session_start();
session_unset();
$_SESSION['masteradmin']=false;
session_destroy();
header("Location:../index.php");
?>