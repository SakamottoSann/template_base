@extends('template.base')
@section('content')

<style>
	
	body {
		display: flex;
		min-height: 100vh;
		flex-direction: column;
	}

	main {
		flex: 1 0 auto;
		padding: 10px;
	}

	body {
		background: #ECE0F8;
	}
</style>

<body>
	<main>
		<div style="text-align: right; margin-top: 20px; margin-right: 20px">
			@include('template.show-error-success-redirect')
		</div>
		<div class="parallax-container ">
			<center>

				<div class="container">
					<h2 class="header center black-text truncate">Bem vindo!</h2>
				</div>
				<div>
					<h3 class="header center black-text truncate">Oque vamos Fazer?</h3>
				</div>
			</center>
			<center>
				<form class="container center" style="margin-top:20vh;" action="" method="post">
					<button class="waves-effect waves-light btn light-blue darken-3" type="submit" value="list" name="list">
						<i class="material-icons left">list</i>
						Listagem
					</button>
					<button class="waves-effect waves-light btn green darken-2" id="add" type="submit" value="add" name="add">
						<i class="material-icons left">add</i>
						Cadastrar
					</button>
					<button class="waves-effect waves-light btn amber darken-3" id="edit" type="submit" value="edit" name="edit">
						<i class="material-icons right">edit</i>
						Editar
					</button>
					<button class="waves-effect waves-light btn deep-orange darken-2" id="trash" type="submit" value="trash" name="trash">
						<i class="material-icons right">remove</i>
						Excluir
					</button>
				</form>
			</center>
		</div>
	</main>
</body>

@stop
@section('extra-javascript')
@stop