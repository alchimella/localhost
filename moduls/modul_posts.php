<?php
    
    $data = $_POST;
    if(isset($data['do_insert_posts'])){
        $errors = array();
        if(R::count('posts', 'num_of_post = ?', array($data['num_of_post'])) > 0 ){
            $errors[] = 'Такой пост уже существует!';
        }
        if(empty($errors)){
            $post = R::dispense('posts');
            $post->num_of_post = $data['num_of_post'];
            $post->name_of_pic = $data['name_of_pic'];
            $post->pic_of_post = $data['pic_of_post'];
            $post->data2 = $data['data2'];
            R::store($post); 
        }        
    }
    //header("Content-type: image/*");    
    
?>