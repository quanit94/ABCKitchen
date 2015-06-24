// JavaScript Document
function create_obj(){
    name_app = navigator.appName;// Lấy tên của trình duyệt mà người dùng đang sử dụng.
    // Bắt đầu khởi tạo đối tượng tương ứng với các trình duyệt
    if(window.XMLHttpRequest){
        obj = new XMLHttpRequest();// Đối với các trình duyệt khác.
    }else{
        obj = new ActiveXObject("Microsoft.XMLHTTP");// Đối với trình duyệt IE. 
    }
    return obj;
}
var http = create_obj();
function getdata(id){// Gửi requess đến sever.
    http.open("get","index.php?page="+id,true);
    http.onreadystatechange = process;
    http.send();
    

}
function process(){// sever gửi trả response về cho máy.
    if(http.readyState == 4 && http.status == 200){
        kq = http.responseText;
        document.getElementById("content").innerHTML = kq;
        
    }
}


