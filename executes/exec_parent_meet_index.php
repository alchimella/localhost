<?php
    $meet = R::findAll( 'meetings');

    echo ('<table class="table">
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
        echo '<td>Дата собрания '.$row['registration_date'].'</td>';
        echo '<td>'.$row['classes']['num_of_class'].'</td>';
        echo '<td>'.$row['theme_meeting'].'</td>';
        echo '<td>'.$row['registration_time'].'</td></tr>';
    }
    echo ('</tbody></table>');
?>