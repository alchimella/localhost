<?php
    $data = $_POST;

    if(isset($data['do_insert_timetable'])){
        $errors = array();
        if(empty($errors)){
            $teacherBeans = R::findAll('teachers');
            $teacherBean = $teacherBeans[1];

            $classBeans = R::findAll('classess');
            $classBean = $classBeans[1];

            $subjectBeans = R::findAll('classess');
            $subjectBean = $subjectBeans[1];

            $timetable = R::dispense('timetables');
            $timetable->select_week = $data['select_week'];
            $timetable->select_time = $data['select_time'];
            $timetable->select_change = $data['select_change'];
            $timetable->select_subject= $data['select_subject'];
            $timetable->select_teacher = $data['select_teacher'];
            $timetable->select_class = $data['select_class'];
            $timetable->select_room = $data['select_room'];
            //$class->sharedTeacher = array($teacherBean);
            $class->ownSubject = array($subjectBean);
            $class->ownClass = array($classBean);
            $class->ownTeacher = array($teacherBean);
            R::store($timetable);
        }
    }

?>