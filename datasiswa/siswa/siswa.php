<?
include"cek.php";
include"sambung.php";
?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Halaman Siswa</title>
<script language="JavaScript">
<!--
function FP_preloadImgs() {//v1.0
 var d=document,a=arguments; if(!d.FP_imgs) d.FP_imgs=new Array();
 for(var i=0; i<a.length; i++) { d.FP_imgs[i]?>=new Image; d.FP_imgs[i]?>.src=a[i]?>; }
}

function FP_swapImg() {//v1.0
 var doc=document,args=arguments,elm,n; doc.$imgSwaps=new Array(); for(n=2; n<args.length;
 n+=2) { elm=FP_getObjectByID(args[n]?>); if(elm) { doc.$imgSwaps[doc.$imgSwaps.length]?>=elm;
 elm.$src=elm.src; elm.src=args[n+1]?>; } }
}

function FP_getObjectByID(id,o) {//v1.0
 var c,el,els,f,m,n; if(!o)o=document; if(o.getElementById) el=o.getElementById(id);
 else if(o.layers) c=o.layers; else if(o.all) el=o.all[id]?>; if(el) return el;
 if(o.id==id || o.name==id) return o; if(o.childNodes) c=o.childNodes; if(c)
 for(n=0; n<c.length; n++) { el=FP_getObjectByID(id,c[n]?>); if(el) return el; }
 f=o.forms; if(f) for(n=0; n<f.length; n++) { els=f[n]?>.elements;
 for(m=0; m<els.length; m++){ el=FP_getObjectByID(id,els[n]?>); if(el) return el; } }
 return null;
}
// -->
</script>
</head>

<body bgcolor="#008000" onLoad="FP_preloadImgs(/*url*/'tombol/button11.gif', /*url*/'tombol/button12.gif', /*url*/'tombol/button34.gif', /*url*/'tombol/button35.gif', /*url*/'tombol/button38.gif', /*url*/'tombol/button39.gif', /*url*/'tombol/button50.gif', /*url*/'tombol/button51.gif', /*url*/'tombol/button54.gif', /*url*/'tombol/button55.gif', /*url*/'tombol/button6B.gif', /*url*/'tombol/button6C.gif')">

