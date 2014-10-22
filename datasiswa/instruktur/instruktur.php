<?
include"cek.php";
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
        COLOR: #00FFFF; TEXT-DECORATION: none; font-size:10pt; font-family:Tahoma; font-weight:bold
}
.menu A:hover {
        COLOR: #FFFF00; TEXT-DECORATION: none; font-family:Tahoma; font-size:10pt; font-weight:bold
}
.menu A:link {
        COLOR: #000080; TEXT-DECORATION: none; font-family:Tahoma; font-size:10pt; font-weight:bold
}
.bawah A:visited {
        COLOR: #000080; TEXT-DECORATION: none; font-size:10pt; font-family:Tahoma; font-weight:bold
}
.bawah A:hover {
        COLOR: #FF0000; TEXT-DECORATION: none; font-family:Tahoma; font-size:10pt; font-weight:bold
}
.bawah A:link {
        COLOR: #000080; TEXT-DECORATION: none; font-family:Tahoma; font-size:10pt; font-weight:bold
}
.kanan A:visited {
        COLOR: #000080; TEXT-DECORATION: none; font-size:10pt; font-family:Tahoma;
}
.kanan A:hover {
        COLOR: #FF0000; TEXT-DECORATION: none; font-family:Tahoma; font-size:10pt;
}
.kanan A:link {
        COLOR: #000080; TEXT-DECORATION: none; font-family:Tahoma; font-size:10pt;
}

</style>
</head>

<body bgcolor="#008000">

<div align="center">
	<table border="0" width="780" cellspacing="0" cellpadding="0" id="table1" background="images/bgisi_10.gif">
		<tr>
			<td valign="top" width="560" colspan="2">
			<img border="0" src="images/logo_01.gif" width="560" height="68"></td>
			<td valign="top" width="220">
			<img border="0" src="images/logo_02.gif" width="220" height="68"></td>
		</tr>
		<tr>
			<td valign="top" width="560" colspan="2">
			<img border="0" src="images/logo_03.gif" width="560" height="59"></td>
			<td valign="top" width="220"><map name="FPMap0">
			<area href="index.php" shape="rect" coords="56, 26, 98, 43">
			<area href="keluar.php" shape="rect" coords="107, 25, 147, 42">
			</map>
			<img border="0" src="images/logo_04.gif" width="220" height="59" usemap="#FPMap0"></td>
		</tr>
		<tr><span class=menu>
			<td background="images/bg_garis_07.gif" width="29">
			<b>
			<img border="0" src="images/garis_06.gif" width="27" height="36"></b></td>
			<td background="images/bg_garis_07.gif" width="531">
			<b><font style="font-size: 9pt" size="2">DATA </font>
			<span style="font-size: 9pt">KELAS</span></b><font style="font-size: 9pt"><b> 
			</b> </font><span style="font-size: 9pt"><b>BERDASARKAN INSTRUKTUR</b></span></td>
			<td background="images/bg_garis_07.gif" width="220">
			&nbsp;</td></span>
		</tr>
		<tr>
			<td colspan="3" valign="top">
			<img border="0" src="images/garis_09.gif" width="780" height="17"></td>
		</tr>
		<tr>
			<td colspan="3" valign="top">
			<?
            include"$menu.php";
            ?>
			</td>
		</tr>
		<tr>
			<td colspan="3" valign="top">
			<img border="0" src="images/bawah_12.gif" width="780" height="92"></td>
		</tr>
	</table>
</div>

</body>

</html>