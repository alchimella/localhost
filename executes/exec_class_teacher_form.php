<?php
    $student = R::findAll( 'students', 'ORDER BY name_of_student ASC');


    echo ('<table class="table table-fixed">
                    <thead class="thead-inverse">
                        <tr>
                            <th class="col-lg-12">ФИО Ученика</th>
                        </tr>
                    </thead> 
                    <tbody>'

    );
    /* Цикл вывода данных из базы полей */
    foreach($student as $row){
        echo '<tr>';
        echo '<td class="col-lg-12">'.$row['name_of_student'].'</td>';
    }
    echo ('</tbody></table>');
?>