<?php
    
    $data = $_POST;
    if(isset($data['do_insert_events'])){
        $errors = array();
        if(R::count('events', 'num_of_event = ?', array($data['num_of_event'])) > 0 ){
            $errors[] = 'Такое мероприятие уже существует!';
        }
        if(empty($errors)){
            $event = R::dispense('events');
            $event->title_of_event = $data['title_of_event'];
            $event->num_of_event = $data['num_of_event'];
            //$event->image_event = $data['image_event'];
            $event->data3 = $data['data3'];
            R::store($event); 
        }        
    }
    //header("Content-type: image/*");    
    
?>