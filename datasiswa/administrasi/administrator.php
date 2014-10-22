<?
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
        COLOR: #00FFFF; TEXT-DECORATION: none; font-size:10pt; font-family:Tahoma; font-weight:bold
}
.menu A:hover {
        COLOR: #FFFF00; TEXT-DECORATION: none; font-family:Tahoma; font-size:10pt; font-weight:bold
}
.menu A:link {
        COLOR: #000080; TEXT-DECORATION: none; font-family:Tahoma; font-size:10pt; font-weight:bold
}
.shadow {
	FILTER: Alpha(Opacity=100) DropShadow(Color=#000000, OffX=1, OffY=1, Positive=1)
}
</style>
</head>
<body bgcolor="#008000">
<div align="center">
	<table border="0" width="780" cellspacing="0" cellpadding="0" id="table1" background="images/bgisi_10.gif">
		<tr>
			<td valign="top" width="560" colspan="2">
			<img border="0" src="images/logo_01.gif" width="560" height="68"></td>
			<td valign="top" width="220" background="images/logo_02.gif">
			<span class=menu>
			<p align="center" style="margin-top: 3px"><b><font size="2">
			<font color="#800000"><?=$now?><br>
			</font>
<br>
&nbsp;</font></b></span>&nbsp;</td>
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
			<img border="0" src="images/garis_06.gif" width="27" height="36"></td>
			<td background="images/bg_garis_07.gif" width="531"><b>
			<font size="2">
			<marquee class="bawah" scrolldelay="60" scrollamount="3">SISTEM ADMINISTRASI SISWA MADCOMS MADIUN</marquee></font></b></td>
			<td background="images/bg_garis_07.gif" width="220">
			&nbsp;</td></span>
		</tr>
		<tr>
			<td colspan="3" valign="top">
			<img border="0" src="images/garis_09.gif" width="780" height="17"></td>
		</tr>
		<tr>
			<td colspan="3" valign="top">
			<table border="0" width="100%" cellpadding="2" id="table2">
				<tr>
					<td width="4">&nbsp;</td>
					<td>
					<p align="center"><a class=source href="Data Diploma" onClick="DIPLOMA=window.open('./diploma.php', 'win1','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,copyhistory=yes,width=810,height=600'); return false;" title="Klik sidini untuk melihat data siswa program Diploma.">
<img border="0" src="./images/tombol.gif" width="262" height="24"></a></td>
					<td width="5">&nbsp;</td>
				</tr>
				<tr>
					<td width="4">&nbsp;</td>
					<td>
					<p align="center"><font size="2">Selamat datang di halaman
					administrator...<br>
					Dari halaman administrator ini Anda dapat memasukkan
					mengubah dan menghapus data administrasi siswa.</font></p>
					<p align="center"><font size="2">User Anda adalah :<br>
					<font color="#800000"><b><?=$userid?><br>
					</b></font><br>
&nbsp;</font></td>
					<td width="5">&nbsp;</td>
				</tr>
				<tr>
					<td width="4"></td>
					<td><center><b><font face="Tahoma" size="2" color="#FF0000"><?
                    if(isset($act)){
                        if($act=="3"){
                            echo"Password lama salah tuh...<br>Coba lagi dech...";
                        }elseif($act=="2"){
                            echo"Hore... Passwordnya udah ganti jadi :<br>\" $pw \"";
                        }else{
                            echo"Password satu dan yang kedua tidak sama tuh...<br>Ulangi lagi dech...";
                        }
                    }
                    ?>
                    </font></b></center>
					<form method="POST" action="ganti.password.php">
						<p align="center" style="word-spacing: 1px; margin-top: 4px; margin-bottom: 4px">
						<font size="2">Untuk mengganti password Anda, dapat
						melalui formulir ganti password di bawah ini:<br>
						Passwrod Lama:</font></p>
						<p align="center" style="word-spacing: 1px; margin-top: 4px; margin-bottom: 4px">
						<font size="2">
						<input type="password" name="pw_lama" size="20"></font></p>
						<p align="center" style="word-spacing: 1px; margin-top: 4px; margin-bottom: 4px">
						<font size="2">Password baru:</font></p>
						<p align="center" style="word-spacing: 1px; margin-top: 4px; margin-bottom: 4px">
						<font size="2">
						<input type="password" name="pw_baru1" size="20"></font></p>
						<p align="center" style="word-spacing: 1px; margin-top: 4px; margin-bottom: 4px">
						<font size="2">Password baru lagi:</font></p>
						<p align="center" style="word-spacing: 1px; margin-top: 4px; margin-bottom: 4px">
						<font size="2">
						<input type="password" name="pw_baru2" size="20"></font></p>
						<p align="center" style="word-spacing: 1px; margin-top: 4px; margin-bottom: 4px">
						<input type="submit" value="GANTI" name="ganti"></p>
					</form>
					<p align="center">&nbsp;</td>
					<td width="5">&nbsp;</td>
				</tr>
			</table>
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