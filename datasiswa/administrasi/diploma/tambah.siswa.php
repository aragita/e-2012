		<tr><span class=menu>
			<td background="images/bg_garis_07.gif" width="29">
			<img border="0" src="images/garis_06.gif" width="27" height="36"></td>
			<td background="images/bg_garis_07.gif" width="531"><font size="2"><b>
			<a href="diploma.php?menu=data.siswa"><font style="font-size: 9pt">DATA SISWA</font></a></font><font style="font-size: 9pt"> | </font><font size="2">
			<a href="diploma.php?menu=tambah.siswa">
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
								<td colspan="2"><font size="2">:</font><input type="text" name="nama" size="47" style="border: 1px solid #000080"><font size="2">
								No. Induk : </font>
								<input type="text" name="no_induk" size="18" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Tempat/Tgl Lahir</font></td>
								<td colspan="2"><font size="2">:</font><input type="text" name="tempat_lahir" size="31" style="border: 1px solid #000080">,&nbsp;&nbsp;&nbsp;
								<select size="1" name="tgl_lahir" style="color: #000080">
								<?
                                for($i=1;$i<=31;$i++){
                                    echo"<option value=\"$i\">$i</option>";
                                }
                                ?>
								</select>
								<select size="1" name="bln_lahir" style="color: #000080">
                                <?
                                for($i=1;$i<=12;$i++){
                                    echo"<option value=\"$i\">$i</option>";
                                }
                                ?>
								</select>
								<select size="1" name="thn_lahir" style="color: #000080">
                                <?
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
								<option value="Islam">Islam</option>
								<option value="Katolik">Katolik</option>
								<option value="Kristen">Kristen</option>
								<option value="Hindu">Hindu</option>
								<option value="Budha">Budha</option>
								</select></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Alamat</font></td>
								<td width="76%" colspan="2">:<input type="text" name="alamat_siswa" size="56" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%">&nbsp;</td>
								<td width="17%"><font size="2">Kelurahan</font></td>
								<td width="59%">
								<input type="text" name="kelurahan" size="30" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%">&nbsp;</td>
								<td width="17%"><font size="2">Kecamatan</font></td>
								<td width="59%">
								<input type="text" name="kecamatan" size="30" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%">&nbsp;</td>
								<td width="17%"><font size="2">Kota</font></td>
								<td width="59%">
								<input type="text" name="kota" size="30" style="border: 1px solid #000080"><font size="2">&nbsp;
								Kode Pos </font>
								&nbsp;<!--webbot bot="Validation" b-value-required="TRUE" i-maximum-length="5" --><input type="text" name="kode_pos" size="14" style="border: 1px solid #000080" maxlength="5"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Telepon</font></td>
								<td width="76%" colspan="2"><font size="2">:</font><input type="text" name="telp_siswa" size="23" style="border: 1px solid #000080"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								HP:</font><input type="text" name="hp" size="23" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Alamat Email</font></td>
								<td width="76%" colspan="2"><font size="2">:</font><input type="text" name="email_siswa" size="40" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Nama Bapak</font></td>
								<td width="76%" colspan="2">
								:<input type="text" name="nama_bapak" size="36" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Pekerjaan Bapak</font></td>
								<td width="76%" colspan="2">
								:<input type="text" name="pekerjaan_bapak" size="36" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Nama Ibu</font></td>
								<td width="76%" colspan="2">
								:<input type="text" name="nama_ibu" size="36" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Pekerjaan Ibu</font></td>
								<td width="76%" colspan="2">
								:<input type="text" name="pekerjaan_ibu" size="36" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="98%" colspan="3" bgcolor="#0033CC">
								<p align="center"><b>
								<font size="2" color="#FFFF00">DATA </font></b>
								<font size="2" color="#FFFF00"><b>ASAL SEKOLAH</b></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Nama Sekolah</font></td>
								<td width="76%" colspan="2"><font size="2">:</font><input type="text" name="nama_sekolah" size="59" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Pendidikan</font></td>
								<td width="76%" colspan="2"><font size="2">:<select size="1" name="stts_pendidikan" style="border: 1px solid #000080; color:#000080">
								<option value="">Sudah lulus</option>
                                <option value="Masih menjadi siswa">Masih menjadi siswa</option>
								</select>
                                <select size="1" name="pendidikan" style="border: 1px solid #000080; color:#000080">
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
                                <option value="-">Belum lulus</option>
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
								<td width="76%" colspan="2">:<input type="text" name="alamat_sekolah" size="59" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Telepon Sekolah</font></td>
								<td width="76%" colspan="2"><font size="2">:</font><input type="text" name="telp_sekolah" size="29" style="border: 1px solid #000080"></td>
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
										<input type="radio" value="KAPP" name="pilihan_jurusan" checked><font size="2">Komputer
										Akuntasi, Perpajakan &amp; Perbankan (KAPP)<br>
										</font>
										<input type="radio" value="AMP" name="pilihan_jurusan"><font size="2">Administrasi
										&amp; Manajemen Perkantoran (AMP)<br>
										</font>
										<input type="radio" value="DGAD" name="pilihan_jurusan"><font size="2">Desain
										Grafis &amp; ANimasi Digital (DGAD)<br>
										</font>
										<input type="radio" value="TSJW" name="pilihan_jurusan"><font size="2">Teknisi,
										Sistem Jaringan &amp; Web Desain (TSJW)<br>
										</font>
										<input type="radio" value="MIK" name="pilihan_jurusan"><font size="2">Manajemen
										Informatika &amp; Komputer (MIK)<br>
										</font>
										<input type="radio" value="DTAK" name="pilihan_jurusan"><font size="2">Desain
										Teknik &amp; Animasi Komputer (DTAK)<br>
										</font>
										<input type="radio" value="WORKSHOP" name="pilihan_jurusan"><font size="2">WORKSHOP
										</font>
										</td>
										<td>
										<div style="border: 1px solid #0033CC">
											<input type="radio" value="OKT" name="pilihan_jurusan"><font size="2">Operator
											Komputer Terapan (OKT)<br>
											</font>
											<input type="radio" value="OKP" name="pilihan_jurusan"><font size="2">Operator
											KOmputer Praktis (OKP)<br>
											</font>
											<input type="radio" value="DGADR" name="pilihan_jurusan"><font size="2">Desain
											Grafis &amp; Animasi Digital (DGAD)<br>
											</font>
											<input type="radio" value="TSJ" name="pilihan_jurusan"><font size="2">Teknisi
											&amp; Sistem Jaringan (TSJ)<br>
											</font>
											<input type="radio" value="PBW" name="pilihan_jurusan"><font size="2">Pemrograman
											Berbasis Web (PBW)<br>
											</font>
											<input type="radio" value="DTK" name="pilihan_jurusan"><font size="2">Desain
											Teknik &amp; Komputer (DTK)<br>
											</font>
											<input type="radio" value="PRIVAT" name="pilihan_jurusan"><font size="2">PRIVAT
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
                                <option value="0">Reguler</option>
                                <option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								</select></font></td>
									</tr>
									<tr>
										<td width="162"><font size="2">Username</font></td>
										<td><font size="2">: </font>
										<input type="text" name="userid" size="29" style="border: 1px solid #000080"></td>
									</tr>
									<tr>
										<td width="162"><font size="2">Password</font></td>
										<td><font size="2">: </font>
										<input type="text" name="password" size="29" style="border: 1px solid #000080"></td>
									</tr>
								</table>
                                </td>
							</tr>
							<tr>
								<td width="98%" colspan="3" bgcolor="#0033CC">
								<p align="center">
								<font size="2" color="#FFFF00"><b>DATA PEKERJAAN</b></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Pekerjaan</font></td>
								<td width="76%" colspan="2"><font size="2">:<select size="1" name="pekerjaan" style="border: 1px solid #000080; color:#000080">
								<option value="-" selected>Pilih</option>
								<option value="Profesional">Profesional</option>
								<option value="Karyawan">Karyawan</option>
								<option value="PNS">PNS</option>
								<option value="Wiraswasta">Wiraswasta</option>
								<option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa
								</option>
								<option value="Ibu Rumah Tangga">Ibu Rumah Tangga
								</option>
								<option value="Pensiunan">Pensiunan</option>
								</select></font></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Nama Institusi</font></td>
								<td width="76%" colspan="2"><font size="2">:</font><input type="text" name="nama_kerja" size="35" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Alamat Institusi</font></td>
								<td width="76%" colspan="2"><font size="2">:</font><input type="text" name="alamat_kerja" size="73" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Kota</font></td>
								<td width="76%" colspan="2"><font size="2">:</font><input type="text" name="kota_kerja" size="36" style="border: 1px solid #000080"><font size="2">
								Kode Pos </font>
								&nbsp;<!--webbot bot="Validation" b-value-required="TRUE" i-maximum-length="6" --><input type="text" name="kodepos_kerja" size="15" style="border: 1px solid #000080" maxlength="6"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Nomor Telepon</font></td>
								<td width="76%" colspan="2">:<input type="text" name="telp_kerja" size="26" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="22%"><font size="2">Faks</font></td>
								<td width="76%" colspan="2">:<input type="text" name="faks_kerja" size="26" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="98%" colspan="3" align="center">
								<input type="submit" value="TAMBAH DATA" name="tambah" style="color: #FFFF00; font-family: Tahoma; font-size: 10pt; font-weight: bold; background-color: #000080"></td>
							</tr>
						</form>
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
			</td>
		</tr>