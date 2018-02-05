@include('admin.partials.header')

    @include('admin.partials._admin_nav')

    <div id="page-wrapper">
        <div style="width: 85%; margin: 5px auto">
            @include('admin.partials._message')
        </div>
        @yield('admin_content')
    </div>

@include('admin.partials.footer')