<?php
error_reporting(0);
include "konek.php";
  $id_mobil = $_POST['id_mobil'];
  $merk = $_POST['merk'];
  $model = $_POST['model'];
  $tipe = $_POST['tipe'];
  $pintu = $_POST['pintu'];
  $tahun_produksi = $_POST['tahun_produksi'];
  $negara_pembuat = $_POST['negara_pembuat'];
  $jenis_produksi = $_POST['jenis_produksi'];

  if (isset($_POST['insert'])) {
   $sql = "INSERT INTO `tabelmobil`(`Id_Mobil`, `Merk`, `Model`, `Tipe`, `Pintu`, `Tahun_Produksi`, `Negara_Pembuat`, `Jenis_Produksi`) VALUES ('$id_mobil','$merk','$model','$tipe','$pintuu','$tahun_produksi','$negara_pembuat','$jenis_produksi')";
   $exe = mysql_query($sql);
  }
  elseif (isset($_POST['update'])) {
   $sql = "UPDATE `tabelmobil` SET `Merk`='$merk',`Model`='$model',`Tipe`='$tipe',`Pintu`='$pintuu',`Tahun_Produksi`='$tahun_produksi',`Negara_Pembuat`='$negara_pembuat',`Jenis_Produksi`='$jenis_produksi' WHERE `Id_Mobil`='$id_mobil'";
   $exe = mysql_query($sql);
  }
  elseif (isset($_POST['delete'])) {
   $sql = "DELETE FROM tabelmobil WHERE `Id_Mobil`='$id_mobil'";
   $exe = mysql_query($sql);
  }
  elseif (isset($_POST['search'])) {
   $sql = "SELECT * FROM tabelmobil WHERE `Id_Mobil`='$id_mobil'";
   $exe = mysql_query($sql);
   echo "<table>\n";
   while($line = mysql_fetch_array($exe, MYSQL_NUM)){
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
     echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
   }
   echo "</table>\n";
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>FORM OLAH DATA</title>
</head>
<body>
<h3> DATA SHOWROOM MOBIL </h3>
<hr>
  <form action="" method="POST">
    KODE MOBIL  :<input type="text" name="id_mobil" ><br/>
    MEREK     : <input type="text" name="merk"  ><br/>
    MODEL     : <input type="text" name="model" ><br/>
    TIPE    : <input type="text" name="tipe" ><br/>
    PINTU     : <input type="text" name="pintu" ><br/>
    TAHUN PRODUKSI : <input type="text" name="tahun_produksi" ><br/>
    NEGARA PEMBUAT : <input type="text" name="negara_pembuat" ><br/>
    JENIS PRODUKSI : <input type="text" name="jenis_produksi" ><br/>
    <input type="submit" name="insert" value="Insert">
    <input type="submit" name="update" value="Update">
    <input type="submit" name="search" value="Search">
    <input type="submit" name="delete" value="Delete">
  </form>

</body>
</html>
