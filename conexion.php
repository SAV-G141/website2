<?php

	function conexion(){

	$host = "host=postgres.railway.internal";
	$port = "port=5432";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=TbqErEHCSXEKxHqmiHSImMlSclVVXOQg";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>