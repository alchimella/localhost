<!DOCTYPE html>
<html>
    <head>
        <link href = "styles/style_tab_teacher.css" rel = "stylesheet">
    </head>
    <body>
        <div class="tab-pane active in fade" id="teachers-tab">
            <p>
                <hr>Данные об учителях<hr>
                <form class="form-group" method="POST">
                    <div class="row">
                        <div class="col col-lg-3">
                            <div class="form-group">
                                <label for="theacher_name">ФИО учителя</label><br>
                                <label for="theacher_phone">Номер телефона</label><br>
                                <label for="theacher_subject">Предмет</label><br>
                                <!--<label for="theacher_email">email</label><br>
                                <label for="theacher_login">Логин</label><br>
                                <label for="theacher_password" >Пароль</label>-->
                            <div id="div2" style="display:block; display:none;">
                                <label for="select-class" id="select_class" style="margin-top: 90px;">Класс</label><br>
                            </div>                         
                            </div>
                        </div>
                        <div class="col col-lg-5">
                            <div class="form-group margin_top">
                                <input type="text" id="theacher_name" name="name_of_teacher" style="width: 320px;"><br>
                                <input type="text" id="theacher_phone" name="phone_of_teacher" style="margin-top: 5px;"><br>
                                <select class="form-control" style="margin-top: 5px; width: 200px;" name="subjects_id">
                                    <?php
                                    $cicle_sub=R::findAll('subjects', 'ORDER BY num_of_subject ASC');
                                    foreach($cicle_sub as $c_s){
                                        echo '<option value="'.$c_s['$id'].'">'.$c_s['num_of_subject'].'</option>';
                                    }
                                    ?>
                                </select>
                                <!--<input type="text" id="theacher_email" name="email_of_theacher" style="margin-top: 5px;"><br>
                                <input type="text" id="theacher_login" name="login_of_theacher" style="margin-top: 5px;"><br>
                                <input type="password" id="theacher_password" name="password_of_theacher" style="margin-top: 5px;">-->


                                <br>  
                                <div class="funkyradio" name="check_teacher">
                                    <div class="funkyradio-warning">
                                        <input type="checkbox" name="checkbox" id="checkbox1" onClick="showMe(this)">
                                        <label for="checkbox1">Классный руководитель</label>
                                    </div>
                                </div>                               
                            </div>
                            <div class="form-group" id="div1" style="display:block; display:none;">
                                <select class="form-control" style="width: 200px; border-color: #EC971F;" name="classes_id">
                                    <?php
                                        $cicle_cl=R::findAll('classes', 'ORDER BY num_of_class ASC');
                                        foreach($cicle_cl as $c_c){
                                            echo '<option value="'.$c_c['$id'].'">'.$c_c['num_of_class'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <button class="btn btn-success" name="do_insert_teacher">Добавить</button>                       
                        </div>
                        <div class="col col-lg-3 col-lf-offset-3">
                            <!--<img src="http://placehold.it/240x200" alt="" style="border: 5px outset #337AB7;">-->
                            <div class="form-group">
                                <div class="main-img-preview">
                                    <img class="thumbnail img-preview" src="http://placehold.it/240x200" title="Preview Logo"/>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <div class="fileUpload btn btn-primary fake-shadow" style="width: 187px;">
                                        <span><i class="fa fa-upload"></i> Загрузить</span>
                                        <input action="scripts/script_upload_picture.php" id="logo-id" name="photo_of_theacher" type="file" class="attachment_upload" enctype="multipart/form-data">
                                    </div>
                                </div>
                            </div>
                            <!--<input id="fakeUploadLogo" class="form-control fake-shadow" placeholder="" style="margin-top: 15px;" readonly>-->
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
                           