<?php
session_start();
if (isset($_SESSION["Usuario"])) {	
  //ok
}
else{
  header("location:login.php");
}
?>