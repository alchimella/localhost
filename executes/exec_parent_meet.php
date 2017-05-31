<?php
    $meet = R::findAll( 'meetings');

    echo ('<table class="table table-fixed">
                    <thead class="thead-inverse">
                        <tr>
                            <th class="col-lg-12">Cобрания</th>
                        </tr>
                    </thead> 
                    <tbody>'

    );
    /* Цикл вывода данных из базы полей */
    foreach($meet as $row){
        echo '<tr>';
        echo '<th class="col-lg-12">Дата собрания '.$row['registration_date'].'</th>';
        echo '<td class="col-lg-3">'.$row['classes']['num_of_class'].'</td>';
        echo '<td class="col-lg-6">'.$row['theme_meeting'].'</td>';
        echo '<td class="col-lg-3">'.$row['registration_time'].'</td>';
    }
    echo ('</tbody></table>');
?>