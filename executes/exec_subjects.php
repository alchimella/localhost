<?php 
    $subject = R::findAll( 'subjects', 'ORDER BY num_of_subject ASC');

    echo ('<table class="table table-fixed">
                <thead class="thead-inverse" >
                    <tr>
                        <th class="col-lg-12">Предмет</th>
                    </tr>
                </thead> 
                <tbody>'
          
    );
    /* Цикл вывода данных из базы полей */
    foreach($subject as $row){
        echo '<tr>';
        echo '<td class="col-lg-12">'.$row['num_of_subject'].'</td>';
    }
    echo ('</tbody></table>');
?>