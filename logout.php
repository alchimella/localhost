<?php 
    require "db.php";
    unset($_SESSION['logget_user']);

    header('Location: /admin_authorization.php');
?>