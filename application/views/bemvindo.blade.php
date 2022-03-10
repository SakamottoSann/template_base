@extends('template.base')

@section('content')


<main>
	<div class="parallax-container">
		<div class="container">
			<h2 class="header center black-text truncate">Bem vindo</h2>
		</div>
	</div>
	<div>
		@include('template.show-error-success-redirect')
		echo get_user_session()
	</div>
</main>

@stop

@section('extra-javascript')
	
@stop