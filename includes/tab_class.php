<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <div class="tab-pane fade" id="classes-tab">
            <p>
                <hr>Классы<hr>
                <form class="form-group" method="POST">
                    <label for="class">Класс</label>
                    <input type="text" id="class" name="num_of_class">
                    <button class="btn btn-success" style="margin-left: 10px;" name="do_insert_class">Добавить</button>
                </form>
                
                <!-- Таблица со списком классов -->
                <div data-spy="scroll" data-target=".table-example">
                    <?php 
                        require "executes/exec_classes.php"; 
                    ?>
                </div>
            </p>
        </div>
    </body>
</html>