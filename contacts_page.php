<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" context = "IE-edge">
        <meta name = "viewport" content = "width-device-width, initial-scale = 1">

        <!-- Bootstrap -->
        <link href = "../bootstrap/css/bootstrap.css" rel = "stylesheet">

        <link href="../styles/style_index.css" rel="stylesheet">

        <link href = "../bootstrap/css/font-awesome.css" rel = "stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css">
        <title>Контакты</title>
    </head>
    <body>
        <?php
            require "navbar.php";
        ?>
        <div class="container">
            <h3 style="color: #337AB7;">Контакты</h3><hr>
            <div class="col col-lg-2" style="font-weight: 600;">
                <p>Адрес: </p>
                <p>Телефон: </p>
                <p>Электронная почта: </p>
            </div>
            <div class="col col-lg-3">
                <p>г. Бишкек Тыныстанова 110</p>
                <p>(0312) 66-36-02</p>
                <p>...</p>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3477.2059262968446!2d74.60787976585459!3d42.87347737786513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389eb7c45d479425%3A0x6e04275f78eda825!2z0KjQky4g4oSWMjQ!5e0!3m2!1sru!2sru!4v1496013740307" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


            <!-- jQuery -->
            <?php require "includes/include_scripts.php"; ?>
            <script src="../js/TweenLite.min.js"></script>
            <script src="../js/EasePack.min.js"></script>
            <script src="../js/rAF.js"></script>
            <script src="../js/demo-1.js"></script>

        </div>


        <!-- Footer -->
        <?php
            require "footer.php";
        ?>
    </body>
</html>