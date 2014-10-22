<?
include"sambung.php";
$baca=mysql_query("select * from data_siswa where induk='$induk' or nama='$nama'");
$d=mysql_fetch_array($baca);
$d[ang1]=number_format($d[ang1], 2, ",",".");
$d[ang2]=number_format($d[ang2], 2, ",",".");
$d[ang3]=number_format($d[ang3], 2, ",",".");
$d[ang4]=number_format($d[ang4], 2, ",",".");
$d[ang5]=number_format($d[ang5], 2, ",",".");
$d[ang6]=number_format($d[ang6], 2, ",",".");
$d[ang7]=number_format($d[ang7], 2, ",",".");
$d[ang8]=number_format($d[ang8], 2, ",",".");
$d[ang9]=number_format($d[ang9], 2, ",",".");
$d[ang10]=number_format($d[ang10], 2, ",",".");
$d[biaya_daftar]=number_format($d[biaya_daftar], 2, ",",".");
$ttl=explode("|",$d[ttl]);
$d[alamat]=str_replace("|", " ", $d[alamat]);
?>
<tr><span class=menu>
			<td background="images/bg_garis_07.gif" width="29">
			<b>
			<img border="0" src="images/garis_06.gif" width="27" height="36"></b></td>
			<td background="images/bg_garis_07.gif" width="531">
			<b><font style="font-size: 9pt" size="2">
			DATA ANGSURAN SISWA</font></b></td>
			<td background="images/bg_garis_07.gif" width="220">
			<p align="center"><b><font size="2" color="#FF0000"></font></b></td></span>
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
						<table border="1" width="100%" cellspacing="0" cellpadding="0" id="table5">
							<tr>
								<td colspan="2" bgcolor="#000080">
								<p align="center">
								<font size="2" color="#FFFF00"><b>DATA
								SISWA</b></font></td>
							</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">No Induk
								Siswa</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<font size="2"><b><?=$d[induk]?></b></font></td>
								</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Nama
								Siswa</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<font size="2"><?=$d[nama]?></font></td>
								</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Tempat,
								Tanggal Lahir</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<font size="2"><? echo"$ttl[0], $ttl[1] - $ttl[2] - $ttl[3]"; ?></font></td>
								</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Kelas</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<font size="2"><?=$d[kelas]?></font></td>
								</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Jurusan</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<font size="2"><?=$d[jurusan]?></font></td>
								</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Alamat</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<font size="2"><?=$d[alamat]?></font></td>
								</tr>
                                <tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Telepon</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<font size="2"><?=$d[telp]?></font></td>
								</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Handphone</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<font size="2"><?=$d[hp]?></font></td>
								</tr>
                        </table>
						<p style="margin: 0 5px">&nbsp;</p>
						<table border="1" width="100%" cellspacing="0" cellpadding="0" id="table6">
							<form method="POST" action="diploma.php">
							<tr>
								<td colspan="2" bgcolor="#000080">
								<p align="center">
								<font size="2" color="#FFFF00"><b>DATA
								ADMINISTRASI</b></font></td>
							</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">
								Gelombang</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<font size="2"><?=$d[gelombang]?></font></td>
								</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Biaya
								Pendaftaran</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<font size="2">Rp. <?=$d[biaya_daftar]?></font></td>
								</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Angsuran
								1</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<font size="2">Rp. <?=$d[ang1]?></font></td>
								</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Angsuran
								2</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<font size="2">Rp. <?=$d[ang2]?></font></td>
								</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Angsuran
								3</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<font size="2">Rp. <?=$d[ang3]?></font></td>
								</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Angsuran
								4</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<font size="2">Rp. <?=$d[ang4]?></font></td>
								</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Angsuran
								5</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<font size="2">Rp. <?=$d[ang5]?></font></td>
								</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Angsuran
								6</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<font size="2">Rp. <?=$d[ang6]?></font></td>
								</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Angsuran
								7</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<font size="2">Rp. <?=$d[ang7]?></font></td>
								</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Angsuran
								8</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<font size="2">Rp. <?=$d[ang8]?></font></td>
								</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Angsuran
								9</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<font size="2">Rp. <?=$d[ang9]?></font></td>
								</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Angsuran
								10</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<font size="2">Rp. <?=$d[ang10]?></font></td>
								</tr>
							<tr>
								<td width="30%">
								<p style="margin: 0 5px">&nbsp;</td>
								<td width="69%">
								<p style="margin: 0 5px">
								<input type="submit" value="LANJUT" name="tambah">&nbsp;&nbsp;&nbsp;<input type="submit" value="KEMBALI" name="kembali"></td>
							</tr>
                                <input type="hidden" name="gelombang" value="<?=$d[gelombang]?>">
                                <input type="hidden" name="jurusan" value="<?=$d[jurusan]?>">
                                <input type="hidden" name="induk" value="<?=$d[induk]?>">
                                <input type="hidden" name="menu" value="kirim.data.angsuran">
							</form>
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