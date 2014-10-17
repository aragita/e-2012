<?
include"sambung.php";
?>
<tr><span class=menu>
			<td background="images/bg_garis_07.gif" width="29">
			<img border="0" src="images/garis_06.gif" width="27" height="36"></td>
			<td background="images/bg_garis_07.gif" width="531"><font size="2">
			<font style="font-size: 9pt"><b>
			DATA SISWA AKTIF KELAS <? echo strtoupper($kelas);?></font></font></td>
			<td background="images/bg_garis_07.gif" width="220"></b>
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
                    <font size="2">Tampil Data Siswa Berdasarkan kelas <b><?=$kelas?>.<br>
					</b><font color="#800000">Untuk menampilkan data detail
					siswa, klik nama dari siswa tersebut.</font></font>
                    <table border="1" width="100%" cellspacing="0" id="table3">
						<tr>
							<td bgcolor="#000080" width="50" align="center"><b>
							<font color="#FFFF00" size="2">Nomor Induk</font></b></td>
							<td bgcolor="#000080" width="200" align="center">
							<font size="2" color="#FFFF00"><b>Nama Siswa</b></font></td>
							<td bgcolor="#000080" width="10" align="center">
							<font size="2" color="#FFFF00"><b>Kelas</b></font></td>
							<td bgcolor="#000080" align="center" width="400">
							<font size="2" color="#FFFF00"><b>Alamat</b></font></td>
						</tr>
                        <?
                        $kls=mysql_query("SELECT id FROM kelas where id_materi='$id_materi' and nama='$kelas'");
                        $id_kelas=mysql_fetch_array($kls);
                        $bc=@mysql_query("select kelas_aktif.id_materi, data_siswa.id, data_siswa.induk, data_siswa.nama, data_siswa.kelas, data_siswa.alamat, data_siswa.kota from kelas_aktif, data_siswa where kelas_aktif.id_kelas='$id_kelas[0]' and kelas_aktif.id_materi='$id_materi' and kelas_aktif.id_siswa=data_siswa.id");
                        While($d=@mysql_fetch_array($bc)){
                            $alamat=str_replace("|"," ",$d[alamat]);
                            $kota=explode("|",$d[kota]);
                            echo"<tr>
							<td width=\"105\">
							<p style=\"margin: 0 3px\"><font size=\"2\">
							$d[induk]</font></td>
							<td width=\"156\">
							<p style=\"margin: 0 3px\"><font size=\"2\">
							<a href=\"diploma.php?menu=detail.siswa&id=$d[id]\">$d[nama]</a></font></td>
							<td width=\"80\">
							<p style=\"margin: 0 3px\"><font size=\"2\">$d[kelas]</font></td>
							<td width=\"235\">
							<p style=\"margin: 0 3px\"><font size=\"2\">$alamat $kota[0]</font></td>
							</tr>";
					}
                        ?>
					</table>
					</td>
					<td width="5">&nbsp;</td>
				</tr>

					</table>
<font size=\"2\"><center><a href="diploma.php?menu=data.kelas">Kembali lihat data kelas</a></center></font></td>
					<td width="5">&nbsp;</td>
				</tr>
			</table>
			</td>
		</tr>