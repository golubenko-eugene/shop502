@extends('adminlte::page')

@section('title', 'Add Category')

@section('content_header')
    <h1>Add Category</h1>
@stop

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    {!! Form::model($category, ['url'=>'/admin/categories'])!!}
		<div class="form-group">
			{!! Form::label('name', 'Category Name') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('slug', 'Category Slug') !!}
			{!! Form::text('slug', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('parent_id', 'Parent Category') !!}
			{!! Form::select('size', $categories, null, ['placeholder' => 'Select parent category', 'class'=>'form-control']) !!}
		</div>
		<div class="input-group">
		   	<span class="input-group-btn">
		     	<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
		       		<i class="fa fa-picture-o"></i> Choose
		     	</a>
		   	</span>
		   	<input id="thumbnail" class="form-control" type="text" name="filepath">
		</div>
		<img id="holder" style="margin-top:15px;max-height:100px;">

		{!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}
@stop


@section('js')
	<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
	<script>
		$('#lfm').filemanager('image');
	</script>
@stop
