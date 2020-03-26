@if(session('cart'))
	<table>
		<tbody>
			@foreach( session('cart') as $product)
			<tr>
				<td>image</td>
				<td>{{$product['name']}}</td>
				<td>{{$product['price']}}</td>
				<td><input type="number" class="change-qty" value="{{$product['qty']}}" data-id="{{$product['id']}}"></td>
				<td><button class="btn btn-danger remove-product" data-id="{{$product['id']}}">Delete</button></td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endif