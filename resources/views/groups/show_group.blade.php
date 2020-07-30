@extends('layouts.app')

@section('content')
    <div style="text-align: center;"><a href="{{ route('tasks.create') }}" class="btn btn-success"><i class="fa fa-plus">Создать задание</i></a></div>
    <div class="container">
        <ul>Все задания:
            @foreach ($tasks as $task)
                <a href="task/{{$task->id}}"><li>{{$task->title}}</li></a>
            @endforeach
        </ul>
    </div>
@endsection
