<?php
//error_reporting(E_ALL); 
//ini_set("display_errors",1);

session_start();



if (!isset($_SESSION['userid'])) {?>
    <script>
    alert("로그인을 해주세요");
    location.href="./index.php";
    </script>
    <?php
}
else{
    ?>
    <input type="hidden" id="IDflag" value='1'>
    <?php
}

$password = "kyw@514514514";

$servername = "localhost";

$user = "root";

$DBname = "kimyeonwoo";


$connect = new mysqli($servername, $user, $password, $DBname);

if (!$connect)
 echo "<h2>서버와의 연결 실패</h2>";

$date=$_POST["date"];
$how=$_POST["how"];
$sessionid = $_SESSION['userid'];

$query = "insert into dates (sessionid, dates, feel) values ('$sessionid','$date','$how')";

if(mysqli_query($connect,$query))
{
   ?>
    <script>
    alert("게시글 등록이 완료되었습니다.");
    location.href="./index.php";
    </script>
    <?php
}
else
{
    ?>
    <script>
    alert("데이터베이스 연동을 실패하였습니다.");
    location.href="./index.php";
    </script>
    <?php
}


?>