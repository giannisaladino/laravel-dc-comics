@extends ('layouts.app')

@section('title', 'I nostri fumetti')

@section('content')

<div class="container">
    <div class="row g-4">
        @foreach ($comics as $comic)
            <div class="col 4">
                <div class="card h-100" style="width: 18rem;">
                    <img src="{{ $comic->thumb }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title"> {{ $comic->title }} </h4>
                        <p class="card-text"><strong>Uscita:</strong> {{$comic->sale_date}} </p>
                        <p class="card-text"><strong>Price:</strong> {{$comic->price}} &euro; </p>
                        <a class="card-text btn btn-primary text-center" href="{{ route('comics.show', $comic) }}">INFO</a>
                        <a class="card-text btn btn-success text-center" href="{{ route('comics.edit', $comic) }}">EDIT</a>
                            <form class="mt-1" action="{{ route('comics.destroy', $comic) }}" method="POST" >
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger" >DELETE</button>
                             </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection