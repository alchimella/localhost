<?php
    $class = R::findAll( 'classes', 'ORDER BY num_of_class ASC');

    echo ('<table class="table table-fixed">
                <thead class="thead-inverse">
                    <tr>
                        <th class="col-lg-12">Класс</th>
                    </tr>
                </thead> 
                <tbody>'
          
    );
    /* Цикл вывода данных из базы полей */
    foreach($class as $row){
        echo '<tr>';
        echo '<td class="col-lg-12">'.$row['num_of_class'].'</td>';
    }
    echo ('</tbody></table>');
?>