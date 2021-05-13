<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="style_registration.css" rel="stylesheet" type="text/css" />

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>

</head>
<body  class="text-center" bgcolor="#000000"  align=" center">

<main class="form-signin">



    <form >
        <h1 class="h3 mb-3 fw-normal" >Регистрация</h1>
        <p>
        <label for="inputEmail" class="visually-hidden">Email address</label>
        <input type="email" id="inputEmail" class="form-control mb-2" placeholder="Почта" required="" autofocus="">
        </p>
        <p>
        <label for="inputSurname" class="visually-hidden">Surname</label>
        <input type="text" id="inputSurname" class="form-control mb-2" placeholder="Фамилия" required="">
        </p>
        <p>

        <label for="inputLetter" class="visually-hidden">ClassLetter</label>
        <input type="text" id="inputLetter" class="form-control mb-2" placeholder="Буква класса" required="">
        </p>
        <p>

        <label for="inputPassword" class="visually-hidden">Password</label>
        <input type="password" id="inputPassword" class="form-control mb-2" placeholder="Пароль" required="">
</p>
        <p>

        <label for="inputPasswordRepeate" class="visually-hidden">repeat password</label>
        <input type="password" id="inputPasswordRepeate" class="form-control mb-2" placeholder="Повторение пароля" required="">

        <div class="checkbox mb-3">
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Создать аккаунт</button>
    </form>
</main>


</body>
</html>