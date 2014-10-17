<?php
include"cek.php";
include"tanggal.php";
include"sambung.php";
$cek=mysql_query("select * from data_kelas where nama_kelas='$nama'");
$hsl=mysql_num_rows($cek);
if($hsl==0){
$tanggal="$tgl $bln $thn";
$tambah=mysql_query("INSERT INTO `data_kelas` ( `id_data_kelas` , `nama_kelas` , `program` , `tanggal_mulai` , `status` ) 
VALUES ('', '$nama', '$program', '$tanggal', '0')");
header("location:./diploma.php?menu=data.kelas");
}else{
header("location:./diploma.php?menu=tambah.data.kelas");
}  
?>