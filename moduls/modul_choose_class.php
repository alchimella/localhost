<?php
    $data = $_POST;
    if(isset($data['do_insert_choose'])){
        $errors = array();

        if(empty($errors)){
            $teacherBeans = R::findAll('teachers');
            $teacherBean = $teacherBeans[1];

            $classBeans = R::findAll('classes');
            $classBean = $classBeans[1];

            $choose = R::dispense('selection');
            $choose->classes_id = $data['classes_id'];
            $choose->teachers_id = $data['teachers_id'];
            //$choose->ownTeacher = array($teacherBean);
            //$choose->ownClass = array($classBean);
            R::store($choose);
        }
    }

?>