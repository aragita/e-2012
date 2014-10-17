<?
include"sambung.php";
if(isset($id)){
    $bc=mysql_query("select * from jurusan where id='$id'");
    $d=mysql_fetch_array($bc);
}else{
    $d[jurusan]="";
    $d[kode]="";
}
?>
		<tr><span class=menu>
			<td background="images/bg_garis_07.gif" width="29">
			<b>
			<img border="0" src="images/garis_06.gif" width="27" height="36"></b></td>
			<td background="images/bg_garis_07.gif" width="531">
			<b><font style="font-size: 9pt" size="2">DATA </font></b>
			<span style="font-size: 9pt"><b>JURUSAN</b></span></td>
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
					<form method="POST" action="kirim.jurusan.php">
						<table border="1" width="100%" cellspacing="0" cellpadding="0" id="table4">
							<tr>
								<td colspan="2" bgcolor="#000080">
								<p align="center">
								<font color="#FFFF00" size="2"><b>TAMBAH&nbsp;
								ATAU UBAH DATA JURUSAN</b></font></td>
							</tr>
							<tr>
								<td width="257">
								<p style="margin: 0 5px"><font size="2">Nama
								Jurusan Baru</font></td>
								<td>
								<p style="margin: 0 5px">
								<input type="text" name="jurusan" size="54" value="<?=$d[jurusan]?>" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="257">
								<p style="margin-left: 5px"><font size="2">Kode
								Jurusan</font></td>
								<td>
								<p style="margin-left: 5px">
								<input type="text" name="kode" size="13" value="<?=$d[kode]?>" style="border: 1px solid #000080"></td>
							</tr>
							<tr>
								<td width="257">
								<p style="margin: 0 5px">&nbsp;</td>
								<td>
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
						</table>
                        <input type="hidden" name="id" value="<?=$d[id]?>">
					</form>
					<font size="2"><b>Data Jurusan yang sudah ada</b></font><table border="1" width="100%" cellspacing="0" id="table3">
						<tr>
							<td bgcolor="#000080" width="107" align="center">
							<font size="2" color="#FFFF00"><b>Kode Jurusan</b></font></td>
							<td bgcolor="#000080" width="476" align="center">
							<font size="2" color="#FFFF00"><b>Nama Jurusan</b></font></td>
							<td bgcolor="#000080" align="center">
							<b><font color="#FFFF00" size="2">Action</font></b></td>
						</tr>
                        <?
                        $bca=mysql_query("select * from jurusan order by kode");
                        while($d=mysql_fetch_array($bca)){
                        echo"<tr>
							<td width=\"107\">
							<p style=\"margin: 0 3px\"><font size=\"2\">$d[kode]</font></td>
							<td width=\"476\">
							<p style=\"margin: 0 3px\"><font size=\"2\">
							$d[jurusan]</font></td>
							<td>
							<p align=\"center\"><font size=\"2\">
							<a href=\"diploma.php?menu=data.jurusan&id=$d[id]\">Ubah</a> |
							<a href=\"kirim.jurusan.php?act=hapus&id=$d[id]\">Hapus</a></font></td>
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