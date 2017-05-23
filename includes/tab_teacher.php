<!DOCTYPE html>
<html>
    <head>
        <link href = "styles/style_tab_teacher.css" rel = "stylesheet">
    </head>
    <body>
        <div class="tab-pane active in fade" id="teachers-tab">
            <p>
                <hr>Данные об учителях<hr>
                <form class="form-group" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col col-lg-3">
                            <div class="form-group">
                                <label for="theacher_name">ФИО учителя</label><br>
                                <label for="theacher_phone">Номер телефона</label><br>
                                <label for="theacher_subject">Предмет</label><br>
                            <div id="div2" style="display:block; display:none;">
                                <label for="select-class" id="select_class" style="margin-top: 70px;">Класс</label><br>
                            </div>                         
                            </div>
                        </div>
                        <div class="col col-lg-5">
                            <div class="form-group margin_top">
                                <input type="text" id="theacher_name" name="name_of_teacher" style="width: 320px;"><br>
                                <input type="text" id="theacher_phone" name="phone_of_teacher" style="width: 220px; margin-top: 5px;"><br>
                                <select class="form-control" style="margin-top: 5px; width: 220px;" name="subj_id">
                                    <?php
                                    $cicle_cl=R::findAll('subjects', 'ORDER BY num_of_subject ASC');
                                    foreach($cicle_cl as $c_c){
                                        echo '<option value="'.$c_c['id'].'">'.$c_c['num_of_subject'].'</option>';
                                    }
                                    ?>
                                </select>
                                <br>  
                                <div class="funkyradio" name="check_teacher" style="margin-top: -50px;">
                                    <div class="funkyradio-warning">
                                        <input type="checkbox" name="checkbox" id="checkbox1" onClick="showMe(this)">
                                        <label for="checkbox1">Классный руководитель</label>
                                    </div>
                                </div>                               
                            </div>
                            <div class="form-group" id="div1" style="display:block; display:none;">
                                <select class="form-control" style="margin-top: 5px; width: 220px;" name="clas_id">
                                    <?php
                                    $cicle_cl=R::findAll('classes', 'ORDER BY num_of_class ASC');
                                    foreach($cicle_cl as $c_c){
                                        echo '<option value="'.$c_c['id'].'">'.$c_c['num_of_class'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <button class="btn btn-success" name="do_insert_teacher"><i class="fa fa-plus"></i> Добавить</button>
                        </div>
                        <div class="col col-lg-3 col-lf-offset-3">
                            <div class="form-group">
                                <div class="main-img-preview">
                                    <img class="thumbnail img-preview" src="http://placehold.it/240x200" title="Preview Logo"/>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <div class="fileUpload btn btn-primary fake-shadow" style="margin-top: -5px; width: 187px; border-radius: 4px;">
                                        <span><i class="fa fa-upload"></i> Загрузить</span>
                                        <input action="scripts/script_upload_picture.php" id="logo-id" name="photo_of_theacher" type="file" class="attachment_upload" enctype="multipart/form-data">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-3">
                            <label for="teacher_login" style="margin-top: 20px;">Логин учителя</label><br>
                            <label for="teacher_pass">Пароль учителя</label>
                            <label for="teacher_pass2">Повторите пароль</label>
                        </div>
                        <div class="col col-lg-5">
                            <input type="text" id="teacher_login" style="margin-top: 20px; width: 220px;"><br>
                            <input type="password" id="teacher_pass" style="margin-top: 5px; width: 220px;"><br>
                            <input type="password" id="teacher_pass2" style="margin-top: 5px; width: 220px;"><br>
                            <button class="btn btn-warning" style="margin-top: 20px; width: 220px;"><i class="fa fa-key"></i> Регистрация учителя</button>
                        </div>
                    </div>
                    <hr>
                    <div class="panel panel-default" style="margin-top: 20px;">
                        <div class="panel-heading">
                            <button type="button" class="btn btn-default btn-xs spoiler-trigger" data-toggle="collapse">Классы, которым ведёт учитель</button>
                        </div>
                        <div class="panel-collapse collapse out">
                            <div class="panel-body">
                                <div class="col col-lg-5">
                                    <select class="form-control" style="width: 200px; border-color: #EC971F;" name="teachers_id">
                                        <?php
                                            $cicle_th=R::findAll('teachers', 'ORDER BY name_of_teacher ASC');
                                            foreach($cicle_th as $c_t){
                                                echo '<option value="'.$c_t['$id'].'">'.$c_t['name_of_teacher'].'</option>';
                                            }
                                        ?>
                                    </select>
                                    <select class="form-control" style="width: 200px; margin-top: 5px; border-color: #EC971F;" name="classes_id">
                                        <?php
                                        $cicle_cl=R::findAll('classes', 'ORDER BY num_of_class ASC');
                                        foreach($cicle_cl as $c_c){
                                            echo '<option value="'.$c_c['$id'].'">'.$c_c['num_of_class'].'</option>';
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
                                                <th>Классы</th>
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
                <!-- Таблица со списком учителей -->
                <?php require "executes/exec_teachers.php"; ?>
                <?php require "includes/include_scripts.php"; ?>
            </p>
        </div>
    </body>
</html>
                           