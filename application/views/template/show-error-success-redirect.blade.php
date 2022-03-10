@if (!!get_success_redirect())
    <div class="chip green darken-2">
        <span class="white-text">{!! get_success_redirect() !!}</span>
        <i class="close material-icons white-text left" style="margin-left: -8px; margin-right: 12px;">close</i>
    </div>
@elseif (!!get_error_redirect())
    <div class="chip red darken-2">
        <span class="white-text">{!! get_error_redirect() !!}</span>
        <i class="close material-icons white-text left" style="margin-left: -8px; margin-right: 12px;">close</i>
    </div>
@endif