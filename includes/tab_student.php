<!DOCTYPE html>
<html>
    <head>
        <link href = "styles/style_tab_student.css" rel = "stylesheet">
    </head>
    <body>
        <div class="tab-pane fade" id="student-tab">
            <hr><h4><i class="fa fa-address-book-o"></i> Данные об учениках</h4><hr>
            <form class="form-group" method="POST">
                <div class="row">
                    <div class="col col-lg-3">
                        <div class="form-group">
                            <label for="student_name">ФИО</label><br>
                            <label for="student_class" style="margin-top: 5px;">Класс</label><br>
                            <label for="student_gender" style="margin-top: 5px;">Пол</label><br>
                            <label for="student_nationality" style="margin-top: 5px;">Национальность</label><br>
                        </div>
                    </div>
                    <div class="col col-lg-5">
                        <div class="form-group margin_top">
                            <input type="text" id="student_name" name="name_of_student" style="width: 320px;"><br>
                            <select class="form-control" style="margin-top: 5px; width: 220px;" name="classes_id">
                                <?php
                                $cicle_cl=R::findAll('classes', 'ORDER BY num_of_class ASC');
                                foreach($cicle_cl as $c_c){
                                    echo '<option value="'.$c_c['id'].'">'.$c_c['num_of_class'].'</option>';
                                }
                                ?>
                            </select>

                            <select class="form-control" style="margin-top: 5px; width: 220px;" name="gender_of_student">
                                <option value="м">м</option>
                                <option value="ж">ж</option>
                            </select>
                            <input type="text" id="student_nationality" name="nationality_of_student" style="width: 220px; margin-top: 5px;">
                            <button class="btn btn-success" style="width: 220px; margin-top: 5px; float: left;" name="do_insert_student"><i class="fa fa-plus"></i> Добавить</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="width: 220px; margin-top: 5px; float: left;" name="do_remove_student"><i class="fa fa-share"></i> Перевод ученика</button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><i class="fa fa-user"></i> Перевод ученика в другой класс</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col col-lg-7">
                                                <select class="form-control" style="width: 250px;" name="students_id">
                                                    <?php
                                                    $cicle_st=R::findAll('students', 'ORDER BY name_of_student ASC');
                                                    foreach($cicle_st as $c_s){
                                                        echo '<option value="'.$c_s['id'].'">'.$c_s['name_of_student'].'</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col col-lg-5">
                                                <select class="form-control" style="width: 200px;" name="class_id">
                                                    <?php
                                                    $cicle_cl=R::findAll('classes', 'ORDER BY num_of_class ASC');
                                                    foreach($cicle_cl as $c_c){
                                                        echo '<option value="'.$c_c['id'].'">'.$c_c['num_of_class'].'</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <button class="btn btn-info" style="margin-top: 15px; margin-left: 15px;"><i class="fa fa-user"></i> Перевести</button>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-lf-offset-3">
                        <div class="form-group">
                            <div class="main-photo-preview">
                                <img class="thumbnail photo-preview" src="http://placehold.it/240x200" title="Preview photo"/>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="input-group-btn">
                                <div class="photoUpload btn btn-primary fake-shadow" style="width: 187px; border-radius: 4px;">
                                    <span><i class="fa fa-upload"></i> Загрузить</span>
                                    <input action="scripts/script_upload_picture.php" id="photo-id" name="photo_of_student" type="file" class="attachment_upload2" enctype="multipart/form-data">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr><h4><i class="fa fa-address-book"></i> Данные о родителях</h4><hr>
                <div class="row">
                    <div class="col col-lg-3">
                        <div class="form-group">
                            <label for="parent_name_male">ФИО отца</label><br>
                            <label for="parent_name_female">ФИО матери</label><br>
                            <label for="parent_phone_male" style="margin-top: 5px;">Телефон отца</label><br>
                            <label for="parent_phone_female" style="margin-top: 5px;">Телефон матери</label><br>
                            <label for="parent_email_male" style="margin-top: 5px;">email отца</label><br>
                            <label for="parent_email_female" style="margin-top: 5px;">email матери</label><br>
                        </div>
                    </div>
                    <div class="col col-lg-8">
                        <div class="form-group margin_top">
                            <input type="text" id="parent_name_male" name="name_of_parents_male" style="width: 320px;"><br>
                            <input type="text" id="parent_name_female" name="name_of_parents_female" style="width: 320px; margin-top: 5px;"><br>
                            <input type="text" id="parent_phone_male" name="phone_of_parents_male" style="width: 220px; margin-top: 5px;"><br>
                            <input type="text" id="parent_phone_female" name="phone_of_parents_female" style="width: 220px; margin-top: 5px;"><br>
                            <input type="text" id="parent_email_male" name="email_parents_male" style="width: 220px; margin-top: 5px;"><br>
                            <input type="text" id="parent_email_female" name="email_parents_female" style="width: 220px; margin-top: 5px;"><br>
                        </div>
                        <button class="btn btn-success" style="width: 220px; float: left;" name="do_insert_student"><i class="fa fa-plus"></i> Добавить</button>
                    </div>
                </div>
            </form>
            <br>
            <div data-spy="scroll" data-target=".table-example" style="margin-top: 15px;">
                <?php require "executes/exec_students.php"; ?>
            </div>
        </div>
    </body>
</html>