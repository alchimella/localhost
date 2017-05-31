<?php
$data = $_POST;

if(isset($data['do_insert_timetable_additional'])){
    $errors = array();
    if(empty($errors)){
        $teacherBeans = R::findAll('teachers');
        $teacherBean = $teacherBeans[1];

        $classBeans = R::findAll('classes');
        $classBean = $classBeans[1];

        $subjectBeans = R::findAll('subjects');
        $subjectBean = $subjectBeans[1];

        $timetable_add = R::dispense('additionaltimetables');
        $timetable_add->select_week_additional = $data['select_week_additional'];
        $timetable_add->select_time_additional = $data['select_time_additional'];
        $timetable_add->select_change_additional = $data['select_change_additional'];
        $timetable_add->select_subject_additional = $data['select_subject_additional'];
        $timetable_add->select_teacher_additional = $data['select_teacher_additional'];
        $timetable_add->select_class_additional = $data['select_class_additional'];
        $timetable_add->select_room_additional = $data['select_room_additional'];

        //$timetable->sharedTeacher = array($teacherBean);
        //$timetable->ownTeacher = array($teacherBean);
        //$timetable->ownSubject = array($subjectBean);
        //$timetable->ownSubject = array($subjectBean);
        R::store($timetable_add);
    }
}
?>