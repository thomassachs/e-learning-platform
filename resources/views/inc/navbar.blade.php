<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @if (Route::has('login'))

                    @auth

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/course/123') }}">My last Course</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/instructor') }}">Instructor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/account') }}">Account</a>
                        </li>

                    @endauth

                @endif
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif


                @endguest
            </ul>
        </div>
    </div>
</nav>
