<?php
    $data = $_POST;
    if (isset($_POST['do_delete_meeting']))
    {
        $bean = R::findOne('meetings', 'theme_meeting = ?', array($data['theme_meeting']));
        $bean->theme_meeting = $data['theme_meeting'];
        R::trash($bean);
    }
?>