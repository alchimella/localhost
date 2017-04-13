<?php
    require "db.php";
    require "moduls/modul_classes.php";
    require "moduls/modul_subjects.php";
    require "moduls/modul_theachers.php";
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
                            <li><a href="#students-tab" data-toggle="tab">Ученики</a></li>
                            <li><a href="#lessons-tab" data-toggle="tab">Расписание уроков</a></li>
                        </ul>
                    </div>

                    <div class="col-md-8">
                        <div class="tab-content">
                            <!-- Вкладка Учителя -->
                            <div class="tab-pane active in fade" id="teachers-tab">
                            <p>
                                <form class="form-group" method="POST">
                                   <div class="row">
                                       <div class="col col-lg-3">
                                           <div class="form-group">
                                               <label for="theacher_name">ФИО учителя</label><br>
                                               <label for="theacher_phone" style="margin-top: 10px;">Номер телефона</label><br>
                                               <label for="theacher_subject" style="margin-top: 10px;">Предмет</label><br>
                                           </div>
                                       </div>
                                       <div class="col col-lg-8">
                                           <div class="form-group margin_top">
                                               <input type="text" id="theacher_name" name="num_of_theacher" style="width: 360px;"><br>     
                                               <input type="text" id="theacher_phone" name="phone_of_theacher" style="margin-top: 10px;"><br>
                                               <input type="text" id="theacher_subject" name="subj_of_theacher" style="margin-top: 10px;"><br> 
                                           </div>
                                       </div>
                                   </div>
                                   <button class="btn btn-success" style="margin-left: 10px;" name="do_insert_teacher">Добавить</button>
                                </form>
                               
                                <!-- Таблица со списком учителей -->
                                  
                                <?php 
                                   //require "executes/exec_teachers.php"; 
                                ?>
                            </p>
                            </div>
                            <!-- Вкладка Классы -->
                            <div class="tab-pane fade" id="classes-tab">
                            <p>
                                <form class="form-group" method="POST">
                                    <label for="class">Класс</label>
                                    <input type="text" id="class" name="num_of_class">
                                    <button class="btn btn-success" style="margin-left: 10px;" name="do_insert_class">Добавить</button>
                                </form>
                               
                                <!-- Таблица со списком классов -->
                                  
                                <?php 
                                   require "executes/exec_classes.php"; 
                                ?>
                            </p>
                            </div>
                            <!-- Вкладка Предметы -->
                            <div class="tab-pane fade" id="subjects-tab">
                            <p>
                                <form class="form-group" method="POST">
                                    <label for="subj">Предмет</label>
                                    <input type="text" id="subj" name="num_of_subject">
                                    <button class="btn btn-success" style="margin-left: 10px;" name="do_insert_subj">Добавить</button>
                                </form>
                               
                                <!-- Таблица со списком предметов -->
                                  
                                <?php 
                                   require "executes/exec_subjects.php"; 
                                ?>
                            </p>
                            </div>
                            <div class="tab-pane fade" id="students-tab">
                            <p>
                                <label for=""></label>
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- jQuery -->
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src = "bootstrap/js/bootstrap.js"></script>
        <script src = "bootstrap/js/salvattore.min.js"></script>
        <script>$(function(){
                $('[data-toggle="tooltip"]').tooltip();
                $('[data-toggle="popover"]').popover();
            });
        </script>
        <script src="bootstrap/main.js"></script>
    </body>
</html>