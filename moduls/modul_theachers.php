<?php
    $data = $_POST;

    if(isset($data['do_insert_teacher'])){
        $errors = array();
        if(R::count('teachers', 'name_of_teacher = ?', array($data['name_of_teacher'])) > 0 ){
            $errors[] = 'Такой учитель уже существует!';
        }
        if(!empty($errors)){
            $teacher = R::dispense('teachers');
            
            $teacher->name_of_teacher = $data['name_of_teacher'];
            $teacher->phone_of_teacher = $data['phone_of_teacher'];;
            $teacher->classes_id = $data['classes_id'];
            $teacher->subjects_id = $data['subjects_id'];
            $teacher->photo_of_theacher = $data['photo_of_theacher'];
            
            R::store($teacher); 
        }        
    }
    
?>