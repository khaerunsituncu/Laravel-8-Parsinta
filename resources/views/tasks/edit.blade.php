<x-app-layout title="Edit">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Tasks</h2>
                <form action="{{ route('tasks.update', $task->id) }}" method="post">
                    @csrf
                    @method('put')
                    @include('tasks._form')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>