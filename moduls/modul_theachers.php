<?php
    $data = $_POST;

    if(isset($data['do_insert_teacher'])){
        $errors = array();
        if(R::count('teachers', 'name_of_teacher = ?', array($data['name_of_teacher'])) > 0 ){
            $errors[] = 'Такой учитель уже существует!';
        }
        if(empty($errors)){
            $subjectBeans = R::findAll('subjects');
            $subjectBean = $subjectBeans[1];

            $classBeans = R::findAll('classes');
            $classBean = $classBeans[1];

            $teacher = R::dispense('teachers');

            $teacher->name_of_teacher = $data['name_of_teacher'];
            $teacher->phone_of_teacher = $data['phone_of_teacher'];
            $teacher->classes_id = $data['clas_id'];
            $teacher->subjects_id = $data['subj_id'];
            $teacher->photo_of_theacher = $data['photo_of_theacher'];
            //$teacher->ownClass = array($classBean);
            //$teacher->sharedClass = array($sclassBean);
            R::store($teacher); 
        }        
    }
    
?>