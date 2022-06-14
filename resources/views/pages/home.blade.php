@extends('layouts.master')

@section('title', config('app.name'))

@section('content')
    <div class="flex flex-col justify-center items-center">
       <img src="{{asset('/images/berberlogo.png')}}" 
       class="mt-12 shadow-md h-32"/>
       <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Marroco!</h1>
       <p class="mt-4 text-lg text-gray-800">It's currenty  {{date('h:i A')}}</p>
    </div>
@endsection
    
       
       