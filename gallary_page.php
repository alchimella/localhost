<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" context = "IE-edge">
        <meta name = "viewport" content = "width-device-width, initial-scale = 1">

        <!-- Bootstrap -->
        <link href = "../bootstrap/css/bootstrap.css" rel = "stylesheet">
        <link href="../styles/style_gallary_page.css" rel="stylesheet">
        <link href="../styles/style_index.css" rel="stylesheet">
        <link href = "../bootstrap/css/font-awesome.css" rel = "stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-datetimepicker.min.css" />
    </head>
    <body>
        <!-- Навигация -->
        <?php
            require "navbar.php";
        ?>
        <div class="row" style="background-color: #222222;">
            <div class="container">
                <h3 style="text-align: center; color: whitesmoke;">Школьные воспоминания</h3><hr>
                <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="..."><img src="images/maxresdefault.jpg" class="thumbnail img-responsive"></a></div>
                <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="..."><img src="images/Снимок1.png" class="thumbnail img-responsive"></a></div>
                <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="..."><img src="images/Снимок2.png" class="thumbnail img-responsive"></a></div>
                <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="..."><img src="images/Снимок3.png" class="thumbnail img-responsive"></a></div>
                <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="..."><img src="images/Снимок4.png" class="thumbnail img-responsive"></a></div>
                <hr>
            </div>
        </div>
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h3 class="modal-title">Heading</h3>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <?php require "includes/include_scripts.php"; ?>
        <?php require "footer.php"; ?>
    </body>
</html>