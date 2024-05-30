@extends('layouts.app')

@section('content')

<section>
    <div class="container">
      <p>pastas.create</p>
      <h2 class="fs-2">Crea un nuovo fumetto</h2>
    </div>
    <div class="container">
      <form action="{{ route('comics.store') }}" method="POST">

        {{-- Cross Site Request Forgering --}}
        @csrf 

        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Titolo del fumetto">
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Descrizione</label>
          <input type="text" name="description" class="form-control" id="title" placeholder="Descrizione">
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Thumb</label>
          <input type="text" name="thumb" class="form-control" id="title" placeholder="Titolo del fumetto">
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">prezzo</label>
          <input type="text" name="price" class="form-control" id="title" placeholder="Titolo del fumetto">
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">serie</label>
          <input type="text" name="series" class="form-control" id="title" placeholder="Titolo del fumetto">
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">sale_data</label>
          <input type="text" name="sale_date" class="form-control" id="title" placeholder="Titolo del fumetto">
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">type</label>
          <input type="text" name="type" class="form-control" id="title" placeholder="Titolo del fumetto">
        </div>

        <button class="btn btn-primary">Crea</button>
      </form>
    </div>
  </section>


@endsection