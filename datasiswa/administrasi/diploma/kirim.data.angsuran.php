<?
include"sambung.php";
$baca=mysql_query("select * from data_siswa where induk='$induk'");
$d=mysql_fetch_array($baca);
if($d[ang1]=="0"){
    $ang="1";
}elseif($d[ang2]=="0"){
    $ang="2";
}elseif($d[ang3]=="0"){
    $ang="3";
}elseif($d[ang4]=="0"){
    $ang="4";
}elseif($d[ang5]=="0"){
    $ang="5";
}elseif($d[ang6]=="0"){
    $ang="6";
}elseif($d[ang7]=="0"){
    $ang="7";
}elseif($d[ang8]=="0"){
    $ang="8";
}elseif($d[ang9]=="0"){
    $ang="9";
}else{
    $ang="10";
}
$baca2=mysql_query("select * from data_angsuran where jurusan='$jurusan' and angsuran='$ang'");
$h=mysql_fetch_array($baca2);
if($gelombang=="1"){
    $nilai=$h[gel1];
}elseif($gelombang=="2"){
    $nilai=$h[gel2];
}else{
    $nilai=$h[gel3];
}
$nilai2=number_format($nilai, 2, ",",".");
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
						</table>
						<p style="margin: 0 5px">&nbsp;</p>
						<table border="1" width="100%" cellspacing="0" cellpadding="0" id="table6">
                            <form method="POST" action="kirim.data.angsuran2.php">
							<tr>
								<td colspan="2" bgcolor="#000080">
								<p align="center">
								<font size="2" color="#FFFF00"><b>DATA
								ANGSURAN SEKARANG</b></font></td>
							</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px">
								<font size="2">Gelombang ke</font></td>
								<td width="69%">
								<p style="margin-left: 5px; margin-right: 5px">
								<font size="2"><?=$d[gelombang]?></font></td>
								</tr>
							<tr>
								<td width="30%">
								<p style="margin: 0 5px">
								<font size="2">Angsuran ke</font></td>
								<td width="69%">
								<p style="margin-left: 5px; margin-right: 5px">
								<font size="2"><?=$ang?></font></td>
								</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px">
								<font size="2">Jumlah Yang Harus dibayar</font></td>
								<td width="69%">
								<p style="margin-left: 5px; margin-right: 5px">
								<font size="2">Rp. <?=$nilai2?></font></td>
								</tr>
							<tr>
								<td width="30%">
								<p style="margin: 0 5px">&nbsp;</td>
								<td width="69%">
								<p style="margin: 0 5px">
								<input type="submit" value="LANJUT" name="tambah"></td>
							</tr>
								<input type="hidden" name="induk" value="<?=$d[induk]?>">
                                <input type="hidden" name="nilai" value="<?=$nilai?>">
                                <input type="hidden" name="ang" value="<?=$ang?>">
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