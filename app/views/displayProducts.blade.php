@extends('layout')

	
@section('content')

	<h1>Products</h1>

    @foreach($data as $product)

        <div style='border:solid 1px #aaa;width:50%;margin-bottom:10px'> <b>{{ $product->name }}</b> {{$product -> base_price}}</div>

    @endforeach

    
    
@stop