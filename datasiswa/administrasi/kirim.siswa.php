<?php
include"./tanggal.php";
include"sambung.php";
if(isset($tambah)){
$cek=mysql_query("SELECT nama,ttl,ortu from data_siswa where nama='$nama' and ttl='$tempat_lahir|$tgl_lahir|$bln_lahir|$thn_lahir' and ortu like '$nama_bapak%'");
$hsl=mysql_num_rows($cek);
if($hsl=="0"){
$cek2=mysql_query("SELECT userid from data_siswa where userid='$userid'");
$hsl2=mysql_num_rows($cek2);
$user2=date("s");
if($hsl2!=="0"){
    $userid="$userid$user2";
}
$tambah=mysql_query("INSERT INTO `data_siswa` ( `id` , `jurusan` , `kelas` , `gelombang` , `induk` , `nama` , `ttl` , `alamat` , `kota` , `ortu` , `asal_sekolah` , `th_lulus` , `telp` , `hp` , email, agama,`alamat_sekolah` , `tahun` , `data_sekolah` , `data_kerja` , `biaya_daftar` , `ang1` , `ang2` , `ang3` , `ang4` , `ang5` , `ang6` , `ang7` , `ang8` , `ang9` , `ang10` , `status` , `userid` , `password` , `tanngal` )
VALUES ('' , '$pilihan_jurusan', '$kelas', '$gelombang', '$no_induk', '$nama', '$tempat_lahir|$tgl_lahir|$bln_lahir|$thn_lahir', '$alamat_siswa|$kelurahan|$kecamatan', '$kota|$kode_pos', '$nama_bapak|$pekerjaan_bapak|$nama_ibu|$pekerjaan_ibu', '$nama_sekolah', '$thn_lulus', '$telp_siswa', '$hp','$email_siswa','$agama', '$alamat_sekolah|$telp_sekolah', '$tahun', '$stts_pendidikan $pendidikan|$jurusan', '$pekerjaan|$nama_kerja|$alamat_kerja|$kota_kerja|$kodepos_kerja|$telp_kerja|$faks_kerja', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '$userid', '$password', '$now')");
header("location:./diploma.php?menu=data.siswa&status=0");
}else{
header("location:./diploma.php?menu=data.siswa&status=0");
}
}elseif(isset($ubah)){
    $ubah=mysql_query("UPDATE data_siswa set jurusan='$pilihan_jurusan', kelas='$kelas', induk='$no_induk', nama='$nama', ttl='$tempat_lahir|$tgl_lahir|$bln_lahir|$thn_lahir',alamat='$alamat_siswa|$kelurahan|$kecamatan' , kota='$kota|$kode_pos' , ortu='$nama_bapak|$pekerjaan_bapak|$nama_ibu|$pekerjaan_ibu' , asal_sekolah='$nama_sekolah' , th_lulus='$thn_lulus' , telp='$telp_siswa' , hp='$hp' , email='$email_siswa', agama='$agama', alamat_sekolah='$alamat_sekolah|$telp_sekolah' , tahun='$tahun' , data_sekolah='$pendidikan|$jurusan' , data_kerja='$pekerjaan|$nama_kerja|$alamat_kerja|$kota_kerja|$kodepos_kerja|$telp_kerja|$faks_kerja', userid='$userid' , password='$password' , tanngal='$now' where id='$id'");
header("location:./diploma.php?menu=data.siswa&status=0");
}else{
header("location:./diploma.php?menu=data.siswa&status=0");
}
?>