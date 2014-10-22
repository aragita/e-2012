			<table border="0" width="100%" id="table3" cellspacing="0" cellpadding="0">
				<tr>
					<td>
					<img border="0" src="images/menu_utama.jpg" width="176" height="41"></td>
					<td>
					<img border="0" src="images/banner.jpg" width="604" height="41"></td>
				</tr>
				<tr>
					<td valign="top">
					<p style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px">
					<b><font color="#FFFF00" face="Tahoma" size="2">
					<a href="direktur.php?menu=siswa" style="text-decoration: none">
					<font color="#FFFF00">Laporan Siswa</font></a></font></b><p style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px">
					<b><font face="Tahoma" color="#FFFF00" size="2">
					<a href="direktur.php?menu=administrasi" style="text-decoration: none">
					<font color="#FFFF00">Laporan Administrasi</font></a></font></b><p style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px">
					&nbsp;</td>
					<td rowspan="2" valign="top">
					<table border="0" width="100%" cellspacing="1" id="table4">
						<tr>
							<td width="604" bgcolor="#246494" colspan="2">
							<p align="center" style="margin-top: 3px; margin-bottom: 3px">
							<b><font color="#FFFF00" face="Tahoma" size="2">DATA&nbsp; SISWA 
							MASING-MASING JURUSAN</font></b></td>
						</tr>
						<tr>
							<td width="270" valign="top" bgcolor="#DDE9F7">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">Jurusan</font></td>
							<td width="327" valign="top" bgcolor="#DDE9F7">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">Jumlah 
							Siawa</font></td>
						</tr>
						<?
                        $query=mysql_query("SELECT *
FROM
`jurusan`
ORDER BY
`jurusan`.`jurusan` ASC");
while($d=mysql_fetch_array($query)){
    $siswa=mysql_num_rows(mysql_query("SELECT * FROM  `data_siswa` WHERE `jurusan` = '$d[kode]'"));
?>
                        <tr>
							<td width="270" valign="top" bgcolor="#DDE9F7">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">
							<?=$d[jurusan]?></font></td>
							<td width="327" valign="top" bgcolor="#DDE9F7">
							<p style="margin: 3px 10px">
							<font face="Tahoma" size="2" color="#000080">
							<?=$siswa?></font></td>
						</tr>
                        <?
}
?>
						<tr>
							<td width="270" valign="top" bgcolor="#CC6600">&nbsp;
							</td>
							<td width="327" valign="top" bgcolor="#CC6600">&nbsp;
							</td>
						</tr>
						</table>