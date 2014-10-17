<?php
include"cek.php";
include"tanggal.php";
include"sambung.php"; 
?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Laporan Proses Belajar Mengajar</title>
<link href="mencetak.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div align="center">
<div id="materi" style="text-align: center">
<div id="cetak" style="text-align: center">
	<table border="0" width="614" cellspacing="0" cellpadding="0" id="table1">
		<tr>
			<td>
			<p>
			<img border="0" src="images/logo_laporan.gif" width="607" height="124"></td>
		</tr>
		<tr>
			<td>
			<p class="MsoTitle" align="center" style="margin-top: 1px; margin-bottom: 1px">
			<font size="4">Daftar Nilai Siswa</font></p>
			<p class="MsoTitle" align="center" style="margin-top: 1px; margin-bottom: 1px">
			<span style="font-family: Bremen Blk BT; font-weight: normal">
			<font size="4">Kelas &nbsp;: <? echo strtoupper($kelas);?></font></span></p>
			<p class="MsoTitle" align="center" style="margin-top: 1px; margin-bottom: 1px">
			<span style="font-family: Bremen Blk BT; font-weight: normal">
			<font size="4">Materi : <?=$materi?></font></span></p>
			<table border="0" width="97%" cellspacing="0" cellpadding="0" id="table5">
				<tr>
					<td width="46" align="center" style="border: 1px solid #000000" bgcolor="#EAEAEA">
					<b>No.</b></td>
					<td width="100" align="center" style="border-right: 1px solid #000000; border-top: 1px solid #000000; border-bottom: 1px solid #000000" bgcolor="#EAEAEA">
					<b>No Induk</b></td>
					<td width="343" align="center" style="border-right: 1px solid #000000; border-top: 1px solid #000000; border-bottom: 1px solid #000000" bgcolor="#EAEAEA">
					<b>Nama</b></td>
					<td width="101" align="center" style="border-right: 1px solid #000000; border-top: 1px solid #000000; border-bottom: 1px solid #000000" bgcolor="#EAEAEA">
					<b>Nilai</b></td>
				</tr>
				<?
                $no=1;
                $kk=mysql_query("select kelas_aktif.*, data_siswa.* from kelas_aktif, data_siswa where kelas_aktif.id_kelas='$id_kelas' and kelas_aktif.id_materi='$id_materi' and kelas_aktif.id_siswa=data_siswa.id order by data_siswa.nama");
                while($d=mysql_fetch_array($kk)){
                    echo"<tr>
					<td width=\"46\" style=\"border-left: 1px solid #000000; border-right: 1px solid #000000; border-bottom: 1px solid #000000\">
					<p style=\"margin-left: 2px; margin-right: 2px\">
					<font size=\"2\">$no</font></td>
					<td width=\"100\" style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000\">
					<p style=\"margin-left: 2px; margin-right: 2px\">
					<font size=\"2\">$d[induk]</font></td>
					<td width=\"343\" style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000\">
					<p style=\"margin-left: 2px; margin-right: 2px\">
					<font size=\"2\">$d[nama]</font></td>
					<td width=\"101\" style=\"border-right: 1px solid #000000; border-bottom: 1px solid #000000\">
					<p style=\"margin-left: 2px; margin-right: 2px\" align=\"center\">
					<font size=\"2\">$d[nilai_harian]</font></td>
				</tr>";
                $no++;
                }
                ?>

			</table>
			<table border="0" width="100%" cellspacing="0" cellpadding="0" id="table6">
				<tr>
					<td>&nbsp;</td>
					<td width="248">
					<p align="center"><b><br>
					Madiun, <?=$now?><br>
					LPKBM MADCOMS</b></p>
					<p align="center">&nbsp;</p>
					<p align="center"><u><b><?=$nama_user?></b></u><br>
					Instruktur</td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
	</div>
</div>
<div id="menu">

			&nbsp;<table border="0" width="614" cellspacing="0" cellpadding="0" id="table4">
				<tr>
					<td bgcolor="#000080">
					<p align="center"><b>
					<font color="#FFFF00" face="Tahoma" size="2">
					<a href="javascript:window.print()"><font color="#FFFF00">Cetak</font></a></font></b></td>
					<td width="550" bgcolor="#000080">
					<p align="center"><b>
					<font color="#FFFF00" face="Tahoma" size="2">Halaman : 
					<a href="cetak3.php?menu=laporan&kelas=<?=$kelas?>&id_kelas=<?=$id_kelas?>&materi=<?=$materi?>&id_materi=<?=$id_materi?>">
					<font color="#FFFF00">cover</font></a> | 
                    <a href="cetak.php?menu=laporan&kelas=<?=$kelas?>&id_kelas=<?=$id_kelas?>&materi=<?=$materi?>&id_materi=<?=$id_materi?>">
					<font color="#FFFF00">Pengesahan</font></a> |
                    <a href="cetak2.php?menu=laporan&kelas=<?=$kelas?>&id_kelas=<?=$id_kelas?>&materi=<?=$materi?>&id_materi=<?=$id_materi?>">
					<font color="#FFFF00">Laporan</font></a> |
                    <a href="cetak4.php?menu=laporan&kelas=<?=$kelas?>&id_kelas=<?=$id_kelas?>&materi=<?=$materi?>&id_materi=<?=$id_materi?>">
					<font color="#FFFF00">Data Siswa</font></a> |
                    <a href="cetak5.php?menu=laporan&kelas=<?=$kelas?>&id_kelas=<?=$id_kelas?>&materi=<?=$materi?>&id_materi=<?=$id_materi?>">
					<font color="#FFFF00">Data Nilai</font></a> | 
                    <a href="instruktur.php?menu=data_nilai&kelas=<?=$kelas?>&id_kelas=<?=$id_kelas?>&materi=<?=$materi?>&id_materi=<?=$id_materi?>">
					<font color="#FFFF00">Keluar</font></a>
                    </font></b></td>
				</tr>
			</table>
			<p><b>
					<font color="#000080" face="Tahoma" size="2">&nbsp; </font></b>
</div>
</div>
</body>
</html>