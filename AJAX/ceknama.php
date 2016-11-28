<?php
error_reporting(0);
//untuk menghubungkan dengan dtabase
mysql_connect("localhost","root","");
mysql_select_db("user");

//variabel untuk id
$nm = $_GET['n'];

$query = mysql_query("select nama from tabeluser where nama='$nm'");
//proses pengecekan dengan 2 kemungkinan :
if(mysql_num_rows($query)==0){
    echo "$nm belum ada yang pakai";
}else{
    echo "$nm sudah ada yang pakai";
}


?>