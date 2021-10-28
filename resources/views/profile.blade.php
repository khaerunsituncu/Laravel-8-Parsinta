<x-app-layout :title="$name ?? 'Profile'">
    <h1>Profile</h1>
    <p>My name is {{ $username ?? 'Not Found'}}</p>
</x-app-layout>