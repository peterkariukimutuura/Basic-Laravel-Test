@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="display-4">Edit Task</h1>
        <form action="{{ route('tasks.update', $task->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="col-sm-8">
                    <input type="text" id="title" name="title" class="form-control input-sm"
                     placeholder="Your Task Title" value="{{ $task->title }}">
                </div>

                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                    <label for="description">Task Description</label>
                    <textarea class="form-control" id="description" 
                    name="description" rows="3">{{ $task->description }}</textarea>
                </div>

                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                    <label for="start_date">Start Date</label>
                    <input type="date" id="start_date" name="start_date" class="form-control input-sm" 
                    value="{{ $task->start_date }}">
                </div>

                @error('start_date')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                    <label for="end_date">End Date</label>
                    <input type="date" id="end_date" name="end_date" class="form-control input-sm" 
                    value="{{ $task->end_date }}">
                </div>

                @error('end_date')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                    <label for="completed">Task Complete?</label>
                    <select class="form-control" id="completed" name="completed">
                        <option value="">--Select--</option>                        
                        <option value="yes" @if ($task->completed == 'yes') selected="selected" @endif>Yes</option>
                        <option value="no" @if ($task->completed == 'no') selected="selected" @endif>No</option>
                    </select>
                </div>

                @error('completed')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            <br>
            <button class="btn btn-primary" type="submit">Update Task</button>
        </form>    
    </div>
    
@endsection