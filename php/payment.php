<?php

$namecar=test_input($_POST['namecar']);
$model=test_input($_POST['model']);
$price=test_input($_POST['price']);
$pay=test_input($_POST['pay']);
$accountnumber=test_input($_POST['account']);
$date=test_input($_POST['date']);
$note=test_input($_POST['note']);
$userid=$_SESSION["id_user"];
if ($namecar=="") {
    echo "<script>loginbtn();</script>";
}
else {


$sqli ="INSERT INTO `order`( namecar, model, price, pay,accountnumber, date1,note,id_user) VALUES ('$namecar','$model','$price','$pay','$accountnumber','$date','$note','$userid')";
$queryi=mysqli_query($conn,$sqli);
if ($queryi) {


}
}
?>