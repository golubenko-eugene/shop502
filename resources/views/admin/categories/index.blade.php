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
				<td>
					<form action="/admin/categories/{{$item->id}}/edit" method="GET">
						@csrf
						<button class="btn btn-warning">Edit</button>
					</form>
				</td>
				<td>
					<form action="/admin/categories/{{$item->id}}" method="POST">
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
@section('js')
	<script>
		$('table').DataTable()
	</script>
@endsection