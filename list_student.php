<?php
$cicle_cl=R::findAll('classes', 'ORDER BY num_of_class ASC');
foreach($cicle_cl as $c_c){
    echo '<option value="'.$c_c['id'].'">'.$c_c['num_of_class'].'</option>';
}
?>