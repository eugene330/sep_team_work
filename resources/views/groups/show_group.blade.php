@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>Все задания:
        @foreach ($tasks as $task)
            <li>{{$task->text}}</li>
        @endforeach
        </ul>
    </div>
@endsection
