<?php
    require "libs/rb.php";

    $link = R::setup( 'mysql:host=localhost;dbname=eschool',
    'root', '' );
    session_start();
?>