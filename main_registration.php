<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="style_registration.css" rel="stylesheet" type="text/css" />
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto;
  background-color: #c34d0a;
  padding: 10px;
  margin: 5%;
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
</style>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body  class="text-center" bgcolor="#1f1f1f" >

<div class="dropdown">
  <button class="dropbtn">Menu <img src="pictures/user_pict.png" height="40px" align="right"> </button>
  <div class="dropdown-content">
    <a href="new_user.php">Account</a>
    <a href="index.php">MainPage</a>
  </div>
</div>

<main class="form-signin">


    <form action="new_user.php" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
    <div class="grid-container">
<div class="grid-item">
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </div>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
<div class="grid-item">
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </div>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<div class="grid-item">
    <input type="submit" name="submit" value="Войти">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</div>
<div class="grid-item">
    <input value="Зарегистрироваться" type="button" onclick="location.href='new_user.php'">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</div>
</div>
</form>
</main>


</body>
</html>