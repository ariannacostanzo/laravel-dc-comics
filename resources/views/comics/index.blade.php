@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')

<main>
    <div class="container">
        
          <span class="label">
            current series
          </span>

        {{-- <div class="row">
            @foreach ($cards as $index => $card)
                <div class="card">
                    <figure>
                      <a href="{{url("/comic/$index")}}">
                        <img src="{{$card['thumb'] }}" :alt="{{$card['series']}}">
                      </a>
                    </figure>
                    <p>{{$card['series']}}</p>
                </div>
            @endforeach
        </div> --}}
        
        <div class="btn-div">
          <button>LOAD MORE</button>
        </div>

      </div>
</main>

@endsection

@section('bonus')
@include('includes.bonus')
@endsection