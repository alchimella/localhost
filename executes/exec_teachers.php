<?php 
    $teacher = R::findAll( 'teachers');

    echo ('<table class="table">
                <thead class="thead-inverse">
                    <tr> 
                        <th>#</th>
                        <th>ФИО Учителя</th>
                        <th>Номер телефона</th>
                        <th>Предмет</th>
                        <th>Класс</th>
                    </tr>
                </thead> 
                <tbody>'
          
    );
    /* Цикл вывода данных из базы полей */
    foreach($teacher as $row){
        echo '<tr>';
        echo '<th class="col col-lg-2">'.$row['id'].'</th>';
        echo '<td>'.$row['num_of_teacher'].'</td>'; 
        echo '<td>'.$row['phone_of_teacher'].'</td>'; 
        echo '<td>'.$row['subj_of_teacher'].'</td>'; 
        echo '<td>'.$row['class_of_teacher'].'</td>'; 
    }
    echo ('</tbody></table>');
?>