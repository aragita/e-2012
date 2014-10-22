<?
include"sambung.php";
?>
		<tr><span class=menu>
			<td background="images/bg_garis_07.gif" width="29">
			<b>
			<img border="0" src="images/garis_06.gif" width="27" height="36"></b></td>
			<td background="images/bg_garis_07.gif" width="531">
			<b><font style="font-size: 9pt" size="2">DATA NILAI SISWA</font></b></td>
			<td background="images/bg_garis_07.gif" width="220">
			<p align="center"><b><font size="2" color="#FF0000"></font></b></td></span>
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
					<form method="POST" action="diploma.php">
						<table border="1" width="100%" cellspacing="0" cellpadding="0" id="table4">
							<tr>
								<td colspan="2" bgcolor="#000080">
								<p align="center">
								<font size="2" color="#FFFF00"><b>DATA NILAI SISWA</b></font></td>
							</tr>
							<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Kelas</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<select size="1" name="kelas">
                                <?
                                $bca=mysql_query("select id,nama from kelas order by nama");
                                while($d=mysql_fetch_array($bca)){
                                echo"<option value=\"",$d[nama],"|",$d[id],"\">",$d[nama],"&nbsp;&nbsp;&nbsp;</option>";
                                }
                                ?>
								</select></td>
							</tr>
							<tr>
								<td width="30%">
								<p style="margin: 0 5px">&nbsp;</td>
								<td width="69%">
								<p style="margin: 0 5px">
								<input type="submit" value="LANJUT" name="lanjut" style="color: #000080; font-size: 10pt; font-family: Tahoma"></td>
							<input type="hidden" name="menu" value="data.nilai">
                            </form>
                            </tr>
                            <?
                            if(isset($lanjut)){
                                $kls=explode("|",$kelas);
                                echo"<tr>
                                <td width=\"30%\">
                                <p style=\"margin: 0 5px\"><font size=\"2\">Materi&nbsp;</font></td>
                                <td width=\"69%\">
                                <p style=\"margin: 0 5px\">
                                <ul type=\"square\">";
                                $bc=mysql_query("select distinct kelas_aktif.id_materi, materi.materi from kelas_aktif,materi where kelas_aktif.id_materi=materi.id and kelas_aktif.id_kelas=$kls[1] order by materi.materi");
                                while($dd=mysql_fetch_array($bc)){
                                echo"<li><font size=\"2\">
	                            <a href=\"diploma.php?menu=data.nilai&kelas=$kls[0]&id_kelas=$kls[1]&materi=$dd[id_materi]&view\">$dd[materi]</a></font></li>";
                                }
                                echo"</ul></td></tr>";
                            }
                            ?>
							</table>


					<?
                    if(isset($view)){
                        $bca=mysql_query("select materi,jurusan from materi where id='$materi'");
                        $h=mysql_fetch_array($bca);
                        $kelas2=strtoupper($kls[0]);
                        echo"<font size=\"2\"><b>Data Nilai Siswa Kelas $kelas2 dan Materi $h[materi]</b></font> ";
                    }
                    ?>
                    <br><br>
                    <?
                    if(isset($view)){
                        ?>
                        <table border="1" width="100%" cellspacing="0" id="table3">
						<tr>
							<td bgcolor="#000080" width="211" align="center">
							<font size="2" color="#FFFF00"><b>Nama Siswa</b></font></td>
							<td bgcolor="#000080" width="82" align="center">
							<font size="2" color="#FFFF00"><b>Nilai Harian</b></font></td>
							<td bgcolor="#000080" width="84" align="center">
							<font size="2" color="#FFFF00"><b>Nilai Tugas</b></font></td>
							<td bgcolor="#000080" align="center" width="100">
							<b><font size="2" color="#FFFF00">Nilai Tgh Smstr</font></b></td>
							<td bgcolor="#000080" align="center">
							<b><font size="2" color="#FFFF00">Nilai </font></b>
							<font size="2" color="#FFFF00"><b>Akhir</b></font></td>
							<td bgcolor="#000080" align="center" width="85">
							<b><font size="2" color="#FFFF00">Nilai Total</font></b></td>
							<td bgcolor="#000080" align="center" width="84">
							<b><font color="#FFFF00" size="2">Nilai Abjad</font></b></td>
						</tr>
                        <?
                        $bca=@mysql_query("select kelas_aktif.id_siswa, kelas_aktif.nilai_harian, kelas_aktif.nilai_tugas, kelas_aktif.nilai_tengah, kelas_aktif.nilai_akhir, data_siswa.nama from kelas_aktif, data_siswa where kelas_aktif.id_siswa=data_siswa.id and kelas_aktif.id_materi='$materi' and kelas_aktif.id_kelas='$id_kelas' order by data_siswa.nama");
                            while($d=@mysql_fetch_array($bca)){
                                $total=((($d[nilai_harian]*30/100)+($d[nilai_tugas]*70/100))*30/100)+($d[nilai_akhir]*70/100);
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
							<td width=\"211\">
							<p style=\"margin: 0 3px\" align=\"left\"><font size=\"2\">$d[nama]</font></td>
							<td width=\"82\" align=\"center\">
							<p style=\"margin: 0 3px\"><font size=\"2\">
							$d[nilai_harian]</font></td>
							<td width=\"84\" align=\"center\">
							<p style=\"margin: 0 3px\" align=\"center\">
							<font size=\"2\">$d[nilai_tugas]</font></td>
							<td width=\"100\" align=\"center\">
							<p style=\"margin: 0 3px\" align=\"center\">
							<font size=\"2\">$d[nilai_tengah]</font></td>
							<td align=\"center\">
							<p style=\"margin: 0 3px\" align=\"center\">
							<font size=\"2\">$d[nilai_akhir]</font></td>
							<td width=\"85\" align=\"center\">
							<b><font size=\"2\">$total</font></b></td>
							<td width=\"84\" align=\"center\">
							<b><font size=\"2\">$ab</font></b></td>
						</tr>";
                                }
                        }
                                ?>
					</table>
					</td>
					<td width="5">
                    </td>
				</tr>
				<tr>
					<td width="4">&nbsp;</td>
					<td><?
                    if(isset($view)){
                        ?>
                    <a target="_blank" href="nilai.cetak.php?kelas=<?=$kelas?>&id_kelas=<?=$id_kelas?>&materi=<?=$materi?>&materi2=<?=$h[materi]?>&view">
                    <img border="0" src="./images/cetak_36.gif" width="94" height="33"></a>
<?}?></td>
					<td width="5">&nbsp;</td>
				</tr>
			</table>
			</td>
		</tr>