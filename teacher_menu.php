<?php
    require "db.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" context = "IE-edge">
        <meta name = "viewport" content = "width-device-width, initial-scale = 1">
        
        <!-- Bootstrap -->
        <link href = "bootstrap/css/bootstrap.css" rel = "stylesheet">
        <link href = "styles/style_admin_menu.css" rel = "stylesheet">
        <link href = "bootstrap/css/font-awesome.css" rel = "stylesheet">
        <link href = "https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap-datetimepicker.min.css" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="navbar navbar-inverse">
                    <a href="#" style="color: #f5f5f5;" class="pull-right">Фамилия учителя</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="tabbable tabs-left">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="#journal-tab" data-toggle="tab">Журнал</a></li>
                            <li><a href="#class-tab" data-toggle="tab">Список класса</a></li>
                            <li><a href="#homework-tab" data-toggle="tab">Домашнее задание</a></li>
                            <li><a href="#parent_meeting-tab" data-toggle="tab">Родительское собрание</a></li>
                        </ul>
                    </div>

                    <div class="col-md-9">
                        <div class="tab-content">
                            <!-- Вкладка Журнал -->
                            <?php require "includes/tab_journal.php"; ?>
                               
                            <!-- Вкладка Класс -->
                            <?php require "includes/tab_list_class.php"; ?>
                            
                            <!-- Вкладка Домашнее задание -->
                            <?php require "includes/tab_homework.php"; ?>
                            
                            <!-- Вкладка Успеваемость -->

                            
                            <!-- Вкладка Родительское собрание -->
                            <?php require "includes/tab_parent_meeting.php"; ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <?php require "includes/include_scripts.php"; ?>
    </body>
</html>