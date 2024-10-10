var b=document.getElementById('b');
var img1=document.getElementById('aa');
var img2=document.getElementById('b');
var img3=document.getElementById('c');
var img4=document.getElementById('d');
var img5=document.getElementById('e');
var img6=document.getElementById('f');
var img7=document.getElementById('g');
var img8=document.getElementById('h');
var img9=document.getElementById('i');
var img10=document.getElementById('j');
 var check1;
function checked(check){
check1=check;


}

// دالة_التحريك_لليمين
function incr(){

if (img1.offsetLeft>=0) {
    img1.style.left="-2800px";
    img2.style.left="-2800px";
    img3.style.left="-2800px";
    img4.style.left="-2800px";
    img5.style.left="-2800px";
    img6.style.left="-2800px";
    img7.style.left="-2800px";
    img8.style.left="-2800px";
    img9.style.left="-2800px";
    img10.style.left="-2800px";
}
else{
    
img1.style.left=img1.offsetLeft+400+"px";
img2.style.left=img2.offsetLeft+400+"px";
img3.style.left=img3.offsetLeft+400+"px";
img4.style.left=img4.offsetLeft+400+"px";
img5.style.left=img5.offsetLeft+400+"px";
img6.style.left=img6.offsetLeft+400+"px";
img7.style.left=img7.offsetLeft+400+"px";
img8.style.left=img8.offsetLeft+400+"px";
img9.style.left=img9.offsetLeft+400+"px";
img10.style.left=img10.offsetLeft+400+"px";
}

}
// setTimeout(incr,300);
// دالة_التحريك_لليسار
function decr(){
if (img10.offsetLeft<=-2800) {
    img1.style.left="0px";
    img2.style.left="0px";
    img3.style.left="0px";
    img4.style.left="0px";
    img5.style.left="0px";
    img6.style.left="0px";
    img7.style.left="0px";
    img8.style.left="0px";
    img9.style.left="0px";
    img10.style.left="0px";
}
else{ 
img1.style.left=img1.offsetLeft-400+"px";
img2.style.left=img2.offsetLeft-400+"px";
img3.style.left=img3.offsetLeft-400+"px";
img4.style.left=img4.offsetLeft-400+"px";
img5.style.left=img5.offsetLeft-400+"px";
img6.style.left=img6.offsetLeft-400+"px";
img7.style.left=img7.offsetLeft-400+"px";
img8.style.left=img8.offsetLeft-400+"px";
img9.style.left=img9.offsetLeft-400+"px";
img10.style.left=img10.offsetLeft-400+"px";
}

}


// 

var x=document.getElementById('namecar');
var y=document.getElementById('model');
var z=document.getElementById('price');
var date=document.getElementById('date');
var imgbuy=document.getElementById('imgbuy');
var go=document.getElementById('boxbuy');
var goo=document.getElementById('nav');
var su=document.getElementById('su');
var pre=document.getElementById('pre');
var btnbuy= document.getElementsByClassName('btnbuy');


