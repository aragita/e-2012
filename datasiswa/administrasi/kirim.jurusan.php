<?php
include"cek.php";
include"sambung.php";
if(isset($tambah)){
        $tambah=mysql_query("INSERT INTO `jurusan` ( `id` , `jurusan` , `kode` )
VALUES ('', '$jurusan', '$kode')");
header("Location:./diploma.php?f=data.jurusan.php");
}elseif(isset($act)){
    $hapus=mysql_query("delete from jurusan where id='$id'");
header("Location:./diploma.php?f=data.jurusan.php");
}elseif(isset($ubah)){
    $ubah=mysql_query("update jurusan set jurusan='$jurusan', kode='$kode' where id='$id'");
header("Location:./diploma.php?f=data.jurusan.php");
}
?>