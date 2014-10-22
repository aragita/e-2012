<tr><span class=menu>
			<td background="images/bg_garis_07.gif" width="29">
			<b>
			<img border="0" src="images/garis_06.gif" width="27" height="36"></b></td>
			<td background="images/bg_garis_07.gif" width="531">
			<b><font style="font-size: 9pt" size="2">DATA ABSENSI SISWA</font></b></td>
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
					<td width="4" height="274">&nbsp;</td>
					<td height="274">
					<form method="POST" action="diploma.php">
						<table border="1" width="100%" cellspacing="0" cellpadding="0" id="table4">
							<tr>
								<td colspan="2" bgcolor="#000080">
								<p align="center">
								<font size="2" color="#FFFF00"><b>DATA ABSENSI
								SISWA BERDASARKAN KELAS DAN MATERI</b></font></td>
							</tr>
							<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Kelas</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<select size="1" name="ab_kelas">
                                <?
                                include"sambung.php";
                                $ses=mysql_query("select session from kelas order by nama");
                                $jml=mysql_fetch_array($ses);
                                $bc1=mysql_query("select id,nama from kelas order by nama");
                                while($kelas=mysql_fetch_array($bc1)){
                                echo"<option value=\"$kelas[nama]|$kelas[id]\">$kelas[nama]</option>";
                                }
                                ?>
								</select></td>
							</tr>
							<tr>
								<td width="30%">
								<p style="margin-left: 5px"><font size="2">
								Materi</font></td>
								<td width="69%">
								<p style="margin-left: 5px">
								<select size="1" name="ab_materi">
                                <?
                                $bc2=mysql_query("select kelas.id, kelas.nama, kelas.id_materi, materi.materi from kelas,materi where kelas.id_materi=materi.id order by materi.materi");
                                while($materi=mysql_fetch_array($bc2)){
                                echo"<option value=\"$materi[id_materi]|$materi[materi]\">$materi[materi]</option>";
                                }
                                ?>
								</select></td>
							</tr>
							<tr>
								<td width="30%">
								<p style="margin-left: 5px; margin-right: 5px">
								<font size="2">Session ke</font></td>
								<td width="69%">
								<p style="margin-left: 5px; margin-right: 5px">
								<select size="1" name="session">
                                <?
                                for($ses=1;$ses<=$jml[session];$ses++){
                                echo"<option value=\"$ses\">$ses</option>";
                                }
                                ?>
								</select></td>
							</tr>
							<tr>
								<td width="30%">
								<p style="margin: 0 5px">&nbsp;</td>
								<td width="69%">
								<p style="margin: 0 5px">
								<input type="submit" value="LIHAT ABSENSI" name="lihat"></td>
							</tr>
						</table>
						<input type="hidden" name="menu" value="data.absensi">
                        <input type="hidden" name="id_kelas" value="<?=$materi[id]?>">
                   </form>
					<?
                    include"sambung.php";
                    $materi2=explode("|",$ab_materi);
                    $kelas2=explode("|",$ab_kelas);
                    $ses1=mysql_query("select session from kelas where nama='$kelas2[0]' and id_materi='$materi2[0]'");
                    $jml_ses=mysql_fetch_array($ses1);
                    if(isset($lihat)){
                        $cek=mysql_query("SELECT * FROM kelas WHERE nama='$kelas2[0]' and id_materi='$materi2[0]'");
                        $hsl=mysql_num_rows($cek);
                        if($hsl=="1" and $session <= $jml_ses[session]){
                            ?>
                    <font size="2"><b>Data Absensi siswa<br>
					kelas:
					<font color="#800000"><?=$kelas2[0]?><br>
					</font>Materi:
					<font color="#800000"><?=$materi2[1]?><br>
					</font>Session:
                    <font color="#800000"><?=$session?><br>
					</font><p align="center">
					<table border="1" width="100%" cellspacing="0" id="table3">
                    <tr>
							<td bgcolor="#000080" width="16%" align="center">
							<font size="2" color="#FFFF00"><b>No Induk</b></font></td>
							<td bgcolor="#000080" width="27%" align="center">
							<font size="2" color="#FFFF00"><b>Nama Siswa</b></font></td>
							<td bgcolor="#000080" width="38%" align="center">
							<b><font color="#FFFF00" size="2">Alamat</font></b></td>
							<td bgcolor="#000080" align="center" width="17%">
							<b><font color="#FFFF00" size="2">Absensi</font></b></td>
						</tr>
						<?
                        $baca=mysql_query("SELECT kelas_aktif.id_materi, kelas_aktif.id_siswa, kelas_aktif.ses$session, data_siswa.nama, data_siswa.alamat, data_siswa.kota, data_siswa.induk FROM kelas_aktif,data_siswa WHERE kelas_aktif.id_materi='$materi2[0]' and kelas_aktif.id_siswa=data_siswa.id and kelas_aktif.id_kelas=$kelas2[1]");
                        While($d=mysql_fetch_array($baca)){
                            if(ereg("m",$d["ses".$session])){
                                $abs="Masuk";
                            }elseif(ereg("t",$d["ses".$session])){
                                $abs="<font color=\"#FF0000\">Tidak masuk</font>";
                            }else{
                                $abs="-";
                            }
                            $d[alamat]=str_replace("|"," ", $d[alamat]);
                            $d[kota]=str_replace("|"," ", $d[kota]);
                            
                        echo"<tr>
							<td width=\"16%\">
							<p style=\"margin: 0 5px; \"><font size=\"2\">$d[induk]</font></td>
							<td width=\"27%\">
							<p style=\"margin: 0 5px; \"><font size=\"2\">
							<a href=\"diploma.php?menu=detail.siswa&id=$d[id_siswa]\">$d[nama]</a></font></td>
							<td width=\"38%\">
							<p style=\"margin-left: 5px; margin-right: 5px\">
							<font size=\"2\">$d[alamat] $d[kota]</font></td>
							<td width=\"17%\">
							<p style=\"margin-left: 5px; margin-right: 5px\" align=\"center\">
							<font size=\"2\">$abs</font></td>
						</tr>";
                        }
                        $inst=mysql_query("SELECT kelas.kode_instruktur, instruktur.nama FROM kelas, instruktur WHERE kelas.kode_instruktur=instruktur.kode and kelas.nama='$kelas2[0]' and id_materi='$materi2[0]'");
                        $ins=mysql_fetch_array($inst);
                        $instruktur=$ins[nama];
                        ?>
						<tr>
							<td colspan="4">
							<font size="2">&nbsp;Instruktur : <b><?=$ins[nama]?></b><br>
                        <?
                        $inst=mysql_query("SELECT kelas.kode_assisten1, instruktur.nama FROM kelas, instruktur WHERE kelas.kode_assisten1=instruktur.kode and kelas.nama='$kelas2[0]' and id_materi='$materi2[0]'");
                        $ins=mysql_fetch_array($inst);
                        ?>
                        &nbsp;Asisten 1 : <b><?=$ins[nama]?></b><br>
                        <?
                        $inst=mysql_query("SELECT kelas.kode_assisten2, instruktur.nama FROM kelas, instruktur WHERE kelas.kode_assisten2=instruktur.kode and kelas.nama='$kelas2[0]' and id_materi='$materi2[0]'");
                        $ins=mysql_fetch_array($inst);
                        ?>
                        &nbsp;Asisten 2 : <b><?=$ins[nama]?></b></font></td>
						</tr>
						<tr>
							<td colspan="4">
							&nbsp;<?
                            $ass=$ins[nama];
                            echo"<a target=\"_blank\" href=\"./absensi.cetak.php?kelas=$kelas2[0]&id_kelas=$kelas2[1]&materi=$materi2[0]&nm_materi=$materi2[1]&jml_session=$session&instruktur=$instruktur&assisten=$ass\">Laporan absensi lengkap</a>";?>
					</td>
						</tr>
						</table>
                        <?
                        }else{
                            echo"<p align=\"center\" style=\"margin-top: 2px; margin-bottom: 1px\">
					<b><font color=\"#FF0000\" size=\"2\">Wah... kayaknya data kelas
					$kelas2[0] materi $materi2[1] dan session ke $session,</font></b></p>
					<p align=\"center\" style=\"margin-top: 2px; margin-bottom: 1px\">
					<b><font color=\"#FF0000\" size=\"2\">Nggak ada tuh...</font></b></p>
					<p align=\"center\" style=\"margin-top: 2px; margin-bottom: 1px\">
					<b><font color=\"#FF0000\" size=\"2\">Coba lagi dech.....</font></b>";
                        }
                    }
                        ?>
					</td>
					<td width="5" height="274">&nbsp;</td>
				</tr>
				<tr>
					<td width="4">&nbsp;</td>
					<td>
					<p>
					&nbsp;</td>
					<td width="5">&nbsp;</td>
				</tr>
			</table>
			</td>
		</tr>