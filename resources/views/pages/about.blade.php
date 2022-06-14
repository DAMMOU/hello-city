@extends('layouts.master')

@section('title', 'About Us | '.config('app.name'))


@section('content')
    <div class="flex flex-col justify-center items-center">
        <img src="{{asset('/images/youssas.png')}}" class="my-12 rounded-full shadow-md" />
            
        <p class="mb-5 text-xl font-semibold text-gray-600">Hello City Build with <span class="text-pink-500">&hearts;</span> by me.</p>

        <p><a href="{{route('home')}}"class="text-indigo-500 hover:text-indigo-600 underline">Back to homepage.</a></p>   
    </div>
@endsection
        
       
       
