<?php
    $data = $_POST;
    if(isset($data['do_insert_choose'])) {
        $errors = array();
        if(R::count('teachersclass', 'classes_id = ?', array($data['classes_id'])) > 0 ){
            $errors[] = 'Такой класс уже есть!';
        }
        if(empty($errors)){
            $teacherBeans = R::findAll('teachers');
            $teacherBean = $teacherBeans[1];

            $classBeans = R::findAll('classes');
            $classBean = $classBeans[1];

            $thcl= R::dispense('teachersclass');
            $thcl->classes_id = $data['clas_id'];
            $thcl->teachers_id = $data['teacher_id'];
            //$thcl->ownClass = array($classBean);
            //$thcl->ownTeacher = array($teacherBean);
            //$teacher->sharedClass = array($sclassBean);
            R::store($thcl);
        }
    }
?>