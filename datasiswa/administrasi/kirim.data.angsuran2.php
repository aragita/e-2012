<?php
include"cek.php";
include"sambung.php";
       $ubah=mysql_query("UPDATE data_siswa set ang$ang ='$nilai' where induk='$induk'");
       header("location:./diploma.php?menu=data.angsuran.siswa&induk=$induk");
?>