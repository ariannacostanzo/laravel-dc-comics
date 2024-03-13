@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')

<main>
    <div class="container">
        
          <span class="label">
            current series
          </span>

        <div class="row">
            @forelse ($comics as $comic)
                <div class="card">
                    <figure>
                      <a href="{{route('comics.show', $comic->id)}}">
                        <img src="{{$comic->thumb }}" :alt="{{$comic->series}}">
                      </a>
                    </figure>
                    <p>{{$comic->series}}</p>
                </div>
              @empty
              Non ci sono fumetti da mostrare
            @endforelse
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