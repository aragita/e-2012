<?
include"cek.php";
include"sambung.php";
include"tanggal.php";
$bc=@mysql_query("select * from data_siswa where id='$id'");
$d=mysql_fetch_array($bc);
$d[alamat]=str_replace("|"," ",$d[alamat]);
$d[kota]=explode("|",$d[kota]);
$ortu=explode("|",$d[ortu]);
$sekolah=explode("|",$d[alamat_sekolah]);
$sekolah2=explode("|",$d[data_sekolah]);
$ttl=explode("|",$d[ttl]);
$dd=$ttl[2]-1;
$kerja=explode("|",$d[data_kerja]);
?>
<div align="center">
	<table border="0" width="780" cellspacing="0" cellpadding="0" id="table1" background="images/bgisi_10.gif">
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
								<td width="22%"><font size="2">Nama</font></td>
								<td colspan="2"><font size="2">: <?=$d[nama]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">No. Induk&nbsp; </font></td>
								<td colspan="2"><font size="2">: <?=$d[induk]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Tempat/Tgl Lahir</font></td>
								<td colspan="2"><font size="2">: <?=$ttl[0]?>, <?=$ttl[1]?> <?=$bulan[$dd]?> <?=$ttl[3]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Agama</font></td>
								<td width="76%" colspan="2"><font size="2">:
								<?=$d[agama]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Alamat</font></td>
								<td width="76%" colspan="2"><font size="2">: 
								<?=$d[alamat]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Kota</font></td>
								<td width="34%">
								<font size="2">: <?=$d[kota][0]?> </font></td>
								<td width="43%">
								<font size="2">Kode Pos
								: <?=$d[kota][1]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Telepon</font></td>
								<td width="76%" colspan="2"><font size="2">:
								<?=$d[telp]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HP:
								<?=$d[hp]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Alamat Email</font></td>
								<td width="76%" colspan="2"><font size="2">:
								<?=$d[email]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Nama Bapak</font></td>
								<td width="76%" colspan="2">
								<font size="2">: <?=$ortu[0]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Pekerjaan Bapak</font></td>
								<td width="76%" colspan="2">
								<font size="2">: <?=$ortu[1]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Nama Ibu</font></td>
								<td width="76%" colspan="2">
								<font size="2">: <?=$ortu[2]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Pekerjaan Ibu</font></td>
								<td width="76%" colspan="2">
								<font size="2">: <?=$ortu[03]?></font></td>
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
								<td width="22%"><font size="2">Nama Sekolah</font></td>
								<td width="76%" colspan="2"><font size="2">:
								<?=$d[asal_sekolah]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Pendidikan</font></td>
								<td width="76%" colspan="2"><font size="2">:
								<?=$sekolah2[0]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Jurusan</font></td>
								<td width="76%" colspan="2"><font size="2">:
								<?=$sekolah2[1]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Tahun Lulus</font></td>
								<td width="76%" colspan="2"><font size="2">:
								<?=$d[th_lulus]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Alamat Sekolah</font></td>
								<td width="76%" colspan="2"><font size="2">:
								<?=$sekolah[0]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Telepon Sekolah</font></td>
								<td width="76%" colspan="2"><font size="2">:
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
										<td width="161"><font size="2">Jurusan
										yang diambil</font></td>
										<td><font size="2">: <?=$d[jurusan]?></font></td>
									</tr>
									<tr>
										<td width="161"><font size="2">Gelombang</font></td>
										<td><font size="2">: <?if($d[gelombang]=="0"){ echo"Reguler";}else{ echo"$d[gelombang]";}?></font></td>
									</tr>
									<tr>
										<td width="159"><font size="2">Username</font></td>
										<td><font size="2">: <?=$d[userid]?></font></td>
									</tr>
									<tr>
										<td width="159"><font size="2">Password</font></td>
										<td><font size="2">: <?=$d[password]?></font></td>
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
								<td width="22%"><font size="2">Pekerjaan</font></td>
								<td width="76%" colspan="2"><font size="2">:
								<?=$kerja[0]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Nama Institusi</font></td>
								<td width="76%" colspan="2"><font size="2">:
								<?=$kerja[1]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Alamat Institusi</font></td>
								<td width="76%" colspan="2"><font size="2">:
								<?=$kerja[2]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Kota</font></td>
								<td width="76%" colspan="2"><font size="2">:
								<?=$kerja[3]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								Kode Pos : <?=$kerja[4]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Nomor Telepon</font></td>
								<td width="76%" colspan="2"><font size="2">:
								<?=$kerja[5]?></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Faks</font></td>
								<td width="76%" colspan="2"><font size="2">:
								<?=$kerja[6]?></font></td>
							</tr>
							<tr>
								<td width="98%" colspan="3" align="center">
                                <br><a href="javascript:history.back();"><img border="0" src="./images/kembali.gif"></a>&nbsp;&nbsp;&nbsp;
                                <a href="diploma.php?menu=edit.siswa&id=<?=$d[id]?>&ubah"><img border="0" src="./images/ubah_data.gif"></a><br></td>
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