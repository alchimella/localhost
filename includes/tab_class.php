<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <div class="tab-pane fade" id="classes-tab">
            <hr>Классы<hr>
            <form class="form-group" method="POST">
                <div class="row">
                    <div class="col col-lg-6">
                        <div class="form-group">
                           
                        </div>
                        <label for="class">Класс</label>
                        <input type="text" id="class" name="num_of_class">
                        <button class="btn btn-success" style="margin-left: 10px;" name="do_insert_class">Добавить</button>
                    </div>
                    <!-- Таблица со списком классов -->
                    <div class="col col-lg-6">
                        <div data-spy="scroll" data-target=".table-example" style="margin-top: 15px;">
                            <?php 
                                require "executes/exec_classes.php"; 
                            ?>
                        </div>   
                    </div> 
                </div>
            </form>
        </div>
    </body>
</html>