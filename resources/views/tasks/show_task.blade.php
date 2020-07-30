@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h2>{{$tasks->title}}</h2>
            <p>{{$tasks->text}}</p>
        </div>
        <div>

{{--            @foreach ($tasks as $task)--}}
{{--                <a href="task/{{$task->id}}"><li>{{$task->title}}</li></a>--}}
{{--            @endforeach--}}
        </div>
    </div>
@endsection
