@if (Session::has('success'))
	
	<div class="alert-success" role="alert">
	<?php
		echo Session::get('success');
	?>
	</div>

@endif

@if (count($errors) > 0)

	<div class="alert-danger" role="alert">
		<strong>Errors:</strong>
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach  
		</ul>
	</div>

@endif