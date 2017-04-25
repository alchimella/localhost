<?php
    require "db.php";
 /*R::exec('DROP TABLE IF EXISTS `template`');
            
            
          $template=  R::dispense('template');
          $template->phrase = "text1 --1";
          $id=R::store($template);
          unset($template);
          
          $template=  R::dispense('template');
          $template->phrase = "text 2 ";
          $id=R::store($template);
                    unset($template);

          
          $template=  R::dispense('template');
          $template->phrase = "text 3";
          $id=R::store($template);
                    unset($template);

            R::exec('DROP TABLE IF EXISTS `workers`');
            
            $templateBeans=R::findAll('template');
            $templateBean=$templateBeans[1];
            
          $worker=  R::dispense('workers');
          $worker->name = 'jim';
          $worker->sharedTemplate = array($templateBean);
          $id=R::store($worker);
          
          $worker=  R::dispense('workers');
          $worker->name = 'dave';
          $worker->sharedTemplate = array($templateBean);    
          $id=R::store($worker);
        $worker=  R::dispense('workers');
          $worker->name = 'sally';
          $worker->sharedTemplate = array($templateBean);    
          $id=R::store($worker);*/


$shared = R::findAll( 'template_workers');

echo ('<table class="table">
                <thead class="thead-inverse">
                    <tr> 
                        <th>#</th>
                        <th>phrase</th>
                        <th>name</th>
                    </tr>
                </thead> 
                <tbody>');
      foreach($shared as $row){
        echo '<tr>';
        echo '<th class="col col-lg-2">'.$row['id'].'</th>';
        echo '<td>'.$row['template_id'].'</td>'; 
        echo '<td>'.$row['workers_id'].'</td>'; 
    }
    echo ('</tbody></table>');
?>




