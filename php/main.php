<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/loginsignup.css">
<link rel="stylesheet" href="../css/image.css">
<link rel="stylesheet" href="../css/buy.css">
<link rel="stylesheet" href="../css/developers.css">

<script src="../js/main.js"></script>
</head>
<body>
<!-- <img src="../image/٢٠٢٤٠٤٣٠_١٦٤٨٤٣.png" alt="" id="backgroundimg"> -->
   
<div class="f">

</div>
<div class="ff">
<h4 style="    position: absolute;left: 15%;font-size: xx-large;top: -45%;color: white;">Choose Your Favorite Car</h4>
</div>
    <nav id="nav">
   <!-- زر تسجيل الدخول -->
      <button id="btnl" onclick="loginbtn()" class="btn1">Login</button>

    <!-- زر تسجيل الخروج -->

      <form action="#" method="post">
<input type="submit" id="btn2" onclick="logoutbtn()" class="btn2" name="btn2" value="logout">
</form>

<div id="logo"></div>      <h1 id="car">CAR SHOWROOM</h1>
        <a href="#">HOME</a>
        <a href="#cat">CARS</a>
        <a href="#boxbuy">PAYMENT</a>
        <a href="#developers">DEVELOPERS</a>
    </nav>
    
  <h3 id="error"></h3>
  <!-- زر اعدة المحاولة -->
  <button id="try" onclick="loginbtn()" class="try"></button>
<div id="main" class="main">
    <div class="a" id="a"></div>
<div class="box-btn">
    <button id="btn" class="btn-login" onclick="login()"><b>LOGIN</b></button>
    <button id="btns" class="btn-sign" onclick="sign()"><b>SIGN UP</b></button>
</div>


<!-- تسجيل الدخول -->
<!-- تسجيل الدخول -->

<form action="#" method="post" id="login" class="log">
<div class="box-input">
<h1 >login</h1>
<label for="user">user name</label>
<input type="text" id="user" name="user" required placeholder="enter user name">
<label for="passowrd">passowrd</label>
<input type="passowrd" id="passowrd" name="passowrd" required placeholder="enter passowrd">
<input type="submit" value="LOGIN" id="send" name="login">
</div>
</form>


<!-- تسجيل مستحدم جديد -->
<!-- تسجيل مستحدم جديد -->

<form action="#" method="post" id="sign" class="sign">
<div class="box-input">
<h1>sign up</h1>
<label for="name">full name</label>
<input type="text" id="name" name="name" required placeholder="enter full name">
<label for="">user name</label>
<input type="text" id="user" name="user" required placeholder="enter user name">
<label for="">passowrd</label>
<input type="passowrd" id="passowrd" name="passowrd" required class="pas" onkeyup="testqq()">
<div style="color:white;" class="messagevali" id="messagevali"></div>
<input type="submit" value="SIGN UP" id="send" name="sign">

</div>
</form>
</div>

<script src="../js/login.js"></script>


<!-- 
فئة السيارات
فئة السيارات -->

  <form action="#" method="post">

<div class="box-cat" id="cat">

<div>
  <div class="box-img" onclick="boximg()" id="aa">
      <h1 id="3">TOYOTA</h1>
      <img id="img1" src="../image/toyota1.png" alt="">
      <p>
      ENGINE
i-FORCE MAX Twin-Turbo V6 Hybrid
HORSEPOWER
437 HP
TORQUE
583 Lb.-Ft.
MAXIMUM TOWING CAPACITY
Up to 9520 Lbs. *
SEATING CAPACITY
Up to 8
FUEL EFFICIENCY
Up to EPA-Est. 22 MPG Combined Rating *
        <h4><ins>630000$</ins></h4>
</p>
      <input type="button" value="buy" id="buy"  name="buy" class="btnbuy">
      </div>
</div>

<div>
  <div class="box-img"  onclick="boximg()" id="b">
      <h1 id="3">TESLA</h1>
      <img id="img2" src="../image/tesla.png" alt="">
      <p>
       p      ENGINE
i-FORCE MAX Twin-Turbo V6 Hybrid
HORSEPOWER
437 HP
TORQUE
583 Lb.-Ft.
MAXIMUM TOWING CAPACITY
Up to 9520 Lbs. *
SEATING CAPACITY
Up to 8
FUEL EFFICIENCY
Up to EPA-Est. 22 MPG Combined Rating *
        <h4><ins>100000$</ins></h4>
      </p>
      <input type="button"" value="buy" id="buy"  name="buy" class="btnbuy">
      </div>

</div>
    <div>
      <div class="box-img"  onclick="boximg()" id="c">
          <h1 id="3">ROLLS ROYCE</h1>
          <img id="img3" src="../image/rolls.png" alt="">
          <p>
       p      ENGINE
