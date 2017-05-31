<?php
    $data = $_POST;
    if(isset($data['do_insert_choose_subject'])) {
        $errors = array();
        if(R::count('classsubjects', 'subjects_id = ?', array($data['subjects_id'])) > 0 ){
            $errors[] = 'Такой предмет уже есть!';
        }
        if(empty($errors)){
            $subjectBeans = R::findAll('subjects');
            $subjectBean = $subjectBeans[1];

            $classBeans = R::findAll('classes');
            $classBean = $classBeans[1];

            $clsb= R::dispense('classsubjects');
            $clsb->classes_id = $data['class_id'];
            $clsb->subjects_id = $data['subject_id'];
            //$clsb->ownClass = array($classBean);
            //$clsb->ownSubject = array($subjectBean);
            //$teacher->sharedClass = array($sclassBean);
            R::store($clsb);
        }
    }
?>