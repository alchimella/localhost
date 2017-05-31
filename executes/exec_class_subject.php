<?php
    $thcl = R::findAll( 'classsubjects', 'ORDER BY classes_id ASC');

    echo ('<table class="table table-fixed">
                        <thead class="thead-default">
                            <tr>
                                <th class="col-lg-12">Предмет</th>
                            </tr>
                        </thead> 
                        <tbody>'

    );
    /* Цикл вывода данных из базы полей */
    foreach($thcl as $row){
        echo '<tr>';
        echo '<td class="col-lg-12">'.$row['subjects']['num_of_subject'].'</td>';
    }
    echo ('</tbody></table>');
?>