<?php 
 
    $shared_t = R::findAll( 'teachers', 'ORDER BY name_of_teacher ASC');
    echo ('<table class="table">
                <thead class="thead-inverse">
                    <tr> 
                        <th></th>
                        <th>ФИО Учителя</th>
                        <th>Номер телефона</th>
                        <th>Предмет</th>
                        <th class="col-lg-2">Классный руководитель</th>
                        <th></th>
                    </tr>
                </thead> 
                <tbody>');
    /* Цикл вывода данных из базы полей */
    foreach($shared_t as $row){
        echo '<tr>';
        echo '<th><img class="thumbnail photo-preview" src="http://placehold.it/70x70" style="margin-top: -5px; border-radius: 50%;"></th>';
        echo '<td>'.$row['name_of_teacher'].'</td>'; 
        echo '<td>'.$row['phone_of_teacher'].'</td>'; 
        echo '<td>'.$row['subjects']['num_of_subject'].'</td>';
        echo '<td>'.$row['classes']['num_of_class'].'</td>';
        //echo '<td><p data-toggle="tooltip" title="Назначить учителю логин и пароль" data-placement="bottom"><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-1"><i class="fa fa-key"></i></button></p></td>';
    }
    echo ('</tbody></table>');

?>