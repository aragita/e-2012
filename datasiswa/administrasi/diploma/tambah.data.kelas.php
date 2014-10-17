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
					<form method="POST" action="kirim.kelas.baru.php">
						<table border="1" width="100%" cellspacing="0" cellpadding="0" id="table4">
							<tr>
								<td colspan="2" bgcolor="#000080">
								<p align="center">
								<font color="#FFFF00" size="2"><b>TAMBAH DATA 
								KELAS BARU</b></font></td>
							</tr>
							<tr>
								<td width="257">
								<p style="margin: 0 5px"><font size="2">Nama 
								Kelas Baru</font></td>
								<td>
								<p style="margin: 0 5px">
								<input type="text" name="nama" size="31"></td>
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
							</tr>
							<tr>
								<td width="257">
								<p style="margin: 0 5px"><font size="2">Program</font></td>
								<td>
								<p style="margin: 0 5px">
								<select size="1" name="program">
								<option value="Diploma">Diploma</option>
								<option value="Reguler">Reguler</option>
								</select></td>
							</tr>
							<tr>
								<td width="257">
								<p style="margin: 0 5px">&nbsp;</td>
								<td>
								<p style="margin: 0 5px">
								<input type="submit" value="TAMBAH" name="tambah"> <a href="javascript:history.back();">< BATAL ></a></td>
							</tr>
						</table>
					</form>
					<font size="2"><b>Data Kelas 
					Terdaftar</b></font><table border="1" width="100%" cellspacing="0" id="table3">
						<tr>
							<td bgcolor="#000080" width="151" align="center">
							<font size="2" color="#FFFF00"><b>Nama Kelas</b></font></td>
							<td bgcolor="#000080" width="188" align="center">
							<font size="2" color="#FFFF00"><b>Mulai Aktif</b></font></td>
							<td bgcolor="#000080" width="156" align="center">
							<font size="2" color="#FFFF00"><b>Program</b></font></td>
							<td bgcolor="#000080" align="center">
							<font size="2" color="#FFFF00"><b>Status Kelas</b></font></td>
						</tr>
                        <?
						$baca2=mysql_query("select * from data_kelas order by nama_kelas");
                        While($d=mysql_fetch_array($baca2)){
                            if($d[status]=="0"){
                                $status="Belum aktif";
                            }else{
                                $status="Aktif";
                            }
                            echo"<tr>
							<td width=\"151\">
							<p style=\"margin: 0 3px\"><font size=\"2\">$d[nama_kelas]</font></td>
							<td width=\"188\">
							<p style=\"margin: 0 3px\"><font size=\"2\">
							$d[tanggal_mulai]</font></td>
							<td width=\"156\">
							<p style=\"margin: 0 3px\" align=\"center\">
							<font size=\"2\">$d[program]</font></td>
							<td>
							<p style=\"margin: 0 3px\" align=\"center\">
							<font size=\"2\">$status</font></td>
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
            			</td>
		</tr>