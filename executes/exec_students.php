<?php 
 
    $shared_s = R::findAll( 'classes_students');
    echo ('<table class="table">
                <thead class="thead-inverse">
                    <tr>
                        <th>ФИО Ученика</th>
                        <th>Класс</th>
                        <th>Пол</th>
                        <th>Нац-ть</th>
                        <th>ФИО Родителей</th>
                        <th>Телефон</th>
                        <th>email</th>
                    </tr>
                </thead> 
                <tbody>');
    /* Цикл вывода данных из базы полей */
    foreach($shared_s as $row){
        echo '<tr>';
        echo '<td>'.$row['name_of_student'].'</td>';
        echo '<td>'.$row['classes']['num_of_class'].'</td>';
        echo '<td>'.$row['gender_of_student'].'</td>';
        echo '<td>'.$row['nationality_of_student'].'</td>';
        echo '<td>'.$row['name_of_parents_male'].'<hr>'.$row['name_of_parents_female'].'</td>';
        echo '<td>'.$row['phone_of_parents_male'].'<hr>'.$row['phone_of_parents_female'].'</td>';
        echo '<td>'.$row['email_parents_male'].'<hr>'.$row['email_parents_female'].'</td>';
    }
    echo ('</tbody></table>');
?>