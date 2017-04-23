<?php
if (!empty($_FILES['uploadfile']['name']))
{
    $uploaddir='files/';
    $uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);
//  echo $uploadfile.'<br>';

    if (!is_uploaded_file($_FILES['uploadfile']['tmp_name']))
    {
        echo 'ошибка передачи файла';
    }
    else
    {

        if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfile))
        {
            $tes = "INSERT INTO post VALUE ('".$uploadfile."')";
//          echo $tes.'<br>';
            $res = mysql_query($tes);
            if($res) echo "Файл упешно загружен";
            else echo "Путь не добавлен в базу данных, но файл загружен ".mysql_error();
        }
        else echo "Файл не загружен, ";
    }
}
?>


<!DOCTYPE html>
<html>
<title>Загрузка файла</title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<body>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="uploadfile" value="Обзор">
<input type="submit" value="ok">
</body>
</html>




