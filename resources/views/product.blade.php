@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h1>{{$product->name}}</h1>
			<h1>{{$product->price}}</h1>
			<form action="" class="buy">
				<input type="number" name="qty" value="1">
				<input type="hidden" name="product_id" value="{{$product->id}}">
				<button class="btn btn-primary">Add to Cart</button>
			</form>
		</div>
	</div>

</div>
@stop