<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/job/{{ $job['id'] }}" class="text-blue-500 hover: underline">
                    <strong>{{ $job['title'] }}</strong> having a salary of: BDT {{ $job['salary'] }}/= per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
