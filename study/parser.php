<?php 
print '<pre>';
print file_get_contents('http://192.168.0.78/stat_ip.dat');

// error_reporting(E_ALL); 
// echo '1';
// $data=file_get_contents('http://smyut.ru/');
// echo '2';
// echo $data;


// $url="http://smyut.ru/stat_ip.dat";
// $referer="http://smyut.ru/";



// $ch = curl_init();
// echo '2';
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_HEADER, 0);
// curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.116 Safari/537.36");
// curl_setopt($ch, CURLOPT_REFERER, $referer);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// echo '3';
// $data=curl_exec($ch);
// curl_close($ch);
// echo $data;
echo '4';
?>