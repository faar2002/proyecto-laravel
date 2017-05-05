@if (! $errors->isEmpty())
	<div class = "alert alert-danger">
		<P><strong>Oops!</strong> Por Favor corrija el siguiente error:</P>
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif