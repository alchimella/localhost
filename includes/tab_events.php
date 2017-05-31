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
                <hr><h4><i class="fa fa-calendar-check-o"></i> Посты</h4><hr>
                <form method="post">
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <div class="control-group">
                                    <input type="file" name="image_post" id="image" />
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-2">
                            <label for="title_of_post">Тема</label><br>
                            <label for="num_of_post">Содержание</label><br>
                            <label class="control-label" for="registration-date1" style="margin-top: 20px;">Дата</label>
                        </div>
                        <div class="col col-lg-9">
                            <input type="text" name="title_of_post" style="width: 350px;"><br>
                            <textarea name="num_of_post" style="width: 350px;"></textarea>
                            <div class="form-group registration-date">
                                <div class="input-group registration-date-time">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                                    <input class="form-control" name="registration_date" id="registration-date1" type="date" style="width: 310px;">
                                    <span class="input-group-btn"></span>
                                </div>
                            </div>
                            <button class="btn btn-success" name="do_insert_posts"><i class="fa fa-plus"></i> Добавить</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <hr><h4><i class="fa fa-calendar-check-o"></i> Мероприятия</h4><hr>
                <form method="post">
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <div class="control-group">
                                    <input type="file" name="image_event" id="image" />
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-2">
                            <label for="title_of_event">Тема</label><br>
                            <label for="num_of_event">Содержание</label><br>
                            <label class="control-label" for="registration-date2" style="margin-top: 20px;">Дата</label>
                        </div>
                        <div class="col col-lg-9">
                            <input type="text" name="title_of_event" style="width: 350px;"><br>
                            <textarea name="num_of_event" style="width: 350px;"></textarea>
                            <div class="form-group registration-date">
                                <div class="input-group registration-date-time">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                                    <input class="form-control" name="registration_date2" id="registration-date" type="date" style="width: 310px;">
                                    <span class="input-group-btn"></span>
                                </div>
                            </div>
                            <button class="btn btn-success" name="do_insert_events"><i class="fa fa-plus"></i> Добавить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
