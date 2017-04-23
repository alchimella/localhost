<?php
    require "db.php";
    require "moduls/modul_classes.php";
    require "moduls/modul_subjects.php";
    require "moduls/modul_theachers.php";
    require "moduls/modul_students.php";
    require "moduls/modul_posts.php";
    require "moduls/modul_events.php";
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
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap-datetimepicker.min.css" />
    </head>
    <body>
       <div class="container">
           <div class="row">
               <div class="navbar navbar-inverse">
                   
               </div>
           </div>
       </div>
       <div class="container">
            <div class="tabbable tabs-left">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="#teachers-tab" data-toggle="tab">Учителя</a></li>
                            <li><a href="#classes-tab" data-toggle="tab">Классы</a></li>
                            <li><a href="#subjects-tab" data-toggle="tab">Предметы</a></li>
                            <li><a href="#student-tab" data-toggle="tab">Ученики</a></li>
                            <li><a href="#lessons-tab" data-toggle="tab">Расписание уроков</a></li>
                            <li><a href="#events-tab" data-toggle="tab">Мероприятия</a></li>
                            <li><a href="#messages-tab" data-toggle="tab">Рассылка сообщений родителям</a></li>
                        </ul>
                    </div>

                    <div class="col-md-8">
                        <div class="tab-content">
                            <!-- Вкладка Учителя -->
                            <?php require "includes/tab_teacher.php"; ?>
                               
                            <!-- Таблица со списком учителей -->
                                  
                            <!-- Вкладка Классы -->
                            <?php require "includes/tab_class.php"; ?>
                            
                            <!-- Вкладка Предметы -->
                            <?php require "includes/tab_subject.php"; ?>
                            
                            <!-- Вкладка Ученики -->
                            <?php require "includes/tab_student.php"; ?>
                            
                            <!-- Вкладка Расписание уроков -->
                            <?php //require "includes/tab_student.php"; ?>
                            
                            <!-- Вкладка Мероприятия -->
                            <?php require "includes/tab_events.php"; ?>
                            
                            <!-- Вкладка Рассылка сообщений -->
                            <div class="tab-pane fade" id="messages-tab">
                                Text
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- jQuery -->
        <?php require "includes/include_scripts.php"; ?>
    </body>
</html>