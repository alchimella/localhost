<?php
$homework = R::findAll( 'homework');

echo ('<table class="table table-bordered">
                <thead class="thead-inverse">
                    <tr>
                        <th class="col-lg-3" style="text-align: center; vertical-align: middle;"><Предмет></th>
                        <th class="col-lg-7" style="text-align: center; vertical-align: middle;">Задание</th>
                        <th class="col-lg-2" style="text-align: center; vertical-align: middle;">Класс</th>
                    </tr>
                </thead> 
                <tbody>'

);
/* Цикл вывода данных из базы полей */
foreach($homework as $row){
    echo '<tr>';
    echo '<td class="col-lg-3" style="text-align: center; vertical-align: middle;">'.$row['week'].' / '.$row['registration_date'].'</td>';
    echo '<td class="col-lg-7" style="text-align: center; vertical-align: middle;">'.$row['homework'].'</td>';
    echo '<td class="col-lg-2" style="text-align: center; vertical-align: middle;">'.$row['classes']['num_of_class'].'</td></tr>';
}
echo ('</tbody></table>');
?>