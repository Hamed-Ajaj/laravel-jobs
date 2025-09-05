<x-layout>
    <x-slot:heading>
        Posts Page
    </x-slot:heading>

    <h1>posts page</h1>
    @foreach ($posts as $post)
    <a href="/posts/{{$post['id']}}"><li>{{$post['title']}}</li></a>
    @endforeach
</x-layout>
