<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
<body>
    <form action="/registro" method="POST">
        @csrf
        <input type="text" name="name">
        <input type="text" name="username">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="password" name="password_confirmacion">
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>