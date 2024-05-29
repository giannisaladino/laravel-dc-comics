@extends ('layouts.app')

@section('title', 'I nostri fumetti')

@section('content')

<div class="container">
    <div class="row g-4">
    @foreach ($comics as $comic)
            <div class="col 4">
                <div class="card h-100" style="width: 18rem;">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top w-100" alt="...">
                    <div class="card-body">
                        <h4 class="card-title"> {{ $comic['title'] }} </h4>
                        <h5 class="card-text"> {{$comic['series']}} </h5>
                        <!-- <p class="card-text">{{ $comic['description'] }}</p> -->
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>

@endsection