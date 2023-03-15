@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Task List') }}
                <a href="{{route ('task.create')}}" class="btn btn-primary"> Add New Task </a>
                </div>
                <div class="container">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->id}}</td>
                                <td>{{$task->title}}</td>
                                <td class="col-5">{{$task->description}}</td>
                                <td>{{$task->status}}</td>
                                <td>

                                <a href="{{route ('task.show', $task) }}" class="btn btn-info"> View </a>
                                    <a href="{{route ('task.edit', $task) }}" class="btn btn-success"> Edit </a>
                                    <a onclick="return confirm('Are your sure?')" href="{{route('task.delete',$task) }}" class="btn btn-danger"> Delete </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
