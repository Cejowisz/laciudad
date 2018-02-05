@extends('pages.layout.master')

@section('content')
    <div class="container">
        <h5>Awesome {{ $name }}</h5>
        <h6>Click the Link To Verify Your Email</h6>
        <p>
            Click the link to verify your email {{url('/verify-email/'.$email_token)}}
        </p>
        <p>
            Or copy {{url('/verify-email/'.$email_token)}} and paste in your browser.
        </p>
    </div>
@endsection
