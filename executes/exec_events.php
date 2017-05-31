<?php
$event = R::findAll( 'events');

/* Цикл вывода данных из базы полей */
foreach($event as $row){
    echo '<div class="thumbnail">';
    echo '<img src="'.$row['image_event'].'" alt=""><i class="fa fa-calendar pull-right"> '.$row['registration_date'].'
                            </i>';
    echo '<div class="caption">
                    <h3>'.$row['title_of_event'].'</h3>
                    <p>'.$row['num_of_event'].'</p>
              </div>';
    echo '</div>';
}
?>