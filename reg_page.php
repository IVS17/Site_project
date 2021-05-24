
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
    <style type="text/css">
      .grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: #cfa306;
  padding: 10px;
}





.grid-item {
  background-color: #d8a903;
  border: 2px solid rgba(0, 0, 0, 0.8);
  border-radius: 5px;
  padding: 20px;
  font-size: 30px;
  text-align: center;
}

.item_name { grid-area: header;border: 2px solid rgba(0, 0, 0, 0.8);
  border-radius: 5px; }
.item_pict { grid-area: menu;border: 2px solid rgba(0, 0, 0, 0.8);
  border-radius: 5px; }
.item_mater { grid-area: main;border: 2px solid rgba(0, 0, 0, 0.8);
  border-radius: 5px; }
.item_date { grid-area: right; border: 2px solid rgba(0, 0, 0, 0.8);
  border-radius: 5px;}
.item_user { grid-area: footer; border: 2px solid rgba(0, 0, 0, 0.8);
  border-radius: 5px;}

.product-box {
  display: grid;
  grid-template-areas:
    'header header header header header header'
    'menu main main main right right'
    'menu footer footer footer footer footer';

background-color: #c34d0a;
  border: 2px solid rgba(0, 0, 0, 0.8);
  border-radius: 5px;
  padding: 20px;
  font-size: 30px;
  grid-gap: 10px;
}

.product-box > div {
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}



    </style>
  </head>
  <body bgcolor="#1f1f1f" charset="utf-8" background="pictures/back.jpg" >

<div class="dropdown">
  <button class="dropbtn">Menu <img src="pictures/user_pict.png"height="40px" align="right"> </button>
  <div class="dropdown-content">
    <a href="new_user.php">Account</a>
    <a href="main_registration.php">Registration</a>
  </div>
</div>
<table
id="t01"
cellpadding="37">
<tr>
<th>
<h1>Sayt pro derevyashki</h1>
</th>
</tr>
</table>
<div class="grid-container">
  
<?php

$conn1 = new mysqli($servername, $username, $password, "baza_2");


$sqlus = "SELECT * FROM `user` WHERE 1";
$resultus = $conn1->query($sqlus);
$sqlpr = "SELECT * FROM `product` WHERE 1";
$resultpr = $conn1->query($sqlpr);
$sqlmt = "SELECT * FROM `materials` WHERE 1";
$resultmt = $conn1->query($sqlmt);


if ($resultus->num_rows > 0) {

while($row = $resultpr->fetch_assoc()) {
$Name=$row["pr_name"];
$Cost=$row["pr_cost"]."руб";
$Material=$row["pr_material"];
$Date=$row["pr_date"];


$idus=$row["pr_creator_id"];



$authorName ='Создатель';

if($result>0){
while($rowus = $result->fetch_assoc()){
  if($idus=$rowus["id_user"]){
}
$authorName=$rowus["name"]." ".$rowus["surname"];
}
}
$Author=$authorName;




$divix = <<<DIV
<div class="product-box">
  <div class="item_name"><a href="product_page.php"> $Name</a></div>
  <div class="item_pict"> <div>Цена:</div> <div>$Cost</div><div><img src="pictures/tarelka.png" height="90px" width="70px"  align="left"></div></div>
  <div class="item_mater"><div>Материал:</div> <div>$Material</div></div>  
  <div class="item_date"><div>Дата изготовления:</div> <div>$Date</div></div>
  <div class="item_user"><div>Изготовитель:</div> <div><a href="new_user.php">$Author</a></div></div>
</div>
DIV;

echo $divix;
}
    // output data of each row
    while($row = $resultus->fetch_assoc()) {










$i=$row["id_user"];
$divix = <<<DIV
    <div class="grid-item">$i</div>
DIV;
echo $divix;

        echo "id: " . $row["id_user"]. " - Name: " . $row["name"]. " " . $row["surname"]. "<br>";
    }
}





 else {
    echo "0 results";
}

  







$i=0;
while ( $i <=2) {
  $divix = <<<DIV
    <div class="grid-item">$i</div>
DIV;
echo $divix;
  $i++;
  }
  ?>
</div>



</body>
</html>