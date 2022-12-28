<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to KYW world</title>
    <script src="loginfunc.js"></script>
</head>
<body>
   
    <?php if(isset($_SESSION['userid']))
    {
       ?>
       <script> 
       alert("이미 로그인중 입니다.")
       location.href = "./index.php";
        </script>
    <?php
    }
    else
    {?>
    
    <div id="login_wrap">
        <div>
            <fieldset style = "width: 150px;">
            <legend><h1>Login</h1></legend> 
            <form action="./login_chk.php" method="post" id="login_form" onsubmit="return right_login();">
                <p><input type="text" name="userid" id="userid" placeholder="ID"></p>
                <p><input type="password" name="userpw" id="userpw" placeholder="Password"></p>
                <p class="forgetpw"><a href="./changepw.html">Forget Password?</a></p>
                <p><input type="submit" value="Login" id="login_btn"></p>
            </form>
            <p class="regist_btn">Not a member?<br><a href="./SignUp.html">Sign Up</a></p>
            </fieldset>
        </div>
    </div>
    <?php } ?>
</body>