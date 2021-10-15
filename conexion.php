<?php
function Conectarse()
{
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "obligatoriobd";
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
return $link;
}
?>
