@extends('pages.layout.master')

@section('title', '| How It Works')

@section('content')

    <div class="how">
        <div class="container">
            <div class="row">
                <div class="col m8 offset-m2">
                    <h4 class="center-align how-main-heading pri-color">
                        Bespoke experience training outfit. With love for the features your business needs
                    </h4>
                </div>
            </div>

            <div class="row" style="margin-bottom: 60px;">
                <div class="col m4">
                    <div class="card center-align how-col hoverable">
                        <i class="material-icons">user</i>
                        <h5>Build Better you</h5>
                        <p>
                            From effortless administration tools to robust compute, storage, and networking services, we
                            provide an all-in-one cloud to help teams spend more time building better software for your
                            customers.
                        </p>
                    </div>
                </div>
                <div class="col m4">
                    <div class="card center-align how-col hoverable">
                        <i class="material-icons">user</i>
                        <h5>Build Better you</h5>
                        <p>
                            From effortless administration tools to robust compute, storage, and networking services, we
                            provide an all-in-one cloud to help teams spend more time building better software for your
                            customers.
                        </p>
                    </div>
                </div>
                <div class="col m4">
                    <div class="card center-align how-col hoverable">
                        <i class="material-icons">user</i>
                        <h5>Build Better you</h5>
                        <p>
                            From effortless administration tools to robust compute, storage, and networking services, we
                            provide an all-in-one cloud to help teams spend more time building better software for your
                            customers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.partials._cta')


@endsection