

@if (Session::has('Failed'))
<div class="message">
	<div class="alert alert-danger" role="alert">
		<strong> {{ Session::get('Failed') }}</strong>
	</div>
</div>
@endif


@if (count($errors) > 0)
<div class="message">
	<div class="alert alert-danger" role="aler
	t">
		<strong>Errors:</strong>
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach  
		</ul>
	</div>
</div>
@endif


