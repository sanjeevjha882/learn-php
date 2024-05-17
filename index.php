<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="index.php" method="get">
        <label>Username</label>
        <input type="text" name="username"> <br>
        <label>Password</label>
        <input type="text" name="password"> <br>
        <input type="submit" value="Log In">
    </form> -->
    <form action="index.php" method="post">
        <label>Username</label>
        <input type="text" name="username1"> <br>
        <label>Password:</label>
        <input type="password" name="password1"> <br>
        <input type="submit" value="Login">
    </form>
</body>


</html>

<?php

$name = "Sanjeev Jha";
$name1 = "Eklavya Rathi";

echo "Hello {$name} <br>";
$name = 1;
echo "Hello {$name} <br>";
echo "Hello {$name1} <br>";

$item = 2.5;
$price = 100.23;
echo "Total price is \$" . ($item * $price) . "<br>";

// $userName = $_GET["username"];
// $password = $_GET["password"];

// echo $userName . "<br>";
// echo $password;

$userName1 = $_POST["username1"];
$password1 = $_POST["password1"];

echo $userName1 . "<br>";
echo $password1;

?>