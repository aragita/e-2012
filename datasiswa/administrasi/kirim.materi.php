<?php
include"cek.php";
include"sambung.php";
if(isset($tambah)){
        $tambah=mysql_query("INSERT INTO `materi` ( `id` , `jurusan` , `semester` , `materi` , `ses_inst` , `ses_ass` )
VALUES ('', '$jurusan', '$semester', '$materi', '$ses_inst', '$ses_ass')");
header("Location:./diploma.php?menu=data.materi");
}elseif(isset($act)){
    $hapus=mysql_query("delete from materi where id='$id'");
header("Location:./diploma.php?menu=data.materi");
}elseif(isset($ubah)){
    $ubah=mysql_query("update materi set jurusan='$jurusan', semester='$semester', materi='$materi', ses_inst='$ses_inst', ses_ass='$ses_ass' where id='$id'");
header("Location:./diploma.php?menu=data.materi");
}
?>