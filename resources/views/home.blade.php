@extends('layouts.app')

@section('content')
    <center><a href="{{ route('groups.create') }}" class="btn btn-success"><i class="fa fa-plus">Создать группу</i></a></center>
    <div class="home_container">
        <ul>Группы где Вы преподаватель
            <li>123</li>
            <li>123</li>
            <li>123</li>
            <li>123</li>
            <li>123</li>
        </ul>
        <ul>Группы где Вы студент
            <li>123</li>
            <li>123</li>
            <li>123</li>
            <li>123</li>
            <li>123</li>
        </ul>
    </div>
@endsection
