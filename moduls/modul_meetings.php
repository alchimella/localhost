<?php
    $data = $_POST;

    if(isset($data['do_insert_meeting'])){
        $errors = array();
        if(R::count('meetings', 'class_of_meeting= ?', array($data['class_of_meeting'])) > 0 ){
            $errors[] = 'Такое собрание уже существует!';
        }
        if(empty($errors)){
            $classBeans = R::findAll('classes');
            $classBean = $classBeans[1];

            $meet = R::dispense('meetings');
            $meet->class_of_meeting = $data['class_of_meeting'];
            $meet->data_meet = $data['data_meet'];
            $meet->time_meet = $data['time_meet'];
            //$class->sharedTeacher = array($teacherBean);
            //$class->ownStudent = array($studentBean);
            R::store($meet);
        }
    }
?>