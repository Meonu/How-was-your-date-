<?php


error_reporting(E_ALL);
ini_set("display_errors",1);
    $password = "kyw@514514514";
    
    $servername = "localhost";

    $user = "root";

    $DBname = "kimyeonwoo";
 

    $connect = new mysqli($servername, $user, $password, $DBname);

    if (!$connect)
     echo "<h2>서버와의 연결 실패</h2>";


$userid = htmlentities($_POST["userid"]);

$userpw = htmlentities($_POST["userpw"]);

$sql = "SELECT * FROM mem_info where userid='$userid'";
$result = mysqli_fetch_array(mysqli_query($connect, $sql));

$hashedPassword = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
$sql = "insert into mem_info(userid,userpw) VALUES('$userid','$hashedPassword')";


   
    if($result){
        echo "<span style='color:red;'>$userid</span> 는 중복된 아이디입니다.";
        ?><p><input type=button value="다른 ID 사용" onclick="location.href='./SignUp.html'"></p><?php
    }
    else if(mysqli_query($connect,$sql) === false)
    {
        echo "오류가 발생했습니다.";
        return false;
    }
    else
    {   
    ?>
        <script>
        alert("회원가입이 완료되었습니다.");
        //location.href="./loginpage.php";
        </script>   
    <?php
    }

?>  
