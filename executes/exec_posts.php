<?php 
    $post = R::findAll( 'events');

    
    
    /* Цикл вывода данных из базы полей */
    foreach($post as $row){
        echo '<div class="thumbnail">';
        echo '<img src="'.$row['image_event'].'" alt="">';
        echo '<div class="caption">
                    <h4>'.$row['title_of_event'].'</h4>
                    <p>'.$row['num_of_event'].'</p>
                    <p>
              </div>';
        echo '<p>'.$row['data3'].'</p">';
              echo '<button class="btn btn-warning btn-xs">Button</button></p>';
        echo '</div>'; 
    }
    
?>