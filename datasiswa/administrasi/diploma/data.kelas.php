<?
include"sambung.php";
?>
<tr><span class=menu>
			<td background="images/bg_garis_07.gif" width="29">
			<b>
			<img border="0" src="images/garis_06.gif" width="27" height="36"></b></td>
			<td background="images/bg_garis_07.gif" width="531">
			<b><font style="font-size: 9pt" size="2">DATA </font>
			<span style="font-size: 9pt">KELAS</span></b><font style="font-size: 9pt"><b>
			DAN </b> </font>
			<b>
			<font style="font-size: 9pt" size="2">TAMBAH KELAS BARU</b></td>
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
					<form method="POST" action="<? if(isset($tambah)){ echo"kirim.kelas.php";}else{echo"diploma.php";}?>">
						<table border="1" width="100%" cellspacing="0" cellpadding="0" id="table4">
							<tr>
								<td colspan="2" bgcolor="#000080">
								<p align="center">
								<font color="#FFFF00" size="2"><b>TAMBAH DATA
								KELAS</b></font></td>
							</tr>
							<tr>
								<td width="257">
								<p style="margin: 0 5px"><font size="2">Nama
								Kelas Baru</font></td>
								<td>
								<p style="margin: 0 5px">
								<select size="1" name="nama" style="font-family: Tahoma; font-size: 10pt; color: #000080">
                                <?
                                $bc=@mysql_query("select nama_kelas from data_kelas order by nama_kelas");
                                while($d=@mysql_fetch_array($bc)){
                                    if($nama=="$d[nama_kelas]"){
                                           echo"<option value=\"$d[nama_kelas]\" selected>$d[nama_kelas]</option>";
                                        }else{
                                            echo"<option value=\"$d[nama_kelas]\">$d[nama_kelas]</option>";
                                        }
                                }
                                ?>
								</select>&nbsp; <font size="2">Jika kelas belum 
								ada</font>&nbsp; <a href="diploma.php?menu=tambah.data.kelas">
								<img border="0" src="images/tambah_kelas.gif" align="middle"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
							</tr>
                            <?
                            if(isset($tambah)){
                                ?>
                                <tr>
								<td width="257">
								<p style="margin: 0 5px"><font size="2">Nama
								Materi</font></td>
								<td>
								<p style="margin: 0 5px">
                                <select size="1" name="materi_jurusan">
								<?
                                if($nama=="privat"){
                                  $where="privat";
                                  }elseif($nama=="workshop"){
                                  $where="workshop";
                                  }else{
                                  $where=substr($nama,0,3);
                                  }
                                $bc=mysql_query("select id, materi, jurusan from materi where jurusan like '$where%' order by jurusan");
                                while($d=mysql_fetch_array($bc)){
                                    echo"<option value=\"$d[jurusan]|$d[id]\">$d[jurusan] - $d[materi]</option>";
                                }
                                ?>
								</select></td>
							</tr>
                            <tr>
								<td width="257">
								<p style="margin: 0 5px"><font size="2">Nama
								Instruktur</font></td>
								<td>
								<p style="margin: 0 5px">
                                <select size="1" name="instruktur">
								<?
                                $bc=mysql_query("select kode, nama from instruktur order by nama");
                                while($d=mysql_fetch_array($bc)){
                                    echo"<option value=\"$d[kode]\">$d[nama]</option>";
                                }
                                ?>
								</select></td>
							</tr>
                            <tr>
								<td width="257">
								<p style="margin: 0 5px"><font size="2">Nama
								Assisten 1</font></td>
								<td>
								<p style="margin: 0 5px">
                                <select size="1" name="assisten1">
                                <option value="-">Tidak ada Assisten</option>
                                <?
                                $bc=mysql_query("select kode, nama from instruktur order by nama");
                                while($d=mysql_fetch_array($bc)){
                                    echo"<option value=\"$d[kode]\">$d[nama]</option>";
                                }
                                ?>
								</select></td>
							</tr>
                            <tr>
								<td width="257">
								<p style="margin: 0 5px"><font size="2">Nama
								Assisten 2</font></td>
								<td>
								<p style="margin: 0 5px">
                                <select size="1" name="assisten2">
                                <option value="-">Tidak ada Assisten</option>
                                <?
                                $bc=mysql_query("select kode, nama from instruktur order by nama");
                                while($d=mysql_fetch_array($bc)){
                                    echo"<option value=\"$d[kode]\">$d[nama]</option>";
                                }
                                ?>
								</select></td>
							</tr>
                            <tr>
								<td width="257">
								<p style="margin: 0 5px"><font size="2">Jumlah Session</font></td>
								<td>
								<p style="margin: 0 5px">
                                <select size="1" name="session">
								<?
                                for($i=1;$i<=40;$i++){
                                    echo"<option value=\"$i\">$i</option>";
                                }
                                ?>
								</select><font size="2"> pertemuan.</font></td>
							</tr>
                            <tr>
								<td width="257">
								<p style="margin: 0 5px"><font size="2">Mulai
								Aktif</font></td>
								<td>
								<p style="margin: 0 5px">
								<select size="1" name="tgl">
								<?
                                for($i=1;$i<=31;$i++){
                                    if($i==date("d")){
                                    echo"<option value=\"$i\" selected>$i</option>";
                                    }else{
                                    echo"<option value=\"$i\">$i</option>";
                                    }
                                }
                                ?>
								</select>
                                <? $bln=date("m"); ?>
                                <font size="2"> </font>
								<select size="1" name="bln">
								<option value="Januari"<? if($bln=="1"){ echo" selected";}?>>Januari</option>
								<option value="Pebruari"<? if($bln=="2"){ echo" selected";}?>>Pebruari</option>
								<option value="Maret"<? if($bln=="3"){ echo" selected";}?>>Maret</option>
								<option value="April"<? if($bln=="4"){ echo" selected";}?>>April</option>
								<option value="Mei"<? if($bln=="5"){ echo" selected";}?>>Mei</option>
								<option value="Juni"<? if($bln=="6"){ echo" selected";}?>>Juni</option>
								<option value="Juli"<? if($bln=="7"){ echo" selected";}?>>Juli</option>
								<option value="Agustus"<? if($bln=="8"){ echo" selected";}?>>Agustus</option>
								<option value="September"<? if($bln=="9"){ echo" selected";}?>>September</option>
								<option value="Oktober"<? if($bln=="10"){ echo" selected";}?>>Oktober</option>
								<option value="Nopember"<? if($bln=="11"){ echo" selected";}?>>Nopember</option>
								<option value="Desember"<? if($bln=="12"){ echo" selected";}?>>Desember</option>
								</select><font size="2"> </font>
								<select size="1" name="thn">
                                <?
                                $thn=date("Y");
                                for($i=$thn-1;$i<=$thn+1;$i++){
                                    if($i==date("Y")){
                                    echo"<option value=\"$i\" selected>$i</option>";
                                    }else{
                                    echo"<option value=\"$i\">$i</option>";
                                    }
                                }
                                ?>
								</select></td>
							</tr><?}?>
							<tr>
								<td width="257">
								<p style="margin: 0 5px">&nbsp;</td>
								<td>
								<p style="margin: 0 5px">
								<input type="submit" value="TAMBAH" name="tambah"></td>
							</tr><input type="hidden" name="menu" value="data.kelas">
						</table>
					</form>
					<font size="2"><b><br>
					Data Kelas
					</b></font><table border="1" width="100%" cellspacing="0" id="table3">
						<tr>
							<td bgcolor="#000080" width="238" align="center">
							<font size="2" color="#FFFF00"><b>Nama Kelas</b></font></td>
							<td bgcolor="#000080" width="100" align="center">
							<font size="2" color="#FFFF00"><b>Mulai Aktif</b></font></td>
							<td bgcolor="#000080" width="156" align="center">
							<font size="2" color="#FFFF00"><b>Materi</b></font></td>
							<td bgcolor="#000080" align="center">
							<font size="2" color="#FFFF00"><b>Nama Instruktur</b></font></td>
						</tr>
                        <?
                        $baca=mysql_query("select * from kelas");
                        $total=ceil(mysql_num_rows($baca) / 20);
                        if(!isset($hal)){
                        $hal=0;
                        }
                        $offset= $hal * 20;
                        $baca2=mysql_query("select kelas.nama, kelas.id_materi, kelas.jurusan, kelas.mulai, kelas.kode_instruktur, materi.materi, materi.id from kelas, materi where kelas.id_materi=materi.id order by kelas.id limit $offset,20");
                        While($d=mysql_fetch_array($baca2)){
                            if($d[status]=="0"){
                                $status="Belum aktif";
                            }else{
                                $status="Aktif";
                            }
                            $d[nama]=strtolower($d[nama]);
                            $inst=mysql_query("select nama from instruktur where kode='$d[kode_instruktur]'");
                            $inst2=mysql_fetch_array($inst);
                            $nama_kelas=strtoupper($d[nama]);
                            echo"<tr>
							<td width=\"238\">
							<p style=\"margin: 0 3px\"><font size=\"2\"><b>",$nama_kelas,"</b> (<a href=\"diploma.php?menu=siswa.kelas&kelas=",$d[nama],"&id_materi=$d[id_materi]\">
							Lihat Siswa</a>)</font></td>
							<td width=\"100\">
							<p style=\"margin: 0 3px\"><font size=\"2\">
							",$d[mulai],"</font></td>
							<td width=\"156\">
							<p style=\"margin: 0 3px\" align=\"left\">
							<font size=\"2\">",$d[materi],"</font></td>
							<td>
							<p style=\"margin: 0 3px\" align=\"Left\">
							<font size=\"2\">$inst2[nama]</font></td>
						</tr>";
                        }
                        ?>
					</table>
					</td>
					<td width="5">&nbsp;</td>
				</tr>
				<tr>
					<td width="4">&nbsp;</td>
					<td><hr><font size="2">Halaman: <b>
                    <?
                     for($i=0;$i<$total;$i++){
                     $ii=$i+1;
                     echo"<a href=\"diploma.php?menu=data.kelas&hal=$i\">$ii</a> ";
                     }
                     ?></b> </font></td>
					<td width="5">&nbsp;</td>
				</tr>
			</table>
			</td>
		</tr>