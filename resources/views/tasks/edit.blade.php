<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $task->name }}">
    <textarea name="description">{{ $task->description }}</textarea>
    <button type="submit">Update Task</button>
</form>
