<?php
    $data = $_POST;
    
    if(isset($data['do_insert_class'])){
        $errors = array();
        if(R::count('classes', 'num_of_class = ?', array($data['num_of_class'])) > 0 ){
            $errors[] = 'Такой класс уже существует!';
        }
        if(empty($errors)){
            $teacherBeans = R::findAll('teachers');
            $teacherBean = $teacherBeans[1];
            
            $studentBeans = R::findAll('students');
            $studentBean = $studentBeans[1];
            
            $class = R::dispense('classes');
            $class->num_of_class = $data['num_of_class'];
            //$class->sharedTeacher = array($teacherBean);
            //$class->ownStudent = array($studentBean);
            R::store($class); 
        }        
    }
?>