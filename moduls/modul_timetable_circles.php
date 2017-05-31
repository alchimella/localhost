<?php
    $data = $_POST;

    if(isset($data['do_insert_timetable_circles'])){
        $errors = array();
        if(empty($errors)){
            $teacherBeans = R::findAll('teachers');
            $teacherBean = $teacherBeans[1];

            $classBeans = R::findAll('classes');
            $classBean = $classBeans[1];

            $subjectBeans = R::findAll('subjects');
            $subjectBean = $subjectBeans[1];

            $timetable_c = R::dispense('circlestimetables');
            $timetable_c->select_week_circle = $data['select_week_circle'];
            $timetable_c->select_time_circle = $data['select_time_circle'];
            $timetable_c->select_change_circle = $data['select_change_circle'];
            $timetable_c->select_subject_circle = $data['select_subject_circle'];
            $timetable_c->select_teacher_circle = $data['select_teacher_circle'];
            $timetable_c->select_class_circle = $data['select_class_circle'];
            $timetable_c->select_room_circle = $data['select_room_circle'];

            //$timetable->sharedTeacher = array($teacherBean);
            //$timetable->ownTeacher = array($teacherBean);
            //$timetable->ownSubject = array($subjectBean);
            //$timetable->ownSubject = array($subjectBean);
            R::store($timetable_c);
        }
    }
?>