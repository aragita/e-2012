<?
include"cek.php";
include"./sambung.php";
if(isset($kirim)){
$dmy=date("d/m y");
$no=1;
$baca=mysql_query("select * from kelas_aktif where id_materi='$id_materi' and id_kelas='$id_kelas'");
while($data=mysql_fetch_array($baca)){
$add_absensi=mysql_query("update kelas_aktif set ses$input_absensi='$dmy<$n[$no]>' where id_siswa='$data[id_siswa]' and id_materi='$data[id_materi]'");
$no++;
}
header("location:./isi.absensi.php?kelas=$kelas&id_kelas=$id_kelas&materi=$materi&id_materi=$id_materi&jml_session=$jml_ses");
}
?>