@extends("layouts.main")

@section("content")

<h1>My movies</h1>

<div class="container d-flex">
 @foreach ($movies as $movie)

    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $movie->original_title}}</h5>
          <p class="card-text">{{$movie->nationality}}</p>
          <p class="card-text">{{$movie->vote}}</p>
          <p class="card-text">{{$movie->date}}</p>

        </div>
      </div>

      @endforeach
</div>

@endsection
