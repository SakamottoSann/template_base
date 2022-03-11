@extends('template.base')

@section('content')
<style>
	#btn {
		display: flex;
		margin-top: 2vh;
		margin-left: 2vh;
	}
</style>
<main>
	<div style="text-align: right">
		@include('template.show-error-success-redirect')
	</div>
	<div class="parallax-container">
		<form action="" method="post">
			<div>
				<button class="waves-effect waves-light btn" id="btn" type="submit" value="home" name="home">
					<i class="material-icons">home</i>
				</button>
				<button class="waves-effect waves-light btn" type="submit" value="logout" name="logout">
					<i class="material-icons">exit_to_app</i>
				</button>
			</div>
			<div class="container">
				<h2 class="header center black-text truncate">Lista de Usuarios</h2>
			</div>
		</form>
	</div>


</main>

@stop

@section('extra-javascript')

@stop