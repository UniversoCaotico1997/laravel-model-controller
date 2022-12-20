@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row row-cols-5">
        @foreach($movies as $movie)
        <div class="col">
            <h2>{{$movie->title}}</h2>
            <h3>{{$movie->original_title}}</h3>
            <h4>{{$movie->nationality}}</h4>
            <h4>{{$movie->date}}</h4>
            <h4>{{$movie->vote}}</h4>
        </div>
        <!-- /.col -->
        @endforeach
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@endsection