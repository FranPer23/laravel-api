@if (session('message'))
    <div class="alert alert-success mt-3">
        {!! session('message') !!}
    </div>
@endif
