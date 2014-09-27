@extends('layout')

@section('header')

	<h1>Products</h1>
	
@section('content')

	

    @foreach($data as $product)

        <div style='border:solid 1px #aaa;width:100%;margin-bottom:0px;height:30px;line-height:30px;text-indent:10px'> <b>{{ $product->name }}</b> {{$product -> base_price}}</div>

    @endforeach

    
    
@stop