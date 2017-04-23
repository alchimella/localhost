<?php
    require "db.php";
    require "moduls/modul_posts.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" context = "IE-edge">
        <meta name = "viewport" content = "width-device-width, initial-scale = 1">
        
        <!-- Bootstrap -->
        <link href = "bootstrap/css/bootstrap.css" rel = "stylesheet">
        <link href = "styles/style.css" rel = "stylesheet">
        <link href = "bootstrap/css/font-awesome.css" rel = "stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap-datetimepicker.min.css" />
    </head>
    <body>
        <div class="container">
         
          <!-- Навигация -->
           <div class="row">
               <div class="navbar">
                   <div class="container">
                       <div class="navbar-header">
                           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                               <span class="sr-only">Открыть навигацию</span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </button>
                        
                           <div class="collapse navbar-collapse" id="responsive-menu">
                               <ul class="nav navbar-nav">
                                   <li><a href="#"><i class="fa fa-edge" aria-hidden="true"></i>Пункт 1</a></li>
                                   <li><a href="#"><i class="fa fa-gg" aria-hidden="true"></i>Пункт 2</a></li>
                                   <li><a href="#"><i class="fa fa-github" aria-hidden="true"></i>Пункт 3</a></li>
                               </ul>
                          </div>
                     </div>
                </div>
            </div>
            
            <!-- Слайдер -->
            <div class="row">
                <img src="http://placehold.it/1200x300" alt="">
            </div>
        </div>
        
        <!-- Контент -->
        <div class="row">
            
        </div>
        
        <!-- Посты -->
        <div class="container" id="tourpackages-carousel">
      
            <div class="row">

                <div class="col-xs-18 col-sm-6 col-md-3">
                    <!--<div class="thumbnail">
                        <img src="http://placehold.it/500x300" alt="">
                        <div class="caption">
                            <h4>Thumbnail label</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                            <p><button class="btn btn-warning btn-xs">Button</button></p>
                        </div>
                    </div>-->
                    
                    <?php require "executes/exec_posts.php"; ?>
                </div>   
            </div><!-- End row -->
        </div><!-- End container -->
        <!-- jQuery -->
        <?php require "includes/include_scripts.php"; ?>
    </body>
</html>
