<?php
/*--------------------------------------------------------------------------------------------------
									MEDITATION WORKSHOP WEBSITE
								     		BUILD: x13701
								     
								       www.andresusanto.com
								     CREATED BY ANDRE SUSANTO
								             (C) 2013
----------------------------------------------------------------------------------------------------*/
if (!isset($request)) die ("<b>Error: </b> File ini tidak bisa diakses secara langsung!");

switch ($request[1]) {
	case '1'	:	$opt = 1; $title = "Profil Pembicara"; break;
	case '2'	:	$opt = 2; $title = "Sejarah MW"; break;
	case '3'	:	$opt = 3; $title = "Organigram MW 2013"; break;
	case '4'	:	$opt = 4; $title = "Cerita Singkat KMB ITB"; break;
	default		:	$opt = 0; $title = "Tentang MW"; break;
}
?>

<html>
<head>
<title><?php echo $title; ?> :: Meditation Workshop 2013</title>
<script src="<?php echo $sitepath; ?>js/jquery.js"></script>
<script src="<?php echo $sitepath; ?>js/jquery.transit.min.js"></script>
<script src="<?php echo $sitepath; ?>js/jquery.cycle.all.js"></script>
<link href="<?php echo $sitepath; ?>jquery.mCustomScrollbar.css" rel="stylesheet" />
<link href="<?php echo $sitepath; ?>style.css" rel="stylesheet" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<?php if ($byref) { ?>
	#panel2  { display: none; }
<?php }else{ ?>
#panel { display: none; }
<?php } ?>
</style>
<script type="text/javascript">
$(document).ready(function() {
	$("#loader<?php if ($byref) echo '2'; ?>").fadeIn(500);	
});

$(window).load(function () {
		$('.slideshow').cycle({
			fx: 'toss',
			delay:  -4000
		});
  		$("#loader<?php if ($byref) echo '2'; ?>").hide();
        $("#panel<?php if ($byref) echo '2'; ?>").fadeIn(2000);	
		var p = $("#about");
		var offset = p.offset();
		$("#menu1").offset({ top: offset.top + 51, left: offset.left});
		var p = $("#reg");
		var offset = p.offset();
		$("#menu2").offset({ top: offset.top + 51, left: offset.left});
		$("a.sb").click(function(event){
			event.preventDefault();
			linkLocation = this.href;
			$("body").fadeOut(1000, redirectPage);
		});
		function redirectPage() {
			window.location = linkLocation;
		}		
});
</script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div style="display:none;"><img src="<?php echo $sitepath; ?>images/menu-top.png" width="0" height="0"/>
<img src="<?php echo $sitepath; ?>images/menu-mid.png" width="0" height="0"/>
<img src="<?php echo $sitepath; ?>images/menu-bottom.png" width="0" height="0"/></div>
<div style="width:100%; height:100%; background:url(<?php echo $sitepath; ?>images/background.jpg); background-size:100% 100%; z-index:0; position:absolute;" id="mainbg"></div>
<noscript>
<h1>Please enable javascript to use this site!</h1></noscript>
<div id="menu1" style="width:205px; display: none; position:absolute; z-index: 999;"><div style="background:url(<?php echo $sitepath; ?>images/menu-top.png); background-repeat:no-repeat; width: 205px; height: 9px;">&nbsp;</div><div style="background:url(<?php echo $sitepath; ?>images/menu-mid.png); width:205px; background-repeat:repeat-y; padding-left:4px;"><span class="menu"><a style="width:90%;" href="<?php echo $sitepath; ?>index.php/about/1">Profil Pembicara</a>
<a style="width:90%;" href="<?php echo $sitepath; ?>index.php/about/2">Sejarah MW</a>
<a style="width:90%;" href="<?php echo $sitepath; ?>index.php/about/3">Organigram MW 2013</a>
<hr style="margin-left:0; width:93%;"/>
<a style="width:90%;" href="<?php echo $sitepath; ?>index.php/about/4">Cerita Singkat KMB ITB</a></span></div><div style="background:url(<?php echo $sitepath; ?>images/menu-bottom.png); background-repeat:no-repeat; width: 205px; height:15px;"></div></div>

<div id="menu2" style="width:205px; display: none; position:absolute; z-index: 999;"><div style="background:url(<?php echo $sitepath; ?>images/menu-top.png); background-repeat:no-repeat; width: 205px; height: 9px;">&nbsp;</div><div style="background:url(<?php echo $sitepath; ?>images/menu-mid.png); width:205px; background-repeat:repeat-y; padding-left:4px;"><span class="menu"><a style="width:90%;" href="<?php echo $sitepath; ?>index.php/reg">Pendaftaran Online</a>
<a style="width:90%;" href="<?php echo $sitepath; ?>index.php/reg/info">Panduan Pendaftaran Online</a></span></div><div style="background:url(<?php echo $sitepath; ?>images/menu-bottom.png); background-repeat:no-repeat; width: 205px; height:15px;"></div></div>


