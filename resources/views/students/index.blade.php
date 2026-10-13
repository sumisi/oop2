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
                <div class="bg-amber-300">
                    <h2>
                        {{$student->last_name}}
                        {{$student->first_name}}
                        {{$student->middle_name}}
                    </h2>
                    <p>
                        Дата рождения: {{$student->birthday}}
                    </p>
                    <p>
                        Email: {{$student->email ?? 'нет'}}
                    </p>
                    <p>
                        Группа: {{$student->group->title ?? 'нет'}}
                    </p>
                    <form action="{{route('students.destroy',$student->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Удалить студента" class="text-red-500 text-[20px] font-bold">
                    </form>
                    <a href="{{route('students.show', $student->id)}}">
                        Посмотреть студента
                    </a><br>
                    <a href="{{route('students.edit', $student->id)}}">
                        Изменить студента
                    </a>
                </div>
            @endforeach
        </div>
        <hr>
        <div>
            @foreach ($groups as $group)
                <div>
                    <h3 class="text-red-500 text-[20px] font-bold">{{$group->title}}</h3>
                    @foreach ($group->students as $student)
                        <p>{{$student->full_name()}}</p>
                    @endforeach
                </div>              
            @endforeach
        </div>
    </div>
</body>
</html>