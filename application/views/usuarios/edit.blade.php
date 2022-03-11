@extends('template.base')

@section('content')

<main>
    <div style="text-align: right">
        @include('template.show-error-success-redirect')
    </div>
    <div class="parallax-container">
        <div class="container">
            <h2 class="header center black-text truncate">Cadastro de usuarios</h2>
        </div>
    </div>

</main>

@stop

@section('extra-javascript')

@stop