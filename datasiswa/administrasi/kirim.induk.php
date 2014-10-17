<?php
include"cek.php";
include"sambung.php";
$cek=mysql_query("select induk from data_siswa where induk='$induk' and id <> '$id'");
$hasil=mysql_num_rows($cek);
if(isset($kirim)){
    if($hasil==0){
    $ubah=mysql_query("update data_siswa set induk='$induk', kelas='$kelas', biaya_daftar='$biaya_daftar' where id='$id'");
header("Location:./diploma.php?menu=data.siswa");
}
}
?>