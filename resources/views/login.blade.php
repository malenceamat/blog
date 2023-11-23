<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Details</title>
</head>
<body>
<p>Добро пожаловать, вот ваши данные для входа:</p>
<ul>
    <li><strong>Имя:</strong> {{ $name }}</li>
    <li><strong>Email:</strong> {{ $email }}</li>
    <li><strong>Пароль:</strong> {{ $password }}</li>
</ul>
</body>
</html>
