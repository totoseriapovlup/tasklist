@extends('layouts.app')

@section('content')
    <!-- Bootstrap шаблон... -->
    <div class="panel-body">
        <a href="{{ route('task.create') }}" class="btn btn-default"><i class="fa fa-plus"></i> Новая задача</a>
    </div>
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Все задачи
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Задача</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td class="table-text">
                                <div>{{ $task->id }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $task->name }}</div>
                            </td>
                            <td>
                                <!-- TODO: Кнопка Удалить -->
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection