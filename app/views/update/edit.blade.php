@extends('layout')
@section('content')

{{ Form::model($update, array('route' => array('update.update', $update->id), 'method' => 'put')) }}
	{{ Form::label('summary', 'Summary') }}
	{{ Form::text('summary') }}

	{{ Form::label('full', "Full Update") }}
	{{ Form::textarea('full') }}
	
	{{ Form::label('img_url', "Image URL") }}
	{{ Form::text('img_url') }}
	{{ Form::submit("Create") }}
{{ Form::close() }}

@stop

