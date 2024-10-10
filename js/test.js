function testqq() {
    var re=/^[A-Za-z][a-z0-9]{4,}$/;
      var m=document.getElementById('messagevali');
      var sss=document.getElementById('send');
var a=document.getElementsByClassName('pas');
if (re.test(a[0].value)) {
  
  m.textContent="passowrd is valid";
  m.style.color="green";
  
}
else{

m.textContent="passowrd must content least 5 characters ";
m.style.color="red";
}

}