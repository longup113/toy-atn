<?php
$servername="18.218.33.185";
$username ="thanhadmin";
$pass="511fEoN@";
$dbname="atntoy";

$conn=mysqli_connect($servername, $username, $pass, $dbname);

if(!$conn)
{
	die("ket noi bi loi: ".mysqli_connect_error());
}
else
{
	echo "";
}
?>