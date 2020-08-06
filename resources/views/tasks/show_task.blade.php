@extends('layouts.app')

@section('content')
    <div class="container">

        <div>
            <h2>{{$tasks->title}}</h2>
            <p>{{$tasks->text}}</p>
        </div>
        <div>

            {{dd($answer)}}
{{--                        @foreach ($arr_id as $answer)--}}

{{--                        @endforeach--}}
        </div>
        <div>
            <!-- Форма новой задачи -->
            <form action="#" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Имя задачи -->
                <div>
                    <label for="task" class="col-sm-1 control-label"></label>

                    <div class="col-sm-6">
                        <input type="hidden" name="id" value="">

                        Ответ<textarea name="text" id="task-text" class="form-control"></textarea>
                    </div>
                </div>

                <!-- Кнопка добавления задачи -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-plus"></i> Добавить ответ
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
