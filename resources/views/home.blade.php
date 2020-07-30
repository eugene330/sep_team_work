@extends('layouts.app')

@section('content')
    <div style="text-align: center;"><a href="{{ route('groups.create') }}" class="btn btn-success"><i class="fa fa-plus">Создать группу</i></a></div>
    <div class="home_container">
        <ul>Группы где Вы преподаватель
            @foreach ($groups_teacher as $group_teacher)
                <a href="group/{{$group_teacher->id}}"><li>{{$group_teacher->name}}</li></a>
            @endforeach
        </ul>
        <ul>Группы где Вы студент
            @foreach ($groups_students as $group_students)
                <a href="group/{{$group_students->id}}"><li>{{$group_students->name}}</li></a>
            @endforeach
        </ul>
    </div>
@endsection
