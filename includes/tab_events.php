<?php 
    require "includes/handler.php"
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body> 
        <div class="tab-pane fade" id="events-tab">
            <div class="col col-lg-6">
                <hr>Посты<hr>
                <form method="post">
                <div class="form-group">
                    <input type="file" name="pic_of_post" id="image">
                    <input type="text" name="num_of_post" style="margin-top: 5px;">
                    
                </div>
                <!-- Инициализация виджета "Bootstrap datetimepicker" -->
                <div class="form-group">
                    <!-- Элемент HTML с id равным datetimepicker1 -->
                    <div class="input-group date" id="datetimepicker2" style="width: 220px; margin-top: 5px;">
                        <input type="text" class="form-control" name="data2">
                        <span class="input-group-addon">
                        <span class="fa fa-calendar"></span> 
                        </span> 
                    </div>
                </div>
                <button class="btn btn-success" name="do_insert_posts">Загрузить</button>
                  
                </form>
            </div>
            <div class="col col-lg-6">
                <hr>Мероприятия<hr>
                <form method="post">
                <div class="form-group">
                    <input type="file" name="pic_of_event" id="image">
                    <input type="text" name="num_of_event" style="margin-top: 5px;">
                    
                </div>
                <!-- Инициализация виджета "Bootstrap datetimepicker" -->
                <div class="form-group">
                    <!-- Элемент HTML с id равным datetimepicker1 -->
                    <div class="input-group date" id="datetimepicker3" style="width: 220px; margin-top: 5px;">
                        <input type="text" class="form-control" name="data3">
                        <span class="input-group-addon">
                        <span class="fa fa-calendar"></span> 
                        </span> 
                    </div>
                </div>
                <button class="btn btn-success" name="do_insert_events">Загрузить</button>
                  
                </form>
            </div>
            
        </div>
    </body>
</html>
