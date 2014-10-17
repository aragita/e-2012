<?
include"sambung.php";
if(isset($id)){
    $bc=mysql_query("select * from instruktur where id='$id'");
    $d=mysql_fetch_array($bc);
}else{
    $d[kode]="";
    $d[nama]="";
}
?>
		<tr><span class=menu>
			<td background="images/bg_garis_07.gif" width="29">
			<b>
			<img border="0" src="images/garis_06.gif" width="27" height="36"></b></td>
			<td background="images/bg_garis_07.gif" width="531">
			<b><font style="font-size: 9pt" size="2">DATA </font></b>
			<span style="font-size: 9pt"><b>INSTRUKTUR</b></span></td>
			<td background="images/bg_garis_07.gif" width="220">
			<p align="center"></td></span>
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
					<form method="POST" action="kirim.instruktur.php">
						<table border="1" width="100%" cellspacing="0" cellpadding="0" id="table4">
							<tr>
								<td colspan="2" bgcolor="#000080">
								<p align="center">
								<font color="#FFFF00" size="2"><b>TAMBAH&nbsp;
								ATAU UBAH DATA INSTRUKTUR</b></font></td>
							</tr>
							<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Kode</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<input type="text" name="kode" size="11" value="<?=$d[kode]?>" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Nama
								Instruktur</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<input type="text" name="nama" size="54" value="<?=$d[nama]?>" style="border: 1px solid #000080"></td>
							</tr>
                            <tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Password</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<input type="text" name="password" size="20" value="<?=$d[password]?>" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Status</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<select size="1" name="status">
								<option <?if($d[status]=="Tetap"){echo"selected";}?> value="Tetap">Tetap</option>
								<option <?if($d[status]=="Honorer"){echo"selected";}?> value="Honorer">Honorer</option>
								</select></td>
							</tr>
							<tr>
								<td width="30%">
								<p style="margin: 0 5px">&nbsp;</td>
								<td width="69%">
								<p style="margin: 0 5px">
                                <?
                                if(isset($id)){
                                    echo"<input type=\"submit\" value=\"UBAH\" name=\"ubah\">";
                                    }else{
                                    echo"<input type=\"submit\" value=\"TAMBAH\" name=\"tambah\">";
                                    }
                                    ?>
                                    </td>
							</tr>
						</table><input type="hidden" name="id" value="<?=$d[id]?>">
					</form>
					<font size="2"><b>Data Instruktur yang sudah ada</b></font><table border="1" width="100%" cellspacing="0" id="table3">
						<tr>
							<td bgcolor="#000080" width="93" align="center">
							<font size="2" color="#FFFF00"><b>Kode Instruktur</b></font></td>
							<td bgcolor="#000080" width="300" align="center">
							<font size="2" color="#FFFF00"><b>Nama Instruktur</b></font></td>
							<td bgcolor="#000080" width="183" align="center">
							<font size="2" color="#FFFF00"><b>Status</b></font></td>
							<td bgcolor="#000080" align="center">
							&nbsp;</td>
						</tr>
                        <?
                        $bca=mysql_query("select * from instruktur order by nama");
                        while($d=mysql_fetch_array($bca)){
                        echo"<tr>
							<td width=\"93\">
							<p style=\"margin: 0 3px\" align=\"center\"><font size=\"2\">$d[kode]</font></td>
							<td width=\"300\">
							<p style=\"margin: 0 3px\"><font size=\"2\">
							$d[nama]</font></td>
							<td width=\"183\">
							<p style=\"margin: 0 3px\" align=\"center\">
							<font size=\"2\">$d[status]</font></td>
							<td>
							<p align=\"center\"><font size=\"2\">
                            <a href=\"diploma.php?menu=kelas.instruktur&kode=$d[kode]\">Kelas</a> |
                            <a href=\"diploma.php?menu=data.instruktur&id=$d[id]\">Ubah</a> |
							<a href=\"kirim.instruktur.php?act&id=$d[id]\">Hapus</a></font></td>
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