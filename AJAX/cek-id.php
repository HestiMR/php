<!DOCTYPE html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("user");
$query = mysql_query("select idprop,namaprop from prop"); 
?>
<html>
<head>
<script>
var drz, kata, kata2, kata3, kab, kata5;

//fungsi untuk mengecek id user dari database
function cekid(){
	//userid = diambil dari nama database yang telah dibuat
    kata = document.getElementById("iduser").value;
    if(kata.length>2){
        document.getElementById("teks").innerHTML = "checking...";
        drz = buatajax();
        //dihubungkan dengan cekid.php
        var url="cekid.php";
        url=url+"?q="+kata;
        url=url+"&sid="+Math.random();
        drz.onreadystatechange=stateChanged;
        drz.open("GET",url,true);
        drz.send(null);
    }else{
        fokus();
    }
}

function buatajax(){
    if (window.XMLHttpRequest){
        return new XMLHttpRequest();
    }
    if (window.ActiveXObject){
        return new ActiveXObject("Microsoft.XMLHTTP");
    }
    return null;
}

function stateChanged(){
var data;
    if (drz.readyState==4){
        data=drz.responseText;
        document.getElementById("teks").innerHTML = data;
    }
}

function fokus(){
    document.getElementById("iduser").focus();
}

//fungsi untuk mengecek email
function cekemail(){
    //useremail = diambil dari nama database yang telah dibuat
    kata2 = document.getElementById("useremail").value;
    if(kata2.length>2){
        document.getElementById("teks2").innerHTML = "checking...";
        drz = buatajax();
        //dihubungkan dengan cekemail.php
        var url="cekemail.php";
        url=url+"?p="+kata2;
        url=url+"&sid="+Math.random();
        drz.onreadystatechange=stateChanged2;
        drz.open("GET",url,true);
        drz.send(null);
    }else{
        fokus2();
    }
}

function stateChanged2(){
var data;
    if (drz.readyState==4){
        data=drz.responseText;
        document.getElementById("teks2").innerHTML = data;
    }
}

function fokus2(){
    document.getElementById("useremail").focus();
}

//fungsi untuk mengecek umur
function cekumur(){
    //umur = diambil dari nama database yang telah dibuat
    kata3 = document.getElementById("umur").value;
    if(kata3.length>0){
        document.getElementById("teks3").innerHTML = "checking...";
        drz = buatajax();
        //dihubungkan dengan ceknum.php
        var url="ceknum.php";
        url=url+"?s="+kata3;
        url=url+"&sid="+Math.random();
        drz.onreadystatechange=stateChanged3;
        drz.open("GET",url,true);
        drz.send(null);
    }else{
        fokus3();
    }
}

function stateChanged3(){
var data;
    if (drz.readyState==4){
        data=drz.responseText;
        document.getElementById("teks3").innerHTML = data;
    }
}

function fokus3(){
    document.getElementById("umur").focus();
}

function cekkab(){ 
    kab = document.getElementById("idprop").value; 
    if(kab.length>0){ 
        document.getElementById("teks4").innerHTML = "checking..."; 
        drz = buatajax(); 
        var url="cekkab.php"; 
        url=url+"?k="+kab; 
        url=url+"&sid="+Math.random(); 
        drz.onreadystatechange=stateChanged4; 
        drz.open("GET",url,true); 
        drz.send(null); 
    }else{ 
        fokus4(); 
         } 
} 

function stateChanged4(){
var data;
    if (drz.readyState==4){
        data=drz.responseText;
        document.getElementById("teks4").innerHTML = data;
    }
}

function fokus4(){
    document.getElementById("prop").focus();
}


//nama
function ceknama(){ 
    kata5 = document.getElementById("nama").value; 
    if(kata5.length>2){ 
        document.getElementById("teks5").innerHTML = "checking..."; 
        drz = buatajax(); 
        var url="ceknama.php"; 
        url=url+"?n="+kata5; 
        url=url+"&sid="+Math.random(); 
        drz.onreadystatechange=stateChanged5; 
        drz.open("GET",url,true); 
        drz.send(null); 
    }
} 
function cek_empty(){ 
    nama = document.getElementById("nama").value; 
    if(nama.length==0){ 
        document.getElementById("teks5").innerHTML = "Wajib diisi !!"; 
        }else{
            ceknama();
        }
    }
function fokus5(){ 
    document.getElementById("nama").focus(); 
}
function stateChanged5(){
var data;
    if (drz.readyState==4){
        data=drz.responseText;
        document.getElementById("teks5").innerHTML = data;
    }
}

</script>
</head>
<body style="font-family:verdana;font-size:9pt">
<form method="POST">
<table cellpadding="3">
<h2>FORM DATA MAHASISWA</h2><hr>
<tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type=text name=nama id=nama onblur=cek_empty()></td>
    <td><span id=teks5 style="color:red;font-size:8pt"></span> <br></td>
</tr>
<tr>
    <td>User ID</td>
    <td>:</td>
    <td><input type=text name=iduser id=iduser onblur=cekid()></td>
    <td><span id=teks style="color:red;font-size:8pt"></span> <br></td>
</tr>
<tr>
    <td>Email</td>
    <td>:</td>
    <td><input type=text2 name=useremail id=useremail onblur=cekemail()></td>
    <td><span id=teks2 style="color:red;font-size:8pt"></span> <br></td>
</tr>
<tr>
    <td>Umur</td>
    <td>:</td>
    <td><input type=text3 name=umur id=umur onblur=cekumur()></td>
    <td><span id=teks3 style="color:red;font-size:8pt"></span> <br></td>
</tr>
<tr>
    <td>Asal</td>
    <td>:</td>
     <td><?php 
        if(mysql_num_rows($query)>0){
        echo "<select name='prop' id='idprop' onchange=cekkab()>";
        echo "<option value='0'>Pilih<br>";
        while($row=mysql_fetch_array($query))
        {
            echo "<option value='$row[0]'>$row[1]<br>";
        }
        echo "</select>";
        }
    ?></td>
<td><span id=teks4 style="color:red;font-size:8pt"></span> <br></td>
</tr> 
</table>
</form>
</body>
</html>