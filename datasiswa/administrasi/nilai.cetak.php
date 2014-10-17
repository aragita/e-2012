<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link href="mencetak.css" rel="stylesheet" type="text/css" />
<title>absensi</title>
<style>
<!--
body         { color: #000000; font-family: Tahoma; font-size: 10pt }
-->
</style>
</head>
<body>
<div id="materi">
<div id="cetak">
Kelas : <?=$kelas?><br>
Materi : <?=$materi2?>
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
                        include"sambung.php";
                        $kelas="kelas_aktif";
                          $bca=@mysql_query("select $kelas.id_siswa, $kelas.nilai_harian, $kelas.nilai_tugas, $kelas.nilai_tengah, $kelas.nilai_akhir, data_siswa.nama from $kelas, data_siswa where $kelas.id_siswa=data_siswa.id and $kelas.id_materi='$materi' and kelas_aktif.id_kelas='$id_kelas' order by data_siswa.nama");
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
                            $total=number_format($total,1,",","");
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
?>
</table>
</div>
</div>
<div id="menu">
<p><a href="javascript:window.print()"><img border="0" src="./images/cetak_36.gif" width="94" height="33"></a>
</p>
</div>
</body>
</html>