<?
include"sambung.php";
    $bc=mysql_query("select * from instruktur where kode='$kode'");
    $d=mysql_fetch_array($bc);

?>
		<tr><span class=menu>
			<td background="images/bg_garis_07.gif" width="29">
			<b>
			<img border="0" src="images/garis_06.gif" width="27" height="36"></b></td>
			<td background="images/bg_garis_07.gif" width="531">
			<b><font style="font-size: 9pt" size="2">DATA </font>
			<span style="font-size: 9pt">KELAS</span></b><font style="font-size: 9pt"><b>
			</b> </font><span style="font-size: 9pt"><b>BERDASARKAN INSTRUKTUR</b></span></td>
			<td background="images/bg_garis_07.gif" width="220">
            <a href="javascript:history.back();">
	<img border="0" src="./images/kembali.gif" width="84" height="24" align="right"></a>&nbsp;</td></span>
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
							<tr>
								<td colspan="2" bgcolor="#000080">
								<p align="center">
								<font size="2" color="#FFFF00"><b>DATA
								INSTRUKTUR</b></font></td>
							</tr>
							<tr>
								<td width="29%">
								<p style="margin: 0 5px"><font size="2">Nama
								Instruktur</font></td>
								<td width="70%">
								<p style="margin: 0 5px">
								<font size="2"><?=$d[nama]?></font></td>
							</tr>
							<tr>
								<td width="29%">
								<p style="margin: 0 5px"><font size="2">Kode
								Instruktur</font></td>
								<td width="70%">
								<p style="margin: 0 5px">
								<font size="2"><?=$d[kode]?></font></td>
							</tr>
							<tr>
								<td width="29%">
								<p style="margin: 0 5px"><font size="2">Status</font></td>
								<td width="70%">
								<p style="margin: 0 5px">
								<font size="2"><?=$d[status]?></font></td>
							</tr>
							<tr>
								<td width="29%">
								<p style="margin: 0 5px"><font size="2">Password</font></td>
								<td width="70%">
								<p style="margin: 0 5px">
								<font size="2"><?=$d[password]?></font></td>
							</tr>
						</table>
					<font size="2"><b><br>
					Data Kelas
					Yang Dibimbing</b></font><table border="1" width="100%" cellspacing="0" id="table3">
						<tr>
							<td bgcolor="#000080" width="151" align="center">
							<font size="2" color="#FFFF00"><b>Nama Kelas</b></font></td>
							<td bgcolor="#000080" width="188" align="center">
							<font size="2" color="#FFFF00"><b>Mulai Aktif</b></font></td>
							<td bgcolor="#000080" width="156" align="center">
							<font size="2" color="#FFFF00"><b>Jurusan</b></font></td>
							<td bgcolor="#000080" align="center">
							<font size="2" color="#FFFF00"><b>Status Kelas</b></font></td>
						</tr>
						<?
                            $bc2=mysql_query("select * from kelas where kode_instruktur='$kode' order by id desc limit 0,30");
                            while($dd=mysql_fetch_array($bc2)){
                                $bc3=mysql_query("select * from materi where id='$dd[id_materi]'");
                                $ddd=mysql_fetch_array($bc3);
                                if($dd[status]=="1"){
                                $warna="bgcolor=\"#FF9933\"";
                                $status="Selesai";
                            }else{
                                $warna="";
                                $status="Aktif";
                            }
                            echo"<tr>
							<td width=\"151\" $warna>
							<p style=\"margin: 0 3px\"><font size=\"2\">$dd[nama] ($status)</font></td>
							<td width=\"188\" $warna>
							<p style=\"margin: 0 3px\"><font size=\"2\">
							$dd[mulai]</font></td>
							<td width=\"156\" $warna>
							<p style=\"margin: 0 3px\" align=\"center\">
							<font size=\"2\">$dd[jurusan]</font></td>
							<td $warna>
							<p align=\"center\"><font size=\"2\">$ddd[materi]</font></td>
						</tr>";
                            }
                            ?>
                        </table>
					</td>
					<td width="5">&nbsp;</td>
				</tr>
				<tr>
					<td width="4">&nbsp;</td>
					<td></td>
				</tr>
			</table>
			</td>
		</tr>