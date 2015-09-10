<?php
/*--------------------------------------------------------------------------------------------------
									MEDITATION WORKSHOP WEBSITE
								     		BUILD: x13701
								     
								       www.andresusanto.com
								     CREATED BY ANDRE SUSANTO
								             (C) 2013
----------------------------------------------------------------------------------------------------*/

require_once 'cfg.php';
require_once 'function.php';

$request = $_SERVER['REQUEST_URI'];
$request = explode("/index.php/", $request);

$ref = explode("/",$_SERVER['HTTP_REFERER']);
$site = explode("/", $sitepath);

if ($ref[2] == $site[2] && stripos($_SERVER['HTTP_REFERER'], "index.php/") !== FALSE)
	$byref = 1;

if (count($request) > 1) {
	$request = explode("/", $request[1]);
	switch ($request[0]) {
		case 'main'		:	include("home.php"); break;
		case 'about'	:	include("about.php"); break;
		case 'sponsor'	:	include("sponsor.php"); break;
		case 'read'		:	include("read.php"); break;
		case 'reg'		:	include("reg.php"); break;
		default			:	include("splash.php"); break;
	}
}else{
	include("splash.php");
}
?>