<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Task Name">
    <textarea name="description" placeholder="Task Description"></textarea>
    <button type="submit">Create Task</button>
</form>
