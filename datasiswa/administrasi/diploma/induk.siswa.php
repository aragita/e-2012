<?
include"sambung.php";
if(isset($id)){
    $bc=mysql_query("select * from data_siswa where id='$id'");
    $d=mysql_fetch_array($bc);
    $alamat=str_replace("|"," ", $d[alamat]);
    $kota=str_replace("|"," ", $d[kota]);
}else{
    $d[nama]="";
    $d[alamat]="";
}
    $induk1=mysql_query("select induk from data_siswa order by induk desc");
    $ind=mysql_fetch_array($induk1);
if($d[induk]==""){
    $induk=$ind[induk]+1;
}else{
    $induk=$d[induk];
}
?>
		<tr><span class=menu>
			<td background="images/bg_garis_07.gif" width="29">
			<img border="0" src="images/garis_06.gif" width="27" height="36"></td>
			<td background="images/bg_garis_07.gif" width="531"><b>
			<font size="2">PENGATURAN NOMOR INDUK DAN PEMBAGIAN KELAS</font></b></td>
			<td background="images/bg_garis_07.gif" width="220">
			<p align="center"><a href="javascript:history.back();">
	<img border="0" src="./images/kembali.gif" width="84" height="24" align="right"></a></td></span>
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
					<td rowspan="3">
					<form method="POST" action="kirim.induk.php">
						<table border="2" width="100%" bordercolorlight="#C0C0C0" cellpadding="2" bordercolordark="#000080" id="table4">
							<tr>
								<td>
						<table border="0" width="100%" id="table5">
							<tr>
								<td width="156"><font size="2">Nama Siswa</font></td>
								<td><font size="2"><?=$d[nama]?></font></td>
							</tr>
							<tr>
								<td width="156"><font size="2">Alamat</font></td>
								<td><font size="2"><?=$alamat?> <?=$kota?></font></td>
							</tr>
							<tr>
								<td width="156"><font size="2">Beri nomor induk</font></td>
								<td>
								<input type="text" name="induk" size="20" style="color: #000080; font-family: Tahoma; font-size: 10pt; border: 1px solid #000080" value="<?=$induk?>"></td>
							</tr>
                            <tr>
								<td width="156"><font size="2">Biaya Pendaftaran</font></td>
								<td>
								<input type="text" name="biaya_daftar" size="20" style="color: #000080; font-family: Tahoma; font-size: 10pt; border: 1px solid #000080" value="50000"></td>
							</tr>
                            <tr>
								<td width="156"><font size="2">Kelas</font></td>
								<td>
								<select size="1" name="kelas" style="color: #000080; font-size: 10pt; font-family: Tahoma">
                                <?
                                $bca=mysql_query("select DISTINCT nama from kelas order by nama");
                                while($d=mysql_fetch_array($bca)){
                                echo"<option value=\"",$d[nama],"\">",$d[nama],"</option>";
                                }
                                ?>
								</select></td>
							</tr>
                            <tr>
								<td width="156">&nbsp;</td>
								<td>
								<input type="submit" value="DAFTARKAN SEBAGAI SISWA DALAM KELAS" name="kirim"></td>
							</tr>
						</table>
								</td>
							</tr>
						</table>
						<input type="hidden" name="menu" value="induk.siswa">
						<input type="hidden" name="id" value="<?=$id?>">
					</form>
					</td>
					<td width="5">&nbsp;</td>
				</tr>
				<tr>
					<td width="4">&nbsp;</td>
					<td width="5">&nbsp;</td>
				</tr>
				<tr>
					<td width="4">&nbsp;</td>
					<td width="5">&nbsp;</td>
				</tr>
			</table>
			</td>
		</tr>