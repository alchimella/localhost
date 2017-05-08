<?php
    $uploaddir = '/var/www/uploads/';
    $uploadfile = $uploaddir . basename($_FILES['logo']['name']);

    if (move_uploaded_file($_FILES['logo']['tmp_name'], $uploadfile)) {
        echo "Файл корректен и был успешно загружен.\n";
    } else {
        echo "Возможная атака с помощью файловой загрузки!\n";
    }
?>