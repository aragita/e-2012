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
					<td align="left">
						<p align="center"><font size="2"><b>Data Absensi Siswa</b></font></p>
						<table border="1" width="98%" cellspacing="0" cellpadding="0" id="table5">
							<tr>
								<td bgcolor="#000080" align="center" width="53">
								<font size="2" color="#00FFFF"><b>No.</b></font></td>
								<td bgcolor="#000080" align="center" width="97">
								<font size="2" color="#00FFFF"><b>Nama Kelas</b></font></td>
								<td bgcolor="#000080" align="center" width="209">
								<font size="2" color="#00FFFF"><b>Materi</b></font></td>
								<td bgcolor="#000080" align="center" width="112">
								<font size="2" color="#00FFFF"><b>Status</b></font></td>
								<td bgcolor="#000080" align="center" width="112">
								<font size="2" color="#00FFFF"><b>Jumlah Session</b></font></td>
								<td bgcolor="#000080" align="center">
								<font size="2" color="#00FFFF"><b>Proses</b></font></td>
							</tr>
                            <?
                            $no=1;
                            $baca=mysql_query("select materi.*, kelas.* from kelas, materi where kode_instruktur='$kode' and kelas.id_materi=materi.id order by kelas.id desc");
                            while($d=mysql_fetch_array($baca)){
                            if($d[status]=="0"){
                                $status="Aktif";
                                $teks1="isi";
                                $teks2="Isi";
                            }elseif($d[status]=="1"){
                                $status="Selesai";
                                $teks1="lihat";
                                $teks2="Lihat";
                            }else{
                                $status="Laporan OK";
                                $teks1="lihat";
                                $teks2="Lihat";
                            }
                                echo"<tr>
								<td width=\"53\">
								<p style=\"margin-left: 3px; margin-right: 3px\">
								<font size=\"2\">$no.</font></td>
								<td width=\"97\">
								<p style=\"margin-left: 3px; margin-right: 3px\">
								<font size=\"2\">$d[nama]</font></td>
								<td width=\"209\">
								<p style=\"margin-left: 3px; margin-right: 3px\">
								<font size=\"2\">$d[materi]</font></td>
								<td width=\"112\">
								<p style=\"margin-left: 3px; margin-right: 3px\">
								<font size=\"2\">$status</font></td>
								<td width=\"112\">
								<p align=\"center\"><font size=\"2\">$d[session]</font></td>
								<td>
								<p align=\"center\"><font size=\"2\">
								<a target=\"absensi\" href=\"$teks1.absensi.php?kelas=$d[nama]&id_kelas=$d[id]&materi=$d[materi]&id_materi=$d[id_materi]&jml_session=$d[session]\">
								$teks2 Absensi</a></font></td>
							</tr>";
                            $no++;
                            }
                            ?>
						</table>
						<p>
<iframe width="735" height="500" src="absensi.htm" marginwidth="1" marginheight="1" name="absensi" align="left" border="1" frameborder="1"></iframe>
</td>
					<td width="5">&nbsp;</td>
				</tr>
				<tr>
					<td width="4">&nbsp;</td>
					<td>
					<p align="right"><font size="2">
					<a href="instruktur.php?menu=data_kelas&kelas=<?=$kelas?>&id_kelas=<?=$id_kelas?>&materi=<?=$materi?>&id_materi=<?=$id_materi?>">
					Data Siswa</a><font size="2">&nbsp;&nbsp; |&nbsp;&nbsp;
					<a href="instruktur.php?menu=data_nilai&kelas=<?=$kelas?>&id_kelas=<?=$id_kelas?>&materi=<?=$materi?>&id_materi=<?=$id_materi?>">
					Data Nilai</a></td>
					<td width="5">&nbsp;</td>
				</tr>
			</table>