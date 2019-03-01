@include('/partials/header')

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">{{ __('Home') }}</a>
                    @else
                        <a href="{{ url('/login') }}">{{ __('Login') }}</a>
                        <a href="{{ url('/register') }}">{{ __('Register') }}</a>
                    @endif
                </div>
            @endif

            <div class="content">

                <div class="title m-b-md">
                    Laravel
                    <p class="versioninfo">{{ __('Version') }} {{ app()->version() }}</p>
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">{{ __('Documentation') }}</a>
                    <a href="https://laracasts.com">{{ __('Laracasts') }}</a>
                    <a href="https://laravel-news.com">{{ __('News') }}</a>
                    <a href="https://forge.laravel.com">{{ __('Forge') }}</a>
                    <a href="https://github.com/laravel/laravel">{{ __('GitHub') }}</a>
                </div>

                <div class="foundation_button_test">
                    <p class="framwork_title">Zurb Foundation 6.5.0</p>
                    <a class="button primary" href="#">Primary</a>
                    <a class="button secondary" href="#">Secondary</a>
                    <a class="button success" href="#">Success</a>
                    <a class="button alert" href="#">Alert</a>
                    <a class="button warning" href="#">Warning</a>
                </div>

            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
