<?php


$user=mysqli_real_escape_string($conn,$_POST['user']);
$passowrd=mysqli_real_escape_string($conn,$_POST['passowrd']);


  $sql ="SELECT *FROM users where user='$user' and passowrd ='$passowrd'";
  $query =mysqli_query($conn,$sql);
  if (mysqli_num_rows($query)>0) 
  { 
          $user =mysqli_fetch_assoc($query);

    $_SESSION["name"]=$user['name'];
    $_SESSION["id_user"]=$user['id_user'];
    $aa='true';
    echo "<script>checked($aa)</script>";
    $new1 ="Welcome"." ".$_SESSION["name"];
 echo "<script> var e= document.getElementById('error');e.textContent='$new1'; </script>";  
 
 echo '<style type="text/css">';
 echo '.btn1{ z-index: 99;}';
 echo '.btn2{ z-index: 100;}';


  // header('Location: ../php/main.php');
   
  }
  else
{
$new ="The passowrd incorrect";
echo "<script> var e= document.getElementById('error');e.textContent='$new'; </script>";   
echo "<script> var t= document.getElementById('try');t.style.display='flex' </script>";   
  }
  header('Location: ../php/main.php');
?>