<?php
include"tanggal.php";
include"sambung.php";
?>
<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Administrasi database siswa</title>
<SCRIPT language=JAVASCRIPT>
function CekLogin() {
        if (document.login_user.userid.value=="") {
              alert("Pilih Terlebih dahulu Nama Anda");
			  return false;
        }
        if (document.login_user.password.value=="") {
              alert("Masukkan Password Anda");
			  return false;
        }
}
</SCRIPT>
</head>
<body background="images/bg.jpg">
<table border="0" width="100%" cellpadding="2" id="table1">
	<tr>
		<td width="230">&nbsp;<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</td>
		<td width="251">&nbsp;&nbsp; </td>
		<td>&nbsp; </td>
	</tr>
	<tr>
		<td width="230">&nbsp;</td>
		<td colspan="2">&nbsp;<b><font color="red" face="Tahoma" size="2">
		<?=$now?></font></b><br><br><br><br></td>
	<tr>
		<td width="230">&nbsp;</td>
		<td width="251">
		<form name=login_user onsubmit="return CekLogin()" method="POST" action="login.php">
			<table border="0" width="100%" id="table2">
				<tr>
					<td colspan="2">
					<p align="center"><b>
					<font face="Tahoma" size="2" color="#000080">Login
					Instruktur</font></b></td>
				</tr>
				<tr>
					<td width="72"><b>
					<font face="Tahoma" size="2" color="#000080">Nama</font></b></td>
					<td><font color="#000080" face="Tahoma">
					<select size="1" name="kode" style="font-weight: bold; font-family: Tahoma; font-size: 10pt; color: #000080">
					    <option value="">Pilih Nama Anda</option>
                        <?
                        $bc=mysql_query("select * from instruktur order by nama");
                        while($d=mysql_fetch_array($bc)){
                        echo"<option value=\"$d[kode]\">$d[nama]</option>";
                        }
                        ?>
					</select></font></td>
				</tr>
				<tr>
					<td width="72"><b>
					<font face="Tahoma" size="2" color="#000080">Password</font></b></td>
					<td><font color="#000080" face="Tahoma">
					<input type="password" name="password" size="20" style="font-weight: bold; color: #000080; font-family: Tahoma; font-size: 10pt"></font>
                    <?
                    if(isset($err1)){
                        echo" <b><font color=\"red\" face=\"Tahoma\" size=\"2\">
		Password Anda Salah</font></b>";
                    }?></td>
				</tr>
				<tr>
					<td width="72">&nbsp;</td>
					<td><font color="#000080" face="Tahoma">
					<input type="submit" value=" LOGIN " name="login" style="font-weight: 700"></font></td>
				</tr>
			</table>
		</form>
		<p>&nbsp;</p>
		<p>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="230" height="23">&nbsp;</td>
		<td height="23" width="251">&nbsp;</td>
		<td height="23">&nbsp;</td>
	</tr>
	<tr>
		<td width="230">&nbsp;</td>
		<td width="251">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
</table>

</body>

</html>