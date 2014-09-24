@extends('layout')


@section('content')
	<h1>Bar Graph</h1>

	<div style='left:10%;width:80%;height:80%;position:fixed;top:10%;border:solid 1px #333;border-radius:3px;background:#eee'>
		<table style="width:100%;height:100%">
			<colgroup style="width:{{{1/count($data)*100}}}%">

				@foreach($data as $product)
					<col></col>
				@endforeach

			</colgroup>

			
			<thead></thead>
			<tbody>
				<tr style='height:100%'>
	
    @foreach($data as $product)
    
		    	<td valign="bottom">
			        <div style='width:50%;margin-left:25%;height:{{($product-> base_price)/$max*100}}%;border:solid 1px blue;bottom:0px;position:relative;'> 
			        	<div style='position:absolute;bottom:0px;width:100%;text-align:center;'>{{ $product->name }}<br>{{$product -> base_price}}</div>
			        </div>
		   		</td>
    @endforeach
				</tr>

			</tbody>
		</table>
			</div>
    
    
@stop