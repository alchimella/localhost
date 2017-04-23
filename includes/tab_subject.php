<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <div class="tab-pane fade" id="subjects-tab">
            <p>
            <hr>Предметы<hr>
            <form class="form-group" method="POST">
                <label for="subj">Предмет</label>
                <input type="text" id="subj" name="num_of_subject">
                <button class="btn btn-success" style="margin-left: 10px;" name="do_insert_subj">Добавить</button>
            </form>

            <!-- Таблица со списком предметов -->

            <?php 
                require "executes/exec_subjects.php"; 
            ?>
            </p>
        </div>
        <div class="tab-pane fade" id="students-tab">
            <p>
                <label for=""></label>
            </p>
        </div>
    </body>
</html>