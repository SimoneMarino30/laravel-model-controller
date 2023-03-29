@extends('layout.app')

@section('page_name')
Homepage
@endsection
 
@section('main_content')
 <section class="container"> 
  <div class="row row-cols-4">
     @foreach ($movies as $movie)
    <div class="thumbs img-fluid d-flex flex-column">
      <div class="card mt-auto" style="width: 18rem; ">
        {{-- <img src="<img class=" src="{{ Vite::asset('resources/img/godFather.jpg') }}" class="card-img-top" alt="..."> --}}
        <div class="card-body">
          <h5 class="card-title">{{ strtoupper($movie->title) }}</h5>
          <p class="card-text">{{ $movie->nationality }} - {{ $movie->original_title }}</p>
          <p class="card-text">{{ $movie->date }}</p>
          <p class="card-text">Average vote: {{ $movie->vote }}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
 </section>
@endsection

