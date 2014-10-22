<?
session_start();
if(!session_is_registered("userid")){
header("location:./index.php");
exit;
}
?>