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
					<td>&nbsp;</td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td>
			<table border="0" width="100%" id="table3" cellspacing="0" cellpadding="0">
				<tr>
					<td>
					<img border="0" src="images/menu_utama.jpg" width="176" height="41"></td>
					<td>
					<img border="0" src="images/banner.jpg" width="604" height="41"></td>
				</tr>
				<tr>
					<td valign="top">
					<p style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px">
					&nbsp;</p>
					<p style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px">
					&nbsp;</p>
					<p style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px">
					&nbsp;</p>
					<p style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px">
					&nbsp;</td>
					<td rowspan="2" valign="top">
					<table border="0" width="100%" cellspacing="0" cellpadding="0" id="table4">
						<tr>
							<td width="604" bgcolor="#246494" colspan="2">
							<p align="center" style="margin-top: 3px; margin-bottom: 3px">
							<b><font face="Tahoma" size="2" color="#FFFF00">
							KONFIRMASI KESALAHAN</font></b></td>
						</tr>
						<tr>
							<td width="604" valign="top" colspan="2">
							<p style="margin: 3px 10px" align="center">&nbsp;</p>
							<p style="margin: 3px 10px" align="center">&nbsp;</p>
							<p style="margin: 3px 10px" align="center"><b>
							<font face="Tahoma" size="2" color="#FF0000">
                            <?
                            if($err=="1"){
                                echo"MAAF,
							USERNAME ANDA TIDAK TERDAFTAR, PERIKSA KEMBALI
							USERNAME ANDA <BR><BR>ULANGI KEMBALI MELALUI FORM LOGIN DI BAWAH INI.";
                            }
							else
                               echo"WAH... KELIHATANNYA PASSWORD SALAH DECH...<BR><BR> COBA ULANGI LAGI AJA DECH...";
                            }
							else{
                                echo"SEBAIKNYA ISI DULU USERNAME DAN PASSWORD ANDA...<BR><BR> BARU TEKAN TOMBOL LOGIN. ULANGI DECH...";
                            }
                            ?>
                            </font></b></p>
							<p style="margin: 3px 10px" align="center">&nbsp;</td>
							</tr>
						<form method="POST" action="login.php">
							<tr>
							<td width="245" valign="top" align="right">
							<p style="margin: 7px 10px; ">
							<font face="Tahoma" size="2" color="#000080">USER
							NAME</font></td>
							<td width="359" valign="top">
							<p style="margin: 7px 10px; ">
							<input type="text" name="user" size="19" style="color: #000080; font-family: Tahoma; font-size: 10pt; font-weight: bold; border: 1px solid #000080"></td>
							</tr>
						<tr>
							<td width="245" valign="top" align="right">
							<p style="margin: 7px 10px; ">
							<font face="Tahoma" size="2" color="#000080">
							PASSWORD</font></td>
							<td width="359" valign="top">
							<p style="margin: 7px 10px; ">
							<input type="password" name="password" size="19" style="color: #000080; font-family: Tahoma; font-size: 10pt; font-weight: bold; border: 1px solid #000080"></td>
						</tr>
						<tr>
							<td width="245" valign="top">
							<p style="margin-top: 7px; margin-bottom: 7px">&nbsp;</td>
							<td width="359" valign="top">
							<p style="margin-left: 10px; margin-top: 7px; margin-bottom: 7px">
							<input type="submit" value=" L O G I N " name="login" style="color: #000080; font-family: Tahoma; font-size: 10pt; font-weight: bold">&nbsp;&nbsp;&nbsp;
							<input type="submit" value="B A T A L" name="batal" style="color: #000080; font-family: Tahoma; font-size: 10pt; font-weight: bold"></td>
						</tr>
						<tr>
							<td width="245" valign="top">
							<p style="margin: 3px 10px">&nbsp;</td>
							<td width="359" valign="top">
							<p style="margin: 3px 10px">&nbsp;<p style="margin: 3px 10px">&nbsp;<p style="margin: 3px 10px">&nbsp;</td>
						</tr>
						</form>
						<tr>
							<td width="245" valign="top" bgcolor="#CC6600">&nbsp;
							</td>
							<td width="359" valign="top" bgcolor="#CC6600">&nbsp;
							</td>
						</tr>
						<tr>
							<td width="245" valign="top">&nbsp;</td>
							<td width="359" valign="top">&nbsp;</td>
						</tr>
					</table>
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