@include('pages.partials._header')

    <div id="app">
        <nav class="pushpinn mm-nav">
            <div class="nav-wrapper container">
                <a href="{{ route('home') }}">
                    <img src="/img/logo.png" style="width: 105px;" class="responsive-img mm-logo" alt="Lacuidad Logo">
                </a>
                <a href="#" data-activates="slide-out" class="button-collapse show-on-large icon-hide"><i class="material-icons blue-text">menu</i></a>
                <ul class="right hide-on-small-and-down">
                    @include('pages.partials._link')
                </ul>
                <ul id="slide-out" class="side-nav">
                    @include('pages.partials._link')
                </ul>
            </div>
        </nav>
        @yield('content')
        {{--<app-footer></app-footer>--}}
    </div>

@include('pages.partials._footer')













