<x-layout heading="Jobs Page">
    <h1> This is Jobs page. </h1>

    @foreach ($jobs as $job)
    <a href="/job/{{$job['id']}}" class="text-blue-500 hover:underline">
     <li>{{ $job['title'] }}: Pays {{$job['salary']}} per Year. </li>  
    </a> 
    @endforeach
</x-layout>