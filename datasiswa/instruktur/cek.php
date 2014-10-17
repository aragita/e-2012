<?
session_start();
if(!session_is_registered("kode")){
header("location:./index.php");
exit;
}
?>