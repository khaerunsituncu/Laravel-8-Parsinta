<x-app-layout title="Users">
    <div class="container">
        <div class="row">
            <ul class="list-group">
                @foreach ($users as $index => $user)
                <li class="list-group-item d-flex align-items-center">
                    {{ $index + 1}} - <a href="{{ route('user.show', $user) }}">{{ $user->name }}</a> 
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>