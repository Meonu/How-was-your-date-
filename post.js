function check(){
    var userid = document.getElementById("date").value;
    var userpw = document.getElementById("how").value;

    var avoid = /^[0-9]{2}\/[0-9]{2}\/[0-9]{2}$/;

    if(userid.length < 8 && avoid.test(userid) == false ){
        alert("22/12/25 형식으로 입력해주세요.");
    }
    var http = new XMLHttpRequest();
    
    var url = 'posting.php';
 
    var params = "date="+encodeURI(userid)+"&how="+encodeURI(userpw);
 
    http.open('post',url, true);
 
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 
    http.send(params);

    
    setTimeout(location.reload(),1000);
}