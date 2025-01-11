<?php
    require('admin/inc/essenstial.php');
      session_start();
      session_destroy();
      redirect('homepage.php');
?>