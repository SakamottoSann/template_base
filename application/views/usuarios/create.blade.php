@extends('template.base')

@section('content')

<style>
	#btn {
		margin: 5px;	
	}
</style>

<main>
  <form class="col s12" action="" method="post">
    <div class="row" id="btn">
      <button class="waves-effect waves-light btn" type="submit" value="home" name="home">
        <i class="material-icons">home</i>
      </button>
      <button class="waves-effect waves-light btn" type="submit" value="logout" name="logout">
        <i class="material-icons">exit_to_app</i>
      </button>
    </div>
  </form>
  <div class="container">
    <h3>Cadastro de Usuarios </h3>
    <form class="col s12" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input id="name" type="text" name="name" class="validate" value="teste de nome">
          <label for="name">Name</label>
        </div>
        <div class="input-field col s6">
          <input id="tel" type="tel" name="tel" class="validate" value="(53)981490055">
          <label for="tel">Numero</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="email" class="validate" value="testeemail@email.com">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="hash_senha" type="password" name="hash_senha" class="validate" value="mudar12">
          <label for="hash_senha">Senha</label>
        </div>
      </div>
      <div class="row">
        <button id="cad" type="submit" class="btn teal lighten-1">Cadastrar</button>
      </div>
    </form>
  </div>
</main>
@stop

@section('extra-javascript')

@stop