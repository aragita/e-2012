<?
include"sambung.php";
if(isset($id)){
    $bc=mysql_query("select * from materi where id='$id'");
    $d=mysql_fetch_array($bc);
}else{
    $d[materi]="";
    $d[jurusan]="";
}
?>
		<tr><span class=menu>
			<td background="images/bg_garis_07.gif" width="29">
			<b>
			<img border="0" src="images/garis_06.gif" width="27" height="36"></b></td>
			<td background="images/bg_garis_07.gif" width="531">
			<b><font style="font-size: 9pt" size="2">DATA MATERI KULIAH</font></b></td>
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
					<form method="POST" action="kirim.materi.php">
						<table border="1" width="100%" cellspacing="0" cellpadding="0" id="table4">
							<tr>
								<td colspan="2" bgcolor="#000080">
								<p align="center">
								<font color="#FFFF00" size="2"><b>TAMBAH&nbsp;
								ATAU UBAH DATA MATERI</b></font></td>
							</tr>
							<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Jurusan</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<select size="1" name="jurusan" style="border: 1px solid #000080">
                                <?
                                $bc=mysql_query("select * from jurusan");
                                while($dd=mysql_fetch_array($bc)){
                                    echo"<option value=\"$dd[kode]\">$dd[jurusan]</option>";
                                }
                                ?>
								</select></td>
							</tr>
							<tr>
								<td width="30%">
								<p style="margin: 0 5px"><font size="2">Nama
								Materi</font></td>
								<td width="69%">
								<p style="margin: 0 5px">
								<input type="text" name="materi" size="54" value="<?=$d[materi]?>" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="30%">
								<p style="margin-left: 5px"><font size="2">
								Jumlah Session Instruktur</font></td>
								<td width="69%">
								<p style="margin-left: 5px">
								<font color="#000080">
								<input type="text" name="ses_inst" size="8" value="<?=$d[ses_inst]?>" style="border: 1px solid #000080"></font>
								<font size="2">pertemuan.</font></td>
							</tr>
							<tr>
								<td width="30%">
								<p style="margin-left: 5px"><font size="2">
								Jumlah Session Assisten</font></td>
								<td width="69%">
								<p style="margin-left: 5px">
								<font color="#000080">
								<input type="text" name="ses_ass" size="8" value="<?=$d[ses_ass]?>" style="border: 1px solid #000080"></font>
								<font size="2">pertemuan.</font></td>
							</tr>
							<tr>
								<td width="30%">
								<p style="margin-left: 5px"><font size="2">
								Semester</font></td>
								<td width="69%">
								<p style="margin-left: 5px">
								<select size="1" name="semester" style="border: 1px solid #000080">
								<option value="0" <? if($d[semester]=="0"){echo"selected";}?>>Reguler</option>
                                <option value="1" <? if($d[semester]=="1"){echo"selected";}?>>Semester 1</option>
								<option value="2" <? if($d[semester]=="2"){echo"selected";}?>>Semester 2</option>
								<option value="3" <? if($d[semester]=="3"){echo"selected";}?>>Semester 3</option>
								<option value="4" <? if($d[semester]=="4"){echo"selected";}?>>Semester 4</option>
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
                                    ?></td>
							</tr>
						</table><input type="hidden" name="id" value="<?=$d[id]?>">
					</form>
					<font size="2"><b>Data materi yang sudah ada</b></font><table border="1" width="100%" cellspacing="0" id="table3">
						<tr>
							<td bgcolor="#000080" width="75" align="center">
							<font size="2" color="#FFFF00"><b>Id Materi</b></font></td>
							<td bgcolor="#000080" width="264" align="center">
							<font size="2" color="#FFFF00"><b>Nama Materi</b></font></td>
							<td bgcolor="#000080" width="101" align="center">
							<font size="2" color="#FFFF00"><b>Jumlah Session</b></font></td>
							<td bgcolor="#000080" align="center" width="169">
							<font size="2" color="#FFFF00"><b>Jurusan / Semester</b></font></td>
							<td bgcolor="#000080" align="center">
							&nbsp;</td>
						</tr>
                        <?
                        $bca=mysql_query("select * from materi order by materi");
                        while($d=mysql_fetch_array($bca)){
                        echo"<tr>
							<td width=\"75\">
							<p style=\"margin: 0 3px\"><font size=\"2\">$d[id]</font></td>
							<td width=\"264\">
							<p style=\"margin: 0 3px\"><font size=\"2\">$d[materi]</font></td>
							<td width=\"101\">
							<p style=\"margin: 0 3px\" align=\"center\">
							<font size=\"2\">$d[ses_inst] / $d[ses_ass]</font></td>
							<td width=\"169\">
							<p style=\"margin: 0 3px\" align=\"center\">
							<font size=\"2\">$d[jurusan] / $d[semester]</font></td>
							<td>
							<p align=\"center\"><font size=\"2\">
							<a href=\"diploma.php?menu=data.materi&id=$d[id]\">Ubah</a> |
							<a href=\"kirim.materi.php?act=hapus&id=$d[id]\">Hapus</a></font></td>
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