<?
include"sambung.php";
?>
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
<table border="0" width="1265" cellspacing="0" cellpadding="0" id="table1">
	<tr>
		<td colspan="20">
		<p align="center">DAFTAR HADIR SISWA<br>
		KELAS <?echo strtoupper($kelas);?><br>
&nbsp;</p>
		<table border="0" width="100%" cellspacing="0" cellpadding="0" id="table2">
			<tr>
				<td width="92"><font size="2">KELAS</font></td>
				<td width="330"><font size="2">: <?echo strtoupper($kelas);?></font></td>
				<td>&nbsp;</td>
				<td width="75"><font size="2">INSTRUKTUR</font></td>
				<td width="214"><font size="2">: <?=$instruktur?></font></td>
			</tr>
			<tr>
				<td width="92"><font size="2">MATERI</font></td>
				<td width="330"><font size="2">: <?=$nm_materi?></font></td>
				<td>&nbsp;</td>
				<td width="75"><font size="2">ASSISTEN</font></td>
				<td width="214"><font size="2">: <?=$assisten?></font></td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td width="51" style="border-left: 1px solid #000000; border-top: 2px solid #000000; border-bottom: 2px solid #000000; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="center" rowspan="3">
		<font size="2">No.</font></td>
		<td width="287" style="border-left: 1px solid #000000; border-top: 2px solid #000000; border-bottom: 2px solid #000000; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="center" rowspan="3">
		<font size="2">NAMA SISWA</font></td>
		<td width="925" colspan="18" style="border-left-style: solid; border-left-width: 1px; border-right-style: solid; border-right-width: 1px; border-top-style: solid; border-top-width: 2px; border-bottom-style: solid; border-bottom-width: 1px; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" bordercolor="#000000" align="center">
		<p align="center"><font size="2">Session dan Tanggal</font></td>
	</tr>
	<tr>
		<td width="50" style="border-left: 1px solid #000000; border-bottom: 1px solid #000000" align="center">
		<font size="2">1</font></td>
		<td width="50" style="border-left: 1px solid #000000; border-bottom: 1px solid #000000" align="center">
		<font size="2">2</font></td>
		<td width="50" style="border-left: 1px solid #000000; border-bottom: 1px solid #000000" align="center">
		<font size="2">3</font></td>
		<td width="50" style="border-left: 1px solid #000000; border-bottom: 1px solid #000000" align="center">
		<font size="2">4</font></td>
		<td width="51" style="border-left: 1px solid #000000; border-bottom: 1px solid #000000" align="center">
		<font size="2">5</font></td>
		<td width="51" style="border-left: 1px solid #000000; border-bottom: 1px solid #000000" align="center">
		<font size="2">6</font></td>
		<td width="51" style="border-left: 1px solid #000000; border-bottom: 1px solid #000000" align="center">
		<font size="2">7</font></td>
		<td width="51" style="border-left: 1px solid #000000; border-bottom: 1px solid #000000" align="center">
		<font size="2">8</font></td>
		<td width="51" style="border-left: 1px solid #000000; border-bottom: 1px solid #000000" align="center">
		<font size="2">9</font></td>
		<td width="51" style="border-left: 1px solid #000000; border-bottom: 1px solid #000000" align="center">
		<font size="2">10</font></td>
		<td width="51" style="border-left: 1px solid #000000; border-bottom: 1px solid #000000" align="center">
		<font size="2">11</font></td>
		<td width="51" style="border-left: 1px solid #000000; border-bottom: 1px solid #000000" align="center">
		<font size="2">12</font></td>
		<td width="51" style="border-left: 1px solid #000000; border-bottom: 1px solid #000000" align="center">
		<font size="2">13</font></td>
		<td width="51" style="border-left: 1px solid #000000; border-bottom: 1px solid #000000" align="center">
		<font size="2">14</font></td>
		<td width="51" style="border-left: 1px solid #000000; border-bottom: 1px solid #000000" align="center">
		<font size="2">15</font></td>
		<td width="51" style="border-left: 1px solid #000000; border-bottom: 1px solid #000000" align="center">
		<font size="2">16</font></td>
		<td width="51" style="border-left: 1px solid #000000; border-bottom: 1px solid #000000" align="center">
		<font size="2">17</font></td>
		<td width="51" style="border-left: 1px solid #000000; border-right: 1px solid #000000; border-bottom: 1px solid #000000" align="center">
		<font size="2">18</font></td>
	</tr>
    <?
    $baca1=mysql_query("SELECT  * FROM kelas_aktif WHERE id_materi='$materi' and id_kelas='$id_kelas'limit 0,1");
    $d=mysql_fetch_array($baca1);
	echo"<tr>
		<td width=\"50\" style=\"border-left: 1px solid #000000; border-bottom: 2px solid #000000\" align=\"center\">
		<p align=\"center\" style=\"margin-top: 1px; margin-bottom: 1px\">
		<font style=\"font-size: 9pt\">$d[ses1]</font></td>
		<td width=\"50\" style=\"border-left: 1px solid #000000; border-bottom: 2px solid #000000\" align=\"center\">
		<p style=\"margin-top: 1px; margin-bottom: 1px\">
		<font style=\"font-size: 9pt\">$d[ses2]</font></td>
		<td width=\"50\" style=\"border-left: 1px solid #000000; border-bottom: 2px solid #000000\" align=\"center\">
		<p style=\"margin-top: 1px; margin-bottom: 1px\">
		<font style=\"font-size: 9pt\">$d[ses3]</font></td>
		<td width=\"50\" style=\"border-left: 1px solid #000000; border-bottom: 2px solid #000000\" align=\"center\">
		<p style=\"margin-top: 1px; margin-bottom: 1px\">
		<font style=\"font-size: 9pt\">$d[ses4]</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 2px solid #000000\" align=\"center\">
		<p style=\"margin-top: 1px; margin-bottom: 1px\">
		<font style=\"font-size: 9pt\">$d[ses5]</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 2px solid #000000\" align=\"center\">
		<p style=\"margin-top: 1px; margin-bottom: 1px\">
		<font style=\"font-size: 9pt\">$d[ses6]</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 2px solid #000000\" align=\"center\">
		<p style=\"margin-top: 1px; margin-bottom: 1px\">
		<font style=\"font-size: 9pt\">$d[ses7]</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 2px solid #000000\" align=\"center\">
		<p style=\"margin-top: 1px; margin-bottom: 1px\">
		<font style=\"font-size: 9pt\">$d[ses8]</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 2px solid #000000\" align=\"center\">
		<p style=\"margin-top: 1px; margin-bottom: 1px\">
		<font style=\"font-size: 9pt\">$d[ses9]</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 2px solid #000000\" align=\"center\">
		<p style=\"margin-top: 1px; margin-bottom: 1px\">
		<font style=\"font-size: 9pt\">$d[ses10]</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 2px solid #000000\" align=\"center\">
		<p style=\"margin-top: 1px; margin-bottom: 1px\">
		<font style=\"font-size: 9pt\">$d[ses11]</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 2px solid #000000\" align=\"center\">
		<p style=\"margin-top: 1px; margin-bottom: 1px\">
		<font style=\"font-size: 9pt\">$d[ses12]</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 2px solid #000000\" align=\"center\">
		<p style=\"margin-top: 1px; margin-bottom: 1px\">
		<font style=\"font-size: 9pt\">$d[ses13]</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 2px solid #000000\" align=\"center\">
		<p style=\"margin-top: 1px; margin-bottom: 1px\">
		<font style=\"font-size: 9pt\">$d[ses14]</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 2px solid #000000\" align=\"center\">
		<p style=\"margin-top: 1px; margin-bottom: 1px\">
		<font style=\"font-size: 9pt\">$d[ses15]</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 2px solid #000000\" align=\"center\">
		<p style=\"margin-top: 1px; margin-bottom: 1px\">
		<font style=\"font-size: 9pt\">$d[ses16]</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 2px solid #000000\" align=\"center\">
		<p style=\"margin-top: 1px; margin-bottom: 1px\">
		<font style=\"font-size: 9pt\">$d[ses17]</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-right: 1px solid #000000; border-bottom: 2px solid #000000\" align=\"center\">
		<p style=\"margin-top: 1px; margin-bottom: 1px\">
		<font style=\"font-size: 9pt\">$d[ses18]</font></td>
	</tr>";
    $baca=mysql_query("SELECT kelas_aktif.id_materi, kelas_aktif.id_siswa, kelas_aktif.*, data_siswa.nama, data_siswa.induk FROM kelas_aktif,data_siswa WHERE kelas_aktif.id_materi='$materi' and kelas_aktif.id_siswa=data_siswa.id and kelas_aktif.id_kelas=$id_kelas");
                        $no=1;
                        While($d=mysql_fetch_array($baca)){
                            if(ereg("m",$d[ses1])){
                                $absen1="Masuk";
                            }elseif(ereg("t",$d[ses1])){
                                $absen1="<font color=\"#FF0000\">Tidak</font>";
                            }else{
                                $absen1="&nbsp;";
                            }
                            if(ereg("m",$d[ses2])){
                                $absen2="Masuk";
                            }elseif(ereg("t",$d[ses2])){
                                $absen2="<font color=\"#FF0000\">Tidak</font>";
                            }else{
                                $absen2="&nbsp;";
                            }
                            if(ereg("m",$d[ses3])){
                                $absen3="Masuk";
                            }elseif(ereg("t",$d[ses3])){
                                $absen3="<font color=\"#FF0000\">Tidak</font>";
                            }else{
                                $absen3="&nbsp;";
                            }
                            if(ereg("m",$d[ses4])){
                                $absen4="Masuk";
                            }elseif(ereg("t",$d[ses4])){
                                $absen4="<font color=\"#FF0000\">Tidak</font>";
                            }else{
                                $absen4="&nbsp;";
                            }
                            if(ereg("m",$d[ses5])){
                                $absen5="Masuk";
                            }elseif(ereg("t",$d[ses5])){
                                $absen5="<font color=\"#FF0000\">Tidak</font>";
                            }else{
                                $absen5="&nbsp;";
                            }
                            if(ereg("m",$d[ses6])){
                                $absen6="Masuk";
                            }elseif(ereg("t",$d[ses6])){
                                $absen6="<font color=\"#FF0000\">Tidak</font>";
                            }else{
                                $absen6="&nbsp;";
                            }
                            if(ereg("m",$d[ses7])){
                                $absen7="Masuk";
                            }elseif(ereg("t",$d[ses7])){
                                $absen7="<font color=\"#FF0000\">Tidak</font>";
                            }else{
                                $absen7="&nbsp;";
                            }
                            if(ereg("m",$d[ses8])){
                                $absen8="Masuk";
                            }elseif(ereg("t",$d[ses8])){
                                $absen8="<font color=\"#FF0000\">Tidak</font>";
                            }else{
                                $absen8="&nbsp;";
                            }
                            if(ereg("m",$d[ses9])){
                                $absen9="Masuk";
                            }elseif(ereg("t",$d[ses9])){
                                $absen9="<font color=\"#FF0000\">Tidak</font>";
                            }else{
                                $absen9="&nbsp;";
                            }
                            if(ereg("m",$d[ses10])){
                                $absen10="Masuk";
                            }elseif(ereg("t",$d[ses10])){
                                $absen10="<font color=\"#FF0000\">Tidak</font>";
                            }else{
                                $absen10="&nbsp;";
                            }
                            if(ereg("m",$d[ses11])){
                                $absen11="Masuk";
                            }elseif(ereg("t",$d[ses11])){
                                $absen11="<font color=\"#FF0000\">Tidak</font>";
                            }else{
                                $absen11="&nbsp;";
                            }
                            if(ereg("m",$d[ses12])){
                                $absen12="Masuk";
                            }elseif(ereg("t",$d[ses12])){
                                $absen12="<font color=\"#FF0000\">Tidak</font>";
                            }else{
                                $absen12="&nbsp;";
                            }
                            if(ereg("m",$d[ses13])){
                                $absen13="Masuk";
                            }elseif(ereg("t",$d[ses13])){
                                $absen13="<font color=\"#FF0000\">Tidak</font>";
                            }else{
                                $absen13="&nbsp;";
                            }
                            if(ereg("m",$d[ses14])){
                                $absen14="Masuk";
                            }elseif(ereg("t",$d[ses14])){
                                $absen14="<font color=\"#FF0000\">Tidak</font>";
                            }else{
                                $absen14="&nbsp;";
                            }
                            if(ereg("m",$d[ses15])){
                                $absen15="Masuk";
                            }elseif(ereg("t",$d[ses15])){
                                $absen15="<font color=\"#FF0000\">Tidak</font>";
                            }else{
                                $absen15="&nbsp;";
                            }
                            if(ereg("m",$d[ses16])){
                                $absen16="Masuk";
                            }elseif(ereg("t",$d[ses16])){
                                $absen16="<font color=\"#FF0000\">Tidak</font>";
                            }else{
                                $absen16="&nbsp;";
                            }
                            if(ereg("m",$d[ses17])){
                                $absen17="Masuk";
                            }elseif(ereg("t",$d[ses17])){
                                $absen17="<font color=\"#FF0000\">Tidak</font>";
                            }else{
                                $absen17="&nbsp;";
                            }
                            if(ereg("m",$d[ses18])){
                                $absen18="Masuk";
                            }elseif(ereg("t",$d[ses18])){
                                $absen18="<font color=\"#FF0000\">Tidak</font>";
                            }else{
                                $absen18="&nbsp;";
                            }

        echo"<tr>
		<td width=\"59\" style=\"border-left: 1px solid #000000; border-bottom: 1px solid #000000\">
		<p align=\"center\" style=\"margin-left: 2px; margin-right: 2px\">
		<font size=\"2\">$no</font></td>
		<td width=\"295\" style=\"border-left: 1px solid #000000; border-bottom: 1px solid #000000\">
		<p style=\"margin-left: 3px; margin-right: 3px\"><font size=\"2\">$d[nama]</font></td>
		<td width=\"50\" style=\"border-left: 1px solid #000000; border-bottom: 1px solid #000000\" align=\"center\">
		<font size=\"2\">$absen1</font></td>
		<td width=\"50\" style=\"border-left: 1px solid #000000; border-bottom: 1px solid #000000\" align=\"center\">
		<font size=\"2\">$absen2</font></td>
		<td width=\"50\" style=\"border-left: 1px solid #000000; border-bottom: 1px solid #000000\" align=\"center\">
		<font size=\"2\">$absen3</font></td>
		<td width=\"50\" style=\"border-left: 1px solid #000000; border-bottom: 1px solid #000000\" align=\"center\">
		<font size=\"2\">$absen4</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 1px solid #000000\" align=\"center\">
		<font size=\"2\">$absen5</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 1px solid #000000\" align=\"center\">
		<font size=\"2\">$absen6</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 1px solid #000000\" align=\"center\">
		<font size=\"2\">$absen7</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 1px solid #000000\" align=\"center\">
		<font size=\"2\">$absen8</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 1px solid #000000\" align=\"center\">
		<font size=\"2\">$absen9</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 1px solid #000000\" align=\"center\">
		<font size=\"2\">$absen10</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 1px solid #000000\" align=\"center\">
		<font size=\"2\">$absen11</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 1px solid #000000\" align=\"center\">
		<font size=\"2\">$absen12</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 1px solid #000000\" align=\"center\">
		<font size=\"2\">$absen13</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 1px solid #000000\" align=\"center\">
		<font size=\"2\">$absen14</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 1px solid #000000\" align=\"center\">
		<font size=\"2\">$absen15</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 1px solid #000000\" align=\"center\">
		<font size=\"2\">$absen16</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-bottom: 1px solid #000000\" align=\"center\">
		<font size=\"2\">$absen17</font></td>
		<td width=\"51\" style=\"border-left: 1px solid #000000; border-right: 1px solid #000000; border-bottom: 1px solid #000000\" align=\"center\">
		<font size=\"2\">$absen18</font></td>
	</tr>";
    $no++;
      }
  ?>
</table>
</div>
</div>
<div id="menu">
<p><a href="javascript:window.print()">Cetak</a>
<?
if($session >18){
    echo" |
<a href=\"./absensi.cetak.php?kelas=$ab_kelas&materi=$materi2[0]&nm_materi=$materi2[1]&jml_session=$session&instruktur=$instruktur&assisten=$ass\">
Lanjut &gt;&gt;</a>";
}
?>
</p>
</div>
</body>
</html>