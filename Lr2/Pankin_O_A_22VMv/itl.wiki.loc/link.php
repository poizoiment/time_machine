<?php/*

    $db=new PDO("mysql:host=localhost; dbname=itl.wiki;charset=utf8","root","");
    $rest = [];
    
    echo "<pre>";

    if($query = $db->query("SELECT * FROM `stats_1C`")){
        $rest = $query->fetchAll(PDO::FETCH_ASSOC);
        var_dump($rest);
    } else{
        var_dump($db->errorInfo());
    }

    echo "</pre>";*/
?>