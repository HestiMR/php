<?php

$link=mysql_connect('localhost','root','');
//untuk koneksi 

$result=mysql_query('USE showroommobil');
$result=mysql_query('SELECT * FROM tabelmobil');
while ($row=mysql_fetch_array($result,MYSQL_BOTH))
 {
   echo $row[0]." ".$row['merk']." ".$row['model']." ";
   echo $row[3]." ".$row['pintu'] ;
   echo "$row[5] $row[6] $row[7]";
   echo "<br/>";
 }
?>