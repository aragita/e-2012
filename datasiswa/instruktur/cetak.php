<?php
include"cek.php";
include"tanggal.php";
include"sambung.php";
$baca=mysql_query("select kelas.kode_assisten1, instruktur.nama from kelas, instruktur where kelas.id='$id_kelas' and kelas.kode_assisten1=instruktur.kode");
$dd=mysql_fetch_array($baca);
$baca2=mysql_query("select kelas.kode_assisten2, instruktur.nama from kelas, instruktur where kelas.id='$id_kelas' and kelas.kode_assisten2=instruktur.kode");
$dd2=mysql_fetch_array($baca2);
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
			<p class="MsoTitle" align="center" style="margin-top: 3px; margin-bottom: 3px">
			<font face="Tahoma" size="4">
			<span style="font-family: Bremen Blk BT; font-weight: normal">
			Proses Belajar Mengajar</span></font></p>
			<p class="MsoNormal" align="center" style="text-align: center; margin-top:3px; margin-bottom:3px">
			<font face="Tahoma">
			<span lang="EN-GB" style="font-family: Bremen Blk BT">
			<font size="4">Kelas : </font> </span><span lang="en-gb">
			<font size="4"><? echo strtoupper($kelas);?></font></span></font></p>
			<p class="MsoNormal" style="margin-top: 3px; margin-bottom: 3px">&nbsp;</p>
			<p class="MsoNormal" style="margin-top: 3px; margin-bottom: 3px">&nbsp;</p>
			<table border="0" width="100%" cellspacing="3" cellpadding="3" id="table3">
				<tr>
					<td width="85">
					<p style="margin-top: 0; margin-bottom: 0">
					<font face="Tahoma"><span lang="EN-GB">Materi</span></font></td>
					<td>
					<p style="margin-top: 0; margin-bottom: 0">
					<font face="Tahoma"><span lang="EN-GB">:&nbsp;&nbsp;
			</span><span lang="en-gb"><?=$materi?></span></font></td>
				</tr>
				<tr>
					<td width="85">
					<p style="margin-top: 0; margin-bottom: 0">
					<font face="Tahoma"><span lang="EN-GB">Instruktur</span></font></td>
					<td>
					<p style="margin-top: 0; margin-bottom: 0">
					<font face="Tahoma"><span lang="EN-GB">:&nbsp;&nbsp;
			</span><span lang="en-gb"><?=$nama_user?></span></font></td>
				</tr>
				<tr>
					<td width="85">
					<p style="margin-top: 0; margin-bottom: 0">
			<span lang="EN-GB" style="font-family: Tahoma">
					Assisten</span></td>
					<td>
			<p style="margin-top: 0; margin-bottom: 0">
			<span lang="EN-GB" style="font-family: Tahoma">
			:&nbsp;&nbsp; <?=$dd[nama]?><? if($dd2[nama]!==""){echo", $dd2[nama]";}?></span></p>
					</td>
				</tr>
			</table>
			<p class="MsoNormal" style="margin-top: 3px; margin-bottom: 3px">
			<font face="Tahoma"><span lang="EN-GB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></font></p>
			<p style="margin-top: 3px; margin-bottom: 3px">&nbsp;</p>
			<p class="MsoNormal" style="margin-top: 3px; margin-bottom: 3px">
			<font face="Tahoma"><span lang="EN-GB">Telah dikoreksi oleh pihak 
			Direktur:</span></font></p>
			<p class="MsoNormal" style="margin-top: 3px; margin-bottom: 3px">
			<font face="Tahoma"><span lang="EN-GB">Pada Tanggal&nbsp; :&nbsp; …………………….</span><span lang="en-gb"><? echo date("Y");?></span></font></p>
			<p style="margin-top: 3px; margin-bottom: 3px">&nbsp;</p>
			<p style="margin-top: 3px; margin-bottom: 3px">&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<table border="0" width="100%" cellspacing="0" cellpadding="0" id="table2">
				<tr>
					<td>&nbsp;</td>
					<td width="284">
					<p align="center" style="margin-top: 0; margin-bottom: 0">
					<font face="Tahoma"><span lang="EN-GB">Mengetahui,</span></font></p>
					<p align="center" style="margin-top: 0; margin-bottom: 0">
					<font face="Tahoma">
					<span lang="EN-GB">Direktur LPKBM MADCOMS</span></font></p>
					<p align="center">&nbsp;</p>
					<p align="center">&nbsp;</p>
					<p align="center" style="margin-top: 0; margin-bottom: 0">
					<font face="Tahoma">
					<b>Bp. Handoko Budisetyo </b></font></p>
					<p align="center" style="margin-top: 0; margin-bottom: 0">
					<font face="Tahoma">Direktur</font></p>
					<p>&nbsp;</td>
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