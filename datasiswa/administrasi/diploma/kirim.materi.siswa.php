<?php
include"sambung.php";
$kls=mysql_query("SELECT id FROM kelas where id_materi='$id_materi' and nama='$kelas'");
$id_kelas=mysql_fetch_array($kls);
$pr=mysql_query("SELECT * FROM kelas_aktif where id_materi='$id_materi' and id_siswa='$id' and id_kelas='$id_kelas[0]'");
$hasil=mysql_num_rows($pr);
if($hasil =="0"){
$tambah=mysql_query("INSERT INTO kelas_aktif ( id_materi , id_kelas, id_siswa)VALUES ('$id_materi', '$id_kelas[0]', '$id')");
}
$bc=@mysql_query("select * from data_siswa where id='$id'");
$d=mysql_fetch_array($bc);
$bc2=@mysql_query("select * from materi where id='$id_materi'");
$d2=mysql_fetch_array($bc2);
?>
<tr><span class=menu>
			<td background="images/bg_garis_07.gif" width="29">
			<img border="0" src="images/garis_06.gif" width="27" height="36"></td>
			<td background="images/bg_garis_07.gif" width="531"><b>
			<font size="2">TAMBAH MATERI BARU UNTUK KELAS <font color="#800000">
			<?=$kelas?></font> MATERI <font color="#800000"><?=$d2[materi]?></font></font></b></td>
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
								<td width="20%"><font size="2">No Induk Siswa</font></td>
								<td width="79%"><font size="2"><?=$d[induk]?></font></td>
							</tr>
							<tr>
								<td width="20%"><font size="2">Nama Siswa</font></td>
								<td width="79%"><font size="2"><?=$d[nama]?></font></td>
							</tr>
							<tr>
								<td width="20%"><font size="2">Jurusan</font></td>
								<td width="79%"><font size="2"><?=$d[jurusan]?></font></td>
							</tr>
							<tr>
								<td width="20%"><font size="2">Kelas</font></td>
								<td width="79%"><font size="2"><?=$d[kelas]?></font></td>
							</tr>
							<tr>
								<td width="20%"><font size="2">Materi baru</font></td>
								<td width="79%"><font size="2"><?=$d2[materi]?></font></td>
							</tr>
							<tr>
								<td align="center" colspan="2"><br>
								<font size="2">Siswa dengan data tersebut di
								atas sudah dimasukkan dalam database kelas dan
								materi terpilih.<br>
								Klik tombol Lanjut di bawah ini untuk
								melanjutkan proses.<br>
								</font><br>
								<input type="submit" value=" LANJUT " name="lanjut"></td>
							</tr>
                        <input type="hidden" name="id_siswa" value="<?=$id?>">
                        <input type="hidden" name="menu" value="kirim.materi.siswa2">
                        </form>
					</table>
					</td>
					<td width="5">&nbsp;</td>
				</tr>
				</table>
			</td>
		</tr>