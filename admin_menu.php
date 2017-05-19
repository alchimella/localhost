<?php
    require "db.php";
    require "moduls/modul_classes.php";
    require "moduls/modul_subjects.php";
    require "moduls/modul_theachers.php";
    require "moduls/modul_students.php";
    require "moduls/modul_posts.php";
    require "moduls/modul_events.php";
    require "moduls/modul_timetables.php";
    require "registration.php";
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

        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    </head>
    <body>
        <div class="container">
           <div class="row">
               <div class="navbar navbar-inverse">
                   <form class="navbar-search pull-right">
                      <input type="text" class="search-query" placeholder="Поиск" style="width: 220px;">
                   </form>
               </div>
           </div>
        </div>
        <div class="container">
            <div class="tabbable tabs-left">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="#teachers-tab" data-toggle="tab">Учителя</a></li>
                            <li><a href="#classes-tab" data-toggle="tab">Классы</a></li>
                            <li><a href="#subjects-tab" data-toggle="tab">Предметы</a></li>
                            <li><a href="#student-tab" data-toggle="tab">Ученики</a></li>
                            <li><a href="#timetable-tab" data-toggle="tab">Расписание уроков</a></li>
                            <li><a href="#events-tab" data-toggle="tab">Мероприятия</a></li>
                            <li><a href="#gallary-tab" data-toggle="tab">Галерея</a></li>
                        </ul>
                    </div>

                    <div class="col-md-9">
                        <div class="tab-content">
                            <!-- Вкладка Учителя -->
                            <?php require "includes/tab_teacher.php"; ?>

                            <!-- Вкладка Классы -->
                            <?php require "includes/tab_class.php"; ?>

                            <!-- Вкладка Предметы -->
                            <?php require "includes/tab_subject.php"; ?>

                            <!-- Вкладка Ученики -->
                            <?php require "includes/tab_student.php"; ?>

                            <!-- Вкладка Расписание уроков -->
                            <?php require "includes/tab_timetable.php"; ?>

                            <!-- Вкладка Мероприятия -->
                            <?php require "includes/tab_events.php"; ?>

                            <!-- Вкладка Галерея школы -->
                            <div class="tab-pane fade" id="gallary-tab">
                                <hr>Школьная галерея<hr>
                                <div class="col col-lg-3 col-lf-offset-3">
                                    <!--<img src="http://placehold.it/240x200" alt="" style="border: 5px outset #337AB7;">-->
                                    <div class="form-group">
                                        <div class="main-photo-preview">
                                            <img class="thumbnail photo-preview" src="http://placehold.it/240x200" title="Preview photo"/>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <div class="photoUpload btn btn-primary fake-shadow" style="width: 180px;">
                                                <span><i class="fa fa-upload"></i> Загрузить</span>
                                                <input action="scripts/script_upload_picture.php" id="photo-id" name="photo_of_student" type="file" class="attachment_upload2" enctype="multipart/form-data">
                                            </div>
                                        </div>
                                    </div>
                                    <input id="fakeUploadPhoto" class="form-control fake-shadow" placeholder="Выберите фото" style="margin-top: 15px;" readonly>
                                </div>
                                <div class="col col-lg-9">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Создание модального окна -->
        <div class="modal fade" id="modal-1">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Регистрация учителей</h4>
                        <button class="close" type="button" data-dismiss="modal"><i class="fa fa-close"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="col col-lg-4">

                        </div>
                        <div class="col col-lg-8">

                            <button class="btn-success" name="registration" style="margin-top: 5px;" name="do_signup">Добавить</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn-danger" type="button" data-dismiss="modal">
                            Отмена
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
        <!-- jQuery -->
        <?php require "includes/include_scripts.php"; ?>
    </body>
</html>