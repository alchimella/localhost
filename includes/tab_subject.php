<?php require "edit/delete_subject.php" ?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <div class="tab-pane fade" id="subjects-tab">
            <hr><h4><i class="fa fa-book"></i> Предметы</h4><hr>
            <form class="form-group" method="POST">
                <div class="row">
                    <div class="col col-lg-6">
                        <div class="col col-lg-7">
                            <label for="subj">Предмет</label>
                            <input type="text" id="subj" name="num_of_subject">
                        </div>
                        <div class="col col-lg-5">
                            <button class="btn btn-success" style="margin-top: 35px; width: 130px" name="do_insert_subj"><i class="fa fa-plus"></i> Добавить</button>
                            <button class="btn btn-danger" style="margin-top: 5px; width: 130px;" name="do_delete_subj"><i class="fa fa-trash"></i> Удалить</button>
                        </div>
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