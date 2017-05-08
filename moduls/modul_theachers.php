<?php
    $data = $_POST;

    if(isset($data['do_insert_teacher'])){
        $errors = array();
        if(R::count('teachers', 'name_of_theacher = ?', array($data['name_of_theacher'])) > 0 ){
            $errors[] = 'Такой учитель уже существует!';
        }
        if(!empty($errors)){
            $teacher = R::dispense('teachers');
            
            $teacher->name_of_theacher = $data['name_of_theacher'];
            $teacher->phone_of_theacher = $data['phone_of_theacher'];
            $teacher->class_of_theacher = $data['class_of_theacher'];
            $teacher->subj_of_theacher = $data['subj_of_theacher'];
            $teacher->photo_of_theacher = $data['photo_of_theacher'];
            
            R::store($teacher); 
        }        
    }
    
?>