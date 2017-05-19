<?php
    /*$data = $_POST;

    if(isset($data['do_signup'])){
        // Здесь регистрация

        $errors = array();
        if(trim($data['login']) == ''){
            $errors[] = 'Введите логин';
        }

        if($data['password'] == ''){
            $errors[] = 'Введите пароль';
        }

        if($data['email'] == ''){
            $errors[] = 'Введите email';
        }

        if(R::count('users', 'login = ?', array($data["login"])) > 0 ){
            $errors[] = 'Пользователь с таким логином уже существует';
        }

        if(empty($errors)){
            $user = R::dispense('users');
            $user->login_of_theacher = $data['login'];
            $user->theacher_email = $data['email'];
            $user->password_of_theacher = password_hash($data['password'], PASSWORD_DEFAULT);
            R::store($user);
            echo '<div style="color: green;">Вы успешно зарегестрированы!</div><hr>';

        }else{
            echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
        }
    }*/
?>