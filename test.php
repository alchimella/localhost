

<!DOCTYPE html>
<html>
    <head>
        <link href = "bootstrap/css/bootstrap.css" rel = "stylesheet">
    </head>
    <body>
    <div class="row">
        <div class="col col-lg-12">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-1">Открыть модальное окно</button>
        </div>

    </div>

        <!-- Создание модального окна -->
        <div class="modal fade" id="modal-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Название сайта</h4>
                        <button class="close" type="button" data-dismiss="modal"><i class="fa fa-close"></i></button>
                    </div>
                    <div class="modal-body">
                        <p>Это модальное окно</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn-danger" type="button" data-dismiss="modal">
                            Отмена
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src = "bootstrap/js/bootstrap.js"></script>
        <script>$(function(){
                $('[data-toggle="tooltip"]').tooltip();
                $('[data-toggle="popover"]').popover();
            });
        </script>

    </body>
</html>




