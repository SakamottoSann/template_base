@extends('template.base')

@section('content')
<style>
	#btn {
		margin: 5px;	
	}
</style>
<main>
	<form class="col s12" action="" method="post">
		<div class="row" id="btn" >
			<button class="waves-effect waves-light btn" type="submit" value="home" name="home">
				<i class="material-icons">home</i>
			</button>
			<button class="waves-effect waves-light btn" type="submit" value="logout" name="logout">
				<i class="material-icons">exit_to_app</i>
			</button>
		</div>
	</form>
	<div class="container">
		<h2 class="header center black-text truncate">Lista de Usuarios</h2>
	</div>

</main>


@stop

@section('extra-javascript')

@stop