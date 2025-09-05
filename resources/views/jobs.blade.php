<x-layout>

    <x-slot:heading>
        jobs Page
    </x-slot:heading>

    <h1>hello from jobs</h1>
    @foreach ($jobs as $job)
<a href="/jobs/{{$job['id']}}"><li>{{$job['title']}}</li></a>
    @endforeach
</x-layout>
