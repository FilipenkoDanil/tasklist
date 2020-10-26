@extends('layouts.main')

@section('title', 'Главная')

@section('content')
    <div class="card">
        <h5 class="card-header">Новое задание</h5>
        <div class="card-body">
            <form action="{{route('tasks.store')}}" method="POST">
                <div class="form-group">
                    <label for="formGroupExampleInput">Задача</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="task"
                           placeholder="Введите задачу, которую хотите сделать"
                           value="{{old('task')}}">
                    @foreach($errors->all() as $message)
                        <div class="col-sm-6">
                            <small id="passwordHelp" class="text-danger">
                                {{$message}}
                            </small>
                        </div>
                    @endforeach
                </div>
                <button class="btn btn-light"><i class="fa fa-plus"></i> Добавить</button>
                @csrf
            </form>
        </div>
    </div>
    <br>


    @if(count($tasksNotDone) > 0)
        <div class="card">
            <h5 class="card-header">Текущие задачи</h5>
            <div class="card-body">
                <div class="table-responsive form-inline">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th>Дело</th>
                            <th></th>
                        </tr>
                        </thead>
                        @foreach($tasksNotDone as $task)
                            <tr>
                                <td>{{$task->task}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <form action="{{route('tasks.update', $task)}}" method="POST">
                                            @method('put')
                                            <button type="submit" class="btn btn-success"><i
                                                    class="fa fa-check-square-o"></i> Сделано
                                            </button>
                                            @csrf
                                        </form>
                                        <form action="{{route('tasks.destroy', $task)}}" method="POST">
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>
                                                Удалить
                                            </button>
                                            @csrf
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <br>
    @endif

    @if(count($tasksDone) > 0)
        <div class="card">
            <h5 class="card-header">Сделаные задачи</h5>
            <div class="card-body">
                <div class="table-responsive form-inline">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th>Дело</th>
                            <th></th>
                        </tr>
                        </thead>
                        @foreach($tasksDone as $task)
                            <tr>
                                <td>{{$task->task}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <form action="{{route('tasks.update', $task)}}" method="POST">
                                            @method('PUT')
                                            <button type="submit" class="btn btn-warning"><i
                                                    class="fa fa-check-square-o"></i> Не сделано
                                            </button>
                                            @csrf
                                        </form>
                                        <form action="{{route('tasks.destroy', $task)}}" method="POST">
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>
                                                Удалить
                                            </button>
                                            @csrf
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <br>
    @endif
@endsection
