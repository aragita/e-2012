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
			<p class="MsoTitle" align="center" style="margin-top: 0; margin-bottom: 0">
			<span style="font-size: 16.0pt; font-family: Bremen Blk BT; font-weight: normal">
			Laporan Proses Belajar Mengajar</span></p>
			<p class="MsoTitle" align="center" style="margin-top: 0; margin-bottom: 0">
			<span style="font-size: 16.0pt; font-family: Bremen Blk BT; font-weight: normal">
			Kelas : <? echo strtoupper($kelas);?></span></p>
			<p align="center" style="margin-top: 0; margin-bottom: 0"><b>
			<span lang="EN-GB" style="font-size: 14.0pt; font-family: Bremen Blk BT">
			Materi : <?=$materi?></span></b></p>
			<p class="MsoNormal" style="margin-top: 3px; margin-bottom: 3px">&nbsp;</p>
			<p class="MsoNormal" style="text-indent: -.25in; margin-left: .25in">
			<span lang="EN-GB" style="font-family: Symbol"><font size="3">·<span style="font-style: normal; font-variant: normal; font-weight: normal; font-family: Times New Roman">&nbsp;&nbsp;&nbsp;</span></font></span><b><span lang="EN-GB"><font size="3">Hambatan:</font></span></b></p>
			<p class="MsoBodyTextIndent" style="margin-left: 25px">
			<font size="2">Selama mengajar kelas <? echo strtoupper($kelas);?>, Instruktur dan 
			Assisten&nbsp; tidak mengalami hambatan yang cukup berarti, hanya ada 
			beberapa siswa yang kurang dalam menerima materi. &nbsp;</font></p>
			<p class="MsoNormal" style="text-indent: -.25in; margin-left: .25in">
			<span lang="EN-GB" style="font-family: Symbol"><font size="3">·<span style="font-style: normal; font-variant: normal; font-weight: normal; font-family: Times New Roman">&nbsp;&nbsp;&nbsp;</span></font></span><b><span lang="EN-GB"><font size="3">Penanganan:</font></span></b></p>
			<p class="MsoNormal" style="margin-left:.25in;text-align:justify">
			<span lang="EN-GB"><font size="2">Instruktur dan Assisten langsung 
			membimbing siswa yang kurang tersebut.&nbsp;</font></span></p>
			<p class="MsoNormal" style="text-indent: -.25in; margin-left: .25in">
			<span lang="EN-GB" style="font-family: Symbol"><font size="3">·<span style="font-style: normal; font-variant: normal; font-weight: normal; font-family: Times New Roman">&nbsp;&nbsp;&nbsp;</span></font></span><b><span lang="EN-GB"><font size="3">Saran-Saran 
			:</font></span></b></p>
			<p class="MsoNormal" style="margin-left:.25in;text-align:justify">
			<span lang="EN-GB"><font size="2">Untuk sementara belum ada. &nbsp;</font></span></p>
			<p class="MsoNormal" style="text-indent: -.25in; margin-left: .25in">
			<span lang="EN-GB" style="font-family: Symbol"><font size="3">·<span style="font-style: normal; font-variant: normal; font-weight: normal; font-family: Times New Roman">&nbsp;&nbsp;&nbsp;</span></font></span><b><span lang="EN-GB"><font size="3">Penutup:</font></span></b></p>
			<p class="MsoNormal" style="margin-left:.25in;text-align:justify">
			<span lang="EN-GB"><font size="2">Demikian laporan ini disusun 
			sebagai syarat pelaporan setiap akhir proses belajar mengajar. Dan 
			semoga semua hal yang telah disampaikan instruktur pada laporan ini 
			dapat dijadikan sebagai pelajaran dan pengalaman baik bagi pihak 
			instruktur sendiri maupun pihak lembaga.</font></span></p>
			<p class="MsoNormal" style="margin-left:.25in;text-align:justify">&nbsp;</p>
			<p class="MsoNormal" style="margin-left:.25in;text-align:justify">&nbsp;</p>
			<table border="0" width="100%" cellspacing="0" cellpadding="0" id="table5">
				<tr>
					<td>&nbsp;</td>
					<td width="354">
					<p align="center"><font size="3">Madiun, <?=$now?> <br>
					LPKBM MADCOMS </font></p>
					<p align="center">&nbsp;</p>
					<p align="center">&nbsp;</p>
					<p align="center"><u><b><font size="3"><?=$nama_user?><br>
					</font></b></u><font size="3">Instruktur</font></p>
					<p>&nbsp;</td>
				</tr>
			</table>
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