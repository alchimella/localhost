<?php
    $data = $_POST;

    if(isset($data['do_signup'])){
        $errors = array();
        if(trim($data['login']) == ''){
            $errors[] = 'Введите логин';
        }

        if($data['password'] == ''){
            $errors[] = 'Введите пароль';
        }

        if(R::count('users', 'login = ?', array($data["login"])) > 0 ){
            $errors[] = 'Пользователь с таким логином уже существует';
        }

        if(R::count('users', 'teacher_id = ?', array($data['teacher_id'])) > 0){
            $errors[] = 'Данный учитель уже имеет логин и пароль!';
        }

        if(empty($errors)){
            $teacherBeans = R::findAll('teachers');
            $teacherBean = $teacherBeans[1];

            $user = R::dispense('users');
            $user->login = $data['login'];
            $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
            $user->teacher_id = $data['teacher_id'];
            $user->type = 1;
            //$user->ownTeacher = array($teacherBean);
            R::store($user);
        }else{
            //echo '<div style="color: red;">'.$errors.'</div><hr>';
        }
    }
?>