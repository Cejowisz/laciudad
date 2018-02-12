@if(Session::has('message'))
    <div class="chips">
        {{ Session::get('message') }}
        <i class="close material-icons">close</i>
    </div>

@endif

@if(count($errors) >0)
    <div class="alert alert-danger" role="alert">
        <strong>Errors:</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

