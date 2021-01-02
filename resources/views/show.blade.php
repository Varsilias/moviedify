@extends('layouts.main')
@section('title')
    {{$movie['title']}}
@endsection
@section('content')
<div class="container mt-4">
    <div class="row rounded shadow-lg mb-5">
        {{-- @foreach ($movie as $movie) --}}
        <div class="col-md-5 col-sm-12">
            <img style="width: 100%" src="{{'https://image.tmdb.org/t/p/w300'.$movie['poster_path']}}" alt="Movie Poster">
        </div>
        <div class="col-md-7 col-sm-12">
            <div class="card-body">
            <h4 class="card-title">{{$movie['title']}}</h4>
            <h6 class="text-muted font-weight-bold">
                {{$movie['vote_average'] * 10}}% rating |
                {{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}} |
                @foreach ($movie['genres'] as $genre)
                    {{$genre['name']}}@if (!$loop->last),@endif
                @endforeach
            </h6>
            <p class="card-text">
                {{$movie['overview']}}
            </p>
            <br>
            <h4 class="font-weight-bold">Featured Crew</h4>
            <br>
            <div class="row">
                @foreach ($movie['credits']['crew'] as $crew)
                    @if ($loop->index < 3)
                    <div class="col-md-4 col-sm-12 pb-2">
                        <h5 class="font-weight-bold">{{$crew['name']}}</h5>
                    {{$crew['job']}}
                    </div>
                    @else
                        @break
                    @endif
                @endforeach
            </div>
            <br>
            @if (count($movie['videos']['results']) > 0)
                <a href="https://www.youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}" class="btn btn-primary" style="color:  rgb(15, 12, 59);"><i class="fas fa-play" style="color:  rgb(15, 12, 59);"></i> Play</a>
            @endif
         </div>
        </div>
        {{-- @endforeach --}}
    </div>
</div>
{{-- Movie details end here --}}

<div class="container mt-4 p-2">
        <h3 class="font-weight-bold">Featured Cast</h3>
    <div class="row rounded shadow-lg mb-5">
        @foreach ($movie['credits']['cast'] as $cast)
            @if ($loop->index < 6)
            <div class="col-md-2 col-sm-12 pb-4">
                <div class="card">
                    <img src="{{'https://image.tmdb.org/t/p/w200'.$cast['profile_path']}}" class="card-img-top" alt="Cast">
                    <div class="card-body">
                        <h5 class="card-title">{{$cast['name']}}</h5>
                        <p class="card-text">{{$cast['character']}}</p>
                    </div>
                </div>
            </div>
            @else
                @break
            @endif
        @endforeach
    </div>
</div>
{{-- Cast ends here --}}
<div class="container mt-4 p-2">
        <h3 class="font-weight-bold">Images</h3>
    <div class="row rounded shadow-lg mb-5">
        @foreach ($movie['images']['backdrops'] as $image)
            @if ($loop->index < 12)
                <div class="col-md-3 col-sm-12 pb-4">
                    <div class="card">
                        <img src="{{'https://image.tmdb.org/t/p/w200'.$image['file_path']}}" class="card-img-top" alt="Cast">
                    </div>
                </div>
            @else
                @break
            @endif
        @endforeach
    </div>
</div>
@endsection
