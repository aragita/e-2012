<?php
include"cek.php"
include"tanggal";
include"sambung.php";
$cek=mysql_query("select nama_kelas from data_kelas where nama_kelas='$nama'");
$hsl=msql_num_rows($cek);
if($hsl==0){
    if(isset($tambah)){
$tanggal="$tgl $bln $thn";
$tambah=msql_query("INSERT INTO `data_kelas` ( `id_data_kelas` , `nama_kelas` , `program` , `tanggal_mulai` , `status` )
VALUES ('', '$nama', '$program', '$tanggal', '0')");
header("location:./diploma.php?menu=data.kelas");
    }
}


?>