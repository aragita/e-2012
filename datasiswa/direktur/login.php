<?php
session_start();
include"./sambung.php";
if(isset($batal)){
    header("location:./index.php");
}elseif($user=="" or $password==""){
    echo"<p align=\"center\"><font face=\"Tahoma\" size=\"2\" color=\"#FF0000\"><b>Formulir Tidak 
lengkap.</b></font></p>
<p align=\"center\"><font face=\"Tahoma\" size=\"2\" color=\"#FF0000\"><b>Ulangi lagi</b></font></p>
<p align=\"center\"><b><font face=\"Tahoma\" size=\"2\" color=\"#FF0000\">
<a href=\"javascript:history.back();\">ULANGI</a></font></b></p>";
include"index.php";
}else{
    include"./sambung.php";
    $bc=mysql_query("select * from admin where userid='$user'");
    $cek=mysql_num_rows($bc);
    $hsl=mysql_fetch_array($bc);
    if($cek!==1){
      echo"<p align=\"center\"><font face=\"Tahoma\" size=\"2\" color=\"#FF0000\"><b>User ID Tidak 
terdfaftar.</b></font></p>
<p align=\"center\"><font face=\"Tahoma\" size=\"2\" color=\"#FF0000\"><b>Ulangi lagi</b></font></p>
<p align=\"center\"><b><font face=\"Tahoma\" size=\"2\" color=\"#FF0000\">
<a href=\"javascript:history.back();\">ULANGI</a></font></b></p>";
include"index.php";
    }elseif($password!=="$hsl[password]"){
       echo"<p align=\"center\"><font face=\"Tahoma\" size=\"2\" color=\"#FF0000\"><b>Password Salah</b></font></p>
<p align=\"center\"><font face=\"Tahoma\" size=\"2\" color=\"#FF0000\"><b>Ulangi lagi</b></font></p>
<p align=\"center\"><b><font face=\"Tahoma\" size=\"2\" color=\"#FF0000\">
<a href=\"javascript:history.back();\">ULANGI</a></font></b></p>";
include"index.php";
    }else{
        $userid="$hsl[userid]";
        $nama_siswa="$hsl[nama]";
        $id_siswa="$hsl[id]";
        session_register("userid");
        header("location:./direktur.php?menu=siswa");
    }
}
?>