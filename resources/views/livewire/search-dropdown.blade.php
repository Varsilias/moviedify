<div>
    <div class="d-flex">
        <input wire:model="search" class="form-control" type="search" placeholder="Search" aria-label="Search">
        <span class="input-group-text purple" id="basic-text1"><i class="fas fa-search text-dark" aria-hidden="true"></i></span>
    </div>
    @if(strlen($search) > 2)
        <div class="search-result pt-2">
            @if($searchResults->count() > 0)
                @foreach ($searchResults as $result)
                <li class="list-group-item d-flex">
                    <a href="{{route('show', $result['id'])}}" class="d-flex">
                        <span width="30" height="30">
                            <img src="https://image.tmdb.org/t/p/w92{{$result['poster_path']}}" class="card-img-top" alt="Movie Poster">
                        </span>
                        <span>{{ $result['title'] }}</span>
                    </a>
                </li>
                @endforeach
                @else
                <li class="list-group-item">No results for "{{ $search }}"</li>
            @endif
        </div>
    @endif
</div>


