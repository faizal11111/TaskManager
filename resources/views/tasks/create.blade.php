@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Add Task</h2>

    <form action="{{ route('tasks.store') }}" method="POST" id="task-form">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Add Task</button>
    </form>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('#task-form').submit(function (event) {
            let title = $('input[name="title"]').val().trim();
            if (title === '') {
                alert("Title cannot be empty.");
                event.preventDefault();
            }
        });
    });
</script>
@endsection
