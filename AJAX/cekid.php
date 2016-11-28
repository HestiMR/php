<?php
error_reporting(0);
//untuk menghubungkan dengan dtabase
mysql_connect("localhost","root","");
mysql_select_db("user");

//variabel untuk id
$id = $_GET['q'];

$query = mysql_query("select iduser from tabeluser where iduser='$id'");
//proses pengecekan dengan 2 kemungkinan :
if(mysql_num_rows($query)==0){
    echo "$id belum ada yang pakai";
}else{
    echo "$id sudah ada yang pakai";
}


?>