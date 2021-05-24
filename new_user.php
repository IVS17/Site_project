
<?php
$servername = "localhost";
$username = "root";
$password = "123666";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Деревянные деревяшки</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body bgcolor="#1f1f1f" charset="utf-8" background="pictures/back.jpg" >

<div class="dropdown">
  <button class="dropbtn">Menu <img src="pictures/user_pict.png" height="40px" align="right"> </button>
  <div class="dropdown-content">
    <a href="main_registration.php">Account</a>
    <a href="main_registration.php">Registration</a>
  </div>
</div>

<?php


#$logget=GET[];
#$passget=GET[];
$conn1 = new mysqli($servername, $username, $password, "baza_2");
$sql = "SELECT * FROM `user` WHERE login=$logget and password=$passget ";
$resultus = $conn1->query($sql);
if($resultus>0){
  $adress='reg_page.php';
}
else{ 
  $adress='index.php';
}
$press= <<< DIV
<div> <input value="Зарегистрироваться" type="button" onclick="location.href=$adress"></div>
DIV;
?>
<div> <input value="Зарегистрироваться" type="button" onclick="location.href='reg_page.php'"></div>
</body>
</html>