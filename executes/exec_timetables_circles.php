<?php
    $timetable = R::findAll( 'circlestimetables');

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
        echo '<td class="col-lg-2">'.$row['select_week_circle'].'</td>';
        echo '<td class="col-lg-1">'.$row['select_time_circle'].'</td>';
        echo '<td class="col-lg-2">'.$row['select_change_circle'].'</td>';
        echo '<td class="col-lg-2">'.$row['select_subject_circle'].'</td>';
        echo '<td class="col-lg-1">'.$row['select_class_circle'].'</td>';
        echo '<td class="col-lg-3">'.$row['select_teacher_circle'].'</td>';
        echo '<td class="col-lg-1">'.$row['select_room_circle'].'</td></tr>';
    }
    echo ('</tbody></table>');

?>