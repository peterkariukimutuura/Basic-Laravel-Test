@extends('layouts.app')

@section('content')
    <div class="container">
        @include('inc.messages')
        <h1 class="display-4">Your Tasks</h3>
        <a href="{{ route('tasks.index') }}" class="btn btn-primary">Go Back / Add Another Task</a>
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
                        @if($task->ownedBy(auth()->user()))
                            <tr id="task-id{{ $task->id }}">
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->description }}</td>
                                <td>{{ $task->start_date }}</td>
                                <td>{{ $task->end_date }}</td>
                                <td>{{ $task->completed}}</td>
                                <td>
                                    <div class="btn-toolbar">
                                        <div class="btn-group mr-2">
                                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">Edit</a>
                                        </div>
                                        <div class="btn-group">
                                            <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" 
                                                onclick="deleteTask({{ $task->id }})">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        @else
            <p>You have not registered any tasks</p>
        @endif
    </div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    function deleteTask(id)
    {
        if(confirm('Do you really want to delete this task?'))
        {
            $.ajax({
                url :'tasks/'+id,
                type : DELETE,
                data : {
                    _token : $("input[name=token]").val()
                },
                success : function(response)
                {
                    $("#task-id"+id).remove();
                }
            });
        }
    }
</script>