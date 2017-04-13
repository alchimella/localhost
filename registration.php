<?php 
    require "includes/db.php";

    $data = $_POST;

    if(isset($data['do_signup'])){
        // Здесь регистрация
        
        $errors = array();
        if(trim($data['login']) == ''){
            $errors[] = 'Введите логин';
        }
        if(trim($data['email']) == ''){
            $errors[] = 'Введите email';
        }
        if($data['password'] == ''){
            $errors[] = 'Введите пароль';
        }
        if($data['password2'] != $data['password']){
            $errors[] = 'Повторный пароль введен не верно!';
        }
        
        if(R::count('users', 'login = ?', array($data["login"])) > 0 ){
            $errors[] = 'Пользователь с таким логином уже существует';
        }
        
        if(R::count('users', 'email = ?', array($data['email'])) > 0 ){
            $errors[] = 'Пользователь с таким email уже существует';
        }
        
        if(empty($errors)){
            $user = R::dispense('users');
            $user->login = $data['login'];
            $user->email = $data['email'];
            $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
            R::store($user);
            echo '<div style="color: green;">Вы успешно зарегестрированы!</div><hr>';
            
        }else{
            echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="/registration.php" method="post">
            <p>
               <p><strong>Ваш логин</strong>:</p>
                <input type="text" name="login" value="<?php echo @$data['login']; ?>">
            </p>
            <p>
               <p><strong>Ваш Email</strong>:</p>
                <input type="email" name="email" value="<?php echo @$data['email']; ?>">
            </p>
            <p>
               <p><strong>Ваш пароль</strong>:</p>
                <input type="password" name="password">
            </p>
            <p>
               <p><strong>Повторите пароль</strong>:</p>
                <input type="password" name="password2">
            </p>
            <p>
                <button type="submit" name="do_signup">Зарегестрироваться</button>
            </p>
        </form>
    </body>
</html>