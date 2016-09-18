<?php
$f=fopen("stat.dat","a+");
flock($f,LOCK_EX);
$count=fread($f,100);
@$count++;
ftruncate($f,0);
fwrite($f,$count);
fflush($f);
flock($f,LOCK_UN);
fclose($f);

$f=fopen("stat_ip.dat","a+");
fwrite($f,date("Y.m.d h:I:s").'	'.$count.'	'.$_SERVER['REMOTE_ADDR'].'	'.$_SERVER['HTTP_USER_AGENT']."\r\n");
fclose($f);

echo "Количество просмотров: $count"; 
echo "mike - 2016";
?>