function check(){
    var userid = document.getElementById("date").value;
    var userpw = document.getElementById("how").value;

    var uid = '<%=(String)session.getAttribute("userid")%>';
    var avoid = /^[0-9]{2}\/[0-9]{2}\/[0-9]{2}$/;
    if(uid.length == 0)
    {
        alert("로그인이 필요합니다.");
        return 0;
    }
    else{
        alert(".");
    }
    if(userid.length < 8 && avoid.test(userid) == false ){
        alert("YY/MM/DD 형식으로 입력해주세요.");
    }
    var http = new XMLHttpRequest();
    
    var url = 'posting.php';
 
    var params = "date="+encodeURI(userid)+"&how="+encodeURI(userpw);
 
    http.open('post',url, true);
 
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    http.onload = function () {
        if (http.status === 200) {
            uploadButton.innerHTML = http.responseText;
        } else {
            alert("No Hack!");
        }
    };
 
    http.send(params);

    
    setTimeout(location.reload(),1000);
}