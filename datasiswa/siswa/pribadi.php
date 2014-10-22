<?php
$data=mysql_query("SELECT
`data_siswa`.`id`,
`data_siswa`.`jurusan`,
`data_siswa`.`kelas`,
`data_siswa`.`gelombang`,
`data_siswa`.`induk`,
`data_siswa`.`nama`,
`data_siswa`.`ttl`,
`data_siswa`.`alamat`,
`data_siswa`.`kota`,
`data_siswa`.`ortu`,
`data_siswa`.`asal_sekolah`,
`data_siswa`.`th_lulus`,
`data_siswa`.`telp`,
`data_siswa`.`hp`,
`data_siswa`.`email`,
`data_siswa`.`agama`,
`data_siswa`.`alamat_sekolah`,
`data_siswa`.`tahun`,
`data_siswa`.`data_sekolah`,
`data_siswa`.`data_kerja`,
`data_siswa`.`biaya_daftar`,
`data_siswa`.`ang1`,
`data_siswa`.`ang2`,
`data_siswa`.`ang3`,
`data_siswa`.`ang4`,
`data_siswa`.`ang5`,
`data_siswa`.`ang6`,
`data_siswa`.`ang7`,
`data_siswa`.`ang8`,
`data_siswa`.`ang9`,
`data_siswa`.`ang10`,
`data_siswa`.`status`,
`data_siswa`.`userid`,
`data_siswa`.`password`,
`data_siswa`.`tanngal`
FROM
`data_siswa`
WHERE
`data_siswa`.`userid` =  '$userid'");
$d=mysql_fetch_array($data);
$ortu=explode("|",$d[ortu]);
$d[alamat]=str_replace("|"," ", $d[alamat]);
$d[ttl]=str_replace("|"," ", $d[ttl]); 
?>
<table border="0" width="100%" cellspacing="0" cellpadding="0" id="table4">
						
                        <tr>
							<td width="604" bgcolor="#246494" colspan="2">
							<p align="center" style="margin-top: 3px; margin-bottom: 3px">
							<b><font color="#FFFF00" face="Tahoma" size="2">DATA
							PRIBADI SISWA</font></b></td>
						</tr>
						<tr>
							<td width="171" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">Nama</font></td>
							<td width="433" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">
							<?=$d[nama]?></font></td>
						</tr>
						<tr>
							<td width="171" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">Nomor
							Induk Siswa</font></td>
							<td width="433" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">
							<?=$d[induk]?></font></td>
						</tr>
						<tr>
							<td width="171" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">Tempat,
							Tanggal lahir</font></td>
							<td width="433" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080"><?=$d[ttl]?></font></td>
						</tr>
						<tr>
							<td width="171" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">Alamat</font></td>
							<td width="433" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">
							<?=$d[alamat]?></font></td>
						</tr>
						<tr>
							<td width="171" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">Telepon
							/ HP</font></td>
							<td width="433" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">
							<?=$d[telp]?> / <?=$d[hp]?></font></td>
						</tr>
						<tr>
							<td width="171" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">Agama</font></td>
							<td width="433" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">
							<?=$d[agama]?></font></td>
						</tr>
						<tr>
							<td width="171" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">Alamat
							Email</font></td>
							<td width="433" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">
							<?=$d[email]?></font></td>
						</tr>
						<tr>
							<td width="171" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">Asal
							Sekolah</font></td>
							<td width="433" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">
							<?=$d[asal_sekolah]?></font></td>
						</tr>
						<tr>
							<td width="171" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">Nama
							Orang tua</font></td>
							<td width="433" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">
							<?=$ortu[0]?></font></td>
						</tr>
						<tr>
							<td width="171" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">Kelas</font></td>
							<td width="433" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">
							<?=$d[kelas]?></font></td>
						</tr>
						<tr>
							<td width="171" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">Jurusan</font></td>
							<td width="433" valign="top">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">
							<?=$d[jurusan]?></font></td>
						</tr>
						<tr>
							<td width="171" valign="top">
							<p style="margin: 3px 10px"></td>
							<td width="433" valign="top">
							<p style="margin: 3px 10px"></td>
						</tr>
						<tr>
							<td width="171" valign="top" bgcolor="#CC6600">&nbsp;
							</td>
							<td width="433" valign="top" bgcolor="#CC6600">&nbsp;
							</td>
						</tr>
						<tr>
							<td width="171" valign="top">&nbsp;</td>
							<td width="433" valign="top">&nbsp;</td>
						</tr>
					</table>