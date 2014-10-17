<?
$baca=mysql_query("SELECT
`data_siswa`.`id`
FROM
`data_siswa`
WHERE
`data_siswa`.`userid` =  '$userid'");
$hs1=mysql_fetch_array($baca);
$baca2=mysql_query("SELECT *
FROM
`kelas_aktif`
WHERE
`kelas_aktif`.`id_siswa` =  '24'");
?>
<table border="0" width="100%" cellspacing="1" id="table4" style="border-left-width: 0px; border-right-width: 0px">
						
                        <tr>
							<td width="604" bgcolor="#246494" colspan="11">
							<p align="center" style="margin-top: 3px; margin-bottom: 3px">
							<b><font color="#FFFF00" face="Tahoma" size="2">DATA
							ABSENSI SISWA <?=$userid?></font></b></td>
						</tr>
						<tr>
							<td width="152" valign="top" style="border-bottom-style: none; border-bottom-width: medium" bgcolor="#DFF1F9">
							<p align="center"><b><font face="Tahoma" size="2">
							Nama Materi</font></b></td>
							<td width="833" valign="top" colspan="10" align="center" bgcolor="#DFF1F9">
							<b><font face="Tahoma" size="2">Absensi Session</font></b></td>
						</tr>
						<tr>
							<td width="152" valign="top" style="border-style: none; border-width: medium" bgcolor="#DFF1F9">
							&nbsp;</td>
							<td width="84" valign="top" align="center" style="border-style: none; border-width: medium" bgcolor="#DFF1F9">
							<b><font face="Tahoma" size="2">1</font></b></td>
							<td width="84" valign="top" align="center" style="border-style: none; border-width: medium" bgcolor="#DFF1F9">
							<b><font face="Tahoma" size="2">2</font></b></td>
							<td width="84" valign="top" align="center" style="border-style: none; border-width: medium" bgcolor="#DFF1F9">
							<b><font face="Tahoma" size="2">3</font></b></td>
							<td width="83" valign="top" align="center" style="border-style: none; border-width: medium" bgcolor="#DFF1F9">
							<b><font face="Tahoma" size="2">4</font></b></td>
							<td width="83" valign="top" align="center" style="border-style: none; border-width: medium" bgcolor="#DFF1F9">
							<b><font face="Tahoma" size="2">5</font></b></td>
							<td width="83" valign="top" align="center" style="border-style: none; border-width: medium" bgcolor="#DFF1F9">
							<b><font face="Tahoma" size="2">6</font></b></td>
							<td width="83" valign="top" align="center" style="border-style: none; border-width: medium" bgcolor="#DFF1F9">
							<b><font face="Tahoma" size="2">7</font></b></td>
							<td width="83" valign="top" align="center" style="border-style: none; border-width: medium" bgcolor="#DFF1F9">
							<b><font face="Tahoma" size="2">8</font></b></td>
							<td width="83" valign="top" align="center" style="border-style: none; border-width: medium" bgcolor="#DFF1F9">
							<b><font face="Tahoma" size="2">9</font></b></td>
							<td width="83" valign="top" align="center" style="border-style: none; border-width: medium" bgcolor="#DFF1F9">
							<b><font face="Tahoma" size="2">10</font></b></td>
						</tr>
						<?
                        while($d=mysql_fetch_array($baca2)){
                            $nama=mysql_fetch_array(mysql_query("SELECT materi FROM materi WHERE id ='$d[id_materi]'"));
                            ?>
                            <tr>
							<td width="152" valign="top" style="border-top-style: none; border-top-width: medium" bgcolor="#DFF1F9">
							<font face="Tahoma" size="2"><?=$nama[materi]?></font></td>
							<td width="84" valign="top" style="border-top-style: none; border-top-width: medium" bgcolor="#DFF1F9">
							<font face="Tahoma" size="2"><? echo substr($d[ses1],-2,1);?></font></td>
							<td width="84" valign="top" style="border-top-style: none; border-top-width: medium" bgcolor="#DFF1F9">
							<font face="Tahoma" size="2"><? echo substr($d[ses2],-2,1);?></font></td>
							<td width="84" valign="top" style="border-top-style: none; border-top-width: medium" bgcolor="#DFF1F9">
							<font face="Tahoma" size="2"><? echo substr($d[ses3],-2,1);?></font></td>
							<td width="83" valign="top" style="border-top-style: none; border-top-width: medium" bgcolor="#DFF1F9">
							<font face="Tahoma" size="2"><? echo substr($d[ses4],-2,1);?></font></td>
							<td width="83" valign="top" style="border-top-style: none; border-top-width: medium" bgcolor="#DFF1F9">
							<font face="Tahoma" size="2"><? echo substr($d[ses5],-2,1);?></font></td>
							<td width="83" valign="top" style="border-top-style: none; border-top-width: medium" bgcolor="#DFF1F9">
							<font face="Tahoma" size="2"><? echo substr($d[ses6],-2,1);?></font></td>
							<td width="83" valign="top" style="border-top-style: none; border-top-width: medium" bgcolor="#DFF1F9">
							<font face="Tahoma" size="2"><? echo substr($d[ses7],-2,1);?></font></td>
							<td width="83" valign="top" style="border-top-style: none; border-top-width: medium" bgcolor="#DFF1F9">
							<font face="Tahoma" size="2"><? echo substr($d[ses8],-2,1);?></font></td>
							<td width="83" valign="top" style="border-top-style: none; border-top-width: medium" bgcolor="#DFF1F9">
							<font face="Tahoma" size="2"><? echo substr($d[ses9],-2,1);?></font></td>
							<td width="83" valign="top" style="border-top-style: none; border-top-width: medium" bgcolor="#DFF1F9">
							<font face="Tahoma" size="2"><? echo substr($d[ses10],-2,1);?></font></td>
						</tr>
                        <?
                        }
                        ?>
						<tr>
							<td width="152" valign="top">
							<p style="margin: 3px 10px">m = masuk</td>
							<td width="833" valign="top" colspan="10">
							<p style="margin: 3px 10px">t = tidak</td>
						</tr>
						<tr>
							<td width="152" valign="top" bgcolor="#CC6600">&nbsp;
							</td>
							<td width="833" valign="top" bgcolor="#CC6600" colspan="10">&nbsp;
							</td>
						</tr>
						<tr>
							<td width="152" valign="top">&nbsp;</td>
							<td width="833" valign="top" colspan="10">&nbsp;</td>
						</tr>
					</table>