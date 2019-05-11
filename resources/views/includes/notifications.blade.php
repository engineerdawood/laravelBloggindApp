@if(Session::has('success'))
<div class="alert alert-success">
    {{-- warning, primary,danger,info --}}
    <div class="container">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="material-icons">x</i></span>
        </button>
        <b>Success Alert:</b> {{Session::get('success')}}
    </div>
</div>
@endif

@if(Session::has('warning'))
<div class="alert alert-warning">
    {{-- warning, primary,danger,info --}}
    <div class="container">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="material-icons">x</i></span>
        </button>
        <b>Warning Alert:</b> {{Session::get('warning')}}
    </div>
</div>
@endif

@if(Session::has('primary'))
<div class="alert alert-primary">
    {{-- primary, primary,danger,info --}}
    <div class="container">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="material-icons">x</i></span>
        </button>
        <b>Primary Alert:</b> {{Session::get('primary')}}
    </div>
</div>
@endif

@if(Session::has('danger'))
<div class="alert alert-danger">
    {{-- danger, danger,danger,info --}}
    <div class="container">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="material-icons">x</i></span>
        </button>
        <b>Danger Alert:</b> {{Session::get('danger')}}
    </div>
</div>
@endif

@if(Session::has('info'))
<div class="alert alert-info">
    {{-- info, info,info,info --}}
    <div class="container">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="material-icons">x</i></span>
        </button>
        <b>Info Alert:</b> {{Session::get('info')}}
    </div>
</div>
@endif
