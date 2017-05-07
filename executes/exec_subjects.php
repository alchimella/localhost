<?php 
    $subject = R::findAll( 'subjects', 'ORDER BY num_of_subject ASC');

    echo ('<table class="table">
                <thead class="thead-inverse">
                    <tr> 
                        <th>#</th>
                        <th>Предмет</th>
                    </tr>
                </thead> 
                <tbody>'
          
    );
    /* Цикл вывода данных из базы полей */
    foreach($subject as $row){
        echo '<tr>';
        echo '<th class="col col-lg-2">'.$row['id'].'</th>';
        echo '<td>'.$row['num_of_subject'].'</td>'; 
    }
    echo ('</tbody></table>');
?>