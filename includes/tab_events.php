<?php 
    require "includes/handler.php"
?>
<!DOCTYPE html>
<html>
    <head>
        <link href = "styles/style_tab_event.css" rel = "stylesheet"> 
    </head>
    <body> 
        <div class="tab-pane fade" id="events-tab">
            <div class="row">
                <hr>Посты<hr>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <div class="control-group">
                                    <div class="controls clearfix">
                                        <span class="btn btn-warning btn-file">
                                            <i class="fa fa-plus"></i> <span>Выберите изображение...</span>
                                            <input type="file" name="image_post" id="image" />
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-2">
                            <label for="title_of_post">Тема</label><br>
                            <label for="num_of_post">Содержание</label><br>
                        </div>
                        <div class="col col-lg-9">
                            <input type="text" name="title_of_post" style="width: 350px;"><br>
                            <textarea name="num_of_post" style="width: 350px;"></textarea>
                            <div class="form-group">
                                <div class="input-group date" id="datetimepicker1" style="width: 350px; margin-top: 5px;">
                                    <input type="text" class="form-control" name="data2">
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            <button class="btn btn-success" name="do_insert_posts">Загрузить</button>
                        </div>
                    </div>


                </form>
            </div>
            <div class="row">
                <hr>Мероприятия<hr>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <div class="control-group">
                                    <div class="controls clearfix">
                                        <span class="btn btn-warning btn-file">
                                            <i class="fa fa-plus"></i> <span>Выберите изображение...</span>
                                            <input type="file" name="image_event" id="image" />
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-2">
                            <label for="title_of_event">Тема</label><br>
                            <label for="num_of_event">Содержание</label><br>
                        </div>
                        <div class="col col-lg-9">
                            <input type="text" name="title_of_event" style="width: 350px;"><br>
                            <textarea name="num_of_event" style="width: 350px;"></textarea>
                            <!-- Инициализация виджета "Bootstrap datetimepicker" -->
                            <div class="form-group">
                                <!-- Элемент HTML с id равным datetimepicker1 -->
                                <div class="input-group date" id="datetimepicker2" style="width: 350px; margin-top: 5px;">
                                    <input type="text" class="form-control" name="data3">
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            <button class="btn btn-success" name="do_insert_events">Загрузить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
