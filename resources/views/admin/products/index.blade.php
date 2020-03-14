@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
   <h1>Products</h1>
@stop

@section('content')

	<table class="table">
		 <thead class="table-info">
			<tr>
				<td  scope="col">ID</td>
				<td scope="col">NAME</td>
				<td scope="col">SLUG</td>
				<td scope="col">PRICE</td>
				<td scope="col">IMAGEN</td>
				<td scope="col">DESCRIBE</td>
				<td scope="col">SKU</td>
				<td scope="col">FAVORITE</td>
				<td scope="col">Edit</td>
				<td scope="col">Delete</td>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
				<tr>
					<td>{{$product->id}}</td>
					<td>{{$product->name}}</td>
					<td>{{$product->slug}}</td>
					<td>{{$product->price}}</td>
					<td>{{$product->img}}</td>
					<td>{{$product->describe}}</td>
					<td>{{$product->sku}}</td>
					<td>{{$product->favorite}}</td>				
					<td>
						<form action="/admin/products/{{$product->id}}/edit" method="GET">
							@csrf
							<button class="btn btn-warning">Edit</button>
						</form>
					</td>
					<td>
						<form action="/admin/products/{{$product->id}}" method="POST">
							@csrf

							@method('DELETE')
							<button class="btn btn-danger">Delete</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>



@stop