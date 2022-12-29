<?php 
session_start();
?>
<?php
        $password = "kyw@514514514";
        
        $servername = "localhost";
    
        $user = "root";
    
        $DBname = "databases";
     
    
        $connect = new mysqli($servername, $user, $password, $DBname);
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
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
    <div>
    <form method="POST">
        <input type="text" name="date" id="date" placeholder="22/12/31" pattern="[A-Za-z0-9/]{2,6}" required>
        <select action="./posting.php" name="how" id="how">
            <option value="">기분 선택</option>
            <option value="gut">gut</option>
            <option value="Sehr gut">Sehr gut</option>
            <option value="Super Sehr gut">Super Sehr gut</option>
            <option value="sad">sad</option>
            <option value="mad">mad</option>
        </select>
    </form>
    </div>
    <button type="submit">Save</button>
    <?php 
     $sql = mysqli_query($connect,"select * from dates where sessionid = {$_SESSION['userid']}");
     while($board = $sql -> fetch_array())
     {
     ?>
     <table>
         <tr>
             <td width = "100"><?php echo $board['date']; ?></td>
             <td width = "100"><?php echo $board['how'];?></a></td>
         </tr>
     </table>
     <?php } ?>

    
</body>
</html>