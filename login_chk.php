<?php

$connect = new mysqli("localhost","root","kyw@514514514","kimyeonwoo");


$userid = htmlentities($_POST["userid"]);
$userpw = htmlentities($_POST["userpw"]);

$idsql = "SELECT * FROM mem_info where userid='$userid'";
$idresult = mysqli_query($connect, $idsql); //id 검증

$row = mysqli_fetch_array($idresult);
$hashedPassword = $row['userpw'];


$passwordResult = password_verify($userpw, $hashedPassword);

if ($passwordResult === true) {
    session_start();
    $_SESSION['userid'] = $row['userid'];
    
?>
    <script>
        alert("로그인에 성공하였습니다.")
        location.href = "./index.php";
    </script>
<?php
} else {
    // 로그인 실패 
?>
    <script>
        alert("아이디 또는 비밀번호가 일치하지 않습니다.");
        location.href = "./loginpage.php";
    </script>
<?php
}
?>