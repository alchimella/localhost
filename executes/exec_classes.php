<?php 
    $class = R::findAll( 'classes', 'ORDER BY num_of_class ASC');

    echo ('<table class="table table-fixed">
                <thead class="thead-inverse">
                    <tr> 
                        <th>#</th>
                        <th>Класс</th>
                    </tr>
                </thead> 
                <tbody>'
          
    );
    /* Цикл вывода данных из базы полей */
    foreach($class as $row){
        echo '<tr>';
        echo '<th class="col col-lg-2">'.$row['id'].'</th>';
        echo '<td>'.$row['num_of_class'].'</td>'; 
    }
    echo ('</tbody></table>');
?>