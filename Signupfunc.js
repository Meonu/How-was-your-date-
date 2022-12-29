function check()
    {
        var userid = document.getElementById("userid").value;
        if(userid)
        {
            url = "idcheck.php?userid="+userid;
            window.open(url,"chkid","width = 400, height=200");
        }
        else
        {
            alert("아이디를 입력하세요.");
            return 0;
        }
    }
    function rightsign()
    {
        var userid = document.getElementById("decide_id").value;
        var userpw = document.getElementById("userpw").value;
        var pwconfirm = document.getElementById("pwconfirm").value;
        if(userid == '')
        {
            alert("아이디를 입력해주세요.");
            return false;
        }
        else if(length(userid) < 6)
        {
            alert("6자 이상 입력해주세요.");
            return false;
        }
        else if(userpw == '')
        {
            alert("비밀번호를 입력해주세요.");
            return false;
        }
        else if((userpw == pwconfirm) == false)
        {
            alert("비밀번호가 일치하지 않습니다.");
            return false;
        }
        else return true;
    }

   
