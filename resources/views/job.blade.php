<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="text-red-900 font-bold text-lg">{{ $job['title'] }}</h2>

    <p class="text-red-900">
        This job pays {{ $job['salary'] }} per year.
    </p>
</x-layout>
