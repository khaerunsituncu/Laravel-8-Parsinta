<x-app-layout title="Tasks">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                @include('tasks._create')
            </div>
        </div>
        <div class="mb-4">
            <ul class="list-group">
                @foreach ($tasks as $index => $task)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $index + 1}} - {{ $task->list }}
                    <div>
                        <a class="btn btn-primary" href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display: inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>