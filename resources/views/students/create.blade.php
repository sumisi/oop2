<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <title>Создание пользователя</title>
</head>
<body>
    <div class="container mx-auto">
        <h1>Создание Студента</h1>
        <a href="{{route('students.index')}}">Список студентов</a>
        <form action="{{route('students.store')}}" method="POST">
            @csrf
            <input type="text" placeholder="Введите имя" required name="first_name"><br>
            <input type="text" placeholder="Введите фамилию" required name="last_name"><br>
            <input type="text" placeholder="Введите отчество" name="middle_name"><br>
            <input type="date" placeholder="Введите дату рождения" required name="birthday"><br>
            <input type="submit" value="Создать">
        </form>
    </div>
</body>
</html>