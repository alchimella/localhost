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
            $student->classes_id = $data['classes_id'];
            $student->gender_of_student = $data['gender_of_student'];
            $student->nationality_of_student = $data['nationality_of_student'];
            $student->name_of_parents_male = $data['name_of_parents_male'];
            $student->name_of_parents_female = $data['name_of_parents_female'];
            $student->phone_of_parents_male = $data['phone_of_parents_male'];
            $student->phone_of_parents_female = $data['phone_of_parents_female'];
            $student->email_parents_male = $data['email_parents_male'];
            $student->email_parents_female = $data['email_parents_female'];
            R::store($student); 
        }        
    }
    
?>