<!DOCTYPE html>
<html lang="ru">
    <head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;1,500&family=Playfair+Display:wght@400;600&family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href="assets/css/style.css">
    <title>Частые вопросы │ITL.WIKI</title>
    </head>
    <body>
    <?php
        if($_COOKIE['user']==''):
            header ("Location: http://itl.wiki.loc/whod.php"); 
    ?>
<?php endif;?>
        <header class="header" id="header">
                <div class="header__inner">
                    <div class="header__logo"><img src = "assets/images/logo.png" style = "    width: 90px; height: 75px;"></div>
        
                    <nav class="nav" id="nav">
                    <a class="nav__link" href="wiki.php">WIKI</a>
                    <a class="nav__link" href="Сommon_question.php">Частые запросы</a>
                    <a class="nav__link" href="PO.php">ПО для инженера</a>
                    <a class="nav__link" href="About_as.php" >О нас</a>
                    <div class="dropdown">
                        <a onclick="myFunction()" href="#" class="dropbtn"><?php echo $_COOKIE['user']?></a>
                        <div id="myDropdown" class="dropdown-content">
                        <img src = "assets/images/mono_man.png" class = "mono_man">
                            <a onclick = "passiv()"  href="/exit.php">Выйти</a>
                            <a href="log.php">Регистрация нового пользователя</a>

                        </div>
                    </div>
                </nav>
                </div>
            </div>
        </header>
        <div class="intro" id="intro">
            <div class="container">
                <div class="intro__inner">
                    <h1 class="intro__title">Частые запросы</h1>
                    <a class="btn">На ваш вопрос найдется ответ</a>
                </div>
            </div>
        </div>
            <div id="rectangel" class="workspace">
                <div class="content">
                    <div class="upp">
                        <p><span style="color: #0085FF">Инструкция по решению популярных видов заявок</span> - понятные и <b>обязательные к использованию</b> инструкции по решению часто встречающихся заявок.</p>
                        <p><i>\\itl\Tech</i> - основная папка технической службы.</p>    
                    </div>
                    <hr align="left">
                    <div class="for_all">
                        <h2>Общие для всех</h2>
                        <ul>
                            <li><a href = "pages/Test.html">Стандарты общения с клиентами<a></li>
                            <li><a href = "#">Если ты получил неудовлетворительную оценку за заявку<a></li>
                            <li><a href = "#">Опоздания на работу<a></li>
                            <li><a href = "#">Чек-лист настройки нового ПК клиента<a></li>
                            <li><a href = "#">(!) Приём нового клиента<a></li>
                        </ul>
                    </div>
                    <hr align="left">
                    <div class="n1_line">
                        <h2>1 линия технической поддержки</h2>
                        <ul>
                            <li><a href = "#">Порядок эскалации заявок с 1 линии <a></li>
                            <li><a href = "#">Дежурства 1 линии вечером и в выходные<a></li>
                            <li><a href = "#">Режим черезвычайной ситуации ЧС-1 и ЧС-2 если на 1 линии очень много заявок <a></li>
                        </ul>
                    </div>
                    <hr align="left">
                    <div class="n2_line">
                        <h2>2 линия технической поддержки</h2>
                        <ul>
                            <li><a href = "#">Общая рабочая Инструкция инженера 2 линия<a></li>
                            <li><a href = "#">Правила поведения и инженера 2 линии у клиента<a></li>
                            <li><a href = "#">Профилактики ПК проводимые на выезде<a></li>
                        </ul>
                    </div>
                    <hr align="left">
                    <div class="n3_line">
                        <h2>3 линия технической поддержки</h2>
                        <ul>
                            <li><a href = "#">Порядок работы с заявками на 3 линии<a></li>
                            <li><a href = "#">Дежурства 3 линии вечером и в выходные<a></li>
                            <li><a href = "#">Дневное дежурство 3 линии для 1 и 2 линии<a></li>
                            <li><a href = "#">Внеурочные работы<a></li>
                            <li><a href = "#">Передача дел на время отпуска<a></li>
                        </ul>
                    </div>
                    <hr align="left">
                    <div class="it_man">
                        <h2>IT-менеджеры</h2>
                        <ul>
                            <li><a href = "#">Взаимодействие с партнёрами по заявкам<a></li>
                            <li><a href = "#">Процедура передачи уходящими клиентами<a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
               <script src="assets/js/search.js"></script>
                <script src="assets/js/script.js"></script>
                <script src="assets/js/myFunction.js"></script>
                <script src="assets/js/passiv.js"></script>
    </body>
    
</html>

