<?php
include"sambung.php";
$bc=@mysql_query("select * from data_siswa where id='$id_siswa'");
$d=mysql_fetch_array($bc);
?>
   <tr><span class=menu>
			<td background="images/bg_garis_07.gif" width="29">
			<img border="0" src="images/garis_06.gif" width="27" height="36"></td>
			<td background="images/bg_garis_07.gif" width="531"><font size="2">
			<b>DATA</b></font><b><font size="2"> MATERI YANG DIAMBIL OLEH SISWA
			<?=$d[nama]?></font></b></td>
			<td background="images/bg_garis_07.gif" width="220">
			<p align="center"><b><font size="2" color="#FF0000"><?=$now?></font></b></td></span>
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
					<table border="0" width="100%" cellspacing="1" id="table3">
							<tr>
								<td width="21%"><font size="2">No Induk Siswa</font></td>
								<td width="78%">
								<p style="margin-left: 24px"><font size="2">
								<?=$d[induk]?></font></td>
							</tr>
							<tr>
								<td width="21%"><font size="2">Nama Siswa</font></td>
								<td width="78%">
								<p style="margin-left: 24px"><font size="2">
								<?=$d[nama]?></font></td>
							</tr>
							<tr>
								<td width="21%"><font size="2">Jurusan</font></td>
								<td width="78%">
								<p style="margin-left: 24px"><font size="2">
								<?=$d[jurusan]?></font></td>
							</tr>
							<tr>
								<td width="21%"><font size="2">Kelas</font></td>
								<td width="78%">
								<p style="margin-left: 24px"><font size="2">
								<?=$d[kelas]?></font></td>
							</tr>
							<tr>
								<td width="21%" valign="top"><font size="2">
								Materi yang telah diambil</font></td>
								<td width="78%">
								<ul type="square">
                                    <?
                                    $kelas="kelas_aktif";
                                    $bc2=mysql_query("select $kelas.id_materi,materi.materi from $kelas,materi where id_siswa='$id_siswa' and $kelas.id_materi=materi.id");
                                    while($h=mysql_fetch_array($bc2)){
                                        echo"<li><font size=\"2\">$h[materi]</font></li>";
									}
                                    ?>
								</ul>
								</td>
							</tr>
							<tr>
								<td align="center" colspan="2">&nbsp;</td>
							</tr>
					</table>
					</td>
					<td width="5">&nbsp;</td>
				</tr>
				</table>
			</td>
		</tr>