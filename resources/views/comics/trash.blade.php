@extends('layouts.main')

@section('title', 'Deleted comics')

@section('cdns')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css' integrity='sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==' crossorigin='anonymous'/>
@endsection

@section('main-content')

<main>
    <div class="container">
        
          <span class="label">
            current series
          </span>

        @session('message')
        <div class="my-alert">
          {{$value}}
          <button class="close-btn" id="close-alert"><i class="fa-solid fa-x"></i></button>
        </div>
        @endsession
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
              There are no comics to show
            @endforelse
        </div>
        
        <div class="btn-div justify-center">
          <a href="{{route('comics.index')}}">See all comics</a>
        </div>

      </div>
</main>

@endsection

@section('bonus')
@include('includes.bonus')
@endsection

@section('scripts')
<script>
@vite('resources/js/close-alert.js')
</script>
@endsection