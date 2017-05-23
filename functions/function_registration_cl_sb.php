<?php
    $data = $_POST;
    if(isset($data['editClass'])) {
        R::trash($class);
    }
?>