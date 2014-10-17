<?
include"sambung.php";
$baca=mysql_query("select * from instruktur where kode='$kode'");
$d=mysql_fetch_array($baca);
?>
<table border="0" width="100%" cellpadding="2" id="table2">
				<tr>
					<td width="4">&nbsp;</td>
					<td>
					<form method="POST" action="kirim.gantipassword.php">
						<table border="1" width="100%" cellspacing="0" cellpadding="0" id="table4">
							<tr>
								<td colspan="2" bgcolor="#000080">
								<p align="center">
								<font size="2" color="#FFFF00"><b>DATA 
								INSTRUKTUR</b></font></td>
							</tr>
							<tr>
								<td width="24%">
								<p style="margin: 0 5px"><font size="2">Nama 
								Instruktur</font></td>
								<td width="75%">
								<input type="text" name="nama" size="63" style="color: #000080; font-size: 10pt; font-family: Tahoma; border: 1px solid #FFFFFF" value="<?=$d[nama]?>"></td>
							</tr>
							<tr>
								<td width="24%">
								<p style="margin: 0 5px"><font size="2">Kode 
								Instruktur</font></td>
								<td width="75%">
								<input type="text" name="kode" size="21" style="color: #000080; font-size: 10pt; font-family: Tahoma; border: 1px solid #FFFFFF" value="<?=$d[kode]?>"></td>
							</tr>
							<tr>
								<td width="24%">
								<p style="margin: 0 5px"><font size="2">Status</font></td>
								<td width="75%">
								<input type="text" name="status" size="30" style="color: #000080; font-size: 10pt; font-family: Tahoma; border: 1px solid #FFFFFF" value="<?=$d[status]?>"></td>
							</tr>
							<tr>
								<td width="24%">
								<p style="margin: 0 5px"><font size="2">Password</font></td>
								<td width="75%">
								<input type="text" name="password" size="26" style="color: #000080; font-size: 10pt; font-family: Tahoma; border: 1px solid #FFFFFF" value="<?=$d[password]?>">
								<input type="submit" value="GANTI" name="ganti" style="font-size: 8pt; color: #000080; font-family: Tahoma; font-weight: bold"></td>
							</tr>
						</table>
					</form>
					<font size="2"><b>Data Kelas</b></font><table border="1" width="100%" cellspacing="0" id="table3">
						<tr>
							<td bgcolor="#000080" width="151" align="center">
							<font size="2" color="#FFFF00"><b>Nama Kelas</b></font></td>
							<td bgcolor="#000080" width="141" align="center">
							<font size="2" color="#FFFF00"><b>Jurusan</b></font></td>
							<td bgcolor="#000080" width="291" align="center">
							<font size="2" color="#FFFF00"><b>Materi</b></font></td>
							<td bgcolor="#000080" align="center">
							<font size="2" color="#FFFF00"><b>Data</b></font></td>
						</tr>
						<?
                        $baca2=mysql_query("select materi.*,kelas.* FROM kelas, materi where kelas.kode_instruktur='$kode'and materi.id=kelas.id_materi");
                        while($dd=mysql_fetch_array($baca2)){
                            echo"<tr>
							<td width=\"151\">
							<p style=\"margin: 0 3px\"><font size=\"2\">$dd[nama]</font></td>
							<td width=\"141\">
							<p style=\"margin: 0 3px\"><font size=\"2\">
							$dd[jurusan]</font></td>
							<td width=\"291\">
							<p style=\"margin: 0 3px\" align=\"left\">
							<font size=\"2\">$dd[materi]</font></td>
							<td>
							<p align=\"center\"><font size=\"2\">[<a href=\"instruktur.php?menu=data_kelas&kelas=$dd[nama]&id_kelas=$dd[id]&materi=$dd[materi]&id_materi=$dd[id_materi]\">Lihat Data</a>]</font></td>
						</tr>";
                        }
                        ?>
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