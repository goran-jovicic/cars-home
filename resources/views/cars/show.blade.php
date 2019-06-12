@extends('layouts.master')

@section('content')
<h4> {{ $car->id }} </h4>
<p> Car producer :{{ $car->producer }} </p>
<p> Car model : {{ $car->title }} </p>
<p> Number of doors : {{ $car->number_of_doors }} </p>
@endsection