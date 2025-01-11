<?php
    require('inc/essenstial.php');
      session_start();
      session_destroy();
      redirect('index.php');
?>