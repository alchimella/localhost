<?php
    $data = $_POST;
    if (isset($_POST['do_delete_subj']))
    {
        $bean = R::findOne('subjects', 'num_of_subject = ?', array($data['num_of_subject']));
        $bean->num_of_subject = $data['num_of_subject'];
        R::trash($bean);
    }
?>