<?php
    
    $data = $_POST;
    if(isset($data['do_insert_posts'])){
        $errors = array();
        if(R::count('posts', 'num_of_post = ?', array($data['num_of_post'])) > 0 ){
            $errors[] = 'Такой пост уже существует!';
        }
        if(empty($errors)){
            $post = R::dispense('posts');
            $post->title_of_post = $data['title_of_post'];
            $post->num_of_post = $data['num_of_post'];
            //$post->name_of_pic = $data['name_of_pic'];
            $post->image_post = $data['image_post'];
            $post->registration_date = $data['registration_date'];
            R::store($post); 
        }        
    }
    //header("Content-type: image/*");    
    
?>