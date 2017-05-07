<?php 
 
    $shared_s = R::findAll( 'classes_students');
    echo ('<table class="table">
                <thead class="thead-inverse">
                    <tr> 
                        <th>#</th>
                        <th>ФИО Ученика</th>
                        <th>Пол</th>
                        <th>Класс</th>
                        <th>Нацианальность</th>
                    </tr>
                </thead> 
                <tbody>');
    /* Цикл вывода данных из базы полей */
    foreach($shared_s as $row){
        echo '<tr>';
        echo '<th class="col col-lg-1">'.$row['id'].'</th>';
        echo '<td>'.$row['name_of_student'].'</td>'; 
        echo '<td>'.$row['gender_of_student'].'</td>'; 
        echo '<td>'.$row['classes']['num_of_class'].'</td>';
        echo '<td>'.$row['nationality_of_student'].'</td>';
        
    }
    echo ('</tbody></table>');

    echo ('<table class="table">
                <thead class="thead-inverse">
                    <tr> 
                        <th>#</th>
                        <th>ФИО Родителей</th>
                        <th>Номер телефона</th>
                        <th>email</th>
                    </tr>
                </thead> 
                <tbody>');
    /* Цикл вывода данных из базы полей */
    foreach($shared_s as $row){
        echo '<tr>';
        echo '<th class="col col-lg-1">'.$row['id'].'</th>';
        echo '<td>'.$row['name_of_parents_male'].'</td>';
        echo '<td>'.$row['name_of_parents_female'].'</td>';
        echo '<td>'.$row['phone_of_parents_male'].'</td>';
        echo '<td>'.$row['phone_of_parents_female'].'</td>';
        echo '<td>'.$row['email_parents_male'].'</td>';
        echo '<td>'.$row['email_parents_female'].'</td>';
        
    }
    echo ('</tbody></table>');

?>