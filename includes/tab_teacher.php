<!DOCTYPE html>
<html>
    <head>
        <link href = "styles/style_tab_teacher.css" rel = "stylesheet">
    </head>
    <body>
        <div class="tab-pane active in fade" id="teachers-tab">
            <p>
                <hr>Данные об учителях<hr>
                <form class="form-group" method="POST">
                    <div class="row">
                        <div class="col col-lg-3">
                            <div class="form-group">
                            <label for="theacher_name">ФИО учителя</label><br>
                            <label for="theacher_phone" style="margin-top: 5px;">Номер телефона</label><br>
                            <label for="theacher_subject" style="margin-top: 5px;">Предмет</label><br>                         
                            </div>
                        </div>
                        <div class="col col-lg-8">
                            <div class="form-group margin_top">
                                <input type="text" id="theacher_name" name="num_of_theacher" style="width: 360px;"><br>     
                                <input type="text" id="theacher_phone" name="phone_of_theacher" style="margin-top: 5px;"><br>
                                
                                <div class="form-group">
                                    <!--<select class="form-control" style="margin-top: 5px; width: 200px;" name="subj_of_theacher">-->
                                        
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" name="subj_of_theacher">
                                            <!--<span class="caret"></span>--></button>
                                            <ul class="dropdown-menu">
                                               <?php 
                                                    $teacher = R::findAll( 'teachers');
                                                    foreach($teacher as $option){
                                                        echo '<li>'.$option['subj_of_theacher'].'</li>';
                                                    }
                                                ?>
                                                <!--<li><a href="#">HTML</a></li>
                                                <li><a href="#">CSS</a></li>
                                                <li><a href="#">JavaScript</a></li>-->
                                            </ul>
                                        </div>
                                        <!--<option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>-->
                                    <!--</select>-->
                                </div>
                                <br>  
                                <div class="funkyradio" style="margin-top: -60px;" name="check_teacher">
                                    <div class="funkyradio-warning">
                                        <input type="checkbox" name="checkbox" id="checkbox1">
                                        <label for="checkbox1">Классный руководитель</label>
                                    </div>
                                </div>                               
                            </div>                       
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-3">
                            <label for="select-class" style="margin-top: 5px;">Класс</label><br>          
                        </div>
                        <div class="col col-lg-4">  
                            <div class="form-group">
                                <select class="form-control" style="margin-top: 5px; width: 200px; border-color: #EC971F;" name="class_of_theacher">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>                              
                            </div>   
                        </div>
                        <div class="col col-lg-4">
                            <button class="btn btn-success" style="margin-top: 5px;" name="do_insert_teacher">Добавить</button>
                        </div>
                    </div>  
                </form>
                <!-- Таблица со списком учителей -->
                <?php require "executes/exec_teachers.php"; ?>
            </p>
        </div>
    </body>
</html>
                           