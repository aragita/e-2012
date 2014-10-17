<?
include"cek.php";
include"sambung.php";
include"tanggal.php";
$bc=@mysql_query("select * from data_siswa where id='$id'");
$d=mysql_fetch_array($bc);
$alamat=explode("|",$d[alamat]);
$ortu=explode("|",$d[ortu]);
$sekolah=explode("|",$d[alamat_sekolah]);
$sekolah2=explode("|",$d[data_sekolah]);
$ttl=explode("|",$d[ttl]);
$dd=$ttl[2]-1;
$kerja=explode("|",$d[data_kerja]);
$kota=explode("|",$d[kota]);
?>
		<tr><span class=menu>
			<td background="images/bg_garis_07.gif" width="29">
			<img border="0" src="images/garis_06.gif" width="27" height="36"></td>
			<td background="images/bg_garis_07.gif" width="531"><font size="2"><b>
			<a href="administrator.php?f=data.siswa.php"><font style="font-size: 9pt">DATA SISWA</font></a></font><font style="font-size: 9pt"> | </font><font size="2">
			<a href="administrator.php?f=input.siswa.php">
			<font style="font-size: 9pt">TAMBAH DATA</font></a></font></td>
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
					&nbsp;</td>
					<td width="5">&nbsp;</td>
				</tr>
				<tr>
					<td width="4">&nbsp;</td>
					<td>
					<table border="0" width="100%" cellspacing="1" id="table3">
						<form method="POST" action="kirim.siswa.php">
							<tr>
								<td colspan="3" bgcolor="#0033CC">
								<p align="center"><b>
								<font size="2" color="#FFFF00">DATA PRIBADI
								SISWA</font></b></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Nama</font></td>
								<td colspan="2"><font size="2">:</font><input type="text" name="nama" value="<?=$d[nama]?>" size="47" style="border: 1px solid #000080"><font size="2">
								No. Induk : </font>
								<input type="text" name="no_induk" value="<?=$d[induk]?>" size="18" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Tempat/Tgl Lahir</font></td>
								<td colspan="2"><font size="2">:</font><input type="text" name="tempat_lahir" value="<?=$ttl[0]?>" size="31" style="border: 1px solid #000080">,&nbsp;&nbsp;&nbsp;
								<select size="1" name="tgl_lahir" style="color: #000080">
								<?
                                echo"<option value=\"$ttl[1]\">$ttl[1]</option>";
                                for($i=1;$i<=31;$i++){
                                    echo"<option value=\"$i\">$i</option>";
                                }
                                ?>
								</select>
								<select size="1" name="bln_lahir" style="color: #000080">
                                <?
                                echo"<option value=\"$ttl[2]\">$ttl[2]</option>";
                                for($i=1;$i<=12;$i++){
                                    echo"<option value=\"$i\">$i</option>";
                                }
                                ?>
								</select>
								<select size="1" name="thn_lahir" style="color: #000080">
                                <?
                                echo"<option value=\"$ttl[3]\">$ttl[3]</option>";
                                $th=date("Y");
                                $awal_th=$th-60;
                                $akhir_th=$th-10;
                                for($i=$awal_th;$i<=$akhir_th;$i++){
                                    echo"<option value=\"$i\">$i</option>";
                                }
                                ?>
								</select></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Agama</font></td>
								<td width="76%" colspan="2"><font size="2">:<select size="1" name="agama" style="border: 1px solid #000080; color:#000080">
                                <option value="<?=$d[agama]?>"><?=$d[agama]?></option>
                                <option value="Islam">Islam</option>
								<option value="Katolik">Katolik</option>
								<option value="Kristen">Kristen</option>
								<option value="Hindu">Hindu</option>
								<option value="Budha">Budha</option>
								</select></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Alamat</font></td>
								<td width="76%" colspan="2">:<input type="text" name="alamat_siswa" value="<?=$alamat[0]?>" size="56" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%">&nbsp;</td>
								<td width="17%"><font size="2">Kelurahan</font></td>
								<td width="59%">
								<input type="text" name="kelurahan" value="<?=$alamat[1]?>" size="30" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%">&nbsp;</td>
								<td width="17%"><font size="2">Kecamatan</font></td>
								<td width="59%">
								<input type="text" name="kecamatan" value="<?=$alamat[2]?>" size="30" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%">&nbsp;</td>
								<td width="17%"><font size="2">Kota</font></td>
								<td width="59%">
								<input type="text" name="kota" value="<?=$kota[0]?>" size="30" style="border: 1px solid #000080"><font size="2">&nbsp;
								Kode Pos </font>
								&nbsp;<!--webbot bot="Validation" b-value-required="TRUE" i-maximum-length="5" --><input type="text" name="kode_pos" value="<?=$kota[1]?>" size="14" style="border: 1px solid #000080" maxlength="5"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Telepon</font></td>
								<td width="76%" colspan="2"><font size="2">:</font><input type="text" name="telp_siswa" value="<?=$d[telp]?>" size="23" style="border: 1px solid #000080"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								HP:</font><input type="text" name="hp" value="<?=$d[hp]?>" size="23" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Alamat Email</font></td>
								<td width="76%" colspan="2"><font size="2">:</font><input type="text" value="<?=$d[email]?>" name="email_siswa" size="40" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Nama Bapak</font></td>
								<td width="76%" colspan="2">
								:<input type="text" name="nama_bapak" value="<?=$ortu[0]?>" size="36" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Pekerjaan Bapak</font></td>
								<td width="76%" colspan="2">
								:<input type="text" name="pekerjaan_bapak" value="<?=$ortu[1]?>" size="36" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Nama Ibu</font></td>
								<td width="76%" colspan="2">
								:<input type="text" name="nama_ibu" value="<?=$ortu[2]?>" size="36" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Pekerjaan Ibu</font></td>
								<td width="76%" colspan="2">
								:<input type="text" name="pekerjaan_ibu" value="<?=$ortu[3]?>" size="36" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="98%" colspan="3" bgcolor="#0033CC">
								<p align="center"><b>
								<font size="2" color="#FFFF00">DATA </font></b>
								<font size="2" color="#FFFF00"><b>ASAL SEKOLAH</b></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Nama Sekolah</font></td>
								<td width="76%" colspan="2"><font size="2">:</font><input type="text" name="nama_sekolah" value="<?=$d[asal_sekolah]?>" size="59" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Pendidikan</font></td>
								<td width="76%" colspan="2"><font size="2">:<select size="1" name="pendidikan" style="border: 1px solid #000080; color:#000080">
                                <option value="<?=$sekolah2[0]?>"><?=$sekolah2[0]?></option>
                                <option value="SD">SD</option>
								<option value="SMP">SMP</option>
								<option value="STM">STM</option>
								<option value="SMA">SMA</option>
								<option value="MA">MA</option>
								<option value="AKADEMI">AKADEMI</option>
								<option value="DIPLOMA I">DIPLOMA I</option>
								<option value="DIPLOMA II">DIPLOMA II</option>
								<option value="DIPLOMA III">DIPLOMA III</option>
								<option value="SARJANA S1">SARJANA S1</option>
								<option value="SARJANA S2">SARJANA S2</option>
								</select></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Jurusan</font></td>
								<td width="76%" colspan="2"><font size="2">:<select size="1" name="jurusan" style="border: 1px solid #000080; color:#000080">
                                <option value="<?=$sekolah2[1]?>"><?=$sekolah2[1]?></option>
                                <option value="IPA">IPA</option>
								<option value="IPS">IPS</option>
								<option value="Akuntansi">Akuntansi</option>
								<option value="Manajemen">Manajemen</option>
								<option value="Bahasa">Bahasa</option>
								<option value="Teknik Mesin">Teknik Mesin
								</option>
								<option value="Teknik Bangunan">Teknik Bangunan
								</option>
								<option value="Teknik Elektro">Teknik Elektro
								</option>
								<option value="Tekhnik Komputer">Tekhnik Komputer
								</option>
								<option value="Kependidikan">Kependidikan
								</option>
								</select></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Tahun Lulus</font></td>
								<td width="76%" colspan="2"><font size="2">:</font><select size="1" name="thn_lulus" style="color: #000080">
                                <option value="<?=$d[th_lulus]?>"><?=$d[th_lulus]?></option>
                                <?
                                $th=date("Y");
                                $awal_th=$th-20;
                                for($i=$awal_th;$i<=$th;$i++){
                                    echo"<option value=\"$i\">$i</option>";
                                }
                                ?>
								</select></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Alamat Sekolah</font></td>
								<td width="76%" colspan="2">:<input type="text" name="alamat_sekolah" value="<?=$sekolah[0]?>" size="59" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Telepon Sekolah</font></td>
								<td width="76%" colspan="2"><font size="2">:</font><input type="text" name="telp_sekolah" value="<?=$sekolah[1]?>" size="29" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="98%" colspan="3" bgcolor="#0033CC">
								<p align="center">
								<font size="2" color="#FFFF00"><b>PILIHAN
								JURUSAN</b></font></td>
							</tr>
							<tr>
								<td width="98%" height="23" colspan="3">
								<table border="0" width="100%" cellspacing="3" id="table4" cellpadding="0">
									<tr>
										<td bgcolor="#0033CC" width="367" align="center" style="border: 1px solid #0033CC">
										<b><font size="2" color="#FFFF00">
										PROGRAM PROFESI SATU TAHUN</font></b></td>
										<td bgcolor="#0033CC" align="center"><b>
										<font size="2" color="#FFFF00">REGULER 4
										S/D 6 BULAN</font></b></td>
									</tr>
									<tr>
										<td width="367" style="border: 1px solid #0033CC">
										<input type="radio" value="KAPP" name="pilihan_jurusan" <?if($d[jurusan]=="KAPP"){echo"checked";}?>><font size="2">Komputer
										Akuntasi, Perpajakan &amp; Perbankan (KAPP)<br>
										</font>
										<input type="radio" value="AMP" name="pilihan_jurusan" <?if($d[jurusan]=="AMP"){echo"checked";}?>><font size="2">Administrasi
										&amp; Manajemen Perkantoran (AMP)<br>
										</font>
										<input type="radio" value="DGAD" name="pilihan_jurusan" <?if($d[jurusan]=="DGAD"){echo"checked";}?>><font size="2">Desain
										Grafis &amp; ANimasi Digital (DGAD)<br>
										</font>
										<input type="radio" value="TSJW" name="pilihan_jurusan" <?if($d[jurusan]=="TSJW"){echo"checked";}?>><font size="2">Teknisi,
										Sistem Jaringan &amp; Web Desain (TSJW)<br>
										</font>
										<input type="radio" value="MIK" name="pilihan_jurusan" <?if($d[jurusan]=="MIK"){echo"checked";}?>><font size="2">Manajemen
										Informatika &amp; Komputer (MIK)<br></font>
										<input type="radio" value="DTAK" name="pilihan_jurusan" <?if($d[jurusan]=="DTAK"){echo"checked";}?>><font size="2">Desain
										Teknik &amp; Animasi Komputer (DTAK)<br>
										</font>
										<input type="radio" value="WORKSHOP" name="pilihan_jurusan" <?if($d[jurusan]=="WORKSHOP"){echo"checked";}?>><font size="2">WORKSHOP
										</font>
										</td>
										<td>
										<div style="border: 1px solid #0033CC">
											<input type="radio" value="OKT" name="pilihan_jurusan" <?if($d[jurusan]=="OKT"){echo"checked";}?>><font size="2">Operator
											Komputer Terapan (OKT)<br>
											</font>
											<input type="radio" value="OKP" name="pilihan_jurusan" <?if($d[jurusan]=="OKP"){echo"checked";}?>><font size="2">Operator
											KOmputer Praktis (OKP)<br>
											</font>
											<input type="radio" value="DGADR" name="pilihan_jurusan" <?if($d[jurusan]=="DGADR"){echo"checked";}?>><font size="2">Desain
											Grafis &amp; Animasi Digital (DGAD)<br>
											</font>
											<input type="radio" value="TSJ" name="pilihan_jurusan" <?if($d[jurusan]=="TSJ"){echo"checked";}?>><font size="2">Teknisi
											&amp; Sistem Jaringan (TSJ)<br>
											</font>
											<input type="radio" value="PBW" name="pilihan_jurusan" <?if($d[jurusan]=="PBW"){echo"checked";}?>><font size="2">Pemrograman
											Berbasis Web (PBW)<br>
											</font>
											<input type="radio" value="DTK" name="pilihan_jurusan" <?if($d[jurusan]=="DTK"){echo"checked";}?>><font size="2">Desain
											Teknik &amp; Komputer (DTK)<br>
											</font>
											<input type="radio" value="PRIVAT" name="pilihan_jurusan" <?if($d[jurusan]=="PRIVAT"){echo"checked";}?>><font size="2">PRIVAT
											</font>
											</div>
										</td>
									</tr>
								</table>
                                <table border="0" width="100%" id="table5">
									<tr>
										<td width="162"><font size="2">Gelombang</font></td>
										<td><font size="2">:
										<select size="1" name="gelombang" style="border: 1px solid #000080; color:#000080">
                                <option <? if($d[gelombang]=="0"){echo"selected";}?> value="0">Reguler</option>
                                <option <? if($d[gelombang]=="1"){echo"selected";}?> value="1">1</option>
								<option <? if($d[gelombang]=="2"){echo"selected";}?> value="2">2</option>
								<option <? if($d[gelombang]=="3"){echo"selected";}?> value="3">3</option>
								</select></font></td>
									</tr>
									<tr>
										<td width="162"><font size="2">Username</font></td>
										<td><font size="2">: </font>
										<input type="text" name="userid" value="<?=$d[userid]?>" size="29" style="border: 1px solid #000080"></td>
									</tr>
									<tr>
										<td width="162"><font size="2">Password</font></td>
										<td><font size="2">: </font>
										<input type="text" name="password" value="<?=$d[password]?>" size="29"                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 r:#000080">
								<option value="-" <? if($kerja[0]=="-"){echo"selected";}?>>Pilih</option>
								<option value="Profesional" <? if($kerja[0]=="Profesional"){echo"selected";}?>>Profesional</option>
								<option value="Karyawan" <? if($kerja[0]=="Karyawan"){echo"selected";}?>>Karyawan</option>
								<option value="PNS" <? if($kerja[0]=="PNS"){echo"selected";}?>>PNS</option>
								<option value="Wiraswasta" <? if($kerja[0]=="Wiraswasta"){echo"selected";}?>>Wiraswasta</option>
								<option value="Pelajar/Mahasiswa" <? if($kerja[0]=="Pelajar/Mahasiswa"){echo"selected";}?>>Pelajar/Mahasiswa
								</option>
								<option value="Ibu Rumah Tangga" <? if($kerja[0]=="Ibu Rumah Tangga"){echo"selected";}?>>Ibu Rumah Tangga
								</option>
								<option value="Pensiunan" <? if($kerja[0]=="Pensiunan"){echo"selected";}?>>Pensiunan</option>
								</select></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Nama Institusi</font></td>
								<td width="76%" colspan="2"><font size="2">:</font><input type="text" name="nama_kerja" value="<?=$kerja[1]?>" size="35" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Alamat Institusi</font></td>
								<td width="76%" colspan="2"><font size="2">:</font><input type="text" name="alamat_kerja" value="<?=$kerja[2]?>" size="73" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Kota</font></td>
								<td width="76%" colspan="2"><font size="2">:</font><input type="text" name="kota_kerja" value="<?=$kerja[3]?>" size="36" style="border: 1px solid #000080"><font size="2">
								Kode Pos </font>
								&nbsp;<!--webbot bot="Validation" b-value-required="TRUE" i-maximum-length="6" --><input type="text" name="kodepos_kerja" value="<?=$kerja[4]?>" size="15" style="border: 1px solid #000080" maxlength="6"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Nomor Telepon</font></td>
								<td width="76%" colspan="2">:<input type="text" name="telp_kerja" value="<?=$kerja[5]?>" size="26" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Faks</font></td>
								<td width="76%" colspan="2">:<input type="text" name="faks_kerja" value="<?=$kerja[6]?>" size="26" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="98%" colspan="3" align="center">
								<input type="submit" value="UBAH DATA" name="ubah" style="color: #FFFF00; font-family: Tahoma; font-size: 10pt; font-weight: bold; background-color: #000080"></td>
                                <input type="hidden" name="id" value="<?=$d[id]?>">
                            </tr>
						</form>
					</table>
					</td>
					<td width="5"></td>
				</tr>
				<tr>
					<td width="4">&nbsp;</td>
					<td><center><a href="javascript:history.back();"><img border="0" src="./images/kembali.gif"></a></td>
					<td width="5">&nbsp;</td>
				</tr>
			</table>
			</td>
		</tr>