btnbuy[0].addEventListener('click',function(){

    if (check1==true) {
        
 pre.textContent="      ENGINEiFORCE MAX TwinTurbo V6 HybridHORSEPOWER437 HPTORQUE583 Lb.-Ft.MAXIMUM TOWING CAPACITYUp to 9520 Lbs. *SEATING CAPACITYUp to 8 FUEL EFFICIENCYUp to EPA-Est. 22 MPG Combined Rating *";   
su.textContent=x.value="TOYOTA";
y.value="PRADO";
z.value="63000$";
date.value=new Date();
imgbuy.src="../image/toyota1.png";
go.scrollIntoView();

    }
    else{

    
window.scrollTo(0,0);
loginbtn();
    }
});
btnbuy[1].addEventListener('click',function(){
    
    if (check1==true) {
        pre.textContent="      ENGINEiFORCE MAX TwinTurbo V6 HybridHORSEPOWER437 HPTORQUE583 Lb.-Ft.MAXIMUM TOWING CAPACITYUp to 9520 Lbs. *SEATING CAPACITYUp to 8 FUEL EFFICIENCYUp to EPA-Est. 22 MPG Combined Rating *";   

su.textContent=x.value="TESLA";
y.value="SL";
z.value="100000$";
date.value=new Date();
imgbuy.src="../image/tesla.png";
go.scrollIntoView();
    }
    else{

    
window.scrollTo(0,0);
loginbtn();
    }
});
btnbuy[2].addEventListener('click',function(){
    
    if (check1==true) {
        pre.textContent="      ENGINEiFORCE MAX TwinTurbo V6 HybridHORSEPOWER437 HPTORQUE583 Lb.-Ft.MAXIMUM TOWING CAPACITYUp to 9520 Lbs. *SEATING CAPACITYUp to 8 FUEL EFFICIENCYUp to EPA-Est. 22 MPG Combined Rating *";   

su.textContent=x.value="ROLLS ROYCE";
y.value="PHANTOM";
z.value="150000$";
date.value=new Date();
imgbuy.src="../image/rolls.png";
go.scrollIntoView();
    }
    else{

    
window.scrollTo(0,0);
loginbtn();
    }
});
btnbuy[3].addEventListener('click',function(){
    
    if (check1==true) {
        pre.textContent="      ENGINEiFORCE MAX TwinTurbo V6 HybridHORSEPOWER437 HPTORQUE583 Lb.-Ft.MAXIMUM TOWING CAPACITYUp to 9520 Lbs. *SEATING CAPACITYUp to 8 FUEL EFFICIENCYUp to EPA-Est. 22 MPG Combined Rating *";   

su.textContent=x.value="TOYOTA";
y.value="GRANVIA";
z.value="20000$";
date.value=new Date();
imgbuy.src="../image/granvia-lexury-image.png";
go.scrollIntoView();
    }
    else{

    
window.scrollTo(0,0);
loginbtn();
    }
});
btnbuy[4].addEventListener('click',function(){
    
    if (check1==true) {
        pre.textContent="      ENGINEiFORCE MAX TwinTurbo V6 HybridHORSEPOWER437 HPTORQUE583 Lb.-Ft.MAXIMUM TOWING CAPACITYUp to 9520 Lbs. *SEATING CAPACITYUp to 8 FUEL EFFICIENCYUp to EPA-Est. 22 MPG Combined Rating *";   

su.textContent=x.value="LAMBORGHINI";
y.value="AVENTADOR";
z.value="3000000$";
date.value=new Date();
imgbuy.src="../image/LAMBORGHINI.png";
go.scrollIntoView();
    }
    else{

    
window.scrollTo(0,0);
loginbtn();
    }
});
btnbuy[5].addEventListener('click',function(){
    
    if (check1==true) {
         pre.textContent="      ENGINEiFORCE MAX TwinTurbo V6 HybridHORSEPOWER437 HPTORQUE583 Lb.-Ft.MAXIMUM TOWING CAPACITYUp to 9520 Lbs. *SEATING CAPACITYUp to 8 FUEL EFFICIENCYUp to EPA-Est. 22 MPG Combined Rating *";   

su.textContent=x.value="NISSAN";
y.value="ARMADA";
z.value="50000$";
date.value=new Date();
imgbuy.src="../image/Nissan.png";
go.scrollIntoView();
  }
    else{

    
window.scrollTo(0,0);
loginbtn();
    }
});
btnbuy[6].addEventListener('click',function(){
    
    if (check1==true) {
         pre.textContent="      ENGINEiFORCE MAX TwinTurbo V6 HybridHORSEPOWER437 HPTORQUE583 Lb.-Ft.MAXIMUM TOWING CAPACITYUp to 9520 Lbs. *SEATING CAPACITYUp to 8 FUEL EFFICIENCYUp to EPA-Est. 22 MPG Combined Rating *";   

su.textContent=x.value="GMC";
y.value="YUKON";
z.value="97000$";
date.value=new Date();
imgbuy.src="../image/GMC.png";
go.scrollIntoView();
  }
    else{

    
window.scrollTo(0,0);
loginbtn();
    }
});
btnbuy[7].addEventListener('click',function(){
    
    if (check1==true) {
         pre.textContent="      ENGINEiFORCE MAX TwinTurbo V6 HybridHORSEPOWER437 HPTORQUE583 Lb.-Ft.MAXIMUM TOWING CAPACITYUp to 9520 Lbs. *SEATING CAPACITYUp to 8 FUEL EFFICIENCYUp to EPA-Est. 22 MPG Combined Rating *";   

su.textContent=x.value="BUGATTI";
y.value="VEYRON";
z.value="250000$";
date.value=new Date();
imgbuy.src="../image/bugatti.png";
go.scrollIntoView();
  }
    else{

    
window.scrollTo(0,0);
loginbtn();
    }
});
btnbuy[8].addEventListener('click',function(){
    
    if (check1==true) {
         pre.textContent="      ENGINEiFORCE MAX TwinTurbo V6 HybridHORSEPOWER437 HPTORQUE583 Lb.-Ft.MAXIMUM TOWING CAPACITYUp to 9520 Lbs. *SEATING CAPACITYUp to 8 FUEL EFFICIENCYUp to EPA-Est. 22 MPG Combined Rating *";   

su.textContent=x.value="MERCEDES";
y.value="G class";
z.value="350000$";
date.value=new Date();
imgbuy.src="../image/MERCEDES.png";
go.scrollIntoView();
  }
    else{

    
window.scrollTo(0,0);
loginbtn();
    }
});
btnbuy[9].addEventListener('click',function(){
    
    if (check1==true) {
         pre.textContent="      ENGINEiFORCE MAX TwinTurbo V6 HybridHORSEPOWER437 HPTORQUE583 Lb.-Ft.MAXIMUM TOWING CAPACITYUp to 9520 Lbs. *SEATING CAPACITYUp to 8 FUEL EFFICIENCYUp to EPA-Est. 22 MPG Combined Rating *";   

su.textContent=x.value="BMW";
y.value="PRADO";
z.value="76000$";
date.value=new Date();
imgbuy.src="../image/bmw.png";
go.scrollIntoView();
}
else{


window.scrollTo(0,0);
loginbtn();
}
});



