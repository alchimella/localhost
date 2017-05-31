<!DOCTYPE html>
<html>
    <head>
        <link href = "styles/style_tab_timetable.css" rel = "stylesheet">
    </head>
    <body>
        <div class="tab-pane fade" id="timetable-tab">
            <form class="form-group" method="POST">
                <hr><h4><i class="fa fa-calendar"></i> Расписание занятий</h4><hr>

                <!-- Расписание занятий -->

                <div class="col col-lg-2">
                    <label style="margin-top: 5px;">День недели</label><br>
                    <label style="margin-top: 10px;">Время</label><br>
                    <label style="margin-top: 10px;">Смена</label><br>
                    <label style="margin-top: 5px;">Предмет</label><br>
                </div>
                <div class="col col-lg-4">
                    <div class="form-group">
                        <select class="form-control" style="margin-top: 5px; width: 200px;" name="select_week">
                            <option>Понедельник</option>
                            <option>Вторник</option>
                            <option>Среда</option>
                            <option>Четверг</option>
                            <option>Пятница</option>
                            <option>Суббота</option>
                        </select>
                        <select class="form-control" style="margin-top: 5px; width: 200px;" name="select_time">
                            <option value="8:00-8:45">8:00-8:45</option>
                            <option value="8:50-9:35">8:50-9:35</option>
                            <option value="9:40–10:25">9:40–10:25</option>
                            <option value="10:40–11:25">10:40–11:25</option>
                            <option value="11:30–12:15">11:30–12:15</option>
                            <option value="12:20–13:05">12:20–13:05</option>
                            <option value="13:30–14:15">13:30–14:15</option>
                            <option value="14:20–15:05">14:20–15:05</option>
                            <option value="15:15–16:00">15:15–16:00</option>
                            <option value="16:10–16:55">16:10–16:55</option>
                            <option value="17:00–17:45">17:00–17:45</option>
                            <option value="17:50–18:35">17:50–18:35</option>
                        </select>
                        <select class="form-control" style="width: 200px; margin-top: 5px;" name="select_change">
                            <option value="Первая смена">Первая смена</option>
                            <option value="Вторая смена">Вторая смена</option>
                        </select>
                        <select class="form-control" style="margin-top: 5px; width: 200px;" name="select_subject">
                            <?php
                            $cicle_subj=R::findAll('subjects', 'ORDER BY num_of_subject ASC');
                            foreach($cicle_subj as $c_s){
                                echo '<option>'.$c_s['num_of_subject'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col col-lg-2">
                    <label style="margin-top: 5px;">ФИО Учителя</label><br>
                    <label style="margin-top: 10px;">Класс</label><br>
                    <label style="margin-top: 10px;">Кабинет</label>

                </div>
                <div class="col col-lg-4">
                    <select class="form-control" style="width: 270px; margin-top: 5px;" name="select_teacher">
                        <?php
                        $cicle_t=R::findAll('teachers', 'ORDER BY name_of_teacher ASC');
                        foreach($cicle_t as $c_t){
                            echo '<option>'.$c_t['name_of_teacher'].'</option>';
                        }
                        ?>
                    </select>
                    <select class="form-control" style="width: 200px; margin-top: 5px;" name="select_class">
                        <?php
                        $cicle_cl=R::findAll('classes', 'ORDER BY num_of_class ASC');
                        foreach($cicle_cl as $c_c){
                            echo '<option>'.$c_c['num_of_class'].'</option>';
                        }
                        ?>
                    </select>
                    <input type="text" style="width: 200px; margin-top: 5px;" name="select_room">

                    <button class="btn btn-success" style="width: 200px; margin-top: 5px;" name="do_insert_timetable"><i class="fa fa-plus"></i> Добавить</button>
                </div>
                <div class="row">
                    <div class="col col-lg-2">
                        <table class="table">

                        </table>
                    </div>
                    <div class="col col-lg-10"></div>
                    <?php require "executes/exec_timetables.php"; ?>
                </div>
                <hr><h4><i class="fa fa-calendar-plus-o"></i> Расписание дополнительных занятий</h4><hr>

                <!-- Расписание дополнительных занятий -->

                <div class="col col-lg-2">
                    <label style="margin-top: 5px;">День недели</label><br>
                    <label style="margin-top: 10px;">Время</label><br>
                    <label style="margin-top: 10px;">Смена</label><br>
                    <label style="margin-top: 5px;">Предмет</label><br>
                </div>
                <div class="col col-lg-4">
                    <div class="form-group">
                        <select class="form-control" style="margin-top: 5px; width: 200px;" name="select_week_additional">
                            <option>Понедельник</option>
                            <option>Вторник</option>
                            <option>Среда</option>
                            <option>Четверг</option>
                            <option>Пятница</option>
                            <option>Суббота</option>
                        </select>
                        <select class="form-control" style="margin-top: 5px; width: 200px;" name="select_time_additional">
                            <option value="8:00-8:45">8:00-8:45</option>
                            <option value="8:50-9:35">8:50-9:35</option>
                            <option value="9:40–10:25">9:40–10:25</option>
                            <option value="10:40–11:25">10:40–11:25</option>
                            <option value="11:30–12:15">11:30–12:15</option>
                            <option value="12:20–13:05">12:20–13:05</option>
                            <option value="13:30–14:15">13:30–14:15</option>
                            <option value="14:20–15:05">14:20–15:05</option>
                            <option value="15:15–16:00">15:15–16:00</option>
                            <option value="16:10–16:55">16:10–16:55</option>
                            <option value="17:00–17:45">17:00–17:45</option>
                            <option value="17:50–18:35">17:50–18:35</option>
                        </select>
                        <select class="form-control" style="width: 200px; margin-top: 5px;" name="select_change_additional">
                            <option value="Первая смена">Первая смена</option>
                            <option value="Вторая смена">Вторая смена</option>
                        </select>
                        <select class="form-control" style="margin-top: 5px; width: 200px;" name="select_subject_additional">
                            <?php
                            $cicle_subj=R::findAll('subjects', 'ORDER BY num_of_subject ASC');
                            foreach($cicle_subj as $c_s){
                                echo '<option>'.$c_s['num_of_subject'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col col-lg-2">
                    <label style="margin-top: 5px;">ФИО Учителя</label><br>
                    <label style="margin-top: 10px;">Класс</label><br>
                    <label style="margin-top: 10px;">Кабинет</label>

                </div>
                <div class="col col-lg-4">
                    <select class="form-control" style="width: 270px; margin-top: 5px;" name="select_teacher_additional">
                        <?php
                        $cicle_t=R::findAll('teachers', 'ORDER BY name_of_teacher ASC');
                        foreach($cicle_t as $c_t){
                            echo '<option>'.$c_t['name_of_teacher'].'</option>';
                        }
                        ?>
                    </select>
                    <select class="form-control" style="width: 200px; margin-top: 5px;" name="select_class_additional">
                        <?php
                        $cicle_cl=R::findAll('classes', 'ORDER BY num_of_class ASC');
                        foreach($cicle_cl as $c_c){
                            echo '<option>'.$c_c['num_of_class'].'</option>';
                        }
                        ?>
                    </select>
                    <input type="text" style="width: 200px; margin-top: 5px;" name="select_room_additional">

                    <button class="btn btn-success" style="width: 200px; margin-top: 5px;" name="do_insert_timetable_additional"><i class="fa fa-plus"></i> Добавить</button>
                </div>
                <div class="row">
                    <div class="col col-lg-2">
                        <table class="table">

                        </table>
                    </div>
                    <div class="col col-lg-10"></div>
                    <?php require "executes/exec_timetables_additional.php"; ?>
                </div>
                <hr><h4><i class="fa fa-calendar-o"></i> Расписание кружков</h4><hr>

                <!-- Расписание кружков -->

                <div class="col col-lg-2">
                    <label style="margin-top: 5px;">День недели</label><br>
                    <label style="margin-top: 10px;">Время</label><br>
                    <label style="margin-top: 10px;">Смена</label><br>
                    <label style="margin-top: 5px;">Предмет</label><br>
                </div>
                <div class="col col-lg-4">
                    <div class="form-group">
                        <select class="form-control" style="margin-top: 5px; width: 200px;" name="select_week_circle">
                            <option>Понедельник</option>
                            <option>Вторник</option>
                            <option>Среда</option>
                            <option>Четверг</option>
                            <option>Пятница</option>
                            <option>Суббота</option>
                        </select>
                        <select class="form-control" style="margin-top: 5px; width: 200px;" name="select_time_circle">
                            <option value="8:00-8:45">8:00-8:45</option>
                            <option value="8:50-9:35">8:50-9:35</option>
                            <option value="9:40–10:25">9:40–10:25</option>
                            <option value="10:40–11:25">10:40–11:25</option>
                            <option value="11:30–12:15">11:30–12:15</option>
                            <option value="12:20–13:05">12:20–13:05</option>
                            <option value="13:30–14:15">13:30–14:15</option>
                            <option value="14:20–15:05">14:20–15:05</option>
                            <option value="15:15–16:00">15:15–16:00</option>
                            <option value="16:10–16:55">16:10–16:55</option>
                            <option value="17:00–17:45">17:00–17:45</option>
                            <option value="17:50–18:35">17:50–18:35</option>
                        </select>
                        <select class="form-control" style="width: 200px; margin-top: 5px;" name="select_change_circle">
                            <option value="Первая смена">Первая смена</option>
                            <option value="Вторая смена">Вторая смена</option>
                        </select>
                        <select class="form-control" style="margin-top: 5px; width: 200px;" name="select_subject_circle">
                            <?php
                            $cicle_subj=R::findAll('subjects', 'ORDER BY num_of_subject ASC');
                            foreach($cicle_subj as $c_s){
                                echo '<option>'.$c_s['num_of_subject'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col col-lg-2">
                    <label style="margin-top: 5px;">ФИО Учителя</label><br>
                    <label style="margin-top: 10px;">Класс</label><br>
                    <label style="margin-top: 10px;">Кабинет</label>

                </div>
                <div class="col col-lg-4">
                    <select class="form-control" style="width: 270px; margin-top: 5px;" name="select_teacher_circle">
                        <?php
                        $cicle_t=R::findAll('teachers', 'ORDER BY name_of_teacher ASC');
                        foreach($cicle_t as $c_t){
                            echo '<option>'.$c_t['name_of_teacher'].'</option>';
                        }
                        ?>
                    </select>
                    <select class="form-control" style="width: 200px; margin-top: 5px;" name="select_class_circle">
                        <?php
                        $cicle_cl=R::findAll('classes', 'ORDER BY num_of_class ASC');
                        foreach($cicle_cl as $c_c){
                            echo '<option>'.$c_c['num_of_class'].'</option>';
                        }
                        ?>
                    </select>
                    <input type="text" style="width: 200px; margin-top: 5px;" name="select_room_circle">

                    <button class="btn btn-success" style="width: 200px; margin-top: 5px;" name="do_insert_timetable_circles"><i class="fa fa-plus"></i> Добавить</button>
                </div>
                <div class="row">
                    <div class="col col-lg-2">
                        <table class="table">

                        </table>
                    </div>
                    <div class="col col-lg-10"></div>
                    <?php require "executes/exec_timetables_circles.php"; ?>
                </div>
            </form>
        </div>
    </body>
</html>