<?php 
    require "includes/db.php";

    if(isset($_SESSION['logget_user'])):
?> Авторизован <br>
Привет, <?php echo $_SESSION['logget_user']->login; ?>
<hr>
<a href="/logout.php">Выйти</a>
<?php 
    else:
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
    </head>
    <body>
        <a href="admin_authorization.php">Авторизация</a><br>
        <a href="registration.php">Регистрация</a>
    <?php endif; ?>
    </body>
</html>
