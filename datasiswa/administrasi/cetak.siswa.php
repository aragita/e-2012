<?
include"cek.php";
include"sambung.php";
include"tanggal.php";
$bc=@mysql_query("select * from data_siswa where id='$id'");
$d=mysql_fetch_array($bc);
$d[alamat]=str_replace("|"," ",$d[alamat]);
$ortu=explode("|",$d[ortu]);
$sekolah=explode("|",$d[alamat_sekolah]);
$sekolah2=explode("|",$d[data_sekolah]);
$ttl=explode("|",$d[ttl]);
$dd=$ttl[2]-1;
$kerja=explode("|",$d[data_kerja]);
$kota=explode("|",$d[kota]);
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
</style>
</head>

<body>

<div align="center">
	<table border="0" width="780" cellspacing="0" cellpadding="0" id="table1" background="./images/bgisi_10.gif">
		<tr>
			<td valign="top" width="560">
			<img border="0" src="./images/logo_01.gif" width="560" height="68"></td>
			<td valign="top" width="220">
			<img border="0" src="./images/logo_02.gif" width="220" height="68"></td>
		</tr>
		<tr>
			<td valign="top" width="560">
			<img border="0" src="./images/logo_03.gif" width="560" height="59"></td>
			<td valign="top" width="220">
			<img border="0" src="./images/logo_04b.gif" width="220" height="59"></td>
		</tr>
		<tr>
			<td colspan="2" valign="top">
			<img border="0" src="./images/garis_09.gif" width="780" height="17"><table border="0" width="100%" cellpadding="2" id="table2">
				<tr>
					<td width="4">&nbsp;</td>
					<td>
					<table border="0" width="100%" cellspacing="1" id="table3">
							<tr>
								<td colspan="3" bgcolor="#0033CC">
								<p align="center"><b>
								<font size="2" color="#FFFF00">DATA PRIBADI
								SISWA</font></b></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Nama</font></td>
								<td colspan="2"><font size="3">: <?=$d[nama]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">No. Induk&nbsp; </font></td>
								<td colspan="2"><font size="3">: <?=$d[induk]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Tempat/Tgl Lahir</font></td>
								<td colspan="2"><font size="3">: <?=$ttl[0]?>, <?=$ttl[1]?> <?=$bulan[$dd]?> <?=$ttl[3]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Agama</font></td>
								<td width="76%" colspan="2"><font size="3">:
								<?=$d[agama]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Alamat</font></td>
								<td width="76%" colspan="2">: <font size="3">
								<?=$d[alamat]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Kota</font></td>
								<td width="34%">
								<font size="3">: <?=$kota[0]?> </font></td>
								<td width="43%">
								<font size="3">Kode Pos
								: <?=$kota[1]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Telepon</font></td>
								<td width="76%" colspan="2"><font size="3">:
								<?=$d[telp]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HP:
								<?=$d[hp]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Alamat Email</font></td>
								<td width="76%" colspan="2"><font size="3">:
								<?=$d[email]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Nama Bapak</font></td>
								<td width="76%" colspan="2">
								<font size="3">: <?=$ortu[0]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Pekerjaan Bapak</font></td>
								<td width="76%" colspan="2">
								<font size="3">: <?=$ortu[1]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Nama Ibu</font></td>
								<td width="76%" colspan="2">
								<font size="3">: <?=$ortu[2]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Pekerjaan Ibu</font></td>
								<td width="76%" colspan="2">
								<font size="3">: <?=$ortu[03]?></font></td>
							</tr>
                            <tr>
								<td width="22%"><font size="3">&nbsp;</font></td>
								<td width="76%" colspan="2">
								<font size="3">&nbsp;</font></td>
							</tr>
							<tr>
								<td width="98%" colspan="3" bgcolor="#0033CC">
								<p align="center"><b>
								<font size="2" color="#FFFF00">DATA </font></b>
								<font size="2" color="#FFFF00"><b>ASAL SEKOLAH</b></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Nama Sekolah</font></td>
								<td width="76%" colspan="2"><font size="3">:
								<?=$d[asal_sekolah]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Pendidikan</font></td>
								<td width="76%" colspan="2"><font size="3">:
								<?=$sekolah2[0]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Jurusan</font></td>
								<td width="76%" colspan="2"><font size="3">:
								<?=$sekolah2[1]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Tahun Lulus</font></td>
								<td width="76%" colspan="2"><font size="3">:
								<?=$d[th_lulus]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Alamat Sekolah</font></td>
								<td width="76%" colspan="2"><font size="3">:
								<?=$sekolah[0]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Telepon Sekolah</font></td>
								<td width="76%" colspan="2"><font size="3">:
								<?=$sekolah[1]?></font></td>
							</tr>
                            <tr>
								<td width="22%"><font size="3">&nbsp;</font></td>
								<td width="76%" colspan="2">
								<font size="3">&nbsp;</font></td>
							</tr>
							<tr>
								<td width="98%" colspan="3" bgcolor="#0033CC">
								<p align="center">
								<font size="2" color="#FFFF00"><b>PILIHAN
								JURUSAN</b></font></td>
							</tr>
							<tr>
								<td height="23" colspan="3">
								<table border="0" width="100%" cellspacing="1" id="table4">
									<tr>
										<td width="161"><font size="3">Jurusan
										yang diambil</font></td>
										<td><font size="3">: <?=$d[jurusan]?></font></td>
									</tr>
									<tr>
										<td width="161"><font size="3">Gelombang</font></td>
										<td><font size="3">: <?if($d[gelombang]=="0"){ echo"Reguler";}else{ echo"$d[gelombang]";}?></font></td>
									</tr>
									<tr>
										<td width="159"><font size="3">Username</font></td>
										<td><font size="3">: <?=$d[userid]?></font></td>
									</tr>
									<tr>
										<td width="159"><font size="3">Password</font></td>
										<td><font size="3">: <?=$d[password]?></font></td>
									</tr>
								</table><br>
								</td>
							</tr>
							<tr>
								<td width="98%" colspan="3" bgcolor="#0033CC">
								<p align="center">
								<font size="2" color="#FFFF00"><b>DATA PEKERJAAN</b></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Pekerjaan</font></td>
								<td width="76%" colspan="2"><font size="3">:
								<?=$kerja[0]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Nama Institusi</font></td>
								<td width="76%" colspan="2"><font size="3">:
								<?=$kerja[1]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Alamat Institusi</font></td>
								<td width="76%" colspan="2"><font size="3">:
								<?=$kerja[2]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Kota</font></td>
								<td width="76%" colspan="2"><font size="3">:
								<?=$kerja[3]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								Kode Pos : <?=$kerja[4]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Nomor Telepon</font></td>
								<td width="76%" colspan="2"><font size="3">:
								<?=$kerja[5]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="3">Faks</font></td>
								<td width="76%" colspan="2"><font size="3">:
								<?=$kerja[6]?></font></td>
							</tr>
							<tr>
								<td width="98%" colspan="3" align="center">
								&nbsp;</td>
							</tr>
						</table>
					</td>
					<td width="5">&nbsp;</td>
				</tr>
				<tr>
					<td width="4">&nbsp;</td>
					<td>&nbsp;</td>
					<td width="5">&nbsp;</td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td colspan="2" valign="top">
			<img border="0" src="./images/bawah_12.gif" width="780" height="92"></td>
		</tr>
	</table>
</div>
</body>
</html>