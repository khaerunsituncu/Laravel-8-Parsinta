<x-app-layout title="Contact">
    <h1>Contact</h1>
    <form action="/contact" method="post">
        @csrf
        <button type="submit">Send</button>
    </form>
</x-app-layout>