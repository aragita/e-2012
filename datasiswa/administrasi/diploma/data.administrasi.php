<?
include"sambung.php";
?>
<tr><span class=menu>
			<td background="images/bg_garis_07.gif" width="29">
			<b>
			<img border="0" src="images/garis_06.gif" width="27" height="36"></b></td>
			<td background="images/bg_garis_07.gif" width="531">
			<b><font style="font-size: 9pt" size="2">
			DATA ANGSURAN ANGSURAN SISWA</font></b></td>
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
						<table border="1" width="100%" cellspacing="0" cellpadding="0" id="table5">
							<form method="POST" action="diploma.php">
							<tr>
								<td colspan="2" bgcolor="#000080">
								<p align="center">
								<font size="2" color="#FFFF00"><b>TAMBAH DATA
								ANGSURAN</b></font></td>
							</tr>
								<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">No Induk
								Siswa</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<select size="1" name="induk">
                                <option value="-">-</option>
                                <?
                                $baca=mysql_query("select induk from data_siswa order by induk");
                                while($d=mysql_fetch_array($baca)){
                                echo"<option value=\"",$d[induk],"\">",$d[induk],"</option>";
                                }
                                ?>
								</select><font size="2"> atau nama siswa </font>
                                <select size="1" name="nama">
                                <option value="-">-</option>
                                <?
                                $baca=mysql_query("select nama, induk from data_siswa order by induk");
                                while($d=mysql_fetch_array($baca)){
                                echo"<option value=\"",$d[nama],"\">",$d[nama],"</option>";
                                }
                                ?>
								</select></td>
								</tr>
							<tr>
								<td width="30%">
								<p style="margin: 0 5px">&nbsp;</td>
								<td width="69%">
								<p style="margin: 0 5px">
								<input type="submit" value="LANJUT" name="tambah"></td>
							</tr>
								<input type="hidden" name="menu" value="data.angsuran.siswa">
							</form>
						</table>
						<p style="margin: 1px 5px">&nbsp;</p>
						<table border="1" width="100%" cellspacing="0" cellpadding="0" id="table4">
							<form method="POST" action="diploma.php">
							<tr>
								<td colspan="2" bgcolor="#000080">
								<p align="center">
								<font size="2" color="#FFFF00"><b>DATA ANGSURAN
								SISWA</b></font></td>
							</tr>
							<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Jurusan</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<select size="1" name="jurusan">
                                <?
                                $baca=mysql_query("select jurusan, kode from jurusan order by jurusan");
                                while($d=mysql_fetch_array($baca)){
                                echo"<option value=\"",$d[kode],"\">",$d[jurusan],"</option>";
                                }
                                ?></select></td>
							</tr>
							<tr>
								<td width="30%">
								<p style="margin: 0 5px">&nbsp;</td>
								<td width="69%">
								<p style="margin: 0 5px">
								<input type="submit" value="LIHAT DATA" name="lihat"></td>
							</tr>
								<input type="hidden" name="menu" value="data.administrasi">
							</form>
						</table>
					<font size="2"><b>Data angsuran siswa jurusan:
					<font color="#800000"><?=$jurusan?>.</font></b></font><table border="1" width="100%" cellspacing="0" id="table3">
						<tr>
							<td bgcolor="#000080" width="130" align="center">
							<font size="2" color="#FFFF00"><b>Angsuran</b></font></td>
							<td bgcolor="#000080" width="213" align="center">
							<font size="2" color="#FFFF00"><b>Gelombang 1</b></font></td>
							<td bgcolor="#000080" width="205" align="center">
							<font size="2" color="#FFFF00"><b>Gelombang 2</b></font></td>
							<td bgcolor="#000080" align="center">
							<font size="2" color="#FFFF00"><b>Gelombang 3</b></font></td>
						</tr>
                        <?
                        $baca=mysql_query("select * from data_angsuran where jurusan='$jurusan' order by jurusan");
                        while($d=mysql_fetch_array($baca)){
                            $d[gel1]=number_format($d[gel1],2,",",".");
                            $d[gel2]=number_format($d[gel2],2,",",".");
                            $d[gel3]=number_format($d[gel3],2,",",".");
                        echo"<tr>
							<td width=\"130\">
							<p style=\"margin: 0 5px; \"><font size=\"2\">Bulan ke $d[angsuran]</font></td>
							<td width=\"213\" align=\"right\">
							<p style=\"margin: 0 5px; \"><font size=\"2\">Rp. $d[gel1]</font></td>
							<td width=\"205\" align=\"right\">
							<p style=\"margin-left: 5px; margin-right: 5px\">
							<font size=\"2\">Rp. $d[gel2]</font></td>
							<td align=\"right\">
							<p style=\"margin-left: 5px; margin-right: 5px\">
							<font size=\"2\">Rp. $d[gel3]</font></td>
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