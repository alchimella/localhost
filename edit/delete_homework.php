<?php
$data = $_POST;
if (isset($_POST['do_delete_homework']))
{
    $bean = R::findOne('homework', 'homework = ?', array($data['homework']));
    $bean->homework = $data['homework'];
    R::trash($bean);
}
?>