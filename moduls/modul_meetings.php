<?php
    $data = $_POST;

    if(isset($data['do_insert_meeting'])){
        $errors = array();
        if(R::count('meetings', 'theme_meeting = ?', array($data['theme_meeting'])) > 0 ){
            $errors[] = 'Такое собрание уже существует!';
        }
        if(empty($errors)){
            $classBeans = R::findAll('classes');
            $classBean = $classBeans[1];

            $meet = R::dispense('meetings');
            $meet->theme_meeting = $data['theme_meeting'];
            $meet->classes_id = $data['clas_id'];
            $meet->registration_date = $data['registration_date4'];
            $meet->registration_time = $data['registration_time'];
            //$class->sharedTeacher = array($teacherBean);
            //$meet->ownClass = array($classBean);
            R::store($meet);
        }
    }
?>