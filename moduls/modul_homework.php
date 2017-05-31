<?php
    $data = $_POST;
    if(isset($data['do_insert_homework'])){
        $errors = array();
        if(R::count('homework', 'homework = ?', array($data['homework'])) > 0 ){
            $errors[] = 'Такое задание уже есть!';
        }

        if(empty($errors)){

            $classBeans = R::findAll('classes');
            $classBean = $classBeans[1];

            $homework = R::dispense('homework');
            $homework->homework = $data['homework'];
            $homework->registration_date = $data['registration_date3'];
            $homework->week = $data['week'];
            $homework->classes_id = $data['classes_id'];
            //$homework->ownSubject = array($subjectBean);
            //$homework->ownClass = array($classBean);
            R::store($homework);
        }
    }
?>