@extends('layouts.main')
@section('title')
    Home
@endsection
@section('content')
<div class="container pt-2" id="popularMovies">
    <h3 class="font-weight-bold">Popular Movies</h3>
    <div class="row">
        @foreach ($popularMovies as $movie)
            <x-movie-card :movie="$movie" :genres="$genres"/>
        @endforeach
        {{-- Card 1 ends here --}}
    </div>
    </div>
    {{-- Popular movies ends here --}}
    <div class="container pt-2 mt-4" id="NowPlaying">
        <h3 class="font-weight-bold">Now Playing</h3>
    <div class="row">
        @foreach ($nowPlayingMovies as $movie)
            <x-movie-card :movie="$movie" :genres="$genres"/>
        @endforeach
        {{-- Card 1 ends here --}}
        {{-- Card 3 --}}
    </div>
    </div>
    {{-- now playing ends here --}}
    <div class="container pt-2 mt-4" id="TopRated">
        <h3 class="font-weight-bold">Top Rated</h3>
    <div class="row">
        @foreach ($topRatedMovies as $movie)
            <x-movie-card :movie="$movie" :genres="$genres"/>
        @endforeach
    </div>
</div>
@endsection
