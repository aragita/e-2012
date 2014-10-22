<?php
include"./tanggal.php";
?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Halaman Administrator</title>
</head>

<body bgcolor="#7EB548">

<div align="center"><br><br>
	<table border="0" width="100" cellspacing="0" cellpadding="0" id="table1">
		<tr>
			<td valign="top"><map name="FPMap0">
			<area alt="Klik di sini untuk kehalaman utama" coords="410, 0, 467, 15" shape="rect" href="keluar2.php">
			</map>
			<img border="0" src="./images/loginadmin_01.gif" width="468" height="164" usemap="#FPMap0"></td>
		</tr>
		<tr>
			<td valign="top" background="./images/loginadmin_06.gif">
			<table border="0" width="100%" cellspacing="3" cellpadding="2" id="table2">
				<form method="POST" action="login.php">
					<tr>
						<td colspan="2">
						<p style="margin: 1px 10px">
						<font face="Tahoma" size="2" color="#000080">Halaman ini
						hanya diperuntukkan bagi Administrator Madcoms Intra
						saja, atau lainnya yang dikasih ijin oleh Admin.</font></td>
					</tr>
                    <tr>
						<td width="96%" colspan="2" align="center">
						<b><font color="#FF0000" face="Tahoma" size="2">
						<?
                        if(isset($err1)){
                            echo"Password salah tuh.... ulangi lagi deh...";
                        }elseif(isset($err2)){
                            echo"UserID belum dipilih tuh...";
                        }elseif(isset($err3)){
                            echo"Password belom diisi tuh...";
                        }
                        ?></font></b></td>
					</tr>
					<tr>
						<td width="44%">
						<p align="right">
						<font face="Tahoma" size="2" color="#000080">UserID Kamu</font></td>
						<td width="52%">
						<select size="1" name="userid" style="color: #000080; font-family: Tahoma; font-size: 10pt">
						<option selected value="-">Pilih dulu UserID nya
						</option>
                        <?
                        include"./sambung.php";
                        $baca=mysql_query("select userid from admin order by userid");
                        while($d=mysql_fetch_array($baca)){
                        echo"<option value=\"",$d[userid],"\">",$d[userid],"</option>";
                        }
                        ?>
						</select></td>
					</tr>
					<tr>
						<td width="44%">
						<p align="right">
						<font face="Tahoma" size="2" color="#000080">Password</font></td>
						<td width="52%">
						<input type="password" name="password" size="20" style="color: #000080; font-family: Tahoma; font-size: 10pt"></td>
					</tr>
					<tr>
						<td width="44%">&nbsp;</td>
						<td width="52%">
						<input type="submit" value=" L O G I N " name="login" style="font-family: Tahoma; font-size: 10pt; color: #000080; font-weight: bold"></td>
					</tr>
					<tr>
						<td width="44%">&nbsp;</td>
						<td width="52%">
						<p align="right" style="margin-left: 10px; margin-right: 10px">
						<br>
						<i><font face="Arial" size="2" color="#999999">Copyright
						© 2006 inst_cahyo</font></i></td>
					</tr>
				</form>
			</table>
			</td>
		</tr>
		<tr>
			<td valign="top">
			<img border="0" src="./images/loginadmin_08.gif" width="468" height="17"></td>
		</tr>
	</table>
</div>

</body>

</html>