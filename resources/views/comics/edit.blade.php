@extends('layouts.app')

@section('content')

<section>
    <div class="container">
      <!-- <p>comics.create</p> -->
      <h2 class="fs-2">Crea un nuovo fumetto</h2>
    </div>
    <div class="container">
      <form action="{{ route('comics.update', $comic) }}" method="POST">

        {{-- Cross Site Request Forgering --}}
        @csrf 
        @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Titolo del fumetto" value="{{ old('name', $comic->name) }}" >
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Descrizione</label>
          <input type="text" name="description" class="form-control" id="title" placeholder="Descrizione" value="{{ old('description', $comic->description) }}" >
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Thumb</label>
          <input type="text" name="thumb" class="form-control" id="title" placeholder="Titolo del fumetto" value="{{ old('thumb', $comic->thumb) }}" >
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">prezzo</label>
          <input type="text" name="price" class="form-control" id="title" placeholder="Titolo del fumetto" value="{{ old('price', $comic->price) }}" >
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">serie</label>
          <input type="text" name="series" class="form-control" id="title" placeholder="Titolo del fumetto" value="{{ old('series', $comic->series) }}" >
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">sale_data</label>
          <input type="text" name="sale_date" class="form-control" id="title" placeholder="Titolo del fumetto" value="{{ old('sale_date', $comic->sale_date) }}" >
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">type</label>
          <input type="text" name="type" class="form-control" id="title" placeholder="Titolo del fumetto" value="{{ old('type', $comic->type) }}" >
        </div>

        <button class="btn btn-primary">Modifica</button>
      </form>
    </div>

    <div class="container mt-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
  </section>
@endsection