@include('head')
<body class="bg-gray-900 text-white h-screen flex items-center justify-center">
    <div class="max-w-md w-full p-8 bg-white rounded-md shadow-xl">
        <h1 class="text-4xl font-bold mb-6 text-center text-gray-900">Edit Task</h1>

        <form method="POST" action="{{ route('tasks.update', $task->id) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block text-sm font-semibold text-gray-600 mb-1">Title:</label>
                <input type="text" name="title" value="{{ $task->title }}" class="w-full text-black border px-4 py-2 rounded" required>
            </div>

            <div>
                <label for="description" class="block text-sm font-semibold text-gray-600 mb-1">Description:</label>
                <textarea name="description" class="text-black w-full border px-4 py-2 rounded resize-none" disabled>{{ $task->description }}</textarea>
            </div>

            <div class="flex items-center">
                <input type="checkbox" name="completed" value="1" class="mr-2" {{ $task->completed ? 'checked' : '' }}>
                <label for="completed" class="text-sm text-gray-800">Completed</label>
            </div>

            <div class="flex justify-between items-center">
                <button type="submit" class="bg-blue-500 text-white text-center px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
                    <i class="fas fa-plus mr-2"></i>Update Task
                </button>

                <a href="{{ route('tasks.show', $task->id) }}" class="text-blue-500 hover:underline">
                    <i class="fas fa-arrow-left mr-2"></i>Back
                </a>
            </div>
        </form>
    </div>
</body>
</html>
