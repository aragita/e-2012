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
							NILAI SISWA </font></b></td>
						</tr>
						<tr>
							<td width="275" valign="top" style="border-bottom-style: none; border-bottom-width: medium" bgcolor="#DFF1F9">
							<p align="center"><b><font face="Tahoma" size="2">
							Nama Materi</font></b></td>
							<td width="703" valign="top" colspan="10" align="center" bgcolor="#DFF1F9">
							<b><font face="Tahoma" size="2">Nilai</font></b></td>
						</tr>
						<tr>
							<td width="275" valign="top" style="border-style: none; border-width: medium" bgcolor="#DFF1F9">
							&nbsp;</td>
							<td width="42" valign="top" align="center" style="border-style: none; border-width: medium" bgcolor="#DFF1F9">
							<b><font face="Tahoma" size="2">Harian</font></b></td>
							<td width="84" valign="top" align="center" style="border-style: none; border-width: medium" bgcolor="#DFF1F9">
							<b><font face="Tahoma" size="2">Tugas</font></b></td>
							<td width="84" valign="top" align="center" style="border-style: none; border-width: medium" bgcolor="#DFF1F9">
							<b><font face="Tahoma" size="2">Tengah</font></b></td>
							<td width="83" valign="top" align="center" style="border-style: none; border-width: medium" bgcolor="#DFF1F9">
							<b><font face="Tahoma" size="2">Akhir</font></b></td>
							<td width="83" valign="top" align="center" style="border-style: none; border-width: medium" bgcolor="#DFF1F9">
							<b><font face="Tahoma" size="2">Total</font></b></td>
							<td width="83" valign="top" align="center" style="border-style: none; border-width: medium" bgcolor="#DFF1F9">
							<b><font face="Tahoma" size="2">Abjad</font></b></td>
							</tr>
						<?
                        while($d=mysql_fetch_array($baca2)){
                            $nama=mysql_fetch_array(mysql_query("SELECT materi FROM materi WHERE id ='$d[id_materi]'"));
                            $total=((($d[nilai_harian]*30/100)+($d[nilai_tugas]*70/100))*30/100)+($d[nilai_akhir]*70/100);
                                if($total<=49){
                                    $ab="E";
                                }elseif($total<=58){
                                    $ab="D";
                                }elseif($total<=67){
                                    $ab="D+";
                                }elseif($total<=75){
                                    $ab="C";
                                }elseif($total<=82){
                                    $ab="C+";
                                }elseif($total<=88){
                                    $ab="B";
                                }elseif($total<=94){
                                    $ab="B+";
                                }else{
                                    $ab="A";
                                }
                            ?>
                            <tr>
							<td width="275" valign="top" style="border-top-style: none; border-top-width: medium" bgcolor="#DFF1F9">
							<font face="Tahoma" size="2"><?=$nama[materi]?></font></td>
							<td width="42" valign="top" style="border-top-style: none; border-top-width: medium" bgcolor="#DFF1F9">
							<font face="Tahoma" size="2"><?=$d[nilai_harian]?></font></td>
							<td width="84" valign="top" style="border-top-style: none; border-top-width: medium" bgcolor="#DFF1F9">
							<font face="Tahoma" size="2"><?=$d[nilai_tugas]?></font></td>
							<td width="84" valign="top" style="border-top-style: none; border-top-width: medium" bgcolor="#DFF1F9">
							<font face="Tahoma" size="2"><?=$d[nilai_tengah]?></font></td>
							<td width="83" valign="top" style="border-top-style: none; border-top-width: medium" bgcolor="#DFF1F9">
							<font face="Tahoma" size="2"><?=$d[nilai_akhir]?></font></td>
							<td width="83" valign="top" style="border-top-style: none; border-top-width: medium" bgcolor="#DFF1F9">
							<font face="Tahoma" size="2"><?=$total?></font></td>
							<td width="83" valign="top" style="border-top-style: none; border-top-width: medium" bgcolor="#DFF1F9">
							<font face="Tahoma" size="2"><?=$ab?></font></td>
							</tr>
                        <?
                        }
                        ?>
						<tr>
							<td width="275" valign="top">
							&nbsp;</td>
							<td width="703" valign="top" colspan="10">
							&nbsp;</td>
						</tr>
						<tr>
							<td width="275" valign="top" bgcolor="#CC6600">&nbsp;
							</td>
							<td width="703" valign="top" bgcolor="#CC6600" colspan="10">&nbsp;
							</td>
						</tr>
						<tr>
							<td width="275" valign="top">&nbsp;</td>
							<td width="703" valign="top" colspan="10">&nbsp;</td>
						</tr>
					</table>