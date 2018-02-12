<footer class="site-footer">
    <div class="container">
        <div class="row" style="margin-bottom: 0;">
            <div class="col m3">
                <h6 class="dev">Get to know us</h6>
                <a href="{{ route('about') }}">About Laciudad</a><br>
                <a href="{{ route('terms') }}">Terms and Condition</a><br>
                <a href="{{ route('privacy') }}">Private and Policy</a>
            </div>

            <div class="col m3">
                <h6>Train with us</h6>
                <a href="#">eBooks</a><br>
                <a href="{{ route('register') }}">Become a trainer</a><br>
                <a href="#">Find trainees</a>
            </div>
            <div class="col m3">
                <h6>Work with us</h6>
                <a href="#">Partnership </a><br>
                <a href="#">Advert </a><br>
                <a href="#">Support </a>
            </div>
            <div class="col m3">
                <h6>Connect with us</h6>
                <a href="https://facebook.com/laciudad" target="_blank" class="snip0079 fb">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="https://twitter.com/laciudad" target="_blank" class="snip0079 blue">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="https://instagram.com/laciudad" target="_blank" class="snip0079 ing">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

<script src="{{ url('js/app.js') }}"></script>
<script src="{{ url('js/materialize.min.js') }}"></script>
<script src="{{ url('js/custom.js') }}"></script>

@yield('scripts')

{{--</div>--}}
</body>
</html>