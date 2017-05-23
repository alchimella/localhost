<?php require "edit/delete_class.php" ?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <div class="tab-pane fade" id="classes-tab">
            <hr>Классы<hr>
            <form class="form-group" method="POST">
                <div class="row">
                    <div class="col col-lg-6">
                        <div class="col col-lg-7">
                            <label for="class">Класс</label>
                            <input type="text" id="class" name="num_of_class">
                        </div>
                        <div class="col col-lg-5">
                            <button class="btn btn-success" style="margin-top: 35px; width: 130px" name="do_insert_class"><i class="fa fa-plus"></i> Добавить</button>
                            <button class="btn btn-danger" style="margin-top: 5px; width: 130px;" name="do_delete_class"><i class="fa fa-trash"></i> Удалить</button>
                        </div>
                    </div>
                    <!-- Таблица со списком классов -->
                    <div class="col col-lg-6">
                        <div data-spy="scroll" data-target=".table-example" style="margin-top: 15px;">
                            <?php 
                                require "executes/exec_classes.php"; 
                            ?>
                        </div>   
                    </div>
                </div>
                <div class="panel panel-default" style="margin-top: 5px;">
                    <div class="panel-heading">
                        <button type="button" class="btn btn-default btn-xs spoiler-trigger" data-toggle="collapse">Зарегистрировать класс на предмет</button>
                    </div>
                    <div class="panel-collapse collapse out">
                        <div class="panel-body">
                            <div class="col col-lg-5">
                                <select class="form-control" style="width: 200px; margin-top: 5px; border-color: #EC971F;" name="subjects_id">
                                    <?php
                                    $cicle_cl=R::findAll('subjects', 'ORDER BY num_of_subject ASC');
                                    foreach($cicle_cl as $c_c){
                                        echo '<option value="'.$c_c['$id'].'">'.$c_c['num_of_subject'].'</option>';
                                    }
                                    ?>
                                </select>
                                <button class="btn btn-success" name="do_insert_choose" style="margin-top: 5px;"><i class="fa fa-plus"></i></button>
                                <button class="btn btn-danger" style="margin-top: 5px;"><i class="fa fa-trash"></i></button>
                            </div>
                            <div class="col col-lg-7">
                                <table class="table">
                                    <thead class="thead-default">
                                        <tr>
                                            <th>Предмет</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>