<?php 
    $post = R::findAll( 'posts');

    
    
    /* Цикл вывода данных из базы полей */
    foreach($post as $row){
        echo ('<div class="thumbnail">'  ); 
        echo '<img src="'.$row['pic_of_post'].'" alt="">';
        echo '<div class="caption">
                    <h4>Thumbnail label</h4>
                    <p>'.$row['num_of_post'].'</p>
                    <p>
              </div>';
        echo '<p>'.$row['data2'].'</p">';
              echo '<button class="btn btn-warning btn-xs">Button</button></p>';
        echo '</div>'; 
    }
    
?>