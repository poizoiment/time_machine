<?php
    $mysqli = false;
    function connectDB (){
        global $mysqli;
        $mysqli = new mysqli("localhost","root","","itl.wiki");
        $mysqli->query ("SET NAMES 'utf-8'");

    }
    echo "Подключение успешно установлено";

    function closeDB (){
        global $mysqli;
        $mysqli->close();

    }


?>