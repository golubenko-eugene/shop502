@extends('layouts.app')

@section('content')
<div class="container">
	<div class="modal-body">
		@include('cart')
	</div>
	@quest
		<p>Login or register</p>
	@else
		<a href="/addOrder" class="btn btn-success">Checkout</a>
	@endguest
</div>
@endsection