i-FORCE MAX Twin-Turbo V6 Hybrid
HORSEPOWER
437 HP
TORQUE
583 Lb.-Ft.
MAXIMUM TOWING CAPACITY
Up to 9520 Lbs. *
SEATING CAPACITY
Up to 8
FUEL EFFICIENCY
Up to EPA-Est. 22 MPG Combined Rating *
        <h4><ins>150000$</ins></h4>
      </p>
          <input type="button"" value="buy" id="buy"  name="buy" class="btnbuy">
      </div>
    </div>
 
    <div>
         
      <div class="box-img"  onclick="boximg()" id="d">
          <h1 id="3">TOYOTA</h1>
          <img id="img4" src="../image/granvia-lexury-image.png" alt="">
          <p>
       p      ENGINE
i-FORCE MAX Twin-Turbo V6 Hybrid
HORSEPOWER
437 HP
TORQUE
583 Lb.-Ft.
MAXIMUM TOWING CAPACITY
Up to 9520 Lbs. *
SEATING CAPACITY
Up to 8
FUEL EFFICIENCY
Up to EPA-Est. 22 MPG Combined Rating *
        <h4><ins>20000$</ins></h4>
      </p>
          <input type="button"" value="buy" id="buy"  name="buy" class="btnbuy">
      </div>
    </div>

 <div>
  <div class="box-img"  onclick="boximg()" id="e">
      <h1 id="3">LAMBORGHINI</h1>
      <img id="img5" src="../image/LAMBORGHINI.png" alt="">
           <p>
       p      ENGINE
i-FORCE MAX Twin-Turbo V6 Hybrid
HORSEPOWER
437 HP
TORQUE
583 Lb.-Ft.
MAXIMUM TOWING CAPACITY
Up to 9520 Lbs. *
SEATING CAPACITY
Up to 8
FUEL EFFICIENCY
Up to EPA-Est. 22 MPG Combined Rating *
        <h4><ins>3000000$</ins></h4>
      </p>
      <input type="button"" value="buy" id="buy"  name="buy" class="btnbuy">
  </div>
 </div>
 <div>
  <div class="box-img"  onclick="boximg()" id="f">
      <h1 id="3">NISSAN</h1>
      <img id="img6" src="../image/Nissan.png" alt="">
           <p>
       p      ENGINE
i-FORCE MAX Twin-Turbo V6 Hybrid
HORSEPOWER
437 HP
TORQUE
583 Lb.-Ft.
MAXIMUM TOWING CAPACITY
Up to 9520 Lbs. *
SEATING CAPACITY
Up to 8
FUEL EFFICIENCY
Up to EPA-Est. 22 MPG Combined Rating *
        <h4><ins>50000$</ins></h4>
      </p>
      <input type="button"" value="buy" id="buy"  name="buy" class="btnbuy">
  </div>
 </div>
 <div>
  <div class="box-img"  onclick="boximg()" id="g">
      <h1 id="3">GMC</h1>
      <img id="img7" src="../image/GMC.png" alt="">
           <p>
       p      ENGINE
i-FORCE MAX Twin-Turbo V6 Hybrid
HORSEPOWER
437 HP
TORQUE
583 Lb.-Ft.
MAXIMUM TOWING CAPACITY
Up to 9520 Lbs. *
SEATING CAPACITY
Up to 8
FUEL EFFICIENCY
Up to EPA-Est. 22 MPG Combined Rating *
        <h4><ins>97000$</ins></h4>
      </p>
      <input type="button"" value="buy" id="buy"  name="buy" class="btnbuy">
  </div>
 </div>
 <div>
  <div class="box-img"  onclick="boximg()" id="h">
      <h1 id="3">BUGATTI</h1>
      <img id="img8" src="../image/bugatti.png" alt="">
           <p>
       p      ENGINE
i-FORCE MAX Twin-Turbo V6 Hybrid
HORSEPOWER
437 HP
TORQUE
583 Lb.-Ft.
MAXIMUM TOWING CAPACITY
Up to 9520 Lbs. *
SEATING CAPACITY
Up to 8
FUEL EFFICIENCY
Up to EPA-Est. 22 MPG Combined Rating *
        <h4><ins>250000$</ins></h4>
      </p>
      <input type="button"" value="buy" id="buy"  name="buy"  class="btnbuy">
  </div>
 </div>
 <div>
  <div class="box-img"  onclick="boximg()" id="i">
      <h1 id="3">MERCEDES</h1>
      <img id="img9" src="../image/MERCEDES.png" alt="">
           <p>
       p      ENGINE
i-FORCE MAX Twin-Turbo V6 Hybrid
HORSEPOWER
437 HP
TORQUE
583 Lb.-Ft.
MAXIMUM TOWING CAPACITY
Up to 9520 Lbs. *
SEATING CAPACITY
Up to 8
FUEL EFFICIENCY
Up to EPA-Est. 22 MPG Combined Rating *
        <h4><ins>350000$</ins></h4>
      </p>
      <input type="button"" value="buy" id="buy"  name="buy" class="btnbuy">
  </div>
 </div>
 <div>
  <div class="box-img"  onclick="boximg()" id="j">
      <h1 id="3">BMW</h1>
      <img id="img10" src="../image/bmw.png" alt="">
      <p>
       p      ENGINE
