<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale = 1.0">
    <link rel = "stylesheet" href="assets/css/style_logo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;1,500&family=Playfair+Display:wght@400;600&family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <title>Форма регистрации │ITL.WIKI</title>
</head>
<body>
    <header class="header" id="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">ITL.WIKI</div>
            </div>
        </div>
    </header>
    <div id="rectangel" class="workspace">
        <div class="content">
        <form action="load.php" method = "post" enctype = "multipart/form-data" >
              
                  <h1>Добавить статью</h1>
                  <p>Пожалуйста, заполните эту форму, чтобы создать новую запись.</p>
                  <hr>
              
                  <label for="title"><b>Название</b></label>
                  <input type="text" placeholder="Введите название вашей статьи..." name="title" id="title" required>
              
                  <label for="intro"><b>Описание</b></label>
                  <input type="text" placeholder="Кратко опишете содержание/вступление своей статьи..." name="intro_text" id="intro_text"  required >
                  <label for="intro"><b>Выбирете статью, которую хотите добавить</b></label>
                    <div class = "warning"><p>ВНИМАНИЕ! Для корректного отображение используйте файл разрешения .htm или .html!</p></div>
                  <input  type = "file" name = "loads" id ="loads">

                  <label for="intro"><b>Выбирите раздел в который хотите добавить статью</b></label>
                  <select class = "choice" name = "BDO">
                    <option>1C и СУБД</option>
                    <option>DNS-записи</option>
                    <option>ESXI</option>
                    <option>Mac OS</option>
                    <option>MS SQL</option>
                    <option>Outlook</option>
                    <option>OpenVPN</option>
                  </select>
                  <hr>
                  <button type="submit" class="registerbtn">Добавить</button>
                
              </form>
            
        </div>
    </div>
</body>
</html>
