@extends('layouts.main')

@section('title', $comic->title)

@section('cdns')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css' integrity='sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==' crossorigin='anonymous'/>
@endsection

@section('main-content')
{{-- delete modal --}}
<div class="my-modal-layout d-none" id="delete-modal">
    <div class="my-modal">
        <p>
            Are you sure you want to delete the comic <strong>{{$comic->title}}</strong> ?
        </p>
        <button id="delete-close-btn" class="close-btn"><i class="fa-solid fa-x"></i></button>
        <form class="btn-div justify-between" 
        {{-- se il comic è nel cestino lo elimino totalmente, altrimenti lo metto nel cestino --}}
        @if($isTrashed) action="{{route('comics.drop', $comic->id)}}" @else action="{{route('comics.destroy', $comic->id)}}" @endif
         method="POST" id="confirm-delete">
        @csrf
        @method('DELETE')
        <button id="delete-confirm-btn" type="submit">Confirm</button>
        <button id="delete-cancel-btn" class="secondary" type="button">Cancel</button>
        </form>
    </div>
</div>
{{-- restore modal --}}
<div class="my-modal-layout d-none" id="restore-modal">
    <div class="my-modal">
        <p>
            Are you sure you want to restore the comic <strong>{{$comic->title}}</strong> ?
        </p>
        <button id="restore-close-btn" class="close-btn"><i class="fa-solid fa-x"></i></button>
        <form class="btn-div justify-between" 
         action="{{route('comics.restore', $comic->id)}}" 
         method="POST" id="confirm-restore">
        @csrf
        @method('PATCH')
        <button id="restore-confirm-btn" type="submit">Confirm</button>
        <button id="restore-cancel-btn" class="secondary" type="button">Cancel</button>
        </form>
    </div>
</div>


<div class="blue-line"></div>
{{-- descrizione comic --}}
<div class="container smaller" id="comic-details">
    <figure class="comic-figure">
        <span class="comic-img-details type">{{$comic->type}}</span>
        <img src="{{$comic->thumb}}" alt="{{$comic->series}}" class="comic-img">
        <span class="comic-img-details gallery">View Gallery</span>
    </figure>
    <div id="comic-info">
        <div class="comic-description">
            <div>
                <h2>{{$comic->title}}</h2>
                <div class="comic-price-container">
                    <div class="comic-price">
                        <p>U.S.Price: <span>{{$comic->price}}</span></p>
                        <p>AVAILABLE </p>
                    </div>
                    <div class="comic-availability">Check Availability <i class="fa-solid fa-sort-down"></i></div>
                </div>
                <p class="comic-info-description">{{$comic->description}}</p>
            </div>
            <div class="btn-div justify-between">
                @if($isTrashed)
                <a href="{{route('comics.trash')}}" class="secondary">See all deleted comics</a>
                <button class="success" id="restore-btn">restore</button>
                @else
                <a href="{{route('comics.index')}}" class="secondary">See all comics</a>
                @endif
                
                <button class="danger" id="delete-btn">Delete</button>
                
                <a href="{{route('comics.edit', $comic->id)}}">Edit</a>
            </div>
        </div>
        <figure class="ad-figure">
            Advertisement
            <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="ad">
        </figure>
    </div>
</div>
{{-- proprietà del fumetto --}}
<div id="comic-specialties">
    <div class="container smaller" id="comic-talent-specs">
       <div class="comic-talent">
        <h3>Talent</h3>
        <div class="specialties-container">
            <p>Art by:</p>
            <div class="specialties-list">
                <span>{{$comic->artists}}.</span>
            </div>   
        </div>
        <div class="specialties-container">
            <p>Written by:</p>
            <div class="specialties-list">
                <span>{{$comic->writers}}.</span>
            </div>   
        </div>
        </div> 
        <div class="comic-specs">
            <h3>Specs</h3>
            <div class="specialties-container">
                <p>Series:</p>
                <span class="specialties-list type">{{$comic->series}}</span>
            </div>
            <div class="specialties-container">
                <p>U.S. Price:</p>
                <span class="specialties-list normal-color">{{$comic->price}}</span>
            </div>
            <div class="specialties-container">
                <p>On Sale Date:</p>
                <span class="specialties-list normal-color">{{$comic->sale_date}}</span>
            </div>
        </div>
        
    </div>
</div>
{{-- merch --}}
<div id="merchandise-container" >
    <div class="container  smaller merch-container">
        <div class="merch">
            <p>Digital Comics</p>
            <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="merch-img">
        </div>
        <div class="merch">
            <p>Shop DC</p>
            <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="merch-img">
        </div>
        <div class="merch">
            <p>Comic shop locator</p>
            <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="merch-img">
        </div>
        <div class="merch">
            <p>Subscription</p>
            <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="merch-img">
        </div>
    </div>
</div>
@endsection

@section('scripts')
@vite('resources/js/modal.js')
@endsection