i-FORCE MAX Twin-Turbo V6 Hybrid
HORSEPOWER
437 HP
TORQUE
583 Lb.-Ft.
MAXIMUM TOWING CAPACITY
Up to 9520 Lbs. *
SEATING CAPACITY
Up to 8
FUEL EFFICIENCY
Up to EPA-Est. 22 MPG Combined Rating *
        <h4><ins>76000$</ins></h4>
      </p>
      <input type="button" value="buy" id="buy" name="buy" class="btnbuy">
  </div>
 </div>
      
      </div>

  </form>

  <button id="b1" onclick="incr()"></button>
    <button id="b2" onclick="decr()"></button>
  

<!-- بيانات الدفع -->

<form action="#" method="post" class="cont">
<div class="box-buy" id="boxbuy">
<label for=""><b>Name Car</b></label>
<input type="text" id="namecar" name="namecar" readonly required>
<label for=""><b>Model</b></label>
<input type="text" id="model" name="model" readonly required>
<label for=""><b>Price</b></label>
<input type="text" id="price" name="price" readonly required>
<label for=""><b>Payment</b></label>
<select name="pay" id="pay">
<option value="kuraimi bank">kuraimi bank</option>
<option value="jawali">jawali</option>
</select>
<label for=""><b>Account Number</b></label>

<input type="text" id="account" name="account"required>
<label for=""><b>Date</b></label>
<input type="text" id="date" name="date" readonly>
<label for=""><b>Note</b></label>
<input type="text" id="note" name="note">

<input type="submit" value="send" name="paybuy" id="paybuy" >

</div>
<div id="asd">
  <h1 id="su"></h1>
  <img src="" alt="" class="img-buy" id="imgbuy">
  <p id="pre" style="       color: white;
    left: -30%;
    width: 10%;
    position: relative;
    top: 20%;"></p>
</div>
</form>    
<div class="developers" ID="developers">
<div class="dev" style="border-left:none;">
<div class="imgdev">
  <img src="../image/man1.png" alt="" style="    height: 140%;width: 75%;top: -70%;left: -15%;">
  <h1>Amjad</h1>
<h4>Abdul hakim</h4>
</div>


</div>

<div class="dev">

<div class="imgdev">
  <img src="../image/man2.png" alt="">
  <h1>Jaber</h1>
<h4>Mahuob</h4>
</div>

</div>

<div class="dev">

<div class="imgdev">
  <img src="../image/man3.png" alt="">
  <h1>Osama</h1>
  <h4>Mohammed</h4>
</div>

</div>

<div class="dev">

<div class="imgdev">
  <img src="../image/man44.png" alt="">
  <h1>Maymon</h1>
<h4>Aqlan</h4>
</div>

</div>





</div>

<div class="socialmedia" >
  <img src="../image/whatsapp_480px.png" alt="" class="social">


<img src="../image/telegram_app_144px.png" alt=""class="social">
<img src="../image/Facebook_512px.png" alt=""class="social">

<img src="../image/Instagram_512px.png" alt=""class="social">

</div>
<div class="socialname">
<h1 class="namesoci" style="display:none;left:30px; background:#00ff09; transition: 1s;">whatsap</h1>
<h1 class="namesoci" style="display:none;left:200px;background:#0079ff;">telegram</h1>
<h1 class="namesoci" style="display:none;left:340px;background:blue;">facebook</h1>
<h1 class="namesoci" style="display:none;left:500px;background:#b500b5;">instgram</h1>


</div>



<script src="../js/developers.js"></script>
<script src="../js/main.js"></script>
<script src="../js/test.js"></script>


<?php

include("../php/connection.php");
if (isset($_SESSION["name"])) {
 include('../php/session.php');
//  header('Location:../php/session.php');

}
if (isset($_SESSION["name"])) {
  // include('../php/session.php');
  header('Location:../php/image.php');
 
 }



// الاتصال بقاعدة البيانات
// الاتصال بقاعدة البيانات




// التحقق من تم التسجيل مسبقا
// التحقق من تم التسجيل مسبقا



//   الخروج من الحساب
//   الخروج من الحساب

if (isset($_POST['btn2'])) {
    $_SESSION=[];
  session_unset();
  session_destroy();
  $aa='false';
echo "<script>checked($aa)</script>";
  echo "<script> var e= document.getElementById('error');e.textContent=''; </script>";  
  echo '<style type="text/css">';
  echo '.btn2{ z-index: 99;}';
  echo '.btn1{ z-index: 100;}';

  echo "<script>logoutbtn();</script>";
  
  header("location:".$_SERVER['REQUEST_URI']);
exit();
  
  }



//   تسجيل الدخول

if (isset($_POST['login'])) {

include('../php/login.php');

}



// مستخدم جديد
// مستخدم جديد
if (isset($_POST['sign'])) {

include("../php/signup.php");

}

// معلومات شراء سيارة  

if (isset($_POST['paybuy'])) {

include("../php/payment.php");

}
function test_input($data){
  $data=trim($data);
  $data =stripslashes($data);
  $data=htmlspecialchars($data);
return $data;
}



?>

</body>
</html>