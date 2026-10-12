<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <title>Студент: {{$student->full_name()}}</title>
</head>
<body>
    <div class="container mx-auto">
        <a href="{{route('students.index')}}">Список студентов</a>
        <h1>
            {{$student->full_name()}}
        </h1>
        <p>Дата рождения: {{$student->birthday}}</p>
    </div>
</body>
</html>