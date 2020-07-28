@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>Все :
            @foreach ($tasks as $task)
                <a href="task/{{$task->id}}"><li>{{$task->title}}</li></a>
            @endforeach
        </ul>
    </div>
@endsection
