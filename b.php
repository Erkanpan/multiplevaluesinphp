<?php

try {
	
$coun = $_POST['coun'];

$counex = explode ('|', $coun);

$codes = $counex[0];

$country = $counex[1];


$db = new PDO("mysql:host=localhost;dbname=YYYYYYY;charset=utf8","YYYYYY","PASSWORD");
  
  $db-> setAttribute (PDO :: ATTR_ERRMODE, PDO :: ERRMODE_WARNING);

$ekle = $db->exec("INSERT INTO test ( codes, country )
  VALUES ( '$codes', '$country')");


} catch ( PDOException $e ){

     echo "Bir Hata Oluştu error: ".$e->getMessage();
     
 }



?>
