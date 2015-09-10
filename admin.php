<?php 
/*--------------------------------------------------------------------------------------------------
									MEDITATION WORKSHOP WEBSITE
								     		BUILD: x13701
								     
								       www.andresusanto.com
								     CREATED BY ANDRE SUSANTO
								             (C) 2013
----------------------------------------------------------------------------------------------------*/
session_start();
require_once 'cfg.php';
require_once 'function.php';

include("PHPExcel.php");

$request = $_SERVER['REQUEST_URI'];
$request = explode("/admin.php/", $request);
$ref = $_SERVER['HTTP_REFERER'];

$action = 0;
if (count($request) > 1) {
	$request = explode("/", $request[1]);
	switch($request[0]) {
		case 'write'	:	$action = 1; break;
		case 'manage'	:	$action = 2; break;
		case 'managek'	:	$action = 3; break;
		case 'slide'	:	$action = 4; break;
		case 'daftar'	:	$action = 5; break;
		case 'download'	:	$objReader = PHPExcel_IOFactory::createReader('Excel2007');
							$objPHPExcel = $objReader->load("pendaftar.tmp");
							$objPHPExcel->getProperties()->setCreator("WEB MW 2013")
														 ->setLastModifiedBy("WEB MW 2013")
														 ->setTitle("Daftar Pendaftar MW")
														 ->setSubject("Daftar Pendaftar MW")
														 ->setDescription("diprogram oleh Andre Susanto 2013")
														 ->setKeywords("MW 2013")
														 ->setCategory("MW 2013");
							$Data = db_fetchs("SELECT * FROM pendaftar ORDER BY ID ASC");
							$objPHPExcel->getActiveSheet()->insertNewRowBefore(8 , $Data[0] - 1);
							$conf = 0;
							$bconf = 0;
							
							for ($i=1; $i<=$Data[0];$i++) {
								$cur = 6 + $i;
								$objPHPExcel->getActiveSheet()->setCellValue('B' . $cur, $i);
								$objPHPExcel->getActiveSheet()->setCellValue('C' . $cur, $Data[$i][1]);
								$objPHPExcel->getActiveSheet()->setCellValue('D' . $cur, $Data[$i][2]);
								$objPHPExcel->getActiveSheet()->setCellValue('E' . $cur, $Data[$i][3] . " ");
								$objPHPExcel->getActiveSheet()->setCellValue('F' . $cur, $Data[$i][4]);
								if ($Data[$i][5] == "AKTIF") {
									$objPHPExcel->getActiveSheet()->setCellValue('G' . $cur, "Konfirm Email");
									$objPHPExcel->getActiveSheet()->getStyle("G".$cur)->getFont()->getColor()->applyFromArray(array("rgb" => "008000"));
									$conf++;
								}else{
									$objPHPExcel->getActiveSheet()->setCellValue('G' . $cur, "Belum Konfirm");
									$objPHPExcel->getActiveSheet()->getStyle("G".$cur)->getFont()->getColor()->applyFromArray(array("rgb" => "FF0000"));
									$bconf++;
								}
								
							}
							
							$cur = 8 + $Data[0];
							$objPHPExcel->getActiveSheet()->setCellValue('G' . $cur++, $Data[0]);
							$objPHPExcel->getActiveSheet()->setCellValue('G' . $cur++, $conf);
							$objPHPExcel->getActiveSheet()->setCellValue('G' . $cur++, $bconf);
							
							header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
							header('Content-Disposition: attachment;filename="Pendaftar MW 2013.xlsx"');
							header('Cache-Control: max-age=0');
							
							$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
							$objWriter->save('php://output');
							exit;
							break;
							
							$action = 6; break;
		case 'admin'	:	$action = 7; break;
		case 'login'	:	{if ($_POST['submit']) {
								$user = mysql_real_escape_string($_POST['user']);
								$pass = mysql_real_escape_string($_POST['pass']);
								$query = "SELECT * FROM admin WHERE user='$user' AND password='$pass'";
								if ($admin = db_fetch($query)) {
									$_SESSION['admin'] = $admin[0];
									header("location:admin.php");
								}else{
									$action = 8;
								}
							 }else {
							 	$action = 8;
								}}
							break;
		case 'out'		:	$_SESSION['admin'] = FALSE;
							session_destroy();
							$action = 8;
							break;
		case 'edit'		:	$action = 9; break;
		case 'edit2'	:	$action = 9; break;
		case 'delete'	:	$action = 2; 
							if (is_numeric($request[1])) {
								$query = "DELETE FROM `artikel` WHERE `artikel`.`id` = " . $request[1] . " LIMIT 1";
								if (db_execute($query))
									$msg = "<b>Artikel berhasil dihapus!</b><br/>";
							}
							break;
		case 'delete3'	:	$action = 7;
							if (is_numeric($request[1])) {
								$query = "DELETE FROM `admin` WHERE `id` = " . $request[1] . " LIMIT 1";
								if (db_execute($query))
									$msg = "<b>Admin berhasil dihapus!</b><br/>";
							}
							break;
		case 'delete4'	:	$action = 4;
							if (is_numeric($request[1])) {
								$query = "DELETE FROM `slider` WHERE `id` = " . $request[1] . " LIMIT 1";
								if (db_execute($query))
									$msg = "<b>Gambar berhasil dihapus!</b><br/>";
							}
							break;
		case 'delete5'	:	$action = 5; 
							if (is_numeric($request[1])) {
								$query = "DELETE FROM `pendaftar` WHERE `ID` = " . $request[1] . " LIMIT 1";
								if (db_execute($query))
									$msg = "<b>Gambar berhasil dihapus!</b><br/>";
							}
							break;
		default			:	$action = 0; break;
	}
}

