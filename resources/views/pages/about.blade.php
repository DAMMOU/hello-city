@extends('layouts.master')

@section('title', 'About Us | '.config('app.name'))


@section('content')
    <div>
            <h1>Hello city</h1>
            
            <p>Build with &hearts; by me.</p>

            <p><a href="{{route('home')}}">Back to homepage.</a></p>   
        </div>
@endsection
        
       
       
