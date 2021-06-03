@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="display-4">Your Tasks</h3>
        <a href="{{ route('tasks') }}" class="btn btn-primary">Go Back / Add Another Task</a>
        @if ($tasks->count())
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Completed</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
            @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->description }}</td>
                            <td>{{ $task->start_date }}</td>
                            <td>{{ $task->end_date }}</td>
                            <td>{{ $task->completed}}</td>
                            <td>
                                <form action="{{ route('tasks.show.destroy', $task) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning">Delete</button>
                                </form>
                            </td>
                        </tr>
            @endforeach
                </tbody>
            </table>
        @else
            <p>You have not registered any tasks</p>
        @endif
    </div>
@endsection