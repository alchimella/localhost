<?php
    require "db.php";
    require "moduls/modul_posts.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" context = "IE-edge">
        <meta name = "viewport" content = "width-device-width, initial-scale = 1">
        
        <!-- Bootstrap -->
        <link href = "bootstrap/css/bootstrap.css" rel = "stylesheet">
        
        <link href="styles/style_index.css" rel="stylesheet">
       
        <link href = "bootstrap/css/font-awesome.css" rel = "stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap-datetimepicker.min.css" />
    </head>
    <body>
    <!-- Навигация -->
    <div class="row">
        <?php 
            require "navbar.php";
        ?>
    </div>
            
    <!-- Слайдер -->
    <div class="row" style="background-color: #7A8D91; height: 300px;">
        <div id="large-header" class="large-header">     
            <canvas id="demo-canvas"  style="width: 100%; height: 300px;"></canvas>
            <h1 style="color: #fff; text-align: center; margin-top: -200px;">Школа-гимназия №24</h1>
            <h4 style="color: #fff; text-align: center;">г. Бишкек</h4>
        </div>

    </div>
    <!-- Контент -->
    <div class="row">

    </div>

    <!-- Посты -->
    <div class="container" id="tourpackages-carousel">
        <div class="row">
            <div class="col-xs-18 col-sm-6 col-md-3">  
                <?php require "executes/exec_posts.php"; ?>
            </div>   
        </div><!-- End row -->
    </div><!-- End container -->
    <!-- jQuery -->
    <?php require "includes/include_scripts.php"; ?>
    <script src="js/TweenLite.min.js"></script>
    <script src="js/EasePack.min.js"></script>
    <script src="js/rAF.js"></script>
    <script src="js/demo-1.js"></script>

    <!-- Footer -->
    <?php 
        require "footer.php";       
    ?>
    </body>
</html>
