<?php
$host="localhost";
$userdb="root";
$passdb="";
$namadb="administrasi";
$sambung=mysql_connect($host,$userdb,$passdb);
mysql_select_db($namadb,$sambung);
?>