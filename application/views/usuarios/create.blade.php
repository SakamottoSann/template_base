@extends('template.base')

@section('content')


<main>
    <div class="container">
        <div class="parallax-container">
            <div class="container">
                <h2 class="header center black-text truncate">Cadastro de usuarios</h2>
            </div>
            <a class="waves-effect waves-light btn pink darken-1 modal-trigger" href="#demo-modal">Launch Modal</a>
        </div>
        <div id="demo-modal" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>A Demo of Simple Modal</h4>

                <p>Content of the modal goes here. Place marketing text or other information here.</p>
            </div>
            <div class="modal-footer">
                <a class="modal-action modal-close waves-effect waves-red btn red lighten-1">Close</a>
            </div>
        </div>
    </div>
</main>
<script>
    $(document).ready(function() {

        $('.modal').modal();

    })
</script>

@stop

@section('extra-javascript')

@stop