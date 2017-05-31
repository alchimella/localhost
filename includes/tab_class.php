<?php require "edit/delete_class.php" ?>
<?php require "functions/function_registration_cl_sb.php"?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <div class="tab-pane fade" id="classes-tab">
            <hr><h4><i class="fa fa-graduation-cap"></i> Классы</h4><hr>
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
                        <ul class="nav navbar-nav navbar-right" style="margin-right: 10px; margin-top: 8px;"><?php ы ?>...Класс...</ul>
                    </div>
                    <div class="panel-collapse collapse out">
                        <div class="panel-body">
                            <div class="col col-lg-5">
                                <select class="form-control" style="margin-top: 5px; width: 220px;" name="class_id">
                                    <?php
                                    $cicle_cl=R::findAll('classes', 'ORDER BY num_of_class ASC');
                                    foreach($cicle_cl as $c_c){
                                        echo '<option value="'.$c_c['id'].'">'.$c_c['num_of_class'].'</option>';
                                    }
                                    ?>
                                </select>
                                <select class="form-control" style="margin-top: 5px; width: 220px;" name="subject_id">
                                    <?php
                                    $cicle_sb=R::findAll('subjects', 'ORDER BY num_of_subject ASC');
                                    foreach($cicle_sb as $c_s){
                                        echo '<option value="'.$c_s['id'].'">'.$c_s['num_of_subject'].'</option>';
                                    }
                                    ?>
                                </select>
                                <button class="btn btn-success" name="do_insert_choose_subject" style="margin-top: 5px;"><i class="fa fa-plus"></i></button>
                                <button class="btn btn-danger" style="margin-top: 5px;"><i class="fa fa-trash"></i></button>
                            </div>
                            <div class="col col-lg-7">
                                <?php require "executes/exec_class_subject.php"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>