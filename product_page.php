
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
      .dropbtn {
    background:linear-gradient(to top right, #006400 52%, #AAFAAA 100%); 
    padding: 16px;
    font-size: 16px;
    border-radius: 10px;
}
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color:rgb(47, 79, 79);
    min-width: 100px;
border-radius: 10px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);

}
.dropdown-content a {
  background-color:rgba(1, 1, 1,0.2) ;
    color: white;
    border-radius: 10px;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown-content a:hover {background-color: #ddd;
text-shadow: 1px 1px 2px black, 0 0 1ex bisque ; 
    color: blanchedalmond ; 
    font-size: 115%; 
}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #008000;}
    </style>
    </head>
  <body bgcolor="#1f1f1f" charset="utf-8" background="pictures/back.jpg" >
    <div class="dropdown">
  <button class="dropbtn">Menu <img src="pictures/user_pict.png" height="40px" align="right"> </button>
  <div class="dropdown-content">
    <a href="new_user.php">Account</a>
    <a href="reg_page.php">Main page</a>
  </div>
</div>

<style type="text/css">
  {
  box-sizing: border-box;
}
body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
  font-size: 35px;
}

/* Container for flexboxes */
.row {
  display: -webkit-flex;
  display: flex;
}

/* Create three unequal columns that sits next to each other */
.column {
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Left and right column */
.column.side {
   -webkit-flex: 1;
   -ms-flex: 1;
   flex: 1;
   display: grid;
  grid-template-columns: auto;
}

/* Middle column */
.column.middle {
  -webkit-flex: 2;
  -ms-flex: 2;
  flex: 2;
}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .row {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}
</style>
</head>
<body>
<div class="header">
  
  <?php 
  $pr_name='GET product name';
  echo $pr_name;
  ?>
</div>

<div class="row">
  <div class="column side" style="background-color:#f2600c;"><?php 
  $pr_name='Many many information about Material';
  echo $pr_name;
  ?></div>
  <div class="column middle" style="background-color:#c34d0a;"><?php 
  $pr_prod='A lot of information about this interesting product...';
  echo $pr_name;
  ?></div>
  <div class="column side" style="background-color:#994000;">
   <div> <?php 



  $pr_name='Some information about Creator:';
  echo $pr_name;
  ?>
  </div>
<div>
  <?php 
  $sqlus = "SELECT * FROM `user` WHERE 1";
$resultus = $conn->query($sqlus);
$pr_name='Somr errors';
if ($resultus->num_rows > 0) {
while($row = $resultpr->fetch_assoc()) {
if($resultus[$id_user_get]=$row["id_user_get"]){
  $pr_name=$row["name"].$row["surname"].$row["more_info"];
}
  }
}

  echo $pr_name;
  ?>
</div>
</div>
</div>

<div class="footer">
  <p>Footer</p>
</div>


</body>