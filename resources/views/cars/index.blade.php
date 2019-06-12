@extends('layouts.master')

@section('content')
<h4>
    All cars models :
</h4>
<ul>
    @foreach ($cars as $car)
        <p> {{ $car->producer }} </p>
        <li> <a href="{{'/cars/' . $car->id}}">{{ $car->title }}</a> </li>
    @endforeach
</ul>
@endsection