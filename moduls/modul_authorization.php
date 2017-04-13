<?php 
    require "includes/db.php";

    $data = $_POST;
    if(isset($data['do_login'])){
        $errors = array();
        $user = R::findOne('users', 'login = ?', array($data['login']));
        if($user){
            // логин существует
            if(password_verify($data['password'], $user->password)){
                $_SESSION['logget_user'] = $user;
                echo '<div class="alert alert-success alert-dismissible">Вы успешно авторизированы! Можете перейти на <a href="index.php">главную</a> страницу <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times fa-fw"></i> </div>';
            }else{
                $errors[] = 'Не верно введен пароль!';
            }
        }else{
            $errors[] = 'Пользователь с таким логином не найден!';
        }
        
        if(!empty($errors)){
            echo '<div class="alert alert-danger">'.array_shift($errors).' <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times fa-fw"></i> </div>';
        }
    }
?>