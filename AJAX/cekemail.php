<?php
error_reporting(0);
//untuk menghubungkan dengan dtabase
mysql_connect("localhost","");
mysql_select_db("user");

//variabel untuk id
$mail = $_GET['p'];

$query = mysql_query("select useremail from tabeluser where useremail='$mail'");
//proses pengecekan dengan 2 kemungkinan :
if(mysql_num_rows($query)==0){
    echo "$mail belum ada yang pakai";
}else{
    echo "$mail sudah ada yang pakai";
}


?>