@include('head')
<body class="bg-gray-900 text-white h-screen flex items-center justify-center">
    <div class="max-w-md w-full p-8 bg-white rounded-md shadow-xl">
        <h1 class="text-4xl font-bold mb-6 text-center text-gray-900">{{ $task->title }}</h1>

        <div class="mb-4">
            <label class="block text-sm font-semibold text-gray-600 mb-1">Description:</label>
            <p class="text-gray-800">{{ $task->description }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-semibold text-gray-600 mb-1">Status:</label>
            <p class="text-gray-800 {{ $task->completed ? 'text-green-500' : 'text-red-500' }}">
                {{ $task->completed ? 'Completed' : 'Incomplete' }}
            </p>
        </div>

        <div class="flex justify-between items-center">
            <a href="{{ route('tasks.edit', $task->id) }}" class="bg-blue-500 text-white text-center px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue mx-auto block">
                Edit Task
            </a>

            <a href="{{ route('tasks.index') }}" class="text-blue-500 hover:underline">
                <i class="fas fa-arrow-left mr-2"></i>Back
            </a>
        </div>
    </div>
</body>
</html>
