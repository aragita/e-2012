<?php
include"cek.php";
include"sambung.php";
$cek=mysql_query("select userid from admin where password='$pw_lama'");
$jml=mysql_num_rows($cek);
if($jml=="1"){
    if($pw_baru1!=="$pw_baru2"){
        header("location:./administrator.php?act=1");
    }else{
       $ubah=mysql_query("UPDATE admin set password='$pw_baru1' where userid='$userid'");
       $pw="$pw_baru1";
       session_register("pw");
       header("location:./administrator.php?act=2");
    }
}else{
header("location:./administrator.php?act=3");
}
?>