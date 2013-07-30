@extends('layout')

@section('content')
<style>
form {
	display: inline;
	}
</style>

@foreach ($updates as $update)
	{{ $update->id }} | {{ $update->summary }} |
	{{ Form::open(array('route' => array('update.destroy', $update->id), 'method' => 'delete')) }}
		{{ Form::Submit('Delete', array('class' => 'pure-button pure-button-bad')) }}
	{{ Form::close() }} | 
	<a href="{{ URL::route('update.edit', $update->id) }}">Update</a>
	<br />
@endforeach

<a href="{{ URL::action('UpdateController@create') }}" class="pure-button pure-button-good">Create New</a>

@stop
