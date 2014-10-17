<tr>
			<td background="images/bg_garis_07.gif" width="29">
			<img border="0" src="images/garis_06.gif" width="27" height="36"></td>
			<td background="images/bg_garis_07.gif" width="531">
			<b>
			<a href="diploma.php?menu=data.siswa">DATA SISWA</a>
			<font size="2">|</font>
			<a href="diploma.php?menu=tambah.siswa">TAMBAH DATA</a></b></td>
			<td background="images/bg_garis_07.gif" width="220">
			&nbsp;</td>
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
					<table border="1" width="100%" cellspacing="0" cellpadding="0" id="table4">
						<form method="POST" action="diploma.php">
							<tr>
								<td bgcolor="#000080">
								<p align="center" style="margin: 2px 3px"><b>
								<font color="#00FFFF" size="2">Pencarian Data
								Siswa</font></b></td>
							</tr>
							<tr>
								<td>
								<input type="radio" value="0" checked name="status">
								<font size="2">Baru<br>
								</font><input type="radio" name="status" value="1"><font size="2">
								Jurusan </font><select size="1" name="jurusan">
                        <?
                        include"sambung.php";
                        $baca2=mysql_query("select jurusan,kode from jurusan order by jurusan");
                        While($k=mysql_fetch_array($baca2)){
                        echo"<option value=\"$k[kode]\">$k[jurusan]</option>";
                        }
                        ?>
                        </select><font size="2"><br>
                        <input type="radio" name="status" value="2"><font size="2">
								Kelas </font><select size="1" name="kelas">
                        <?
                        include"sambung.php";
                        $baca2=mysql_query("select DISTINCT kelas from data_siswa order by kelas");
                        While($k=mysql_fetch_array($baca2)){
                            if($k[kelas]==""){
                                $k[kelas]="Pilih kelas";
                            }
                            echo"<option value=\"$k[kelas]\">$k[kelas]</option>";
                        }
                        ?>
                        </select><font size="2"><br>
								</font><input type="radio" name="status" value="3"><font size="2">
								Sudah lulus</font><br><input type="hidden" name="menu" value="data.siswa">
								<input type="submit" value="Tampilkan" name="lihat" style="height: 25"></td>
							</tr></form>
							<tr>
								<td><font size="2">Cari data berdasarkan Abjad:</font><br>
					<b><a href="diploma.php?n=a">A</a>
					<a href="diploma.php?n=b">B</a>
					<a href="diploma.php?n=c">C</a>
					<a href="diploma.php?n=d">D</a>
					<a href="diploma.php?n=e">E</a>
					<a href="diploma.php?n=f">F</a>
					<a href="diploma.php?n=g">G</a>
					<a href="diploma.php?n=h">H</a>
					<a href="diploma.php?n=i">I</a>
					<a href="diploma.php?n=j">J</a>
					<a href="diploma.php?n=k">K</a>
					<a href="diploma.php?n=l">L</a>
					<a href="diploma.php?n=m">M</a>
					<a href="diploma.php?n=n">N</a>
					<a href="diploma.php?n=o">O</a>
					<a href="diploma.php?n=p">P</a>
					<a href="diploma.php?n=q">Q</a>
					<a href="diploma.php?n=r">R</a>
					<a href="diploma.php?n=s">S</a>
					<a href="diploma.php?n=t">T</a>
					<a href="diploma.php?n=u">U</a>
					<a href="diploma.php?n=v">V</a>
					<a href="diploma.php?n=w">W</a>
					<a href="diploma.php?n=x">X</a>
					<a href="diploma.php?n=y">Y</a>
					<a href="diploma.php?n=z">Z</a>
					</b></td>
							</tr>
                            <?
                        if(isset($status)){
                            if($status=="0"){
                                $where="where kelas=''";
                                $stat="Siswa baru";
                            }elseif($status=="1"){
                                 $where="where kelas <>'' and jurusan='$jurusan'";
                                 $stat="Siswa Aktif Jurusan $jurusan";
                            }elseif($status=="2"){
                                 $where="where kelas='$kelas'";
                                 $stat="Siswa Aktif Kelas $kelas";
                            }else{
                                 $where="where status='2'";
                                 $stat="sudah lulus";
                            }
                        }elseif(isset($n)){
                            $where="where nama like'$n%'";
                            $stat="Huruf depan nama \"$n\"";
                        }else{
                            $where="where kelas = ''";
                            $stat="Data Kelas belum ada";
                        }
                        ?>
                        <tr>
								<td><font size="2">Tampil Data Siswa Berdasarkan <?=$stat?><br>
								Untuk menampilkan data detail siswa, klik nama
								dari siswa tersebut. </font><br>
&nbsp;<table border="1" width="100%" cellspacing="0" id="table5">
						<tr>
							<td bgcolor="#000080" width="105" align="center"><b>
							<font color="#FFFF00" size="2">Nomor Induk</font></b></td>
							<td bgcolor="#000080" width="156" align="center">
							<font size="2" color="#FFFF00"><b>Nama Siswa</b></font></td>
							<td bgcolor="#000080" width="80" align="center">
							<font size="2" color="#FFFF00"><b>Jurusan</b></font></td>
							<td bgcolor="#000080" align="center" width="235">
							<font size="2" color="#FFFF00"><b>Alamat</b></font></td>
							<td bgcolor="#000080" align="center">
							<b><font color="#FFFF00" size="2">Tool</font></b></td>
						</tr>
                        <?
                        $j_siswa=0;
                        $bc=@mysql_query("select * from data_siswa $where order by id desc limit 0,40");
                        While($d=mysql_fetch_array($bc)){
                            $alamat=str_replace("|"," ",$d[alamat]);
                            $kota=explode("|",$d[kota]);
                            echo"<tr>
							<td width=\"105\">
							<p style=\"margin: 0 3px\"><font size=\"2\">
							$d[induk]&nbsp</font></td>
							<td width=\"156\">
							<p style=\"margin: 0 3px\"><font size=\"2\">
							<a href=\"diploma.php?menu=detail.siswa&id=$d[id]\">$d[nama]</a></font></td>
							<td width=\"80\">
							<p style=\"margin: 0 3px\"><font size=\"2\">$d[jurusan]</font></td>
							<td width=\"235\">
							<p style=\"margin: 0 3px\"><font size=\"2\">$alamat $kota[0]</font></td>
							<td>
							<p align=\"center\"><font size=\"2\">";
                            if($level!=="1"){
                            if($d[kelas]==""){
                                echo"<a href=\"diploma.php?menu=induk.siswa&jur=$d[jurusan]&id=$d[id]\">
							Bagi kelas</a> |";
                            }else{
                                echo"<a href=\"diploma.php?menu=materi.siswa&induk=$d[induk]&nama=$d[nama]&kelas=$d[kelas]&id_kelas=$d[id_kelas]&jur=$d[jurusan]&id=$d[id]\">
							Ambil materi</a> |";
                            }
                            }
							echo"<a target=\"_blank\" href=\"cetak.siswa.php?id=$d[id]\">Cetak</a></font></td>
						</tr>";
                        $j_siswa++;
                        }
                        ?>
					</table>
                    <?
                    if(isset($status)){
                        echo"<font size=\"2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jumlah siswa adalah: <b>$j_siswa</b> orang.</font>";
                    }
                    ?>
								</td>
							</tr>
					</table>
					</td>
					<td width="5">&nbsp;</td>
				</tr>
				<tr>
					<td width="4">&nbsp;</td>
					<td>
					<p align="center">&nbsp;</td>
					<td width="5">&nbsp;</td>
				</tr>
			</table>
			</td>
		</tr>