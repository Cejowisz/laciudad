@extends('pages.layout.master')

@section('content')
    <h1>This is home for vue</h1>

@endsection


@section('scripts')

    <script>
        $(document).ready(function(){
            $('.slider').slider({
                indicators: false
            });
        });
    </script>

@endsection
