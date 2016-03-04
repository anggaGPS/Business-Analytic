<?php
  session_start();
  if(empty($_SESSION['uname_admin'])){
  header("location:login.php");
}
echo "selamat datang ".$_SESSION['uname_admin'];
?>
<br/><br/><br/>
<a href="logout.php">Logout</a>