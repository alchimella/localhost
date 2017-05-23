<!DOCTYPE html>
<html>
<head>

</head>
    <body>
        <div class="tab-pane fade" id="journal-tab">
            <div class="row">
                <hr>Родительское собрание<hr>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="col col-lg-3">
                            <label for="class_meeting">Класс</label><br>
                        </div>
                        <div class="col col-lg-8">
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
                            </div>
                            <button class="btn btn-success" name="do_insert_mark">Загрузить</button>
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