<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <title>Список студентов</title>
</head>
<body>
    <div class="container mx-auto">
        <h1>Список Студентов</h1>
        <a href="{{route('students.create')}}">
            Создать студента
        </a>
        <div class="grid grid-cols-4 gap-2">
            @foreach ($students as $student)
                <div>
                    <h2>
                        {{$student->last_name}}
                        {{$student->first_name}}
                        {{$student->middle_name}}
                    </h2>
                    <p>
                        {{$student->birthday}}
                    </p>
                    <form action="{{route('students.destroy',$student->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Удалить студента">
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>