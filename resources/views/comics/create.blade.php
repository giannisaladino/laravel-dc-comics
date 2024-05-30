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
          <label for="image" class="form-label">Url Image</label>
          <input type="text" name="image" class="form-control" id="image" placeholder="http://...">
        </div>

        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Titolo del fumetto">
        </div>

        <button class="btn btn-primary">Crea</button>
      </form>
    </div>
  </section>


@endsection