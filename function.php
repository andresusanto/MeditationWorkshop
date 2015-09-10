<?php
/*--------------------------------------------------------------------------------------------------
									MEDITATION WORKSHOP WEBSITE
								     		BUILD: x13701
								     
								       www.andresusanto.com
								     CREATED BY ANDRE SUSANTO
								             (C) 2013
----------------------------------------------------------------------------------------------------*/


// MYSQL DATABASE FUNCTION

function db_fetch ($SQLquery){
	global $dbc;
	$query = mysql_query($SQLquery, $dbc);
	return mysql_fetch_row($query);
}

function db_fetchs ($SQLquery){
	global $dbc;
	$query = mysql_query($SQLquery, $dbc);
	$jumlah = mysql_num_rows($query);
	if ($jumlah > 1) {
		$result[0] = $jumlah;
		for($i=1; $i<=$jumlah; $i++){
			$result[$i] =  mysql_fetch_row($query);
		}
		return $result;
	}elseif ($jumlah == 0){
		return 0;
	}else{
		$result[0] = 1;
		$result[1] =  mysql_fetch_row($query);
		return $result;
	}
}

function db_num ($SQLquery){
	global $dbc;
	$query = mysql_query($SQLquery, $dbc);
	return mysql_num_rows($query);
}

function db_execute ($SQLquery){
	global $dbc;
	mysql_query($SQLquery, $dbc);

	if(mysql_affected_rows($dbc)>0){
		return true;
	}else{
		return false;
	}
}

function getUserbyID ($id) {
	$user = db_fetch("SELECT * FROM admin WHERE id='$id'");
	return $user[1];
}