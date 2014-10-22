<?php
include"cek.php";
include"sambung.php";
if(isset($tambah)){
        $tambah=mysql_query("INSERT INTO `instruktur` ( `id` , `kode` , `nama` , password, `status` )VALUES ('', '$kode', '$nama', '$password', '$status')");
header("Location:./diploma.php?menu=data.instruktur");
}elseif(isset($act)){
    $hapus=mysql_query("delete from instruktur where id='$id'");
header("Location:./diploma.php?menu=data.instruktur");
}elseif(isset($ubah)){
    $ubah=mysql_query("update instruktur set kode='$kode', nama='$nama', password='$password', status='$status' where id='$id'");
header("Location:./diploma.php?menu=data.instruktur");
}
?>