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
        echo '<td class="col-lg-8">'.$row['num_of_subject'].'</td>';
        echo '<td class="col-lg-2">
                <p data-placement="bottom" data-toggle="tooltip" title="Редактировать">
                    <button class="btn btn-primary btn-xs" data-title="Редактировать" data-toggle="modal" data-target="#edit">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                </p>
                </td>
                <td class="col-lg-2">
                    <p data-placement="bottom" data-toggle="tooltip" title="Удалить">
                        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>
                </p>
                </td>
                </tr>';
    }
    echo ('</tbody></table>');
?>