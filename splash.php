<?php 
/*--------------------------------------------------------------------------------------------------
									MEDITATION WORKSHOP WEBSITE
								     		BUILD: x13701
								     
								       www.andresusanto.com
								     CREATED BY ANDRE SUSANTO
								             (C) 2013
----------------------------------------------------------------------------------------------------*/
if (!isset($request)) die ("<b>Error: </b> File ini tidak bisa diakses secara langsung!"); ?>
<html>
<head>
<title>Home :: Meditation Workshop 2013</title>
<script src="<?php echo $sitepath; ?>js/jquery.js"></script>
<script src="<?php echo $sitepath; ?>js/jquery.transit.min.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
#loader { display: none; }
#panel { display: none; }

html {
	background-color: #ADE9F4;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
</style>
<script type="text/javascript">
$(document).ready(function() {
	$("#loader").fadeIn(500);
});

$(window).load(function () {
  		$("#loader").hide();
        $("#panel").fadeIn(2000);	
		$("a.sb").click(function(event){
			event.preventDefault();
			linkLocation = this.href;
			$("#panel").fadeOut(1000, redirectPage);
		});
	 
		function redirectPage() {
			window.location = linkLocation;
		}		
});
</script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div style="display:none;"><img src="<?php echo $sitepath; ?>images/splash_11_h.png" width="0" height="0"/></div>
<div style="width:100%; height:100%; background:url(<?php echo $sitepath; ?>images/background.jpg); background-size:100% 100%; z-index:0; position:absolute;" id="mainbg"></div>
<noscript>
<h1>Please enable javascript to use this site!</h1></noscript>
<table width="100%" height="100%" id="loader" style="z-index:1; position:absolute;"><tr>
  <td align="center" valign="middle"><img src="<?php echo $sitepath; ?>images/loading.gif" width="16" height="16"/>&nbsp;&nbsp;<b>Loading, Please Wait...</b></td></tr></table>
<table width="100%" height="100%" id="panel" style="z-index:2; position:absolute;">
<tr><td align="center" valign="middle">
<table id="Table_01" width="465" height="422" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<img src="<?php echo $sitepath; ?>images/splash_01.png" width="127" height="96" alt=""></td>
		<td colspan="5">
			<img src="<?php echo $sitepath; ?>images/splash_02.png" width="224" height="96" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/splash_03.png" width="114" height="96" alt=""></td>
	</tr>
	<tr>
		<td rowspan="4">
			<img src="<?php echo $sitepath; ?>images/splash_04.png" width="127" height="145" alt=""></td>
		<td colspan="5">
			<img src="<?php echo $sitepath; ?>images/splash_05.png" width="224" height="77" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/splash_06.png" width="114" height="77" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="3">
			<img src="<?php echo $sitepath; ?>images/splash_07.png" width="70" height="68" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/splash_08.png" width="69" height="24" alt=""></td>
		<td colspan="2" rowspan="3">
			<img src="<?php echo $sitepath; ?>images/splash_09.png" width="85" height="68" alt=""></td>
		<td rowspan="3">
			<img src="<?php echo $sitepath; ?>images/splash_10.png" width="114" height="68" alt=""></td>
	</tr>
	<tr>
		<td><a href="<?php echo $sitepath; ?>index.php/main" class="sb"><img src="<?php echo $sitepath; ?>images/splash_11.png" width="69" height="11" alt="" onMouseOver="this.src='<?php echo $sitepath; ?>images/splash_11_h.png'" onMouseOut="this.src='<?php echo $sitepath; ?>images/splash_11.png'"></a></td>
	</tr>
	<tr>
		<td>
			<img src="<?php echo $sitepath; ?>images/splash_12.png" width="69" height="33" alt=""></td>
	</tr>
	<tr>
		<td colspan="7">
			<img src="<?php echo $sitepath; ?>images/splash_13.png" width="465" height="67" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="3">
			<img src="<?php echo $sitepath; ?>images/splash_14.png" width="164" height="113" alt=""></td>
		<td colspan="3">
			<img src="<?php echo $sitepath; ?>images/splash_15.png" width="142" height="30" alt=""></td>
		<td colspan="2" rowspan="3">
			<img src="<?php echo $sitepath; ?>images/splash_16.png" width="159" height="113" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<a href="http://kmb.unit.itb.ac.id" target="_blank"><img src="<?php echo $sitepath; ?>images/splash_17.png" width="142" height="62" alt="KMB Dhammañano ITB" id="kmb" border="0"></a>
   <script>
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
	</tr>
	<tr>
		<td colspan="3">
			<img src="<?php echo $sitepath; ?>images/splash_18.png" width="142" height="21" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="127" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="37" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="33" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="69" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="40" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="45" height="1" alt=""></td>
		<td>
			<img src="<?php echo $sitepath; ?>images/spacer.gif" width="114" height="1" alt=""></td>
	</tr>
</table></td></tr></table>

</body>
</html>