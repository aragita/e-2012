<?php
include"sambung.php";
$baca=mysql_query("select * from kelas where id='$id_kelas'");
$d=mysql_fetch_array($baca);
$k=mysql_query("select * from kelas_aktif where id_kelas='$id_kelas' and id_materi='$id_materi'");
$jml=mysql_num_rows($k);
$nama_kelas=strtoupper($kelas);
if($d[status]=="0"){
    $status="Aktif";
}else{
    $status="Selesai";
}
?>
<table border="0" width="100%" cellpadding="2" id="table2">
				<tr>
					<td width="4">&nbsp;</td>
					<td>
						<table border="1" width="100%" cellspacing="0" cellpadding="0" id="table4">
							<tr>
								<td colspan="2" bgcolor="#000080">
								<p align="center">
								<font size="2" color="#FFFF00"><b>DATA
								KELAS <?=$nama_kelas?></b></font></td>
							</tr>
							<tr>
								<td width="24%">
								<p style="margin: 0 5px"><font size="2">Nama
								Kelas</font></td>
								<td width="75%">
								<p style="margin-left: 10px"><font size="2">
								<?=$nama_kelas?></font></td>
							</tr>
							<tr>
								<td width="24%">
								<p style="margin: 0 5px"><font size="2">Materi</font></td>
								<td width="75%">
								<p style="margin-left: 10px"><font size="2">
								<?=$materi?></font></td>
							</tr>
							<tr>
								<td width="24%">
								<p style="margin: 0 5px"><font size="2">jumlah
								Siswa</font></td>
								<td width="75%">
								<p style="margin-left: 10px"><font size="2">
								<?=$jml?></font></td>
							</tr>
							<tr>
								<td width="24%">
								<p style="margin: 0 5px"><font size="2">Status</font></td>
								<td width="75%">
								<p style="margin-left: 10px"><font size="2">
								<?=$status?></font></td>
							</tr>
						</table>
					<font size="2"><b><br>
					Data Nilai Siswa</b></font><table border="1" width="751" cellspacing="0" id="table3">
						<tr>
							<td bgcolor="#000080" width="27" align="center" rowspan="2">
							<font size="2" color="#FFFF00"><b>No.</b></font></td>
							<td bgcolor="#000080" width="234" align="center" rowspan="2">
							<font size="2" color="#FFFF00"><b>Nama Siswa</b></font></td>
							<td bgcolor="#000080" align="center" colspan="6">
							<font size="2" color="#FFFF00"><b>Nilai</b></font></td>
							</tr>
						<tr>
							<td bgcolor="#000080" width="80" align="center">
                            <font size="2" color="#FFFF00"><b>
							<?echo"<a href=\"instruktur.php?menu=data_nilai&input_nilai=harian&kelas=$kelas&id_kelas=$id_kelas&materi=$materi&id_materi=$id_materi\">";?>
							<font color="#FFFF00">Harian</font></a></b></font></td>
							<td bgcolor="#000080" width="81" align="center">
							<font size="2" color="#FFFF00"><b>
							<?echo"<a href=\"instruktur.php?menu=data_nilai&input_nilai=tugas&kelas=$kelas&id_kelas=$id_kelas&materi=$materi&id_materi=$id_materi\">";?>
							<font color="#FFFF00">Tugas</font></a></b></font></td>
							<td bgcolor="#000080" align="center" width="81">
							<font size="2" color="#FFFF00"><b>
							<?echo"<a href=\"instruktur.php?menu=data_nilai&input_nilai=tengah&kelas=$kelas&id_kelas=$id_kelas&materi=$materi&id_materi=$id_materi\">";?>
							<font color="#FFFF00">Tengah SMS</font></a></b></font></td>
							<td bgcolor="#000080" align="center" width="81">
							<font size="2" color="#FFFF00"><b>
							<?echo"<a href=\"instruktur.php?menu=data_nilai&input_nilai=akhir&kelas=$kelas&id_kelas=$id_kelas&materi=$materi&id_materi=$id_materi\">";?>
							<font color="#FFFF00">Ujian</font></a></b></font></td>
							<td bgcolor="#000080" align="center" width="81">
							<b><font color="#FFFF00" size="2">Total</font></b></td>
							<td bgcolor="#000080" align="center" width="81">
							<font size="2" color="#FFFF00"><b>Abjad</b></font></td>
						</tr>
                        <?
                        if(isset($input_nilai)){
                            echo"<form method=\"POST\" action=\"input_nilai.php\">";
                        }
                        $no=1;
                        $kk=mysql_query("select kelas_aktif.*, data_siswa.* from kelas_aktif, data_siswa where kelas_aktif.id_kelas='$id_kelas' and kelas_aktif.id_materi='$id_materi' and kelas_aktif.id_siswa=data_siswa.id order by data_siswa.nama");
                        while($d2=mysql_fetch_array($kk)){
                            $total=((($d2[nilai_harian]*30/100)+($d2[nilai_tugas]*70/100))*30/100)+($d2[nilai_akhir]*70/100);
                                if($total<=49){
                                    $ab="E";
                                }elseif($total<=58){
                                    $ab="D";
                                }elseif($total<=67){
                                    $ab="D+";
                                }elseif($total<=75){
                                    $ab="C";
                                }elseif($total<=82){
                                    $ab="C+";
                                }elseif($total<=88){
                                    $ab="B";
                                }elseif($total<=94){
                                    $ab="B+";
                                }else{
                                    $ab="A";
                                }
                                echo"<tr>
							<td width=\"27\">
							<p style=\"margin: 0 3px\"><font size=\"2\">$no</font></td>
							<td width=\"234\">
							<p style=\"margin: 0 3px\"><font size=\"2\">
							$d2[nama]</font></td>
							<td width=\"80\">
							<p align=\"center\">";
                            if(isset($input_nilai)&& $input_nilai=="harian"){
                                echo"<!--webbot bot=\"Validation\" B-Value-Required=\"TRUE\" I-Maximum-Length=\"3\" -->
							<input type=\"text\" name=\"n[$no]\" size=\"6\" style=\"font-family: Tahoma; font-size: 10pt; color: #000080; text-align: center; border-style: solid; border-width: 1px\" maxlength=\"3\" value=\"$d2[nilai_harian]\">";
                            }else{
                            echo"<font size=\"2\">$d2[nilai_harian]</font>";
                            }
                            echo"</td>
							<td width=\"81\">
							<p align=\"center\"><font size=\"2\">";
                            if(isset($input_nilai)&& $input_nilai=="tugas"){
                                echo"<!--webbot bot=\"Validation\" B-Value-Required=\"TRUE\" I-Maximum-Length=\"3\" -->
							<input type=\"text\" name=\"n[$no]\" size=\"6\" style=\"font-family: Tahoma; font-size: 10pt; color: #000080; text-align: center; border-style: solid; border-width: 1px\" maxlength=\"3\" value=\"$d2[nilai_tugas]\">";
                            }else{
                            echo"<font size=\"2\">$d2[nilai_tugas]</font>";
                            }
                            echo"</td>
							<td width=\"81\">
							<p align=\"center\"><font size=\"2\">-";
                            /*if(isset($input_nilai)&& $input_nilai=="tengah"){
                                echo"<!--webbot bot=\"Validation\" B-Value-Required=\"TRUE\" I-Maximum-Length=\"3\" -->
							<input type=\"text\" name=\"n[$no]\" size=\"6\" style=\"font-family: Tahoma; font-size: 10pt; color: #000080; text-align: center; border-style: solid; border-width: 1px\" maxlength=\"3\" value=\"$d2[nilai_tengah]\">";
                            }else{
                            echo"<font size=\"2\">$d2[nilai_tengah]";
                            }*/
                            echo"</font></td>
							<td width=\"81\">
							<p align=\"center\"><font size=\"2\">";
                            if(isset($input_nilai)&& $input_nilai=="akhir"){
                                echo"<!--webbot bot=\"Validation\" B-Value-Required=\"TRUE\" I-Maximum-Length=\"3\" -->
							<input type=\"text\" name=\"n[$no]\" size=\"6\" style=\"font-family: Tahoma; font-size: 10pt; color: #000080; text-align: center; border-style: solid; border-width: 1px\" maxlength=\"3\" value=\"$d2[nilai_akhir]\">";
                            }else{
                            echo"<font size=\"2\">$d2[nilai_akhir]</font>";
                            }
                            echo"</td>
							<td width=\"81\">
							<p align=\"center\"><font size=\"2\">$total</font></td>
							<td width=\"81\">
							<p align=\"center\"><font size=\"2\">$ab</font></td>
						</tr>";
                        $no++;
                        }
                        if(isset($input_nilai)){
                            echo"<tr>
							<td width=\"27\" bgcolor=\"#C0C0C0\">
							&nbsp;</td>
							<td width=\"234\" bgcolor=\"#C0C0C0\">
							&nbsp;</td>
							<td width=\"80\" align=\"center\" bgcolor=\"#C0C0C0\">";
                            if($input_nilai=="harian"){
							echo"<input type=\"submit\" value=\"KIRIM\" name=\"kirim\" style=\"font-size: 10pt; color: #000080; font-family: Tahoma; font-weight: bold; width: 70; height: 20\">";
							}else{
                                echo"&nbsp";
                            }
                            echo"</td><td width=\"81\" align=\"center\" bgcolor=\"#C0C0C0\">";
                            if($input_nilai=="tugas"){
							echo"<input type=\"submit\" value=\"KIRIM\" name=\"kirim\" style=\"font-size: 10pt; color: #000080; font-family: Tahoma; font-weight: bold; width: 70; height: 20\">";
							}else{
                                echo"&nbsp";
                            }
                            echo"</td>
							<td width=\"81\" align=\"center\" bgcolor=\"#C0C0C0\">";
                            if($input_nilai=="tengah"){
							echo"<input type=\"submit\" value=\"KIRIM\" name=\"kirim\" style=\"font-size: 10pt; color: #000080; font-family: Tahoma; font-weight: bold; width: 70; height: 20\">";
							}else{
                                echo"&nbsp";
                            }
                            echo"</td>
							<td width=\"81\" align=\"center\" bgcolor=\"#C0C0C0\">";
                            if($input_nilai=="akhir"){
							echo"<input type=\"submit\" value=\"KIRIM\" name=\"kirim\" style=\"font-size: 10pt; color: #000080; font-family: Tahoma; font-weight: bold; width: 70; height: 20\">";
							}else{
                                echo"&nbsp";
                            }
                            echo"</td>
							<td width=\"81\" align=\"center\" bgcolor=\"#C0C0C0\">
							&nbsp;</td>
							<td width=\"81\" align=\"center\" bgcolor=\"#C0C0C0\">
							&nbsp;</td>
						</tr>
                        <input type=\"hidden\" name=\"id_kelas\" value=\"$id_kelas\">
						<input type=\"hidden\" name=\"id_materi\" value=\"$id_materi\">
						<input type=\"hidden\" name=\"input_nilai\" value=\"$input_nilai\">
						<input type=\"hidden\" name=\"kelas\" value=\"$kelas\">
						<input type=\"hidden\" name=\"materi\" value=\"$materi\"></form>";
                        }
                        ?>
					</table>
					</td>
					<td width="5">&nbsp;</td>
				</tr>
				<tr>
					<td width="4">&nbsp;</td>
					<td>
					<p align="right"><font size="2">
                    <a href="cetak3.php?menu=laporan&kelas=<?=$kelas?>&id_kelas=<?=$id_kelas?>&materi=<?=$materi?>&id_materi=<?=$id_materi?>">
					Cetak Laporan</a><font size="2">&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="instruktur.php?menu=data_absensi&kelas=<?=$kelas?>&id_kelas=<?=$id_kelas?>&materi=<?=$materi?>&id_materi=<?=$id_materi?>">
					Data Absensi</a></font></td>
					<td width="5">&nbsp;</td>
				</tr>
			</table>