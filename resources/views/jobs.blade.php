<x-layout heading="Job Page">
    <h1> This is Jobs page. </h1>

    @foreach ($jobs as $job)
     <li>{{ $job['title'] }}: Pays {{$job['salary']}} per Year. </li>   
    @endforeach
</x-layout>