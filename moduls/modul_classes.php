<?php
    $data = $_POST;
    
    if(isset($data['do_insert_class'])){
        $errors = array();
        if(R::count('classes', 'num_of_class = ?', array($data['num_of_class'])) > 0 ){
            $errors[] = 'Такой класс уже существует!';
        }
        if(empty($errors)){
            $class = R::dispense('classes');
            $class->num_of_class = $data['num_of_class'];
            R::store($class); 
        }        
    }
    
?>