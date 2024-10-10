<?php

$name=test_input($_POST['name']);
$user=test_input($_POST['user']);
$passowrd=test_input($_POST['passowrd']);
if (!preg_match("/^[A-Za-z][A-Za-z0-9]{4,}$/",$passowrd)){
    echo "<script> var e= document.getElementById('error');e.textContent='error'; </script>";  
}
else{
$sql ="INSERT INTO users(name,user,passowrd) VALUES('$name','$user','$passowrd')";
$query =mysqli_query($conn,$sql);
if ($query) {
    $new1 ="The Registration Is Done";
echo "<script> var e= document.getElementById('error');e.textContent='$new1'; </script>";  
echo "<script>s();</script>"; 
} 
}
?>