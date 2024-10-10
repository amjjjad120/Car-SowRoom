var flogin=document.getElementById('login');
var fsign=document.getElementById('sign');
var a=document.getElementById("a");  
var aa=document.getElementById("btn1");  
// var btns= document.getElementById("btns");
function login(){
    fsign.style.left="450px";
    flogin.style.left="50px";
    a.style.left="100px";


}

function sign(){
a.style.left="212px";
fsign.style.left="50px";
flogin.style.left="450px";

}
function s(){
    setTimeout(loginbtn,3000);

}

var xuu= document.getElementById('main');
var e= document.getElementById('error');
var t= document.getElementById('try');
function loginbtn(){
    window.scrollTo(0,0);
    xuu.style.display="flex";
e.textContent="";
t.style.display="none";
   

}
function logoutbtn(){
    checked(false);
    var ee= document.getElementById('error');
    ee.textContent='you are logged out';
    window.open("../php/main.php");
// alert(check1);

}
