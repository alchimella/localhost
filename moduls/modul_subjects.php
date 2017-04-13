<?php
    $data = $_POST;
    
    if(isset($data['do_insert_subj'])){
        $errors = array();
        if(R::count('subjects', 'num_of_subject = ?', array($data['num_of_subject'])) > 0 ){
            $errors[] = 'Такой предмет уже существует!';
        }
        if(empty($errors)){
            $subject = R::dispense('subjects');
            $subject->num_of_subject = $data['num_of_subject'];
            R::store($subject); 
        }        
    }
    
?>