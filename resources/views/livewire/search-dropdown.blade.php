<div>
    <div class="d-flex">
        <input wire:model="search" class="form-control" type="search" placeholder="Title of the movie" aria-label="Search">
        <div wire:loading class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    @if(strlen($search) > 2)
        <div class="search-result mt-2">
            @if($searchResults->count() > 0)
                <div class="row rounded shadow-lg mb-5">
                    @foreach ($searchResults as $result)
                        <div class="col-md-3 col-sm-12 pb-4">
                            <div class="card">
                                <a href="{{route('show', $result['id'])}}">
                                    @if ($result['poster_path'])
                                        <img src="{{'https://image.tmdb.org/t/p/w200'.$result['poster_path']}}" class="card-img-top" alt="Poster">
                                    @else
                                        <img src="https://via.placeholder.com/200" class="card-img-top" alt="Poster">
                                    @endif
                                </a>
                                <div class="card-body">
                                    <a href="{{route('show', $result['id'])}}" class="d-flex">
                                        <h5 class="card-title">{{$result['title']}}</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @else
                <div class="col-md-3 col-sm-12 pb-4">
                    No results for "{{ $search }}"
                </div>
                {{-- <li class="list-group-item">No results for "{{ $search }}"</li> --}}
            @endif
        </div>
    @endif
</div>
{{-- Search box ends here --}}
{{-- @if (strlen($search) > 2)
    <div class="row rounded shadow-lg mb-5 mt-2">
        @if($searchResults->count() > 0)
            @foreach ($searchResults as $result)
                <div class="col-md-3 col-sm-12 pb-4">
                    <div class="card">
                        <a href="{{route('show', $result['id'])}}">
                            <img src="{{'https://image.tmdb.org/t/p/w200'.$result['poster_path']}}" class="card-img-top" alt="Cast">
                        </a>
                        <div class="card-body">
                            <a href="{{route('show', $result['id'])}}" class="d-flex">
                                <h5 class="card-title">{{$result['title']}}</h5>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            @else
                <div class="col-md-3 col-sm-12 pb-4">
                    No results for "{{ $search }}"
                </div>
        @endif
    </div>
@endif --}}


{{-- <li class="list-group-item d-flex">
    <a href="{{route('show', $result['id'])}}" class="d-flex">
        <span width="30" height="30">
            <img src="https://image.tmdb.org/t/p/w92{{$result['poster_path']}}" class="card-img-top" alt="Movie Poster">
        </span>
        <span>{{ $result['title'] }}</span>
    </a>
</li> --}}
