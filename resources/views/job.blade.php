<x-layout>

    <x-slot:heading>
        job Page
    </x-slot:heading>
<h1>job {{$job['title']}}</h1>
    pays ${{$job['salary']}} per year.
</x-layout>
