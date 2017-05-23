<?php
    session_start();
    $data = $_POST;

    if(isset($data['do_insert_timetable'])){
        $errors = array();
        /*if(R::count('timetables', 'select_week = ?', array($data['select_week']) and
                'select_time = ?', array($data['select_time']) and 'select_change = ?', array($data['select_change']) and
                'select_subject = ?', array($data['select_subject']) and
                'select_class = ?', array($data['select_class']) and
                'select_room = ?', array($data['select_room']) and
                'select_teacher = ?', array($data['select_teacher'])) > 0 ){
            $errors[] = 'Такой класс уже существует!';
        }*/
        if(empty($errors)){
            $teacherBeans = R::findAll('teachers');
            $teacherBean = $teacherBeans[1];

            $classBeans = R::findAll('classes');
            $classBean = $classBeans[1];

            $subjectBeans = R::findAll('subjects');
            $subjectBean = $subjectBeans[1];

            $timetable = R::dispense('timetables');
            $timetable->select_week = $data['select_week'];
            $timetable->select_time = $data['select_time'];
            $timetable->select_change = $data['select_change'];
            $timetable->select_subject = $data['select_subject'];
            $timetable->select_teacher = $data['select_teacher'];
            $timetable->select_class = $data['select_class'];
            $timetable->select_room = $data['select_room'];

            //$timetable->sharedTeacher = array($teacherBean);
            //$timetable->ownTeacher = array($teacherBean);
            $timetable->ownSubject = array($subjectBean);
            //$timetable->ownSubject = array($subjectBean);
            R::store($timetable);
        }
    }
    session_unset();

?>