<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div class="tab-pane fade" id="registration-tab">
            <hr><h4><i class="fa fa-key"></i> Регистрация учителя</h4><hr>
            <form class="form-group" method="POST">
                <div class="row">
                    <div class="col col-lg-5">
                        <select class="form-control" style="margin-left: 10px; margin-top: 5px; width: 320px;" name="teacher_id">
                            <?php
                            $cicle_cl=R::findAll('teachers', 'ORDER BY name_of_teacher ASC');
                            foreach($cicle_cl as $c_c){
                                echo '<option value="'.$c_c['id'].'">'.$c_c['name_of_teacher'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col col-lg-7">
                        <div class="col col-lg-5">
                            <label for="teacher_login">Логин учителя</label><br>
                            <label for="teacher_pass">Пароль учителя</label><br>
                            <label for="teacher_pass2">Повторите пароль</label>
                        </div>
                        <div class="col col-lg-7">
                            <input type="text" id="teacher_login" name="login" style="width: 240px; margin-top: 5px;">
                            <input type="password" id="teacher_pass" name="password" style="width: 240px; margin-top: 5px;">
                            <input type="password" id="teacher_pass2" name="password2" style="width: 240px; margin-top: 5px;">
                            <button class="btn btn-success" name="do_signup" style="width: 240px; margin-top: 5px;">Зарегистрировать</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>