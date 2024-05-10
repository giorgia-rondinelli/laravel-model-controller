@extends('layout.main')

@section('content')


<div class="container d-flex flex-wrap justify-content-center ">
    @foreach ( $movies as $movie )
<div class="card m-3 " style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$movie->title}}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">Titolo originale: {{$movie->original_title}}</h6>
      <p class="card-text">Nationality: {{$movie->nationality}}</p>
      <p class="card-text">vote: {{$movie->vote}} </p>


    </div>
  </div>
@endforeach

</div>




@endsection
