<?php

    
if (isset($_SESSION['name'])) {
  $aa='true';
echo "<script>checked($aa)</script>";
  $username1=$_SESSION["name"];
  $new1 ="Welcome"." ".$username1;
 echo "<script> var e= document.getElementById('error');e.textContent='$new1'; </script>";  
 
 echo '<style type="text/css">';
 echo '.btn1{ z-index: 99;}';
 echo '.btn2{ z-index: 100;}';

 
 
 


   
    
}




    
?>