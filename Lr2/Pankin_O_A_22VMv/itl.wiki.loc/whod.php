<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale = 1.0">
    <link rel = "stylesheet" href="assets/css/style_logo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;1,500&family=Playfair+Display:wght@400;600&family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <title>Вход │ITL.WIKI</title>
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
            <form action="auth.php" method="post">
              
                  <h1>Войти</h1>
                  <p>Пожалуйста, заполните эту форму, чтобы войти в учетную запись.</p>
                  <hr>
              
                  <label for="email"><b>Логин</b></label>
                  <input type="text" placeholder="Введите логин" name="login" id="login" required>             
              
                  <label for="psw"><b>Пароль</b></label>
                  <input type="password" placeholder="Введите пароль" name="pass" id="pass" required>
                  <hr>
              
                 
                  <button type="submit" class="registerbtn">Войти</button>
                
              
                <div class="container signin">
                  <p>У вас ещё нет аккаунта?<a href="log.php">Создайте его!</a>.</p>
                </div>
              </form>
            
        </div>
    </div>
</body>
</html>