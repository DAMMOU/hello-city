@extends('layouts.master')

@section('title', 'About Us | '.config('app.name'))


@section('content')
    <div>
            <img src="{{asset('/images/youssas.png')}}" style="border-radius: 50%;" />
            <h1>Hello city</h1>
            
            <p>Build with &hearts; by me.</p>

            <p><a href="{{route('home')}}">Back to homepage.</a></p>   
        </div>
@endsection
        
       
       
