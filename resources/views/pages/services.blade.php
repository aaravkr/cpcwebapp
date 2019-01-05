@extends('layout.app')

@section('content')
<h1>{{$title}}</h1>
<p> this is the about us page </p>
@if(count($services) > 0)
<ul>
 @foreach( $services as $service)
     <li>{{$service}} </li>
     @endforeach
    </ul> 
@endif

  @endsection
