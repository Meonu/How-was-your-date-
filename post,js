function check(){
    var userid = document.getElementById("date").value;
    var userpw = document.getElementById("how").value;

    var http = new XMLHttpRequest();
 
    var url = 'posting.php';
 
    var params = "date="+encodeURI(userid)+"&how="+encodeURI(userpw);
 
    http.open('post',url, true);
 
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 
    http.send(params);

    location.reload();
}