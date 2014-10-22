<?php
include"sambung.php";  
?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Halaman Siswa</title>
</head>

<body bgcolor="#008000">

<div align="center">
	<table border="0" width="780" cellspacing="0" cellpadding="0" background="images/baground.jpg" id="table1">
		<tr>
			<td><map name="FPMap0">
			<area href="keluar.php" shape="rect" coords="637, 92, 712, 113">
			</map>
			<img border="0" src="images/logo.jpg" width="780" height="126" usemap="#FPMap0"></td>
		</tr>
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0" background="images/bg_menu.jpg" id="table2">
				<tr>
					<td width="15">
					<img border="0" src="images/menu2.jpg" width="10" height="47"></td>
					<td><b><font size="2" face="Tahoma" color="#800000">Selamat 
					Datang $nama_siswa</font></b></td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td>
<?
include"$menu.php";
?>
					</td>
				</tr>
				<tr>
					<td valign="bottom">
					<img border="0" src="images/bawah1.jpg" width="176" height="69"></td>
				</tr>
				<tr>
					<td colspan="2" background="images/bawah2.jpg">
					<img border="0" src="images/bawah2.jpg" width="22" height="78"></td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
</div>

</body>

</html>