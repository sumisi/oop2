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
         <form action="{{route('students.update', $student->id)}}" method="POST">
            @csrf
            @method('put')
            <input type="text" placeholder="Введите имя" required name="first_name" value="{{$student->first_name}}"><br>
            <input type="text" placeholder="Введите фамилию" required name="last_name" value="{{$student->last_name}}"><br>
            <input type="text" placeholder="Введите отчество" name="middle_name" value="{{$student->middle_name}}"><br>
            <input type="date" placeholder="Введите дату рождения" required name="birthday" value="{{$student->birthday}}"><br>
            <input type="submit" value="Изменить">
        </form>
    </div>
</body>
</html>