<?
include"sambung.php";
?>
		<tr><span class=menu>
			<td background="images/bg_garis_07.gif" width="29">
			<img border="0" src="images/garis_06.gif" width="27" height="36"></td>
			<td background="images/bg_garis_07.gif" width="531"><b>
			<font size="2">TAMBAH MATERI BARU UNTUK KELAS <font color="#800000">
			<?=$kelas?></font></font></b></td>
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
						<form method="POST" action="diploma.php">
							<tr>
								<td width="172"><font size="2">No Induk Siswa</font></td>
								<td><font size="2"><?=$induk?></font></td>
							</tr>
							<tr>
								<td width="172"><font size="2">Nama Siswa</font></td>
								<td><font size="2"><?=$nama?></font></td>
							</tr>
							<tr>
								<td width="172"><font size="2">Jurusan</font></td>
								<td><font size="2"><?=$jur?></font></td>
							</tr>
							<tr>
								<td width="172"><font size="2">Kelas</font></td>
								<td><font size="2"><?=$kelas?></font></td>
							</tr>
							<tr>
								<td width="172"><font size="2">Materi baru</font></td>
								<td><select size="1" name="id_materi">
								<?
                                $jur=strtolower($jur);
                                $jur2=explode(" ",$jur);
                                $bc=mysql_query("select kelas.*, materi.* from kelas, materi where kelas.id_materi=materi.id and kelas.nama='$kelas'");
                                while($d=mysql_fetch_array($bc)){
                                    echo"<option value=\"$d[id]\">$d[materi]</option>";
                                }
                                ?>
								</select></td>
							</tr>
							<tr>
								<td width="172">&nbsp;</td>
								<td>
								<input type="submit" value="TAMBAH SISWA" name="tambah"></td>
							</tr>
							<input type="hidden" name="id" value="<?=$id?>">
                            <?
                            $kelas=strtolower($kelas);
                            ?>
                            <input type="hidden" name="kelas" value="<?=$kelas?>">
                            <input type="hidden" name="menu" value="kirim.materi.siswa">
						</form>
					</table>
					</td>
					<td width="5">&nbsp;</td>
				</tr>
				</table>
			</td>
		</tr>