<?php
    $timetable = R::findAll( 'timetables');

    echo ('<table class="table table-fixed table-bordered">
                        <thead class="thead-default">
                            <tr>
                                <th style="text-align: center;">Время</th>
                                <th class="col-lg-2" style="text-align: center;">Понедельник</th>
                                <th class="col-lg-2" style="text-align: center;">Вторник</th>
                                <th class="col-lg-2" style="text-align: center;">Среда</th>
                                <th class="col-lg-2" style="text-align: center;">Четверг</th>
                                <th class="col-lg-2" style="text-align: center;">Пятница</th>
                                <th class="col-lg-2" style="text-align: center;">Суббота</th>
                            </tr>
                        </thead> 
                        <tbody class>'

    );
/*echo '<td>8:00-8:45</td>';
echo '<td>8:50-9:35</td>';
echo '<td>9:40–10:25</td>';
echo '<td>10:40–11:25</td>';
echo '<td>11:30–12:15</td>';
echo '<td>12:20–13:05</td>';
echo '<td>13:30–14:15</td>';
echo '<td>14:20–15:05</td>';
echo '<td>15:15–16:00</td>';
echo '<td>16:10–16:55</td>';
echo '<td>17:00–17:45</td>';
echo '<td>17:50–18:35</td>';*/
    /* Цикл вывода данных из базы полей */
    foreach($timetable as $row){
        echo '<tr>';

        echo '<td>'.$row['select_time'].'</td>';
        if ($row['select_week'] == 'Понедельник') {
            echo '<td class="col-lg-2" style="text-align: center; vertical-align: middle;">'.$row['select_subject'].' (к - '.$row['select_room'].')</td>';
        }
        if ($row['select_week'] == 'Вторник') {
            echo '<td></td><td class="col-lg-2" style="text-align: center; vertical-align: middle;">'.$row['select_subject'].' (к - '.$row['select_room'].')</td>';
        }
        if ($row['select_week'] == 'Среда') {
            echo '<td></td><td></td><td class="col-lg-2" style="text-align: center; vertical-align: middle;">'.$row['select_subject'].' (к - '.$row['select_room'].')</td>';
        }
        if ($row['select_week'] == 'Четверг') {
            echo '<td></td><td></td><td></td><td class="col-lg-2" style="text-align: center; vertical-align: middle;">'.$row['select_subject'].' (к - '.$row['select_room'].')</td>';
        }
        if ($row['select_week'] == 'Пятница') {
            echo '<td></td><td></td><td></td><td></td><td class="col-lg-2" style="text-align: center; vertical-align: middle;">'.$row['select_subject'].' (к - '.$row['select_room'].')</td>';
        }
        if ($row['select_week'] == 'Суббота') {
            echo '<td></td><td></td><td></td><td></td><td></td><td class="col-lg-2" style="text-align: center; vertical-align: middle;">'.$row['select_subject'].' (к - '.$row['select_room'].')</td>';
        }
        echo '</tr>';
        //echo '<td class="col-lg-1">'.$row['classes']['num_of_class'].'</td>';
        //echo '<td class="col-lg-3">'.$row['select_teacher'].'</td>';
        //echo '<td class="col-lg-1">'.$row['select_room'].'</td></tr>';
    }
    echo ('</tbody></table>');

?>