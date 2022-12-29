<?php
//error_reporting(E_ALL); 
//ini_set("display_errors",1);

$password = "kyw@514514514";

$servername = "localhost";

$user = "root";

$DBname = "databases";


$connect = new mysqli($servername, $user, $password, $DBname);

if (!$connect)
 echo "<h2>서버와의 연결 실패</h2>";
else
 echo "<h2>연결 성공!</h2>";

$date=$_POST["date"];
$how=$_POST["how"];

$query = "insert into dates (dates, feel)  values ('$date','$how')";



?>