if (!isset($_SESSION['admin'])) {
	$action = 8;
}else{
	if ($_SESSION['admin'] == FALSE)
		$action = 8;
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Meditation Workshop 2013</title>
<script type="text/javascript" src="<?php echo $sitepath; ?>tinymce/tinymce.min.js"></script>
<link rel="stylesheet" href="<?php echo $sitepath; ?>plupload/jquery.plupload.queue/css/jquery.plupload.queue.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $sitepath; ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $sitepath; ?>plupload/plupload.js"></script>
<script type="text/javascript" src="<?php echo $sitepath; ?>plupload/plupload.flash.js"></script>
<script type="text/javascript" src="<?php echo $sitepath; ?>plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>

<script>
tinymce.init({
    selector: "textarea",
    theme: "modern",
    width: 500,
    height: 300,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
 }); 
</script>

<style type="text/css">
body,td,th {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	color: #000;
}
body {
	background:url(<?php echo $sitepath; ?>images/background.jpg);
	background-size:100% 100%;
	background-color: #ADE9F4;
}
a:link {
	color: #03F;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #03F;
}
a:hover {
	text-decoration: underline;
	color: #03F;
}
a:active {
	text-decoration: none;
	color: #03F;
}
</style>
</head>

<body>
<?php if ($action) { ?><center><a href="<?php echo $sitepath; ?>admin.php">Home Admin</a></center><?php } ?>
<?php switch ($action) {
	case 0 : { ?>
<table style="width:100%; height:100%;"><tr><td valign="middle" align="center"><h1>Admin Area MW 2013</h1>
<p><a href="<?php echo $sitepath; ?>admin.php/write">Tulis Artikel Baru</a><br />
 <a href="<?php echo $sitepath; ?>admin.php/manage">Manage Artikel</a></p>
<p><a href="<?php echo $sitepath; ?>admin.php/managek">Manage Konten Website</a><br />
<a href="<?php echo $sitepath; ?>admin.php/slide">Manage Gambar Slide</a></p>
<p><a href="<?php echo $sitepath; ?>admin.php/daftar">Lihat Pendaftar</a><br />
<a href="<?php echo $sitepath; ?>admin.php/download">Download Pendaftar (excel)</a></p>
<p><a href="<?php echo $sitepath; ?>admin.php/admin">Manage Admin</a></p>
<p><a href="<?php echo $sitepath; ?>admin.php/out">Logout</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&copy; Divisi Kominfo MW 2013</p></td></tr></table>
<?php } break; 
case 1 : { ?>
<table style="width:100%; height:100%;"><tr><td valign="middle" align="center">
<h1>Tulis Artikel Baru</h1>
<?php if (isset($_POST['submit'])) {
	$last = db_fetch("SELECT * FROM artikel ORDER BY id DESC");
	$last = $last[0] + 1;
	$auth = $_SESSION['admin'];
	$tanggal = time();
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$query = "INSERT INTO `artikel` (
					`id` ,
					`author` ,
					`tanggal` ,
					`title` ,
					`content`
					)
					VALUES (
					'$last', '$auth', '$tanggal', '$judul', '$isi'
					);";
	if(db_execute($query)) {
		echo "<b>Artikel berhasil di posting!</b>";
	}else{
		echo "<b>Artikel gagal di posting!</b>";
	}
}?>
<form action="<?php echo $sitepath; ?>admin.php/write" method="post">
<b>JUDUL:</b><br/>
<input type="text" name="judul" style="width:500px;" /><br/>
<b>KONTEN:</b><br/>
<textarea name="isi" id="isi"></textarea><br/>
<input type="submit" name="submit" value="POST"/><input type="reset"/>
</form>
</td></tr></table>
<?php } break;
case 2 : {?> 
<table style="width:100%; height:100%;"><tr><td valign="middle" align="center">
<h1>Manage Artikel</h1><?php echo $msg; ?>
<table border='1' cellspacing="0" cellpadding="0" width="500">
<?php $artikel = db_fetchs("SELECT * FROM artikel"); 
for ($i = 1; $i <=$artikel[0]; $i++) {?>
<tr><td><?php echo $i; ?></td>
<td><?php echo $artikel[$i][3]; ?></td>
<td><a href="<?php echo $sitepath; ?>admin.php/edit/<?php echo $artikel[$i][0]; ?>">Edit</a></td>
<td><a href="<?php echo $sitepath; ?>admin.php/delete/<?php echo $artikel[$i][0]; ?>">Delete</a></td></tr>
<?php } ?>
</table>
</td></tr></table>
<?php } break;
case 3 : {?> 
<table style="width:100%; height:100%;"><tr><td valign="middle" align="center">
<h1>Manage Konten Web</h1>
<table border='1' cellspacing="0" cellpadding="0" width="500">
<tr><td>0</td>
<td>About MW</td>
<td><a href="<?php echo $sitepath; ?>admin.php/edit2/0">Edit</a></td></tr>
<tr><td>1</td>
<td>Profil Pembicara</td>
<td><a href="<?php echo $sitepath; ?>admin.php/edit2/1">Edit</a></td></tr>
<tr><td>2</td>
<td>Sejarah MW</td>
<td><a href="<?php echo $sitepath; ?>admin.php/edit2/2">Edit</a></td></tr>
<tr><td>3</td>
<td>Organigram MW</td>
<td><a href="<?php echo $sitepath; ?>admin.php/edit2/3">Edit</a></td></tr>
<tr><td>4</td>
<td>Cerita Singkat KMB ITB</td>
<td><a href="<?php echo $sitepath; ?>admin.php/edit2/4">Edit</a></td></tr>
<tr><td>5</td>
<td>Penduan Pendaftaran Online</td>
<td><a href="<?php echo $sitepath; ?>admin.php/edit2/7">Edit</a></td></tr>
<tr><td>6</td>
<td>Sponsorship</td>
<td><a href="<?php echo $sitepath; ?>admin.php/edit2/6">Edit</a></td></tr>

</table>
</td></tr></table>
<?php } break;
case 4 : {?>
<table style="width:100%; height:100%;"><tr><td valign="middle" align="center">
<h1>Upload Gambar</h1>
<?php if (isset ($_POST['uploader_count'])) {
	$count = $_POST['uploader_count'];
	if ($count) {
		$file[0] = $count;
		for ($i=0; $i<$count; $i++) {
			$last = db_fetch("SELECT * FROM slider ORDER BY id DESC");
			$last = $last[0] + 1;
			$name = $_POST['uploader_'.$i.'_tmpname'];
			$query = "INSERT INTO `slider` (
							`id` ,
							`nama`
							)
							VALUES (
							'$last', '$name'
							);";
			db_execute($query);
			
		}
		echo 'Upload Sukses!';
	}else{
		echo 'Tidak ada file yang diupload.';
	}
} ?>
<form id="upload" name="upload" method="post" action="<?php echo $sitepath; ?>admin.php/slide">
Pilih file yang ingin diupload dengan tombol Tambah File, lalu klik Mulai Upload untuk memulai upload file.
<div id="uploader" style="width: 500px; height: 230px;">Browser anda tidak memiliki Adobe Flash Player. Silakan install Adobe Flash Player untuk mengupload file.</div>
					<script type="text/javascript">
				$(function() {
					$("#uploader").pluploadQueue({
						runtimes : "flash",
						url : "<?php echo $sitepath; ?>dumper.php",
						unique_names: true,
						max_file_size : "100mb",
						chunk_size : "1mb",
						rename : true,
						sortable: true,
						max_file_count: 10,
						filters : [
							{title : "Semua file yg didukung", extensions : "jpeg,jpg,png"}
						],

						// Flash settings
						flash_swf_url : "<?php echo $sitepath; ?>plupload/plupload.flash.swf"
					});

					var uploader = $("#uploader").pluploadQueue();
					uploader.bind('StateChanged', function(up)
					{
						if (!(up.state == plupload.STARTED )) document.forms["upload"].submit();
					});
				});
</script>
</form>
<h1>Manage Gambar</h1>
<?php echo $msg; ?>
<?php $gambar = db_fetchs("SELECT * FROM slider ORDER BY id DESC");  ?>
<table border='1' cellspacing="0" cellpadding="0" width="500">
<?php 
for ($i = 1; $i<=$gambar[0]; $i++) {
?>
<tr><td><img src="<?php echo $sitepath; ?>slide/<?php echo $gambar[$i][1]; ?>"></td><td><a href="<?php echo $sitepath; ?>admin.php/delete4/<?php echo $gambar[$i][0]; ?>">Delete</a></td></tr>
<?php 
} ?>
</table>
</td></tr></table>
<?php } break;
case 5 : {?> <table style="width:100%; height:100%;"><tr><td valign="middle" align="center"> 
<h1>Daftar Pendaftar</h1>
<table border='1' cellspacing="0" cellpadding="0" width="850">
<?php $pendaftar = db_fetchs("SELECT * FROM pendaftar ORDER BY ID DESC"); 
for($i=1; $i<=$pendaftar[0]; $i++) { ?>
<tr><td><?php echo $i; ?></td>
<td><?php echo $pendaftar[$i][1]; ?></td>
<td><?php echo $pendaftar[$i][2]; ?></td>
<td><?php echo $pendaftar[$i][3]; ?></td>
<td><?php echo $pendaftar[$i][4]; ?></td>
<td><?php echo ($pendaftar[$i][5] == "AKTIF" ? "<b><font color='green'>KONFIRM EMAIL</font></b>" : "<b><font color='red'>BELUM KONFIRM</font></b>"); ?></td>
<td><a href="<?php echo $sitepath; ?>admin.php/delete5/<?php echo $pendaftar[$i][0]; ?>">HAPUS</a></td>
</tr>
<?php } ?>
</table>
</td></tr></table><?php } break;
case 6 : {?> <?php } break;
case 7 : { ?>  
<table style="width:100%; height:100%;"><tr><td valign="middle" align="center">
<h1>Register New Admin</h1>
<?php if (isset($_POST['submit'])) { 
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$id = db_fetch("SELECT * FROM admin ORDER BY id DESC");
	$id = $id[0] + 1;
	$query = "INSERT INTO `admin` (
				`id` ,
				`user` ,
				`password`
				)
				VALUES (
				'$id', '$user', '$pass'
				);";
	if(db_execute($query)) {
		echo '<b>Admin berhasil ditambah</b><br/>';
	}
}?>
<form action="<?php echo $sitepath; ?>admin.php/admin" method="post">
USER<br/>
<input type="text" name="user"/><br/>
PASS<br/>
<input type="password" name="pass"/><br/><br/>
<input type="submit" name="submit" value="Tambah"/>
</form>
<h1>Daftar Admin</h1>
<?php echo $msg; ?>
<table border='1' cellspacing="0" cellpadding="0" width="500">
<?php $admins = db_fetchs("SELECT * FROM admin ORDER BY id DESC"); 
for ($i = 1; $i <= $admins[0]; $i++) { ?>
<tr><td><?php echo $i; ?></td>
<td><?php echo $admins[$i][1]?></td>
<td><a href="<?php echo $sitepath; ?>admin.php/delete3/<?php echo $admins[$i][0]?>">Delete</a></td>
</tr>
<?php } ?>
</table>
</td></tr></table>
<?php } break;
case 8 : { ?>
<table style="width:100%; height:100%;"><tr><td valign="middle" align="center">
<h1>Login Admin</h1>
<form action="<?php echo $sitepath; ?>admin.php/login" method="post">
USER<br/>
<input type="text" name="user"/><br/>
PASS<br/>
<input type="password" name="pass"/><br/><br/>
<input type="submit" name="submit" value="Login"/>
</form>
</td></tr></table>
<?php } break;
case 9 : {?>
<table style="width:100%; height:100%;"><tr><td valign="middle" align="center">
<h1>Edit Konten</h1>
<?php 
	is_numeric($request[1]) ? $id = $request[1] : $id = 0;
	if ($request[0] == 'edit2') {
		$artikel = db_fetch("SELECT * FROM sistem WHERE id = $id");
		if ($artikel) {
			if (isset($_POST['submit'])) {
				$isi = $_POST['isi'];
				$query = "UPDATE `sistem` SET `konten` = '$isi' WHERE `id` = $id LIMIT 1 ;";
				if (db_execute($query)) {
					echo 'Artikel Berhasil di edit!';
				}
			}else{
				$judul = "";
				$isi = $artikel[1];
			}
		}else{
			echo 'Artikel tidak ditemukan!<br/>';
		}
	}else{
		$artikel = db_fetch("SELECT * FROM artikel WHERE id = $id");
		if ($artikel) {
			if (isset($_POST['submit'])) {
				$judul = $_POST['judul'];
				$isi = $_POST['isi'];
				$query = "UPDATE `artikel` SET `title` = '$judul', `content` = '$isi' WHERE `id` = $id LIMIT 1 ;";
				if (db_execute($query)) {
					echo 'Artikel Berhasil di edit!';
				}
			}else{
				$judul = $artikel[3];
				$isi = $artikel[4];
			}
		}else{
			echo 'Artikel tidak ditemukan!<br/>';
		}
	}
?>
<form action="<?php echo $sitepath; ?>admin.php/<?php echo $request[0]; ?>/<?php echo $request[1]; ?>" method="post">
<?php if ($request[0] != 'edit2') { ?><b>JUDUL:</b><br/>
<input type="text" name="judul" style="width:500px;" value="<?php echo $judul; ?>" /><br/> <?php } ?>
<b>KONTEN:</b><br/>
<textarea name="isi" id="isi"><?php echo $isi; ?></textarea><br/>
<input type="submit" name="submit" value="POST"/><input type="reset"/>
</form>
</td></tr></table>
<?php } break;

} ?>
</body>
</html>
