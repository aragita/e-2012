<?php
session_start();
include"./sambung.php";
$baca=mysql_query("select id,nama,kode,password from instruktur where kode='$kode'");
$hasil=mysql_fetch_array($baca);
if($hasil[password]==$password){
$nama_user="$hasil[nama]";
$status="$hasil[status]";
session_register("kode");
session_register("nama_user");
session_register("status");
header("location:./instruktur.php?menu=utama");
}else{
header("location:./index.php?err1");
}
?>