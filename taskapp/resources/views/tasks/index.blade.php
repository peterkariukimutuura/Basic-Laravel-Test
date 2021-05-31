@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="display-4">Tasks</h1>
        <form action="{{ route('tasks') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="col-sm-8">
                    <input type="text" id="title" name="title" class="form-control input-sm"
                     placeholder="Your Task Title" value="{{ old('title') }}">
                </div>

                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                    <label for="description">Task Description</label>
                    <textarea class="form-control" id="description" 
                    name="description" rows="3"></textarea>
                </div>
              </div>
            <div class="form-group">
                <div class="col-sm-8">
                    <label for="due_date">Due Date</label>
                    <input type="date" id="due_date" name="due_date" class="form-control input-sm" 
                    value="{{ old('due_date') }}">
                </div>

                @error('due_date')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="completed" name="completed">
                <label class="form-check-label" for="completed">Task Complete</label>
              </div>
            <br>
            <button class="btn btn-primary" type="submit">Register Task</button>
        </form>    
    </div>
    
@endsection