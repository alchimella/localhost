<?php
    $thcl = R::findAll( 'teachersclass', 'ORDER BY classes_id ASC');

    if(isset($_POST['teacher_id'])){
        echo ('<table class="table table-fixed">
                <thead class="thead-default">
                    <tr>
                        <th class="col-lg-12">Класс</th>
                    </tr>
                </thead> 
                <tbody>'

        );
        /* Цикл вывода данных из базы полей */
        foreach($thcl as $row){
            echo '<tr>';
            echo '<td class="col-lg-12">'.$row['classes']['num_of_class'].'</td>';
        }
        echo ('</tbody></table>');
    }

?>