<table width="100%" height="100%" id="loader" style="z-index:1; position:absolute;"><tr>
  <td align="center" valign="middle"><img src="<?php echo $sitepath; ?>images/loading.gif" width="16" height="16"/>&nbsp;&nbsp;<b>Loading, Please Wait...</b></td></tr></table>
<table width="100%" height="100%" id="panel" style="z-index:2; position:absolute;" class="bodycontent">
<tr><td align="center" valign="middle">
<table id="Table_01" width="954" height="666" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<img src="<?php echo $sitepath; ?>images/content_01.png" width="65" height="114" alt=""></td>
		<td colspan="2">
			<img src="<?php echo $sitepath; ?>images/content_02.png" width="133" height="114" alt=""></td>
		<td colspan="2">
			<img src="<?php echo $sitepath; ?>images/content_03.png" width="135" height="114" alt=""></td>
		<td colspan="4">
			<img src="<?php echo $sitepath; ?>images/content_04.png" width="133" height="114" alt=""></td>
		<td colspan="3">
			<img src="<?php echo $sitepath; ?>images/content_05.png" width="134" height="114" alt=""></td>
		<td colspan="2">
			<img src="<?php echo $sitepath; ?>images/content_06.png" width="67" height="114" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/content_07.png" width="35" height="114" alt=""></td>
		<td colspan="2">
			<img src="<?php echo $sitepath; ?>images/content_08.png" width="131" height="114" alt=""></td>
		<td colspan="2">
			<img src="<?php echo $sitepath; ?>images/content_09.png" width="120" height="114" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="1" height="114" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="<?php echo $sitepath; ?>images/content_10.png" width="65" height="51" alt=""></td>
		<td colspan="2">
			<a href="<?php echo $sitepath; ?>index.php/main"><img src="<?php echo $sitepath; ?>images/content_11.png" width="133" height="51" alt=""></a></td>
		<td colspan="2">
			<a href="<?php echo $sitepath; ?>index.php/about"><img id="about" src="<?php echo $sitepath; ?>images/content_12.png" width="135" height="51" alt=""></a><script>
$(function() {
var masta, viz;

$("#about").mouseenter(
	function(){
		masta = false;
		$("#menu2").hide();
		if (!viz) {
			$("#menu1").slideDown("fast");
			viz = true;
		}
		return false;
});

$("#about").mouseleave(
	function(){
	setTimeout(function() {
    if (!masta && viz) {
		$("#menu1").slideUp("fast");
		viz = false;
	}
},600);
 return false;
});


$("#menu1").mouseenter(
	function(){
	viz = true;
	masta = true;
	return false;
});

$("#menu1").mouseleave(
	function(){
	setTimeout(function() {
    $("#menu1").slideUp("fast");
	viz = false;
},600);
	return false;
});

	
});
</script></td>
		<td colspan="4">
			<a href="<?php echo $sitepath; ?>index.php/reg"><img id="reg" src="<?php echo $sitepath; ?>images/content_13.png" width="133" height="51" alt=""></a>
			 <script>
