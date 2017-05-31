<?php  require "db.php";  ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" context = "IE-edge">
        <meta name = "viewport" content = "width-device-width, initial-scale = 1">

        <!-- Bootstrap -->
        <link href = "../bootstrap/css/bootstrap.css" rel = "stylesheet">

        <link href="../styles/style_index.css" rel="stylesheet">

        <link href = "../bootstrap/css/font-awesome.css" rel = "stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-datetimepicker.min.css" />
        <title>Расписание уроков</title>
    </head>
    <body>
        <?php 
            require "navbar.php";
        ?>
        <div class="container">
            <div class="col col-lg-3">
                <select class="form-control" style="width: 250px;" name="select_class_circle">
                    <?php
                    $cicle_cl=R::findAll('classes', 'ORDER BY num_of_class ASC');
                    foreach($cicle_cl as $c_c){
                        echo '<option>'.$c_c['num_of_class'].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col col-lg-9">
                <input type="submit" class="btn btn-primary" value="Поиск" style="width: 100px;">
            </div>
            <?php
                require "executes/exec_timetable_index.php";
            ?>
        </div>

        
        <!-- jQuery -->
    <?php require "includes/include_scripts.php"; ?>
    <script src="../js/TweenLite.min.js"></script>
    <script src="../js/EasePack.min.js"></script>
    <script1
    <!-- Footer -->
    <?php 
        require "footer.php";       
    ?>
    </body>
</html>