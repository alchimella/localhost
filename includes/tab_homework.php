<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div class="tab-pane fade" id="homework-tab">
            <div class="row">
                <hr>Домашнее задание<hr>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="col col-lg-2">
                            <label for="class">Класс</label><br>
                            <label for="week">День недели</label><br>
                            <label for="data">Дата</label><br>
                        </div>
                        <div class="col col-lg-4">
                            <!-- Инициализация виджета "Bootstrap datetimepicker" -->
                            <div class="form-group">
                                <!-- Элемент HTML с id равным datetimepicker1 -->
                                <select class="form-control" style="width: 200px; border-color: #EC971F;" name="class">
                                    <?php
                                    $cicle_cl=R::findAll('classes', 'ORDER BY num_of_class ASC');
                                    foreach($cicle_cl as $c_c){
                                        echo '<option value="'.$c_c['$id'].'">'.$c_c['num_of_class'].'</option>';
                                    }
                                    ?>
                                </select>
                                <select class="form-control" style="margin-top: 5px; width: 200px;" name="week">
                                    <option>Понедельник</option>
                                    <option>Вторник</option>
                                    <option>Среда</option>
                                    <option>Четверг</option>
                                    <option>Пятница</option>
                                    <option>Суббота</option>
                                </select>
                                <div class="input-group date" id="datetimepicker8" style="width: 200px; margin-top: 5px;">
                                    <input type="text" class="form-control" name="data8">
                                    <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-2">
                            <label for="homework">Задание</label><br>
                        </div>
                        <div class="col col-lg-4">
                            <input type="text" id="homework" name="homework" style="width: 200px; margin-top: 5px;"><br>
                            <button class="btn btn-success" name="do_insert_meeting" style="width: 200px;margin-top: 5px;">Добавить</button>
                        </div>
                        <div class="row">
                            <table class="table">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th class="col-lg-2" style="text-align: center;">Понедельник / 19.05.2017</th>
                                        <th class="col-lg-9" style="text-align: center;">Задание</th>
                                        <th class="col-lg-1" style="text-align: center;">Класс</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">Русский язык</td>
                                        <td style="text-align: center;">Упр. 7-9 стр. 26</td>
                                        <td style="text-align: center;">8-Б</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>