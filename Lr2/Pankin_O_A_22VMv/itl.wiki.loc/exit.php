<?php
   setcookie('user',$user ['name'],time()-3600,"/");
   header('Location: http://itl.wiki.loc/whod.php')
?>