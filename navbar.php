<!DOCTYPE html>
<html>
    <head>
        <link href = "styles/style_navbar.css" rel = "stylesheet">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default" style="height: 60px;">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                        <span class="sr-only">Открыть навигацию</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Логотип школы</a>
                </div>
                <div class="collapse navbar-collapse js-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown mega-dropdown">
                            <a href="index.php" class="dropdown-toggle" data-toggle="dropdown">Школа</a>
                            <ul class="dropdown-menu mega-dropdown-menu">
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header" style="color: #63679F;">Школьная галерея</li>
                                        <div id="schoolGalery" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <a href="#"><img src="images/Снимок1.PNG" class="img-responsive" alt="product 1"></a>
                                                </div>
                                                <div class="item">
                                                    <a href="#"><img src="images/Снимок4.PNG" class="img-responsive" alt="product 2"></a>
                                                </div>
                                                <div class="item">
                                                    <a href="#"><img src="images/maxresdefault.jpg" class="img-responsive" alt="product 3"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <li class="divider"></li>
                                        <li><a href="gallary_page.php">Посмотреть остальное <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">О нас</li>
                                        <li><a href="history_page.php">История</a></li>
                                        <li><a href="achievement_page.php">Достижения</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Устав</li>
                                        <li><a href="school_charter_page.php">Устав школы</a></li>
                                        <li><a href="objectives_pages.php">Цели и задачи гимназического образования</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Учителя</li>
                                        <li><a href="list_teacher_page.php">Полный список учителей</a></li>
                                        <li><a href="awards_page.php">Достижения и награды</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Библиотечная служба</li>
                                        <li><a href="school_library_page.php">Школьная библиотека</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Информация</li>
                                        <li><a href="events_page.php">Мероприятия</a></li>
                                        <li><a href="posts_page.php">Полезная информация</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Для родителей</a>
                            <ul class="dropdown-menu mega-dropdown-menu">
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Информация</li>
                                        <li><a href="admission_to_school_page.php">Прием в школу</a></li>
                                        <li><a href="parent_meet_page.php">Родительское собрание</a></li>
                                        <li><a href="board_of_guardians_page.php">Попечительский совет</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Для учеников</a>
                            <ul class="dropdown-menu mega-dropdown-menu">
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Расписание</li>
                                        <li><a href="schedule_of_lessons_page.php">Расписание уроков</a></li>
                                        <li><a href="schedule_of_calls_page.php">Расписание звонков</a></li>
                                        <li><a href="schedule_of_exam_page.php">Расписание экзаменов</a></li>
                                        <li class="divider"></li>
                                        <li><a href="schedule_of_circles_page.php">Расписание кружков</a></li>
                                        <li><a href="schedule_of_additional_lessons_page.php">Расписание дополнительных занятий</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Государственное тестирование</li>
                                        <li><a href="nct_page.php">Подготовка к НЦТ</a></li>
                                        <li><a href="ort_page.php">Подготовка к ОРТ</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="mega-dropdown"><a href="#">Дневник</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </body>
</html>