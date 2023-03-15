@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create New Task') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('task.store')}}">
                        @csrf
                        <div class="form-group">
                            <label>Title:</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter your task name">
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <textarea class="form-control" name="description" placeholder="Enter your description"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Status:</label>
                            <input type="text" class="form-control" name="status" placeholder="Status">
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save My Task</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
