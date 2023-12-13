@include('head')
<body class="bg-gray-900 text-white h-screen flex items-center justify-center">
    <div class="max-w-4xl w-full p-8 bg-white rounded-md shadow-xl">
        <h1 class="text-4xl font-bold mb-6 text-center text-gray-900">Task List</h1>

        <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue block mb-4">
            <i class="fas fa-plus mr-2"></i> Create New Task
        </a>

        <table id="tasks-table" class="w-full border border-gray-300">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="py-3 px-4 border-b text-center">Title</th>
                    <th class="py-3 px-4 border-b text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr class="border-b task-row" data-task-id="{{ $task->id }}">
                        <td class="py-2 px-3 text-blue-500 font-semibold text-left">{{ $task->title }}</td>
                        <td class="py-2 px-3 text-center">
                            <a href="{{ route('tasks.show', $task->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue mx-2">
                                <i class="fas fa-eye"></i> View
                            </a>
                            
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600 focus:outline-none focus:shadow-outline-red">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
