<?php 
    $subject = R::findAll( 'subjects', 'ORDER BY num_of_subject ASC');

    echo ('<table class="table table-fixed" style="width: 300px;">
                <thead class="thead-inverse" >
                    <tr>
                        <th style="width: 300px;">Предмет</th>
                    </tr>
                </thead> 
                <tbody>'
          
    );
    /* Цикл вывода данных из базы полей */
    foreach($subject as $row){
        echo '<tr>';
        echo '<th>'.$row['num_of_subject'].'</th>'; 
    }
    echo ('</tbody></table>');
?>