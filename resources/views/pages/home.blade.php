@extends('layouts.master')

@section('title', config('app.name'))

@section('content')
    <div>
       <h1>Hello from Marroco</h1>
       <p>It's currenty  {{date('h:i A')}}</p>
    </div>
@endsection
    
       
       