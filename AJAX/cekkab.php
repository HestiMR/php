<?php
mysql_connect("localhost","root",""); 
mysql_select_db("user"); 

$prop = $_GET['k'];
$query = mysql_query("SELECT kab.idkab , kab.namakab FROM kab , prop WHERE kab.idprop = prop.idprop and prop.idprop=$prop"); 
if(mysql_num_rows($query)>0){
    echo "<select>";
    while($row=mysql_fetch_array($query))
    {
        echo "<option value='$row[0]'>$row[1]<br>";
    }
    echo "</select>";
    }
   else
   {
    echo "tidak ada kota di $prop";
   }
?>