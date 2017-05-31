<?php 
    $post = R::findAll( 'posts');
    
    /* Цикл вывода данных из базы полей */
    foreach($post as $row){
        echo '<div class="thumbnail">';
        echo '<img src="'.$row['image_post'].'" alt=""><i class="fa fa-calendar pull-right"> '.$row['registration_date'].'
                            </i>';
        echo '<div class="caption">
                    <h3>'.$row['title_of_post'].'</h3>
                    <p>'.$row['num_of_post'].'</p>
              </div>';
        echo '</div>'; 
    }
    
?>