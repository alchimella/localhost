<?php 
    $class = R::findAll( 'classes', 'ORDER BY num_of_class ASC');

    echo ('<table class="table table-fixed" style="width: 300px;">
                <thead class="thead-inverse">
                    <tr>
                        <th style="width: 300px;">Класс</th>
                    </tr>
                </thead> 
                <tbody>'
          
    );
    /* Цикл вывода данных из базы полей */
    foreach($class as $row){
        echo '<tr>';
        echo '<th>'.$row['num_of_class'].'</th>'; 
    }
    echo ('</tbody></table>');
?>