<?php
  session_start();

  session_unset();

  session_destroy();

  // header('Location:../Nosotros.php');
  
  header('Location:../index.php');
?>