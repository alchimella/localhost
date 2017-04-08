<?php 
    require "moduls/modul_authorization.php"
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" context = "IE-edge">
        <meta name = "viewport" content = "width-device-width, initial-scale = 1">
        
        <!-- Bootstrap -->
        <link href = "bootstrap/css/bootstrap.css" rel = "stylesheet">
        <link href = "styles/style_authorization.css" rel = "stylesheet">
        <link href = "bootstrap/css/font-awesome.css" rel = "stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        
        <title>Авторизация</title>
    </head>
    <body>
       <div class="container">
           <div class="row">
              <div class="panel panel-primary">
                 <div class="panel-header">
                     <h3><i class="fa fa-sign-in"> Вход в систему</i></h3>
                 </div>
                 <hr class="colorgraph">
                 <form action="/admin_authorization.php" method="post" id="form_authorization">
                            <input type="text" name="login" value="<?php echo @$data['login']; ?>" placeholder="Логин">
                            <input type="password" name="password" placeholder="Пароль">
                            <br>
                            <hr class="colorgraph">
                        <p>
                            <button class="btn btn-success" type="submit" name="do_login">Войти</button>
                        </p>
                 </form>
              </div>
           </div>
       </div>
        
        
        <!-- jQuery -->
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src = "bootstrap/js/bootstrap.js"></script>
        <script src = "bootstrap/js/salvattore.min.js"></script>
        <script>$(function(){
                $('[data-toggle="tooltip"]').tooltip();
                $('[data-toggle="popover"]').popover();
            });
        </script>
        <script src="bootstrap/main.js"></script>
    </body>
</html>