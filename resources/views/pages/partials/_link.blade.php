
<li><a href="{{ route('about') }}">About</a></li>
<li><a href="{{ route('blog.index') }}">Blog</a></li>
<li><a href="">Gallery</a></li>
<li><a href="{{ route('how') }}">How It Works</a></li>
<li><a href="{{ route('contact') }}">Contact</a></li>
@guest
    <li><a href="{{ route('register') }}">Register</a></li>
    <li><a href="{{ route('login') }}">Login</a></li>
@endguest
@auth
    <li>
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </li>
@endauth

