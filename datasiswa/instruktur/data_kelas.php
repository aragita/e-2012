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
					Data Siswa</b></font><table border="1" width="100%" cellspacing="0" id="table3">
						<tr>
							<td bgcolor="#000080" width="28" align="center">
							<font size="2" color="#FFFF00"><b>No.</b></font></td>
							<td bgcolor="#000080" width="212" align="center">
							<font size="2" color="#FFFF00"><b>Nama Siswa</b></font></td>
							<td bgcolor="#000080" width="90" align="center">
							<font size="2" color="#FFFF00"><b>No Induk</b></font></td>
							<td bgcolor="#000080" align="center" width="271">
							<font size="2" color="#FFFF00"><b>Alamat</b></font></td>
							<td bgcolor="#000080" align="center">
							<font size="2" color="#FFFF00"><b>Telepon</b></font></td>
						</tr>
						<?
                        $no=1;
                        $kk=mysql_query("select kelas_aktif.*, data_siswa.* from kelas_aktif, data_siswa where kelas_aktif.id_kelas='$id_kelas' and kelas_aktif.id_materi='$id_materi' and kelas_aktif.id_siswa=data_siswa.id order by data_siswa.nama");
                        while($d2=mysql_fetch_array($kk)){
                            $d2[alamat]=str_replace("|"," ", $d2[alamat]);
                            $d2[kota]=str_replace("|"," ", $d2[kota]);
                            echo"<tr>
							<td width=\"28\">
							<p style=\"margin: 0 3px\"><font size=\"2\">$no</font></td>
							<td width=\"212\">
							<p style=\"margin: 0 3px\"><font size=\"2\">
							$d2[nama]</font></td>
							<td width=\"90\">
							<p style=\"margin: 0 3px\" align=\"left\">
							<font size=\"2\">$d2[induk]</font></td>
							<td width=\"271\">
							<p align=\"left\"><font size=\"2\">$d2[alamat] $d2[kota]</font></td>
							<td>
							<p align=\"center\"><font size=\"2\">$d2[telp]&nbsp;</font></td>
						</tr>";
                        $no++;
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
					<a href="instruktur.php?menu=data_nilai&kelas=<?=$kelas?>&id_kelas=<?=$id_kelas?>&materi=<?=$materi?>&id_materi=<?=$id_materi?>">
					Data Nilai</a>&nbsp;&nbsp; |&nbsp;&nbsp;
					<a href="instruktur.php?menu=data_absensi&kelas=<?=$kelas?>&id_kelas=<?=$id_kelas?>&materi=<?=$materi?>&id_materi=<?=$id_materi?>">
					Data Absensi</a></font></td>
					<td width="5">&nbsp;</td>
				</tr>
			</table>