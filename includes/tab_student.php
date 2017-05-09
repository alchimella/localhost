<!DOCTYPE html>
<html>
    <head>
        <link href = "styles/style_tab_student.css" rel = "stylesheet">
    </head>
    <body>
        <div class="tab-pane fade" id="student-tab">
          <hr>Данные об учениках<hr>
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
                          <form method="post" action="">
                              <select class="form-control" style="margin-top: 5px; width: 220px;">
                              <?php 
                                 $cicle_cl=R::findAll('classes', 'ORDER BY num_of_class ASC');
                                 foreach($cicle_cl as $c_c){
                                     echo '<option value="'.$c_c['id'].'">'.$c_c['num_of_class'].'</option>';
                                 }
                              ?>
                              </select>
                          </form>   

                          <input type="text" id="student_gender" name="gender_of_student" style="width: 220px; margin-top: 5px;"><br>
                          <input type="text" id="student_nationality" name="nationality_of_student" style="width: 220px; margin-top: 5px;">


                          <!-- Инициализация виджета "Bootstrap datetimepicker" -->
                          <div class="form-group">
                          <!-- Элемент HTML с id равным datetimepicker1 -->
                              <div class="input-group date" id="datetimepicker1" style="width: 220px; margin-top: 5px;">
                                  <input type="text" class="form-control" />
                                  <span class="input-group-addon">
                                  <span class="fa fa-calendar"></span> 
                                  </span> 
                              </div>

                          </div>  
                          <button class="btn btn-success" style="width: 220px; float: left;" name="do_insert_student">Добавить</button> 
                      </div>
                   </div>

                   <div class="col col-lg-3 col-lf-offset-3">
                        <!--<img src="http://placehold.it/240x200" alt="" style="border: 5px outset #337AB7;">-->
                        <div class="form-group">
                            <div class="main-photo-preview">
                                <img class="thumbnail photo-preview" src="http://placehold.it/240x200" title="Preview photo"/>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="input-group-btn">
                                <div class="photoUpload btn btn-primary fake-shadow" style="width: 187px;">
                                    <span><i class="fa fa-upload"></i> Загрузить</span>
                                    <input action="scripts/script_upload_picture.php" id="photo-id" name="photo_of_student" type="file" class="attachment_upload2" enctype="multipart/form-data">
                                </div>
                            </div>
                        </div>
                        <input id="fakeUploadPhoto" class="form-control fake-shadow" placeholder="Выберите фото" style="margin-top: 15px;" readonly>
                    </div>

               </div> 
               <hr>Данные о родителях<hr>
               <div class="row">
                  <div class="col col-lg-3">
                      <div class="form-group">
                          <label for="parent_name">ФИО родителей</label><br>
                          <label for="parent_phone" style="margin-top: 5px;">Телефон</label><br>
                          <label for="parent_email" style="margin-top: 5px;">email родителей</label><br>
                      </div>
                  </div>
                  <div class="col col-lg-8">
                      <div class="form-group margin_top">
                          <input type="text" id="parent_name" name="name_of_parent" style="width: 320px;"><br>   
                          <input type="text" id="parent_phone" name="phone_of_parent" style="width: 220px; margin-top: 5px;"><br>
                          <input type="text" id="parent_email" name="email_of_parent" style="width: 220px; margin-top: 5px;"><br>
                      </div>
                      <button class="btn btn-success" style="width: 220px; float: left;" name="do_insert_student">Добавить</button> 
                   </div>
               </div>                
           </form>
           <br>
           <?php require "executes/exec_students.php"; ?>
        </div>
    </body>
</html>