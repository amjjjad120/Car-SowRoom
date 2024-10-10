<?php
// Start the session
session_start();




// Check if user is logged in
if (isset($_SESSION['user_id'])) {
    header("Location: insert.php");
    exit;
}

// Display dashboard content

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <a href="login.html">clic her to login</a>
</head>
<body>
    
</body>
</html>