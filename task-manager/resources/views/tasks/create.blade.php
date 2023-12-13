@include('head')

<body class="bg-gray-900 h-screen flex items-center justify-center">
    <div class="bg-gray-100 p-8 rounded-lg shadow-md max-w-md w-full">
        <a href="{{ route('tasks.index') }}" class="text-blue-500 hover:underline mb-4 inline-block">
            <i class="fas fa-arrow-left mr-2"></i> Back to Task List
        </a>

        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Create New Task</h1>

        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-sm font-semibold text-gray-600 mb-1">Title:</label>
                <input type="text" name="title" class="w-full border px-3 py-2 rounded-lg focus:outline-none focus:border-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-semibold text-gray-600 mb-1">Description:</label>
                <textarea name="description" class="w-full border px-3 py-2 rounded-lg focus:outline-none focus:border-blue-500"></textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white text-center px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue mx-auto block">
                <i class="fas fa-plus mr-2"></i> Create Task
            </button>
        </form>
    </div>
</body>
</html>
