<x-layout>
    <x-slot:heading>
        Job Details Page
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>

    <p>
        This job offered by <strong>{{ $employerName }}</strong> with a good salary of $<strong>{{ $job['salary'] }}</strong>/= per year.
    </p>
</x-layout>
