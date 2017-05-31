<?php 
 
    $shared_t = R::findAll( 'teachers', 'ORDER BY name_of_teacher ASC');
    echo ('<table class="table ">
                <thead class="thead-inverse">
                    <tr> 
                        <th class="col-lg-2"></th>
                        <th class="col-lg-4">ФИО Учителя</th>
                        <th class="col-lg-2">Номер телефона</th>
                        <th class="col-lg-2">Предмет</th>
                        <th class="col-lg-2">Классный руководитель</th>
                    </tr>
                </thead> 
                <tbody>');
    /* Цикл вывода данных из базы полей */
    foreach($shared_t as $row){
        echo '<tr>';
        echo '<td class="col-lg-2"><img class="thumbnail photo-preview" src="http://placehold.it/90x90" style="margin-top: -5px; border-radius: 50%;"></td>';
        echo '<td class="col-lg-4">'.$row['name_of_teacher'].'</td>';
        echo '<td class="col-lg-2">'.$row['phone_of_teacher'].'</td>';
        echo '<td class="col-lg-2">'.$row['subjects']['num_of_subject'].'</td>';
        echo '<td class="col-lg-2">'.$row['classes']['num_of_class'].'</td>';
        //echo '<td><p data-toggle="tooltip" title="Назначить учителю логин и пароль" data-placement="bottom"><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-1"><i class="fa fa-key"></i></button></p></td>';
    }
    echo ('</tbody></table>');

?>