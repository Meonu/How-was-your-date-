function check(){
    var userid = document.getElementById("date").value;
    var userpw = document.getElementById("how").value;

    var avoid = /^[0-9]{2}\/[0-9]{2}\/[0-9]{2}$/;
   

    if(document.getElementById("IDflag").value.length == 0)
    {
        alert("로그인이 필요합니다.");
        return 0;
    }
    
    if(userid.length < 8 && avoid.test(userid) == false ){
        alert("YY/MM/DD 형식으로 입력해주세요.");
    }
    var http = new XMLHttpRequest();
    
    var url = 'posting.php';
 
    var params = "sessionid="+encodeURI(document.getElementById("IDflag").value)+"&date="+encodeURI(userid)+"&how="+encodeURI(userpw);
 
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


}