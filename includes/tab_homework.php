<?php require "moduls/modul_homework.php"; ?>
<?php require "edit/delete_homework.php"; ?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div class="tab-pane fade" id="homework-tab">
            <div class="row">
                <hr><h4><i class="fa fa-file-text"></i> Домашнее задание</h4><hr>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="col col-lg-2">
                            <label for="class">Класс</label><br>
                            <label for="week">День недели</label><br>
                            <label class="control-label" for="registration-date3">Дата</label>
                        </div>
                        <div class="col col-lg-4">
                            <!-- Инициализация виджета "Bootstrap datetimepicker" -->
                            <div class="form-group">
                                <!-- Элемент HTML с id равным datetimepicker1 -->
                                <select class="form-control" style="margin-top: 5px; width: 220px;" name="classes_id">
                                    <?php
                                    $cicle_cl=R::findAll('classes', 'ORDER BY num_of_class ASC');
                                    foreach($cicle_cl as $c_c){
                                        echo '<option value="'.$c_c['id'].'">'.$c_c['num_of_class'].'</option>';
                                    }
                                    ?>
                                </select>
                                <select class="form-control" style="margin-top: 5px; width: 220px;" name="week">
                                    <option>Понедельник</option>
                                    <option>Вторник</option>
                                    <option>Среда</option>
                                    <option>Четверг</option>
                                    <option>Пятница</option>
                                    <option>Суббота</option>
                                </select>
                                <div class="form-group registration-date">
                                    <div class="input-group registration-date-time" style="margin-top: 5px;">
                                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                                        <input class="form-control" name="registration_date3" id="registration-date3" type="date" style="width: 180px;">
                                        <span class="input-group-btn"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-2">
                            <label for="homework">Задание</label><br>
                        </div>
                        <div class="col col-lg-4">
                            <input type="text" id="homework" name="homework" style="width: 250px; margin-top: 5px;"><br>
                            <button class="btn btn-success" name="do_insert_homework" style="margin-top: 5px;"><i class="fa fa-plus"></i> Добавить</button>
                            <button class="btn btn-danger" name="do_delete_homework" style="margin-left: 10px; margin-top: 5px;"><i class="fa fa-trash"></i> Удалить</button>
                        </div>
                        <div class="row">
                            <?php require "executes/exec_homework.php"; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>