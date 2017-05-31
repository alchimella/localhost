<?php 
    require "includes/db.php";

    $data = $_POST;
    $user_type = ['type'];
    if(isset($data['do_login'])){
        $errors = array();
        $user = R::findOne('users', 'login = ?', array($data['login']));
        if($user){
            // логин существует
            if(password_verify($data['password'], $user->password)){
                $_SESSION['logged_user'] = $user;
            }else{
                $errors[] = 'Не верно введен пароль!';
            }
        }else{
            $errors[] = 'Пользователь с таким логином не найден!';
        }
        
        if(!empty($errors)){
            echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
        }

        if ($user_type == "0") {
            $redirect_url = "/admin_menu.php";
        }
        else{
            $redirect_url = "/teacher_menu.php";
        }

        header('HTTP/1.1 200 OK');
        header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);
        exit();
    }
?>