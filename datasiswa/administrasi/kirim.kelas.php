<?php
$mj=explode("|", $materi_jurusan);
include"sambung.php";
$cek=mysql_query("select nama from kelas where nama='$nama' and id_materi='$mj[1]'");
$hsil=mysql_num_rows($cek);
if(isset($tambah)){
if($hsil==0){
    $tambah=mysql_query("INSERT INTO `kelas` ( `id` , `nama` , id_materi, `mulai` , `jurusan` , kode_instruktur, kode_assisten1, kode_assisten2, session )
VALUES ('', '$nama', '$mj[1]','$tgl $bln $thn', '$mj[0]', '$instruktur','$assisten1','$assisten2','$session')");
$ubah=mysql_query("update data_kelas set status='1' where nama_kelas='$nama'");
header("Location:./diploma.php?menu=data.kelas&status=0");
}
}
?>