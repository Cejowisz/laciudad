<nav class="pushpinn mm-nav">
    <div class="nav-wrapper container">
        <a href="{{ route('home') }}">
            <img src="{{ asset('img/logo.png') }}" style="width: 105px;" class="responsive-img mm-logo" alt="Wiseman Logo">
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