<div align="center">
	<table border="0" width="780" cellspacing="0" cellpadding="0" background="images/baground.jpg" id="table1">
		<tr>
			<td><map name="FPMap0">
			<area href="keluar.php" shape="rect" coords="637, 92, 712, 113">
			</map>
			<img border="0" src="images/logo.jpg" width="780" height="126" usemap="#FPMap0"></td>
		</tr>
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0" background="images/bg_menu.jpg" id="table2">
				<tr>
					<td width="15">
					<img border="0" src="images/menu2.jpg" width="10" height="47"></td>
					<td><b><font size="2" face="Tahoma" color="#800000">Selamat
					Datang <?=$nama_siswa?></font></b></td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td>
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
					<a href="siswa.php?data=pribadi">
					<img border="0" id="img5" src="tombol/button53.gif" height="25" width="145" alt="DATA PRIBADI" onMouseOver="FP_swapImg(1,0,/*id*/'img5',/*url*/'tombol/button54.gif')" onMouseOut="FP_swapImg(0,0,/*id*/'img5',/*url*/'tombol/button53.gif')" onMouseDown="FP_swapImg(1,0,/*id*/'img5',/*url*/'tombol/button55.gif')" onMouseUp="FP_swapImg(0,0,/*id*/'img5',/*url*/'tombol/button54.gif')" fp-style="fp-btn: Metal Rectangle 8; fp-font-style: Bold; fp-font-color-normal: #008000; fp-font-color-hover: #0000FF; fp-font-color-press: #FF0000; fp-transparent: 1; fp-proportional: 0" fp-title="DATA PRIBADI"></a></p>
					<p style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px">
					<a href="siswa.php?data=absensi">
					<img border="0" id="img1" src="tombol/button10.gif" height="25" width="145" alt="DATA ABSENSI" fp-style="fp-btn: Metal Rectangle 8; fp-font-style: Bold; fp-font-color-normal: #008000; fp-font-color-hover: #0000FF; fp-font-color-press: #FF0000; fp-transparent: 1; fp-proportional: 0" fp-title="DATA ABSENSI" onMouseOver="FP_swapImg(1,0,/*id*/'img1',/*url*/'tombol/button11.gif')" onMouseOut="FP_swapImg(0,0,/*id*/'img1',/*url*/'tombol/button10.gif')" onMouseDown="FP_swapImg(1,0,/*id*/'img1',/*url*/'tombol/button12.gif')" onMouseUp="FP_swapImg(0,0,/*id*/'img1',/*url*/'tombol/button11.gif')"></a></p>
					<p style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px">
					<a href="siswa.php?data=nilai">
					<img border="0" id="img2" src="tombol/button33.gif" height="25" width="145" alt="DATA NILAI" fp-style="fp-btn: Metal Rectangle 8; fp-font-style: Bold; fp-font-color-normal: #008000; fp-font-color-hover: #0000FF; fp-font-color-press: #FF0000; fp-transparent: 1; fp-proportional: 0" fp-title="DATA NILAI" onMouseOver="FP_swapImg(1,0,/*id*/'img2',/*url*/'tombol/button34.gif')" onMouseOut="FP_swapImg(0,0,/*id*/'img2',/*url*/'tombol/button33.gif')" onMouseDown="FP_swapImg(1,0,/*id*/'img2',/*url*/'tombol/button35.gif')" onMouseUp="FP_swapImg(0,0,/*id*/'img2',/*url*/'tombol/button34.gif')"></a></p>
					<p style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px">
					<a href="siswa.php?data=artikel">
					<img border="0" id="img3" src="tombol/button37.gif" height="25" width="145" alt="KIRIM ARTIKEL" fp-style="fp-btn: Metal Rectangle 8; fp-font-style: Bold; fp-font-color-normal: #008000; fp-font-color-hover: #0000FF; fp-font-color-press: #FF0000; fp-transparent: 1; fp-proportional: 0" fp-title="KIRIM ARTIKEL" onMouseOver="FP_swapImg(1,0,/*id*/'img3',/*url*/'tombol/button38.gif')" onMouseOut="FP_swapImg(0,0,/*id*/'img3',/*url*/'tombol/button37.gif')" onMouseDown="FP_swapImg(1,0,/*id*/'img3',/*url*/'tombol/button39.gif')" onMouseUp="FP_swapImg(0,0,/*id*/'img3',/*url*/'tombol/button38.gif')"></a></p>
					<p style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px">
					<a href="siswa.php?data=password">
					<img border="0" id="img4" src="tombol/button4F.gif" height="25" width="145" alt="GANTI PASSWORD" fp-style="fp-btn: Metal Rectangle 8; fp-font-style: Bold; fp-font-color-normal: #008000; fp-font-color-hover: #0000FF; fp-font-color-press: #FF0000; fp-transparent: 1; fp-proportional: 0" fp-title="GANTI PASSWORD" onMouseOver="FP_swapImg(1,0,/*id*/'img4',/*url*/'tombol/button50.gif')" onMouseOut="FP_swapImg(0,0,/*id*/'img4',/*url*/'tombol/button4F.gif')" onMouseDown="FP_swapImg(1,0,/*id*/'img4',/*url*/'tombol/button51.gif')" onMouseUp="FP_swapImg(0,0,/*id*/'img4',/*url*/'tombol/button50.gif')"></a></p>
					<p style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px">
					<a href="keluar.php">
					<img border="0" id="img6" src="tombol/button6A.gif" height="25" width="145" alt="K E L U A R" onMouseOver="FP_swapImg(1,0,/*id*/'img6',/*url*/'tombol/button6B.gif')" onMouseOut="FP_swapImg(0,0,/*id*/'img6',/*url*/'tombol/button6A.gif')" onMouseDown="FP_swapImg(1,0,/*id*/'img6',/*url*/'tombol/button6C.gif')" onMouseUp="FP_swapImg(0,0,/*id*/'img6',/*url*/'tombol/button6B.gif')" fp-style="fp-btn: Metal Rectangle 8; fp-font-style: Bold; fp-font-color-normal: #008000; fp-font-color-hover: #0000FF; fp-font-color-press: #FF0000; fp-transparent: 1; fp-proportional: 0" fp-title="K E L U A R"></a></td>
					<td rowspan="2" valign="top">
					<?
					include"$data.php";
					?>
					</td>
				</tr>
				<tr>
					<td valign="bottom">
					<img border="0" src="images/bawah1.jpg" width="176" height="69"></td>
				</tr>
				<tr>
					<td colspan="2" background="images/bawah2.jpg">
					<img border="0" src="images/bawah2.jpg" width="22" height="78"></td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
</div>

</body>

</html>