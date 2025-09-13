<x-layout>

    <x-slot:heading>
        job Page
    </x-slot:heading>
    <h1>job {{$job->title}}</h1>
    <p>pays ${{$job->salary}} per year.</p>
    <p class="mt-6">
    <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
    </p>

</x-layout>
