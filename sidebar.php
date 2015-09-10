<?php
/*--------------------------------------------------------------------------------------------------
									MEDITATION WORKSHOP WEBSITE
								     		BUILD: x13701
								     
								       www.andresusanto.com
								     CREATED BY ANDRE SUSANTO
								             (C) 2013
----------------------------------------------------------------------------------------------------*/
if (!isset($request)) die ("<b>Error: </b> File ini tidak bisa diakses secara langsung!");
?>
<div style="width:195px; height:315px; background:url(<?php echo $sitepath; ?>images/content_24.png);"><div style="padding-top:70px;text-align: center; color: #FFF;"><b><font size="+4"><?php $today = time(); $count = ($stamp - $today)/86400; if ($count >= 0) {echo ceil($count);}else{echo 0;} ?></font><br/>HARI LAGI</b></div>
		<div style="padding-top: 20px; text-align:center;">
		<div class="slideshow" style="position:absolute;">
		<?php  $gambar = db_fetchs("SELECT * FROM slider ORDER BY id DESC");
for ($i = 1; $i<=$gambar[0]; $i++) {
?>
<img src="<?php echo $sitepath; ?>slide/<?php echo $gambar[$i][1]; ?>" width="170" height="150"/>
<?php 
} ?></div></div>
			</div>