$(function() {
var maste, vis;

$("#reg").mouseenter(
	function(){
		maste = false;
		$("#menu1").hide();
		if (!vis) {
			$("#menu2").slideDown("fast");
			vis = true;
		}
		return false;
});

$("#reg").mouseleave(
	function(){
	setTimeout(function() {
    if (!maste && vis) {
		$("#menu2").slideUp("fast");
		vis = false;
	}
},600);
 return false;
});


$("#menu2").mouseenter(
	function(){
	vis = true;
	maste = true;
	return false;
});

$("#menu2").mouseleave(
	function(){
	setTimeout(function() {
    $("#menu2").slideUp("fast");
	vis = false;
},600);
	return false;
});

	
});
</script></td>
		<td colspan="3">
			<a href="<?php echo $sitepath; ?>index.php/sponsor"><img src="<?php echo $sitepath; ?>images/content_14.png" width="134" height="51" alt=""></a></td>
		<td colspan="3">
			<img src="<?php echo $sitepath; ?>images/content_15.png" width="102" height="51" alt=""></td>
		<td colspan="2">
			<img src="<?php echo $sitepath; ?>images/content_16.png" width="131" height="51" alt=""></td>
		<td colspan="2">
			<img src="<?php echo $sitepath; ?>images/content_17.png" width="120" height="51" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="1" height="51" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="<?php echo $sitepath; ?>images/content_18.png" width="65" height="148" alt=""></td>
		<td colspan="12">
			<img src="<?php echo $sitepath; ?>images/content_19.png" width="583" height="15" alt=""></td>
		<td rowspan="10">
			<img src="<?php echo $sitepath; ?>images/content_20.png" width="19" height="500" alt=""></td>
		<td colspan="4">
			<img src="<?php echo $sitepath; ?>images/content_21.png" width="195" height="15" alt=""></td>
		<td rowspan="2">
			<img src="<?php echo $sitepath; ?>images/content_22.png" width="91" height="130" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="1" height="15" alt=""></td>
	</tr>
	<tr>
		<td colspan="12" rowspan="5">
			<div id="content_2" class="content">
			<table width="100%" height="100%" id="loader2"><tr>
  <td align="center" valign="middle"><img src="<?php echo $sitepath; ?>images/loading.gif" width="16" height="16"/>&nbsp;&nbsp;<b>Loading, Please Wait...</b></td></tr></table>
			<div id="panel2">
	<?php 
	$artikel = db_fetch("SELECT * FROM sistem WHERE id ='$opt'"); 
	if ($artikel) { ?>
		<font size="+1"><?php echo $title; ?></font>
		<br/>
		<?php echo $artikel[1]; ?>
	<?php }else{ ?>
		<font size="+1">404</font>
		<p><i>Maaf, halaman yang anda cari tidak ditemukan</i></p>
	<?php } ?>
	</div>
	</div>
	<script src="<?php echo $sitepath; ?>jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
		(function($){
			$(window).load(function(){
				$("#content_2").mCustomScrollbar({
					scrollButtons:{
						enable:true
					},
					theme:"dark"
				});
			});
		})(jQuery);
	</script>
			</td>
		<td colspan="4" rowspan="4"><?php include("sidebar.php"); ?></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="1" height="115" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="<?php echo $sitepath; ?>images/content_25.png" width="91" height="150" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="1" height="18" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="<?php echo $sitepath; ?>images/content_26.png" width="65" height="182" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="1" height="132" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="<?php echo $sitepath; ?>images/content_27.png" width="91" height="75" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="1" height="50" alt=""></td>
	</tr>
	<tr>
		<td rowspan="5">
			<img src="<?php echo $sitepath; ?>images/content_28.png" width="65" height="170" alt=""></td>
		<td colspan="2" rowspan="5">
			<img src="<?php echo $sitepath; ?>images/content_29.png" width="97" height="170" alt=""></td>
		<td colspan="2" rowspan="5">
			<img src="<?php echo $sitepath; ?>images/content_30.png" width="98" height="170" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="1" height="25" alt=""></td>
	</tr>
	<tr>
		<td rowspan="4">
			<img src="<?php echo $sitepath; ?>images/content_31.png" width="67" height="145" alt=""></td>
		<td colspan="2" rowspan="4">
			<img src="<?php echo $sitepath; ?>images/content_32.png" width="113" height="145" alt=""></td>
		<td colspan="2" rowspan="4">
			<img src="<?php echo $sitepath; ?>images/content_33.png" width="120" height="145" alt=""></td>
		<td rowspan="4">
			<img src="<?php echo $sitepath; ?>images/content_34.png" width="77" height="145" alt=""></td>
		<td colspan="4">
			<img src="<?php echo $sitepath; ?>images/content_35.png" width="91" height="84" alt=""></td>
		<td colspan="2" rowspan="4">
			<img src="<?php echo $sitepath; ?>images/content_36.png" width="115" height="145" alt=""></td>
		<td rowspan="4">
			<img src="<?php echo $sitepath; ?>images/content_37.png" width="91" height="145" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="1" height="84" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="<?php echo $sitepath; ?>images/content_38.png" width="20" height="46" alt=""></td>
		<td colspan="2">
			<a href="http://kmb.unit.itb.ac.id" target="_blank"><img id="kmb" src="<?php echo $sitepath; ?>images/content_39.png" width="42" height="46" alt="KMB Dhammañano ITB"></a><script>
$(function() {
$("#kmb").mouseenter(
function(){
 $("#kmb").transition({ scale: 1.2 });
});

$("#kmb").mouseleave(
function(){
 $("#kmb").transition({ scale: 1 });
});
});
</script></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/content_40.png" width="29" height="46" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="1" height="46" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="<?php echo $sitepath; ?>images/content_41.png" width="91" height="9" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="1" height="9" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="<?php echo $sitepath; ?>images/content_42.png" width="91" height="6" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="1" height="6" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="65" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="67" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="66" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="47" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="88" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="32" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="77" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="20" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="4" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="38" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="29" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="67" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="48" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="19" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="35" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="62" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="69" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="29" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="91" height="1" alt=""></td>
		<td></td>
	</tr>
</table></td></tr></table>

</body>
</html>