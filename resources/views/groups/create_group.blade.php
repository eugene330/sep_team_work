@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Форма новой задачи -->
        <form action="{{ route('groups.store') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Имя задачи -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Группа</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Кнопка добавления задачи -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Добавить группу
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
