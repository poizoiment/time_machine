<?php
//echo $_POST ['title']. '<br>';
//echo $_POST['intro_text']. '<br>';
//echo $_FILES ['loads']['size'] . '<br>';
//echo $_FILES ['loads']['name'] . '<br>';
//echo $_FILES ['loads']['tmp_name'] . '<br>';

//echo $_POST ['BDO'] . '<br>';


$title = filter_var(trim($_POST['title']),
FILTER_SANITIZE_STRING);

$intro_text = filter_var(trim($_POST['intro_text']),
FILTER_SANITIZE_STRING);

$name_stats = filter_var(trim($_FILES ['loads']['name']),
FILTER_SANITIZE_STRING);

$BDO = filter_var(trim($_POST ['BDO']),
FILTER_SANITIZE_STRING);

move_uploaded_file($_FILES ['loads']['tmp_name'], 'pages/'.$_FILES ['loads']['name']);

$mysql=new mysqli('localhost','root','','itl.wiki');
if($BDO=='1C и СУБД'){
    $mysql -> query ("INSERT INTO `stats_1c`(`title`,`intro_text`,`name_stats`)
    VALUES ('$title','$intro_text','$name_stats')"); 
}else{
        if ($BDO=='DNS-записи'){
            $mysql -> query ("INSERT INTO `dns`(`title`,`intro_text`,`name_stats`)
            VALUES ('$title','$intro_text','$name_stats')"); 
        } else{
        if ($BDO=='ESXI'){
            $mysql -> query ("INSERT INTO `esxi`(`title`,`intro_text`,`name_stats`)
            VALUES ('$title','$intro_text','$name_stats')"); 
     }
     else{
         if ($BDO=='Mac OS'){
            $mysql -> query ("INSERT INTO `mac_os`(`title`,`intro_text`,`name_stats`)
            VALUES ('$title','$intro_text','$name_stats')"); 
     }
     else{
        if ($BDO=='MS SQL'){
            $mysql -> query ("INSERT INTO `ms_sql`(`title`,`intro_text`,`name_stats`)
            VALUES ('$title','$intro_text','$name_stats')"); 
        }
        else{
            if ($BDO=='Outlook'){
                $mysql -> query ("INSERT INTO `outlook`(`title`,`intro_text`,`name_stats`)
                VALUES ('$title','$intro_text','$name_stats')"); 
        }
        else{
            if ($BDO=='OpenVPN'){
                $mysql -> query ("INSERT INTO `openvpn`(`title`,`intro_text`,`name_stats`)
                VALUES ('$title','$intro_text','$name_stats')"); 
            }
            else{
                if ($BDO=='Железо'){
                    $mysql -> query ("INSERT INTO `iron`(`title`,`intro_text`,`name_stats`)
                    VALUES ('$title','$intro_text','$name_stats')"); 
                }
                else{
                    if ($BDO=='Перефирия,печать/сканирование'){
                        $mysql -> query ("INSERT INTO `peth`(`title`,`intro_text`,`name_stats`)
                        VALUES ('$title','$intro_text','$name_stats')"); 
                    }
                    else{
                        if ($BDO=='Почтовые серверы'){
                            $mysql -> query ("INSERT INTO `mail`(`title`,`intro_text`,`name_stats`)
                            VALUES ('$title','$intro_text','$name_stats')");                 
                        }
                        else{
                            if ($BDO=='Программное обеспечение'){
                                $mysql -> query ("INSERT INTO `PO`(`title`,`intro_text`,`name_stats`)
                                VALUES ('$title','$intro_text','$name_stats')");               
                            }
                            else{
                                if ($BDO=='Телефония'){
                                    $mysql -> query ("INSERT INTO `phone`(`title`,`intro_text`,`name_stats`)
                                    VALUES ('$title','$intro_text','$name_stats')");               
                                }
                                else{
                                    echo 'Ошибка: Тема не найдена!';
                                } 
                            }
                        }
                    }
                }
            }
        }
     }
    }
}}}

header ('Location: http://itl.wiki.loc/wiki.php');
$mysql-> close();

?>
