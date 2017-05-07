<?php
    $data = $_POST;
    
    if(isset($data['do_insert_student'])){
        $errors = array();
        if(R::count('classes_students', 'name_of_student = ?', array($data['name_of_student'])) > 0 ){
            $errors[] = 'Такой ученик уже существует!';
        }
        if(empty($errors)){
            $student = R::dispense('classes_students');
            $student->name_of_student = $data['name_of_student'];
            $student->class_of_student = $data['classes_id'];
            $student->gender_of_student = $data['gender_of_student'];
            $student->nationality_of_student = $data['nationality_of_student'];
            R::store($student); 
        }        
    }
    
?>