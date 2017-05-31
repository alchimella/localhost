<?php
    $shared_t = R::findAll( 'teachers', 'ORDER BY name_of_teacher ASC');

    /* Цикл вывода данных из базы полей */
    foreach($shared_t as $row){
        echo ('<div class="thumbnail" style="height: 170px;">');
        echo '<img class="thumbnail photo-preview pull-left" src="http://placehold.it/120x150">';
        echo '<div class="caption"><h4 style="margin-left: 140px; color: #337AB7;">'.$row['name_of_teacher'].'</h4></div>';
        echo '<p style="margin-left: 150px;">'.'Предмет: '.$row['subjects']['num_of_subject'].'</p>';
        echo '<p style="margin-left: 150px;">'.'Классный руководитель: '.$row['classes']['num_of_class'].'</p>';
        echo ('</div>');
        //echo '<td><p data-toggle="tooltip" title="Назначить учителю логин и пароль" data-placement="bottom"><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-1"><i class="fa fa-key"></i></button></p></td>';
    }
?>