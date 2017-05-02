<?php 
    $shared_t = R::findAll( 'teachers');
    echo ('<table class="table">
                <thead class="thead-inverse">
                    <tr> 
                        <th>#</th>
                        <th>ФИО Учителя</th>
                        <th>Номер телефона</th>
                        <th>Предмет</th>
                        <th>Класс</th>
                    </tr>
                </thead> 
                <tbody>'
          
    );
    /* Цикл вывода данных из базы полей */
    foreach($shared_t as $row){
        echo '<tr>';
        echo '<th class="col col-lg-1">'.$row['id'].'</th>';
        echo '<td>'.$row['num_of_teacher'].'</td>'; 
        echo '<td>'.$row['phone_of_teacher'].'</td>'; 
        echo '<td>'.$row['subjects']['num_of_subject'].'</td>'; 
        echo '<td>'.$row['classes']['num_of_class'].'</td>'; 
    }
    echo ('</tbody></table>');

    $shared = R::findAll( 'template_workers');

    echo ('<table class="table">
                <thead class="thead-inverse">
                    <tr> 
                        <th>#</th>
                        <th>Phrase</th>
                        <th>Name</th>
                    </tr>
                </thead> 
                <tbody>');
      foreach($shared as $row){
        echo '<tr>';
        echo '<th class="col col-lg-1">'.$row['id'].'</th>';
        echo '<td>'.$row['template']['phrase'].'</td>'; 
        echo '<td>'.$row['workers']['name'].'</td>'; 
    }
    echo ('</tbody></table>');

?>