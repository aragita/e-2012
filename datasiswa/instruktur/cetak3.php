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
			<td>&nbsp;<p>&nbsp;</p>
			<p>
			<img border="0" src="images/logo_laporan.gif" width="607" height="124"></td>
		</tr>
		<tr>
			<td>
			<p class="MsoTitle" align="center" style="margin-top: 3px; margin-bottom: 3px">
			&nbsp;</p>
			<p class="MsoTitle" align="center" style="margin-top: 1px; margin-bottom: 1px">
			<span style="font-family: Bremen Blk BT; font-weight: normal">
			<font size="6">Laporan Proses Belajar Mengajar</font></span></p>
			<p class="MsoTitle" align="center" style="margin-top: 1px; margin-bottom: 1px">
			<span style="font-family: Bremen Blk BT; font-weight: normal">
			<font size="6">Kelas &nbsp;: <? echo strtoupper($kelas);?></font></span></p>
			<p class="MsoTitle" align="center" style="margin-top: 1px; margin-bottom: 1px">
			<span style="font-family: Bremen Blk BT; font-weight: normal">
			<font size="6">Materi : <?=$materi?></font></span></p>
			<p class="MsoNormal" style="margin-top: 3px; margin-bottom: 3px">&nbsp;</p>
			<p class="MsoNormal" style="text-indent: -.25in; margin-left: .25in" align="center">
			<img border="0" src="images/Logo.jpg" width="363" height="362"></p>
			<p>&nbsp;</p>
			<p align="center"><b><font size="5">Oleh : <?=$nama_user?></font></b></p>
			<p align="center">&nbsp;</p>
			<p align="center" style="margin-top: 2px; margin-bottom: 2px">
			<font size="6">Lembaga Pendidikan Komputer, Bisnis &amp; Manajemen
			</font></p>
			<p align="center" style="margin-top: 2px; margin-bottom: 2px">
			<font size="6">M A D C O M S </font></p>
			<p align="center" style="margin-top: 2px; margin-bottom: 2px">
			<font size="6">Jl. M.T. Haryono No. 63 Madiun</font></p>
			<p class="MsoNormal" style="margin-top: 3px; margin-bottom: 3px">&nbsp;</p>
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