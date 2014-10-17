<?php
session_start();
include"./sambung.php";
if(isset($batal)){
    header("location:./index.php");
}elseif($user=="" or $password==""){
    header("location:./konfirmasi.php?err=3");
}else{
    include"./sambung.php";
    $bc=mysql_query("select * from data_siswa where userid='$user'");
    $cek=mysql_num_rows($bc);
    $hsl=mysql_fetch_array($bc);
    if($cek!==1){
       header("location:./konfirmasi.php?err=1");
    }elseif($password!=="$hsl[password]"){
       header("location:./konfirmasi.php?err=2");
    }else{
        $userid="$hsl[userid]";
        $nama_siswa="$hsl[nama]";
        $id_siswa="$hsl[id]";
        session_register("userid","nama_siswa","id_siswa");
        header("location:./siswa.php");
    }
}
?>