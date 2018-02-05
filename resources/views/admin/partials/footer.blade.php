</section>
</main>
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ url('js/materialize.min.js') }}"></script>
<script src="{{ url('js/sidenav-footer.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.modal').modal();
    });
    $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            hover: true,
            stopPropagation: true
        }
    );
</script>

@yield('scripts');

</div>
</body>
</html>