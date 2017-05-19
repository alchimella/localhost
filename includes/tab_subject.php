<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <div class="tab-pane fade" id="subjects-tab">
            <hr>Предметы<hr>
            <form class="form-group" method="POST">
                <div class="row">
                    <div class="col col-lg-6">
                        <label for="subj">Предмет</label>
                        <input type="text" id="subj" name="num_of_subject">
                        <button class="btn btn-success" style="margin-left: 10px;" name="do_insert_subj">Добавить</button>
                    </div>
                    <!-- Таблица со списком предметов -->
                    <div class="col col-lg-6">
                        <div data-spy="scroll" data-target=".table-example">
                            <?php 
                                require "executes/exec_subjects.php"; 
                            ?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>