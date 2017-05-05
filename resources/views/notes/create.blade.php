@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>Create a Note</h1>
			@include('partials/errors')
			<form method="POST" action="{{ url('notes') }}" class="form"> 
		        {!! csrf_field() !!}
		        <div class="form-group">
			        <!--<input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
			        <textarea name="note" class="form-control" placeholder="Escribe tu nota aqui....">{{ old('note') }}</textarea>
		        </div>
		        <button type="submit" class="btn btn-primary">Create Note</button>
		    </form>
	    </div>
    </div>
@endsection