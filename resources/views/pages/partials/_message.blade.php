@if(Session::has('success_message'))
    <div class="chips">
        {{ Session::get('success_message') }}
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

