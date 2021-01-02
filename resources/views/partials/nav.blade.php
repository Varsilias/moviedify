<nav class="navbar navbar-expand-md shadow-lg">
    <div class="container">
        <a class="navbar-brand " href="{{ url('/') }}">
           <h3 class="font-weight-bold">Moviedify</h3>
        </a>
        <button class="navbar-toggler toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="#popularMovies">{{ __('Popular') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="#TopRated">{{ __('Top Rated') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="#NowPlaying">{{ __('Now Playing') }}</a>
                </li>
            </ul class>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!--Grid column-->
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{ route('search') }}">{{ __('Search') }}</a>
                </li>
                {{-- <livewire:search-dropdown> --}}
            </ul>
        </div>
    </div>
</nav>
