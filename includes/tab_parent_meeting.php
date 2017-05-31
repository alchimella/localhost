<?php require "moduls/modul_meetings.php"; ?>
<?php require "edit/delete_parent_meet.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <link href = "styles/style_tab_event.css" rel = "stylesheet">
    </head>
    <body>
        <div class="tab-pane fade" id="parent_meeting-tab">
            <div class="row">
                <hr><h4><i class="fa fa-users"></i> Родительское собрание</h4><hr>
                <form method="post">
                    <div class="form-group">
                        <div class="col col-lg-3">
                            <label for="theme_meeting">Тема собрания</label><br>
                            <label for="class_meeting">Класс</label><br>
                            <label class="control-label" for="registration-date">Дата</label><br>
                            <label class="control-label" for="registration-time">Время</label><br>
                        </div>
                        <div class="col col-lg-4">
                            <!-- Инициализация виджета "Bootstrap datetimepicker" -->
                            <div class="form-group">
                                <!-- Элемент HTML с id равным datetimepicker1 -->
                                <input type="text" name="theme_meeting" id="theme_meeting" style="width: 240px;">
                                <select class="form-control" style="margin-top: 5px; width: 240px;" name="clas_id">
                                    <?php
                                    $cicle_cl=R::findAll('classes', 'ORDER BY num_of_class ASC');
                                    foreach($cicle_cl as $c_c){
                                        echo '<option value="'.$c_c['id'].'">'.$c_c['num_of_class'].'</option>';
                                    }
                                    ?>
                                </select>
                                <div class="form-group registration-date" style="margin-top: 5px;">
                                    <div class="input-group registration-date-time">
                                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                                        <input class="form-control" name="registration_date4" id="registration-date" type="date" style="width: 200px;">
                                        <span class="input-group-btn"></span>
                                    </div>
                                </div>
                                <div class="form-group registration-date" style="margin-top: -9px;">
                                    <div class="input-group registration-date-time">
                                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></span>
                                        <input class="form-control" name="registration_time" id="registration-time" type="time" style="width: 200px;">
                                        <span class="input-group-btn">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success" name="do_insert_meeting"><i class="fa fa-plus"></i> Загрузить</button>
                            <button class="btn btn-danger" name="do_delete_meeting"><i class="fa fa-trash"></i> Удалить</button>
                        </div>
                        <div class="col col-lg-5">
                            <?php require "executes/exec_parent_meet.php"; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>