@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Task Details') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route ('task.update', $task) }}">
                    @csrf
                    <div class="form-group">
                        <label> Title: </label>
                        <input type ="text" value="{{ $task->title }}" name= "title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Description: </label>
                        <textarea name="description" class="form-control">{{ $task->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label> Status: </label>
                        <input type ="text" value="{{ $task->status }}" name= "status" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update My Task</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
