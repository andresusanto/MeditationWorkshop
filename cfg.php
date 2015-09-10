<?php
/*--------------------------------------------------------------------------------------------------
									MEDITATION WORKSHOP WEBSITE
								     		BUILD: x13701
								     
								       www.andresusanto.com
								     CREATED BY ANDRE SUSANTO
								             (C) 2013
----------------------------------------------------------------------------------------------------*/

//  DATABASE SETTING
$dbuser 	= "a3083686_mw";
$dbpassword = "MargarethaLeo1";
$dbhost		= "mysql1.000webhost.com";
$dbname		= "a3083686_mw";
//  END DATABASE SETTING

// GENERAL SETTING
$sitepath		= "http://www.meditationworkshop.tk/";
$emailsystem 	= "admin@meditationworkshop.tk";
$emailname 		= "Meditation Workshop";
$stamp 			= 1382803993;

// END SETTING



// DONT EDIT AFTER THIS LINE
// -------------------------

if (!$dbc = @mysql_connect($dbhost, $dbuser, $dbpassword)) die("Can't Connect To Database! Please Contact System Administrator (admin@andresusanto.com)");
if (!mysql_select_db($dbname,$dbc)) die("Can't Open The Database! Please Contact System Administrator (admin@andresusanto.com)");
