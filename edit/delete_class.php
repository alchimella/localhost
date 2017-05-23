<?php
    $data = $_POST;
    if (isset($_POST['do_delete_class']))
    {
        $bean = R::findOne('classes', 'num_of_class = ?', array($data['num_of_class']));
        $bean->num_of_class = $data['num_of_class'];
        R::trash($bean);
    }
?>