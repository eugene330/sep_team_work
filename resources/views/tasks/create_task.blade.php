@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Форма новой задачи -->
        <form action="{{ route('tasks.store', $group->id) }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Имя задачи -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label"></label>

                <div class="col-sm-6">
                    <input type="hidden" name="id" value="{{$group->id}}">
                    Задача<input type="text" name="title" id="task-name" class="form-control">
                    Текст задачи<textarea name="text" id="task-text" class="form-control"></textarea>
                    Дата завершения<input type="date" id="date" name="finish_date"/>
                </div>
            </div>

            <!-- Кнопка добавления задачи -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Добавить задачу
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
