@extends('adminlte::page')

@section('title', 'Edit Product')

@section('content_header')
    <h1>Edit Product</h1>
@stop

@section('content')
   {!! Form::model($product, ['url'=>'/admin/products/'.$product->id, 'method' => 'put']) !!}
		
		<div class="form-group">

			{!! Form::label('name', 'Product Name') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">

			{!! Form::label('slug', 'Product Slug') !!}
			{!! Form::text('slug', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">

			{!! Form::label('price', 'Product Price') !!}
			{!! Form::text('price', null, ['class'=>'form-control']) !!}
		</div>


		<div class="form-group">

			{!! Form::label('describe', 'Product describe') !!}
			{!! Form::text('describe', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">

			{!! Form::label('sku', 'Product sku') !!}
			{!! Form::text('sku', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">

			{!! Form::label('favorite', 'Product favorite') !!}
			{!! Form::number('favorite', null, ['class'=>'form-control']) !!}
		</div>

		<div class="input-group">
   			<span class="input-group-btn">
   				<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
     			  <i class="fa fa-picture-o"></i> Choose
   				</a><br>
 			</span>
 			  	<input id="thumbnail" class="form-control" type="text" name="img">
 		</div>
 			<div id="holder" class="form-group"></div>
	

		{!! Form::submit('Save', ['class'=>'btn btn-primary'])!!}

   {!! Form:: close() !!}
@stop

@section('js')
	 <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
	 <script >
	 	$('#lfm').filemanager('image');
	 </script>
@endsection