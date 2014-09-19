@extends('layout')



@section('content')
    @foreach($data as $user)
        <p>{{ $user->name }}</p>
    @endforeach
    <p>{{$name}}</p>
    
@stop