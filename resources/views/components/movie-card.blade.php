<div class="col-md-3 col-sm-12 align-item-center">
    <div class="card-group">
        <div class="card">
            <a href="{{route('show', $movie['id'])}}">
                <img src="{{'https://image.tmdb.org/t/p/w200'.$movie['poster_path']}}" class="card-img-top" alt="Movie Poster">
            </a>
            <div class="card-body">
            <a href="{{route('show', $movie['id'])}}">
                <h5 style="color: rgb(84, 19, 204)" class="card-title">{{$movie['title']}}</h5>
            </a>
            <p class="card-text">{{$movie['overview']}}</p>
            <p class="card-text">
                <span class="text-muted">{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
                <span class="text-muted"> | </span>
                <span class="text-muted">{{$movie['vote_average'] * 10}}% rating</span>
                    <div>
                        @foreach ($movie['genre_ids'] as $genre)
                        {{$genres->get($genre)}}@if (!$loop->last),@endif
                        @endforeach
                    </div>
                </p>
            </div>
        </div>
    </div>
</div>
