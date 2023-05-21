<!DOCTYPE html>
<html lang="ru">
    <head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;1,500&family=Playfair+Display:wght@400;600&family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href="assets/css/style_about.css">
    <title>О нас │ITL.WIKI</title>
    </head>
    <body>
    <?php
        if($_COOKIE['user']==''):
            header ("Location: http://itl.wiki.loc/whod.php"); 
    ?>
<?php endif;?>
        <header class="header" id="header">
            <div class="container">
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
                    <h1 class="intro__title">О нас</h1>
                    <a class="btn">На ваш вопрос найдется ответ</a>
                </div>
            </div>
        </div>
            <div id="rectangel" class="workspace">
                <div class="content">
                    <h2>Добро пожаловать в ITL.WIKI!</h2>
                    <p>Данный корпоративный портал разработан по заказу компаниии ООО "ITL" для своих сотрудников с целью быстрого поиска необходимой информации по устранению или решению той или иной заявки или проблемы клиента. Данный проект будет особенно полезен новым сотрудникам компании.</p>
                    <ul>Здесь вы сможете найти:
                            <li>Решение типовых заявок,проблем и ошибок работы ПО</li>
                            <li>Организационные вопросы предприятия (стандарты общения с клиетами, порядок эскалации и т.д.)</li>
                            <li>Ссылки на проверенное временем и другими инженерами ПО</li>
                            <li>Сможете делиться с другими сотрудниками интересными статьями с помощью специальной формы</li>
                        </ul>
                    <ul>За дополнительными инструкциями обращайтесь по ссылками:
                        <li><a href = "pages/Инструкция по эксплуатации системы поиска.html">Инструкция по эксплуатации системы поиска</a></li>
                        <li><a href = "pages/Инструкция по работе системы авторизации.html">Инструкция по работе системы авторизации</a></li>
                        <li><a href = "pages/Инструкция по работе с системой новостной ленты.html">Инструкция по работе с системой добавления новой статьи</a></li>
                        <li><a href = "pages/Инструкция по работе с системой комментариев.html">Инструкция по составлению отзыва о работе портала</a></li>
                    </ul>
                </div>
            </div>
               <script src="assets/js/search.js"></script>
                <script src="assets/js/script.js"></script>
                <script src="assets/js/myFunction.js"></script>
                <script src="assets/js/passiv.js"></script>
    </body>
    
</html>