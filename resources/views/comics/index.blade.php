@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')

<main>
    <div class="container">
        
          <span class="label">
            current series
          </span>

        <div class="row">
            @foreach ($comics as $index => $comic)
                <div class="card">
                    <figure>
                      <a href="{{route('comics.show', $comic->id)}}">
                        <img src="{{$comic->thumb }}" :alt="{{$comic->series}}">
                      </a>
                    </figure>
                    <p>{{$comic->series}}</p>
                </div>
            @endforeach
        </div>
        
        <div class="btn-div">
          <button>LOAD MORE</button>
        </div>

      </div>
</main>

@endsection

@section('bonus')
@include('includes.bonus')
@endsection