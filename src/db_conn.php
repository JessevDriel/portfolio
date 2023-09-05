<?php  

$sname = "dbs11956597";
$uname = "dbu1594078";
$password = "jessevandriel";

$db_name = "test_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}