<?php
    $data = $_POST;

    if(isset($data['do_insert_subj'])){
        $errors = array();
        if(R::count('subjects', 'num_of_subject = ?', array($data['num_of_subject'])) > 0 ){
            $errors[] = 'Такой класс уже существует!';
        }
        if(empty($errors)){
            $teacherBeans = R::findAll('teachers');
            $teacherBean = $teacherBeans[1];
            
            $subject = R::dispense('subjects');
            $subject->num_of_subject = $data['num_of_subject'];
            //$subject->ownTeacher = array($teacherBean);
            R::store($subject); 
        }        
    }
    
?>