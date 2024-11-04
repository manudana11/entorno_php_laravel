<x-layout>
    <x-slot:heading>
        Jobs page
    </x-slot:heading>
    
    <h1>Hello Jobs from PHP and Laravel</h1><br>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}">
                    <strong>{{ $job['title'] }}: Pays {{ $job['salary']}} per year.
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>