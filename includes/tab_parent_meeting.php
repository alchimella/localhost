<!DOCTYPE html>
<html>
<head>
    <link href = "styles/style_tab_event.css" rel = "stylesheet">
</head>
<body>
<div class="tab-pane fade" id="parent_meeting-tab">
    <div class="row">
        <hr>Родительское собрание<hr>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <div class="col col-lg-3">
                    <label for="class_meeting">Класс</label><br>
                    <label for="data_meeting">Дата</label><br>
                    <label for="time_meeting">Время</label><br>
                </div>
                <div class="col col-lg-8">
                    <!-- Инициализация виджета "Bootstrap datetimepicker" -->
                    <div class="form-group">
                        <!-- Элемент HTML с id равным datetimepicker1 -->
                        <select class="form-control" style="width: 200px; border-color: #EC971F;" name="class_of_meeting">
                            <?php
                            $cicle_cl=R::findAll('classes', 'ORDER BY num_of_class ASC');
                            foreach($cicle_cl as $c_c){
                                echo '<option value="'.$c_c['$id'].'">'.$c_c['num_of_class'].'</option>';
                            }
                            ?>
                        </select>
                        <div class="input-group date" id="datetimepicker6" style="width: 200px; margin-top: 5px;">
                            <input type="text" class="form-control" name="data5">
                            <span class="input-group-addon">
                            <span class="fa fa-calendar"></span>
                            </span>
                        </div>
                        <div class='input-group date' id='datetimepicker7' style="width: 200px; margin-top: 5px;">
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                            <span class="fa fa-clock-o"></span>
                            </span>
                        </div>
                    </div>
                    <button class="btn btn-success" name="do_insert_meeting">Загрузить</button>
                </div>
            </div>


        </form>
    </div>
</div>
</body>
</html>