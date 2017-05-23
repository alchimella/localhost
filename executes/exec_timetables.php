<?php
    $timetable = R::findAll( 'timetables');

    echo ('<table class="table table-fixed">
                    <thead class="thead-default">
                        <tr>
                            <th class="col-lg-2">День недели</th>
                            <th class="col-lg-1">Время</th>
                            <th class="col-lg-2">Смена</th>
                            <th class="col-lg-2">Предмет</th>
                            <th class="col-lg-1">Класс</th>
                            <th class="col-lg-3">Учитель</th>
                            <th class="col-lg-1">Кабинет</th>
                        </tr>
                    </thead> 
                    <tbody>'

    );
    /* Цикл вывода данных из базы полей */
    foreach($timetable as $row){
        echo '<tr>';
        echo '<td class="col-lg-2">'.$row['select_week'].'</td>';
        echo '<td class="col-lg-1">'.$row['select_time'].'</td>';
        echo '<td class="col-lg-2">'.$row['select_change'].'</td>';
        echo '<td class="col-lg-2">'.$row['select_subject'].'</td>';
        echo '<td class="col-lg-1">'.$row['classes']['num_of_class'].'</td>';
        echo '<td class="col-lg-3">'.$row['select_teacher'].'</td>';
        echo '<td class="col-lg-1">'.$row['select_room'].'</td></tr>';
    }
    echo ('</tbody></table>');

?>