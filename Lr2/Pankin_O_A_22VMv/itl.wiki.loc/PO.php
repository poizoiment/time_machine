<!DOCTYPE html>
<html lang="ru">
    <head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;1,500&family=Playfair+Display:wght@400;600&family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href="assets/css/style_PO.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ПО для инженера │ITL.WIKI</title>
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
                    <h1 class="intro__title">ПО для инженера</h1>
                    <a class="btn">На ваш вопрос найдется ответ</a>
                </div>
            </div>
        </div>
            <div id="rectangel" class="workspace">
            <div class="wrap">
            <input type = "search" id="input" class="input" placeholder="Введите интересующую вас тему с заглавной буквы...">
        </div>  
        <div class="content">
            <ul class="tree" id="myUL">

                <div class="tab">
                   <li> <button class="tablinks" onclick="open_po(event, 'AccessEnum 1.33')">AccessEnum 1.33</button></li>
                   <li><button class="tablinks" onclick="open_po(event, 'Bginfo')">Bginfo</button></li>
                   <li> <button class="tablinks" onclick="open_po(event, 'BlueScreenView')">BlueScreenView</button></li>
                    </div>


                    <div id="AccessEnum 1.33" class="tabcontent" style = "display: none;">
                     <h3>AccessEnum версии 1.33</h3>
                     <p>Хотя гибкая модель безопасности, используемая системами на основе Windows NT, обеспечивает полный контроль над разрешениями на безопасность и файл, управление разрешениями, чтобы пользователи имели соответствующий доступ к файлам, каталогам и разделам реестра, может быть трудно. 
                         Встроенный способ быстрого просмотра доступа пользователей к дереву каталогов или ключей отсутствует. AccessEnum предоставляет полное представление о параметрах безопасности файловой системы и реестра в секундах, что делает его идеальным инструментом для поиска дыр в безопасности и блокировки разрешений при необходимости.</p>
                         <img src = "https://docs.microsoft.com/ru-ru/sysinternals/downloads/media/accessenum/accessenum.png" style = "    margin: 10px auto 20px; display: block; width: 350px; height:250px;">
                         <p>AccessEnum использует стандартные WINDOWS API безопасности для заполнения представления списка с помощью сведений о доступе для чтения, записи и запрета доступа.</p>
                         <button class="download" onclick="location.href = 'https:/download.sysinternals.com/files/AccessEnum.zip';"><i class="fa fa-download"></i> Скачать </button>
                    </div>



                    <div id="Bginfo" class="tabcontent" style = "display: none;" >
                    <h3>Bginfo</h3>
                    <p>Сколько раз вы переходили к системе в офисе и должны были щелкнуть несколько окон диагностики, чтобы напомнить вам о важных аспектах конфигурации, таких как ее имя, IP-адрес или версия операционной системы? Если вы управляете несколькими компьютерами, вероятно, вам потребуется BGInfo. Она автоматически отображает соответствующие сведения о компьютере Windows в фоновом режиме, например имя компьютера, IP-адрес, версию пакета обновления и многое другое. Вы можете изменить любое поле, а также цвет шрифта и фона, а также поместить его в папку запуска, чтобы запустить каждую загрузку или даже настроить его для отображения в качестве фона для экрана входа.
                        Так как BGInfo просто записывает новое растровое изображение рабочего стола и завершает работу, вам не нужно беспокоиться об использовании системных ресурсов или о вмешательстве в другие приложения.</p>
                        <img src = "https://docs.microsoft.com/ru-ru/sysinternals/downloads/media/bginfo/bginfo.jpg" style = "    margin: 10px auto 20px; display: block; width: 350px; height:250px;">
                        <h4>Установка и использование</h4>
                    <p>Поместив BGInfo в папку startup , вы можете убедиться, что отображаемые системные сведения обновлены при каждой загрузке. После того как вы урегулировали отображаемые сведения, используйте параметр командной строки /timer:0 , чтобы обновить отображение без отображения диалогового окна.Вы также можете использовать планировщик Windows для регулярного запуска BGInfo, чтобы обеспечить актуальность длительных систем.
                        При создании файла конфигурации BGInfo (с помощью файла| Сохраните Параметры пункт меню) вы можете автоматически импортировать и использовать эти параметры в других системах, добавив параметр командной строки /Ipath<> или /iqpath<>.</p>
                        <img src = "https://docs.microsoft.com/ru-ru/sysinternals/downloads/media/bginfo/bginfo-dialog.jpg" style = "    margin: 10px auto 20px; display: block; width: 350px; height:250px;">
                        <h4>Использование BgInfo</h4>
                        <p>При запуске BGInfo отображается внешний вид и содержимое фона рабочего стола по умолчанию. Если оставить нетронутым, он будет автоматически применять эти параметры и выйти после истечения срока действия таймера отсчета 10 секунд.
                            При выборе любой кнопки или пункта меню таймер отключается, что позволяет настроить макет и содержимое фоновой информации.
                            Если вы хотите, чтобы BGInfo редактировал или использовал конфигурацию, хранящуюся в файле (вместо конфигурации по умолчанию, которая хранится в реестре), укажите имя файла в командной строке:</p>
                        <p>BGInfo MyConfig.bgi</p>
                        <table aria-label="Параметры командной строки" class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Параметр</th>
                                    <th>Описание</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>&lt;Путь&gt;</strong></td>
                                    <td>Указывает имя файла конфигурации, используемого для текущего сеанса. Изменения в конфигурации автоматически сохраняются обратно в файл при нажатии кнопки "ОК" или "Применить". Если этот параметр отсутствует <em>BGInfo</em> , использует сведения о конфигурации по умолчанию, хранящиеся в реестре в текущем пользователе ("HKEY_CURRENT_USER\Software\Winternals\<em>BGInfo</em>").</td>
                                </tr>
                                <tr>
                                    <td><strong>/timer</strong></td>
                                    <td>Указывает значение времени ожидания для таймера обратного отсчета в секундах. Если указать ноль, экран будет обновляться без отображения диалогового окна конфигурации. При указании 300 секунд или дольше таймер отключается полностью.</td>
                                </tr>
                                <tr>
                                    <td><strong>/popup</strong></td>
                                    <td>Приводит к созданию всплывающего окна <em>BGInfo</em> , содержащего настроенные сведения без обновления рабочего стола. Данные форматируются точно так же, как и при отображении на рабочем столе, но находятся в окне, размещенном в подходящем окне. При использовании этого параметра база данных журнала не обновляется.</td>
                                </tr>
                                <tr>
                                    <td><strong>/silent</strong></td>
                                    <td>Подавляет сообщения об ошибках.</td>
                                </tr>
                                <tr>
                                    <td><strong>/taskbar</strong></td>
                                    <td>Приводит к тому, что <em>BGInfo</em> помещает значок в область состояния панели задач без обновления рабочего стола. Нажатие значка приводит к отображению настроенных сведений во всплывающем окне. При использовании этого параметра база данных журнала не обновляется.</td>
                                </tr>
                                <tr>
                                    <td><strong>/all</strong></td>
                                    <td>Указывает, что <em>BGInfo</em> должен изменить фоновое изображение для всех пользователей, вошедшего в систему. Этот параметр полезен в среде служб терминалов или при планировании периодического выполнения <em>BGInfo</em> в системе, используемой несколькими пользователями (см. раздел "Использование расписания ниже").</td>
                                </tr>
                                <tr>
                                    <td><strong>/log</strong></td>
                                    <td>Заставляет <em>BGInfo</em> записывать ошибки в указанный файл журнала вместо создания диалогового окна предупреждения. Это полезно для отслеживания ошибок, возникающих при запуске <em>BGInfo</em> в планировщике.</td>
                                </tr>
                                <tr>
                                    <td><strong>/rtf</strong></td>
                                    <td>Вызывает запись выходного текста <em>BGInfo</em> в RTF-файл. Включены все сведения о форматировании и цвета.</td>
                                </tr>
                            </tbody>
                         </table>`
                        <button class="download" onclick="location.href = 'https:/download.sysinternals.com/files/BGInfo.zip';"><i class="fa fa-download"></i> Скачать </button>
                    </div>



                    <div id="BlueScreenView" class="tabcontent" style = "display: none;">
                    <h3>BlueScreenView</h3>
                    <p>BlueScreenView - это небольшое приложение, созданное для отображения информации, содержащейся в файлах MiniDump. Файлы аварийных дампов памяти (MiniDump) создаются при ошибке и появлении синего экрана Windows. В меню приложения вы сможете просмотреть список всех файлов MiniDump и содержащуюся в них базовую информацию, включая дату появления ошибки и название файла.
                        В нижней части окна вы сможете просмотреть список причастных к сбою драйверов, необработанные данные (так называемые Raw Data) и даже увидеть изображение, воссоздающее синий экран в стиле Windows XP. При двойном щелчке по любому из файлов вы получите более подробную информацию.
                        Если вы хотите понять, почему произошла системная ошибка, или вам просто интересно знать, какие ошибки возникали в системе ранее, то BlueScreenView поможет вам получить доступ к информации. С помощью BlueScreenView вы сможете получить данные, которые уже не ожидали найти после перезагрузки компьютера.</p>
                        <img src = "https://img.utdstc.com/screen/1f4/389/1f43894b57f455648c472bb423003637cccfa388cd2aa4d9ba473a8ed0ce279b:200"  width="300" height="300">
                        <img src = "https://img.utdstc.com/screen/ad1/c51/ad1c51be38e4b182e1d56d250cc8ea113d4736d161b803bea1c6c7715d6283ad:200"  width="300" height="300">
                        <img src = "https://img.utdstc.com/screen/035/79f/03579f72023fa5678e97423eb3bbd2e52a9bcf467a5fbc2fbb627348125a00d1:200"  width="300" height="300">
                        <button class="download" onclick="location.href = 'https:/bluescreenview.ru.uptodown.com/windows/download';"><i class="fa fa-download"></i> Скачать </button>
                    </div>
                </ul>

            </div>
     
        </div>
               <script src="assets/js/search.js"></script>
                <script src="assets/js/myFunction.js"></script>
                <script src="assets/js/passiv.js"></script>
                <script src="assets/js/table_PO.js"></script>
    </body>
    
</html>