@extends('layouts.app')

@section('content')
    <center><a href="{{ route('groups.create') }}" class="btn btn-success"><i class="fa fa-plus">Создать группу</i></a></center>
    <div class="home_container">
        <ul>Группы где Вы преподаватель
            @foreach ($groups_teacher as $group_teacher)
                <a href="group/{{$group_teacher->id}}"><li>{{$group_teacher->name}}</li></a>
            @endforeach
        </ul>
        <ul>Группы где Вы студент
            @foreach ($groups_students as $group_students)
                <li>{{$group_students->name}}</li>
            @endforeach
        </ul>
    </div>
@endsection
