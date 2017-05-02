<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <div class="tab-pane fade" id="timetable-tab">
            <hr>Расписание занятий<hr>
            <div class="col col-lg-2">
                <label style="margin-top: 5px;">Дата</label><br>
                <label style="margin-top: 5px;">Время</label><br>
                <label style="margin-top: 5px;">Урок</label><br>
                
            </div>
            <div class="col col-lg-4">
                <!-- Инициализация виджета "Bootstrap datetimepicker" -->
                <div class="form-group">
                    <!-- Элемент HTML с id равным datetimepicker1 -->
                    <div class="input-group date" id="datetimepicker4" style="width: 200px; margin-top: 5px;">
                        <input type="text" class="form-control" name="data4">
                        <span class="input-group-addon">
                        <span class="fa fa-calendar"></span> 
                        </span> 
                    </div>
                    <div class='input-group date' id='datetimepicker5' style="width: 200px; margin-top: 5px;">
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <span class="fa fa-clock-o"></span>
                        </span>
                    </div>
                    <select class="form-control" style="margin-top: 5px; width: 200px;" name="select_class">
                    <?php 
                        $cicle_subj=R::findAll('subjects');
                        foreach($cicle_subj as $c_s){
                            echo '<option>'.$c_s['num_of_subject'].'</option>';
                        }
                    ?>
                    </select>                               
            </div>
            </div>
            <div class="col col-lg-2">
                <label style="margin-top: 5px;">ФИО Учителя</label><br>
                <label style="margin-top: 5px;">Класс</label><br>
                <label style="margin-top: 5px;">Кабинет</label>
            </div>
            <div class="col col-lg-4">
                <select class="form-control" style="width: 270px; margin-top: 5px;" name="select_class">
                    <?php 
                        $cicle_t=R::findAll('teachers');
                        foreach($cicle_t as $c_t){
                            echo '<option>'.$c_t['num_of_teacher'].'</option>';
                        }
                    ?>
                </select>                               
                <select class="form-control" style="width: 200px; margin-top: 5px;" name="select_class">
                    <?php 
                        $cicle_cl=R::findAll('classes');
                        foreach($cicle_cl as $c_c){
                            echo '<option>'.$c_c['num_of_class'].'</option>';
                        }
                    ?>
                </select>                              
                <input type="text" style="margin-top: 5px;"> 
            </div>
        </div>
    </body>
</html>