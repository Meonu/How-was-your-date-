<?php 
session_start();
//error_reporting(E_ALL);
//ini_set("display_errors",1);
?>
<?php
        $password = "kyw@514514514";
        
        $servername = "localhost";
    
        $user = "root";
    
        $DBname = "kimyeonwoo";
     
    
        $connect = new mysqli($servername, $user, $password, $DBname);
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src=./post.js></script>
</head>
<body>
        <?php
         $userid = $_SESSION['userid'];
        if (isset($_SESSION['userid'])) {
            echo "{$_SESSION['userid']}님 환영합니다  ";
           
         ?>
            <li>
                <a href="./logout.php">로그아웃</a>
            </li>
        <?php
        } else {
        ?>
            <li>
                <a href="./loginpage.php">회원가입 </a>
            </li>

            <li>
                <a href="./loginpage.php">로그인</a>
            </li><?php
        }?>
    <h1>How was your Date?</h1>  
    <h5>개발자의 역량 부족으로 save이후 새로고침을 해주셔야 보입니다.</h5>
    <input type="hidden" id="IDflag" value="<?php echo $userid ?>">

    <div>

        <input type="text" name="date" id="date" placeholder="22/12/31" pattern="[A-Za-z0-9/]{5,15}" required>
        <select name="how" id="how">
            <option value="soso">기분 선택</option>
            <option value="gut">gut</option>
            <option value="Sehr gut">Sehr gut</option>
            <option value="Super Sehr gut">Super Sehr gut</option>
            <option value="sad">sad</option>
            <option value="mad">mad</option>
        </select>
        <button onclick=check()>Save</button>
    </div>
    <table class="list-table">
            <thead>
            <tr>
                <th width="100">날짜</th>
                <th width="100">기분</th>
            </tr>
            </thead>
        </table>
    
    <?php 
    if (isset($_SESSION['userid'])){
     $sql = mysqli_query($connect,"select * from dates where sessionid='$userid'");
     while($board = $sql -> fetch_array())
     {
     ?>
     <table>
         <tr>
             <td width = "100"><?php echo $board['dates']; ?></td>
             <td width = "100"><?php echo $board['feel'];?></td>
         </tr>
     </table>
     <?php }
     } ?>

    
</body>
</html>