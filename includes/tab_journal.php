<!DOCTYPE html>
<html>
<head>

</head>
    <body>
        <div class="tab-pane active in fade" id="journal-tab">
            <div class="row">
                <hr><h4><i class="fa fa-leanpub"></i> Журнал</h4><hr>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <h5 style="color: #337AB7;"><Предмет></h5>
                        <br>
                        <div class="col col-lg-1">
                            <label for="class_meeting">Класс</label><br>
                            <label class="control-label" for="registration-date">Дата</label><br>
                        </div>
                        <div class="col col-lg-3">
                            <!-- Инициализация виджета "Bootstrap datetimepicker" -->
                            <div class="form-group">
                                <!-- Элемент HTML с id равным datetimepicker1 -->
                                <select class="form-control" style="width: 190px;" name="classes_id">
                                    <?php
                                    $cicle_cl=R::findAll('classes', 'ORDER BY num_of_class ASC');
                                    foreach($cicle_cl as $c_c){
                                        echo '<option value="'.$c_c['$id'].'">'.$c_c['num_of_class'].'</option>';
                                    }
                                    ?>
                                </select>
                                <div class="form-group registration-date">
                                    <div class="input-group registration-date-time" style="margin-top: 5px;">
                                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                                        <input class="form-control" name="registration_date5" id="registration-date" type="date" style="width: 150px;">
                                        <span class="input-group-btn"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-1">
                            <label for="student">Студент</label><br>
                        </div>
                        <div class="col col-lg-4">
                            <select class="form-control" id="student" style="width: 250px;" name="students_id">
                                <?php
                                $cicle_st=R::findAll('students', 'ORDER BY name_of_student ASC');
                                foreach($cicle_st as $c_s){
                                    echo '<option value="'.$c_s['$id'].'">'.$c_s['name_of_student'].'</option>';
                                }
                                ?>
                            </select>
                            <button class="btn btn-success btn-sm" name="do_insert_mark" style="margin-top: 5px;">Загрузить</button>
                        </div>
                        <div class="col col-lg-3">
                            <button class="btn btn-info" style="width: 205px;">Отчет по успеваемости</button>
                            <button class="btn btn-info" style="width: 205px; margin-top: 5px;">Отчет по посещаемости</button>
                        </div>
                        <div class="row">

                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="col-lg-3">ФИО ученика</th>
                                    <th class="col-lg-1">Н/Б</th>
                                    <th class="col-lg-1"></th>
                                    <th class="col-lg-1"></th>
                                    <th class="col-lg-1"></th>
                                    <th class="col-lg-1"></th>
                                    <th class="col-lg-1"></th>
                                    <th class="col-lg-1"></th>
                                    <th class="col-lg-1"></th>
                                    <th class="col-lg-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Сидоров Анатолий Петрович</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>