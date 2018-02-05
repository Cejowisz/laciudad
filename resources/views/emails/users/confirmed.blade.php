@extends('pages.layout.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col m8 offset-m2">
                <div class="card">
                    <div class="card-title">
                        Registration Confirmed
                    </div>
                    <div class="card-content">
                        Your Email is successfully verified. Click here to <a href="{{route('login')}}">login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection