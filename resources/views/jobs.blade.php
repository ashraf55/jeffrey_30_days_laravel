<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <ul class="list-disc">
        @foreach($jobs as $job)
            <li>
                <a href="/job/{{ $job['id'] }}" class="text-blue-500 hover: underline">
                    <strong>{{ $job['title'] }}</strong>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
