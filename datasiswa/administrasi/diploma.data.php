<?php
include"cek.php";
include"tanggal.php";
?>
<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Sistem Administrasi Pendidikan</title>
<style>
<!--
body         { color: #000080; font-size: 10pt; font-family: Tahoma }
-->
A:link {
        COLOR: #000080; TEXT-DECORATION: none; font-size:10pt; font-family:tahoma
}
A:visited {
        COLOR: #000080; TEXT-DECORATION: none; font-family:tahoma; font-size:10pt
}
A:active {
        COLOR: #000080; TEXT-DECORATION: none; font-family:tahoma; font-size:10pt
}
A:hover {
        COLOR: #FF0000; TEXT-DECORATION: none; font-family:tahoma; font-size:10pt;
}
.menu A:visited {
        COLOR: #000080; TEXT-DECORATION: none; font-size:10pt; font-family:Tahoma; font-weight:bold
}
.menu A:hover {
        COLOR: #FFFF00; TEXT-DECORATION: none; font-family:Tahoma; font-size:10pt; font-weight:bold
}
.menu A:link {
        COLOR: #000080; TEXT-DECORATION: none; font-family:Tahoma; font-size:10pt; font-weight:bold
}
</style>
</head>
<body bgcolor="#008000">
<center>
	<table border="0" width="780" cellspacing="0" cellpadding="0" id="table1" background="images/bgisi_10.gif">
		<tr>
			<td valign="top" width="560" colspan="2">
			<img border="0" src="images/logo_01.gif" width="560" height="68"></td>
			<td valign="top" width="220" background="images/logo_02.gif">
			<span class=menu>
			<p align="center" style="margin-top: 2px"><b>
			<font size="2" color="#800000">$now</font></b></span>&nbsp;</td>
		</tr>
		<tr>
			<td valign="top" width="560" colspan="2">
			<img border="0" src="images/logo_03.gif" width="560" height="59"></td>
			<td valign="top" width="220"><map name="FPMap0">
			<area href="index.php" shape="rect" coords="56, 26, 98, 43">
			<area href="javascript:window.close();" shape="rect" coords="107, 25, 147, 42">
			</map>
			<img border="0" src="images/logo_04.gif" width="220" height="59" usemap="#FPMap0"></td>
		</tr>
		<tr>
			<td colspan="3" valign="top">
			<table border="0" width="100%" cellspacing="0" cellpadding="0" id="table3">
				<tr><span class=menu>

					<td width="14" background="images/bg_menu2_15.gif">
					<font size="2">
					<img border="0" src="images/bg_menu2_15.gif" width="14" height="47"></font></td>
					<td background="images/bg_menu2_15.gif" valign="top">
					<p style="margin-right: 10px; margin-top: 12px" align="center">
					<font size="2"><a href="diploma.php?menu=diploma.data.siswa">SISWA</a>
					<b>|</b> <a href="diploma.php?menu=diploma.materi">MATERI</a>
					<b>|</b> <a href="diploma.php?menu=diploma.jurusan">JURUSAN</a>
					<b>|</b> <a href="diploma.php?menu=diploma.kelas">DATA KELAS</a>
					<b>|</b> <a href="diploma.php?menu=diploma.absensi">DATA ABSENSI</a>
					<b>|</b> <a href="diploma.php?menu=diploma.absensi">DATA NILAI</a>
					<b>|</b> <a href="diploma.php?menu=diploma.administrasi">ADMINISTRASI</a>
					<b>|</b> <a href="diploma.php?menu=diploma.instruktur">INSTRUKTUR</a></font></td></span>
				</tr>
			</table>
			</td>
		</tr>
<?
if(isset($menu)){
    include"$menu.php";
}else{
    include"diploma.siswa.php";
}
?>

        		<tr>
			<td colspan="3" valign="top">
			<img border="0" src="images/bawah_12.gif" width="780" height="92"></td>
		</tr>
	</table>
</center>
</body>
</html>