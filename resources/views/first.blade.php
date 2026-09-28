<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Первая страница</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Здарова бандиты</h1>
    <a href="/">Main Page</a>
    <p>Сумма переменых a и b : {{$a}} и {{$b}} равна {{$c}}</p>
</body>
</html>