@extends('adminlte::page')

@section('title', 'Add Category')

@section('content_header')
    <h1>Add Category</h1>
@stop

@section('content')
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
		{!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}
@stop
