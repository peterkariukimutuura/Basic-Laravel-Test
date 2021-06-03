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
                    name="description" rows="3">{{ old('description') }}</textarea>
                </div>

                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                    <label for="start_date">Start Date</label>
                    <input type="date" id="start_date" name="start_date" class="form-control input-sm" 
                    value="{{ old('start_date') }}">
                </div>

                @error('start_date')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                    <label for="end_date">End Date</label>
                    <input type="date" id="end_date" name="end_date" class="form-control input-sm" 
                    value="{{ old('end_date') }}">
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
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>

                @error('completed')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
            <br>
            <button class="btn btn-primary" type="submit">Register Task</button>
            <a href="{{ route('show') }}" class="btn btn-success" >View your tasks</a>
        </form>    
    </div>
    
@endsection