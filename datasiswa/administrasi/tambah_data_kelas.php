<?php
include"cek.php";
include"tanggal.php";
?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
</head>

<body>

<div align="center">
	<form method="POST" action="kirim.kelas.baru.php">
		<div align="center">
			<table border="0" width="368" cellspacing="0" cellpadding="0" id="table1">
				<tr>
					<td bgcolor="#00005B">
					<p align="center" style="margin-top: 4px; margin-bottom: 4px">
					<b><font color="#FFFF00" face="Tahoma" size="2">Tambah Kelas
					Baru</font></b></td>
				</tr>
				<tr>
					<td bgcolor="#CDDEEB">
					<table border="0" width="100%" id="table2">
						<tr>
							<td width="144">
							<p align="right" style="margin-top: 20px; margin-bottom: 20px">
							<font size="2" face="Tahoma" color="#000080">Nama
							Kelas Baru</font></td>
							<td>
							<p style="margin-top: 20px; margin-bottom: 20px">:
							<input type="text" name="nama" size="23" style="color: #000080; font-family: Tahoma; font-size: 10pt"></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td bgcolor="#993300">
					<p align="center" style="margin-top: 5px; margin-bottom: 5px">
					<input type="submit" value="TAMBAH" name="tambah" style="color: #000080; font-size: 10pt; font-family: Tahoma; font-weight: bold; height: 22; width: 150">&nbsp;
					<input type="submit" value="BATAL" name="batal" style="color: #000080; font-size: 10pt; font-family: Tahoma; font-weight: bold; height: 22; width: 150"></td>
				</tr>
			</table>
		</div>
	</form>
	<p>&nbsp;</div>

</body>

</html>