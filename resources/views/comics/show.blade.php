@extends ('layouts.app')

@section('content')
<div class="bg-light container-md text-center">
    <img class="mb-2" src="{{ $comic->thumb }}" alt="">
    <h1 class="mb-2">{{ $comic->title }}</h1>
    <h4 class="">Prezzo: {{ $comic->price }} &euro;</h4>
    <h4 class="">Data di uscita: {{ $comic->sale_date }}</h4>
    <p class="">{{ $comic->description }}</p>

</div>
@endsection