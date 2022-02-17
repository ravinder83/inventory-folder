<?php
if(!isset($_COOKIE['loginid']))  
  {
    header('location:user/login.php');
  }
?>