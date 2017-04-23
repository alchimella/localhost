<!DOCTYPE html>
<html>
    <head>
                                  
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
                            <label for="theacher_phone" style="margin-top: 10px;">Номер телефона</label><br>
                            <label for="theacher_subject" style="margin-top: 10px;">Предмет</label><br>
                            </div>
                        </div>
                    <div class="col col-lg-8">
                        <div class="form-group margin_top">
                            <input type="text" id="theacher_name" name="num_of_theacher" style="width: 360px;"><br>     
                            <input type="text" id="theacher_phone" name="phone_of_theacher" style="margin-top: 10px;"><br>
                            <input type="text" id="theacher_subject" name="subj_of_theacher" style="margin-top: 10px;"><br> 
                        </div>
                    </div>
                    </div>
                    <button class="btn btn-success" style="margin-left: 10px;" name="do_insert_teacher">Добавить</button>
                </form>
                <?php
                    //require "executes/exec_teachers.php"; 
                ?>
            </p>
        </div>
    </body>
</html>
                           