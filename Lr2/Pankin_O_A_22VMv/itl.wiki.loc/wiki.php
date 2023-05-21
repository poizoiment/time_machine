<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width 1170">
    <link rel = "stylesheet" href="assets/css/style_1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;1,500&family=Playfair+Display:wght@400;600&family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <title>WIKI │ITL.WIKI</title>
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
                    <a class="nav__link" href="About_as.php">О нас</a>
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

    <main>
        <div class="intro" id="intro">
            <div class="container">
                <div class="intro__inner">
                    <h1 class="intro__title">База знаний ITL</h1>
                    <a class="btn">На ваш вопрос найдется ответ</a>
                </div>
            </div>
        </div>
    
            <!--Рабочее пространство-->
    <div id="rectangel" class="workspace">
        <div class="wrap"><!--Строка поиска-->
            <input type = "search" id="input" class="input" placeholder="Введите интересующую вас тему с заглавной буквы...">
        </div>
        <div class="content">
            <!--Список для поиска-->
            <ul class="tree" id="myUL">
                <!--Аккордион-->
                 <li><button class="accordion">1C и СУБД</button>
                 <ul class="nested"> <!--Подсписок-->
                        <?php 
                        include 'dop_blog.php';
                        $blog_1C = get_1C();
                        foreach ($blog_1C as $blog_1C):?>
                            <button class="accordion"><?php echo $blog_1C["title"] ?></button> <!--Кнопка аккардиона-->
                            <div class="panel"><!--выпадающая панель-->
                            <p><?php echo $blog_1C["intro_text"]?></p>
                            <button class="button" onclick="document.location='pages/<?php echo $blog_1C['name_stats'] ?> '"><span>Читать </span></button><!--Кнопка для перехода на страницу с полным содержанием-->
                            </div>

                            <?php endforeach;?>    
                    </ul> 
                </li>     
                <li><button class="accordion">DNS-записи</button>       
                <ul class="nested"> <!--Подсписок-->
                        <?php 
                        $blog_dns =   get_dns();
                        foreach ($blog_dns as $blog_dns):?>
                            <button class="accordion"><?php echo $blog_dns["title"] ?></button> <!--Кнопка аккардиона-->
                            <div class="panel"><!--выпадающая панель-->
                            <p><?php echo $blog_dns["intro_text"]?></p>
                            <button class="button" onclick="document.location='pages/<?php echo $blog_dns['name_stats'] ?> '"><span>Читать </span></button><!--Кнопка для перехода на страницу с полным содержанием-->
                            </div>

                            <?php endforeach;?>    
                    </ul> 
                </li> 
                <li><button class="accordion">ESXI</button>       
                <ul class="nested"> <!--Подсписок-->
                        <?php 
                        $blog_esxi =   get_esxi();
                        foreach ($blog_esxi as $blog_esxi):?>
                            <button class="accordion"><?php echo $blog_esxi["title"] ?></button> <!--Кнопка аккардиона-->
                            <div class="panel"><!--выпадающая панель-->
                            <p><?php echo $blog_esxi["intro_text"]?></p>
                            <button class="button" onclick="document.location='pages/<?php echo $blog_esxi['name_stats'] ?> '"><span>Читать </span></button><!--Кнопка для перехода на страницу с полным содержанием-->
                            </div>

                            <?php endforeach;?>    
                    </ul> 
                </li> 
                <li><button class="accordion">Mac OS</button>       
                <ul class="nested"> <!--Подсписок-->
                        <?php 
                        $blog_mac =   get_mac();
                        foreach ($blog_mac as $blog_mac):?>
                            <button class="accordion"><?php echo $blog_mac["title"] ?></button> <!--Кнопка аккардиона-->
                            <div class="panel"><!--выпадающая панель-->
                            <p><?php echo $blog_mac["intro_text"]?></p>
                            <button class="button" onclick="document.location='pages/<?php echo $blog_mac['name_stats'] ?> '"><span>Читать </span></button><!--Кнопка для перехода на страницу с полным содержанием-->
                            </div>

                            <?php endforeach;?>    
                    </ul> 
                </li> 
                <li><button class="accordion">MS SQL</button>       
                <ul class="nested"> <!--Подсписок-->
                        <?php 
                        $blog_sql =   get_sql();
                        foreach ($blog_sql as $blog_sql):?>
                            <button class="accordion"><?php echo $blog_sql["title"] ?></button> <!--Кнопка аккардиона-->
                            <div class="panel"><!--выпадающая панель-->
                            <p><?php echo $blog_sql["intro_text"]?></p>
                            <button class="button" onclick="document.location='pages/<?php echo $blog_sql['name_stats'] ?> '"><span>Читать </span></button><!--Кнопка для перехода на страницу с полным содержанием-->
                            </div>

                            <?php endforeach;?>    
                    </ul> 
                </li> 
                <li><button class="accordion">Outlook</button>       
                <ul class="nested"> <!--Подсписок-->
                        <?php 
                        $blog_outlook =   get_outlook();
                        foreach ($blog_outlook as $blog_outlook):?>
                            <button class="accordion"><?php echo $blog_outlook["title"] ?></button> <!--Кнопка аккардиона-->
                            <div class="panel"><!--выпадающая панель-->
                            <p><?php echo $blog_outlook["intro_text"]?></p>
                            <button class="button" onclick="document.location='pages/<?php echo $blog_outlook['name_stats'] ?> '"><span>Читать </span></button><!--Кнопка для перехода на страницу с полным содержанием-->
                            </div>

                            <?php endforeach;?>    
                    </ul> 
                </li> 
                <li><button class="accordion">OpenVPN</button>       
                <ul class="nested"> <!--Подсписок-->
                        <?php 
                        $blog_openvpn =   get_openvpn();
                        foreach ($blog_openvpn as $blog_openvpn):?>
                            <button class="accordion"><?php echo $blog_openvpn["title"] ?></button> <!--Кнопка аккардиона-->
                            <div class="panel"><!--выпадающая панель-->
                            <p><?php echo $blog_openvpn["intro_text"]?></p>
                            <button class="button" onclick="document.location='pages/<?php echo $blog_openvpn['name_stats'] ?> '"><span>Читать </span></button><!--Кнопка для перехода на страницу с полным содержанием-->
                            </div>

                            <?php endforeach;?>    
                    </ul> 
                </li> 
        </ul>
        </div>
        <button class="registerbtn" onclick="document.location='form.php'"><span>Добавить статью</button>
    </div>
 </main>

<script src="assets/js/search.js"></script>
<script src="assets/js/myFunction.js"></script>
<script src="assets/js/passiv.js"></script>
<script src="assets/js/accordion.js"></script>
</body>
</html>

