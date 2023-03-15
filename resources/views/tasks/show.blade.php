@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Task Details') }}</div>

                <div class="card-body">
                    <div class="form-group">
                        <label> Title: </label>
                        <input type ="text" value="{{ $task->title }}" name= "title" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label> Description: </label>
                        <textarea name="description" class="form-control" readonly>{{ $task->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label> Status: </label>
                        <input type ="text" value="{{ $task->status }}" name= "title" class="form-control" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
