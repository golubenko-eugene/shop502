@extends('adminlte::page')

@section('title', 'Add Category')

@section('content_header')
    <h1>Categories list</h1>
@stop

@section('content')
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Img</th>
				<th>Slug</th>
				<th>Parent</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach($categories as $item)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$item->name}}</td>
				<td>{{$item->img}}</td>
				<td>{{$item->slug}}</td>
				<td>{{$item->parentCategory}}</td>
				<td></td>
				<td></td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop
@section('js')
	<script>
		$('table').DataTable()
	</script>
@endsection