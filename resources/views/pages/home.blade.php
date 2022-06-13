@extends('layouts.master')

@section('title', config('app.name'))

@section('content')
    <div style="margin: 0 auto;">
       <img src="{{asset('/images/youssas.png')}}"/>
       <h1>Hello from Marroco</h1>
       <p>It's currenty  {{date('h:i A')}}</p>
    </div>
@endsection
    
       
       