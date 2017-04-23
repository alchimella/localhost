<?php
    $data = $_POST;
    
    if(isset($data['do_insert_student'])){
        $errors = array();
        if(R::count('students', 'name_of_student = ?', array($data['name_of_student'])) > 0 ){
            $errors[] = 'Такой ученик уже существует!';
        }
        if(empty($errors)){
            $student = R::dispense('students');
            $student->name_of_student = $data['name_of_student'];
            $student->class_of_student = $data['class_of_student'];
            $student->gender_of_student = $data['gender_of_student'];
            $student->nationality_of_student = $data['nationality_of_student'];
            //$student = R::load('students', 1);
            //$class = R::load('classes', $student->class_of_student);
            //$class->num_of_class;
            R::store($student); 
        }        
    }
    
?>