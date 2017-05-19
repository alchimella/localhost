<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" context = "IE-edge">
        <meta name = "viewport" content = "width-device-width, initial-scale = 1">

        <!-- Bootstrap -->
        <link href = "../styles/style_gallary_page.css" rel = "stylesheet">
        <link href = "../bootstrap/css/bootstrap.css" rel = "stylesheet">
        <link href="../styles/style_index.css" rel="stylesheet">
        <link href = "../bootstrap/css/font-awesome.css" rel = "stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-datetimepicker.min.css" />
    </head>
    <body>
        <!-- Навигация -->
        <?php 
            //require "navbar.php";
        ?>
        <section id="gallary-container" class="padding-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h1 class="padding-b-25">Школьная галерея</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="gallary">
                        <div class="tile scale-anm web all advertising">
                            <img src="../images/maxresdefault.jpg" alt="" />
                        </div>
                        <div class="tile scale-anm bcards all">
                            <img src="../images/DetiKR.jpg" alt="" />
                        </div>
                        <div class="tile scale-anm web all">
                            <img src="../images/Снимок1.PNG" alt="" />
                        </div>
                        <div class="tile scale-anm web all">
                            <img src="../images/Снимок2.PNG" alt="" />
                        </div>
                        <div class="tile scale-anm  advertising">
                            <img src="../images/Снимок3.PNG" alt="" />
                        </div>
                        <div class="tile scale-anm bcards all">
                            <img src="../images/Снимок4.PNG" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- jQuery -->
        <?php //require "includes/include_scripts.php"; ?>
    </body>
</html>