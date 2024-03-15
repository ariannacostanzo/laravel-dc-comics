@extends('layouts.main')

@section('title', 'Add a new Comic')




@section('main-content')

<div  id="comic-creation-form" class="comic-form">
    <div class="container">
        {{-- errors container  --}}
        @include('includes.comics.errors')
        
        <h2>Fill the fields to create a new comic!</h2>
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="input-group-container">
                <div class="input-container">
                    <label for="title">Title:</label>
                    <div>
                        <input type="text" class="comic-input @error('title') invalid-input @elseif(old('title', '')) valid-input @enderror" id="title" name="title" placeholder="Es.: Aquaman vol.4: Underworld" value="{{old('title', '')}}">
                        @error('title')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="input-container">
                    <label for="description">Description:</label>
                    <div>
                        <textarea rows="4" cols="50" class="comic-input @error('description') invalid-input @elseif(old('description', '')) valid-input @enderror" id="description" name="description" placeholder="Es.: Enraged by rumors of Arthur’s survival in the slums of Atlantis, the ruthless King Rath orders the use of ancient Atlantean techno-magic to track down the Aquaman at all costs!">{{old('description', '')}}</textarea>
                        @error('description')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="input-container">
                    <label for="thumb">Thumb:</label>
                    <div>
                        <input type="text" class="comic-input @error('thumb') invalid-input @elseif(old('thumb', '')) valid-input @enderror" id="thumb" name="thumb" placeholder="Es.: https://" value="{{old('thumb', '')}}">
                        @error('thumb')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </div>
                    <img src="https://bub.bh/wp-content/uploads/2018/02/image-placeholder.jpg" alt="" id="placeholder-thumb" >
                </div>
            </div>
            <div class="input-group-container">

                <div class="input-container">
                    <label for="price">Price:</label>
                    <div>
                        <input type="text" class="comic-input @error('price') invalid-input @elseif(old('price', '')) valid-input @enderror" id="price" name="price" placeholder="Es.: $15.99" value="{{old('price', '')}}">
                        @error('price')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="input-container">
                    <label for="series">Series:</label>
                    <div>
                        <input type="text" class="comic-input @error('series') invalid-input @elseif(old('series', '')) valid-input @enderror" id="series" name="series" placeholder="Es.: Aquaman" value="{{old('series', '')}}">
                        @error('series')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="input-container">
                    <label for="sale_date">Sale date:</label>
                    <div>
                        <input type="text" class="comic-input @error('sale_date') invalid-input @elseif(old('sale_date', '')) valid-input @enderror" id="sale_date" name="sale_date" placeholder="Es.: 2015-02-24" value="{{old('sale_date', '')}}">
                        @error('sale_date')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="input-group-container">

                <div class="input-container">
                    <label for="type">Type:</label>
                    <div>
                        <input type="text" class="comic-input @error('type') invalid-input @elseif(old('type', '')) valid-input @enderror" id="type" name="type" placeholder="Es.: Graphic Novel" value="{{old('type', '')}}">
                        @error('type')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="input-container">
                    <label for="artists">Artists:</label>
                    <div>
                        <input type="text" class="comic-input @error('artists') invalid-input @elseif(old('artists', '')) valid-input @enderror" id="artists" name="artists" placeholder="Es.: Stjepan Sejic, ..." value="{{old('artists', '')}}">
                        @error('artists')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="input-container">
                    <label for="writers">Writers:</label>
                    <div>
                        <input type="text" class="comic-input @error('writers') invalid-input @elseif(old('writers', '')) valid-input @enderror" id="writers" name="writers" placeholder="Es.: Dan Abnett, ..." value="{{old('writers', '')}}">
                        @error('writers')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="btn-div justify-center gap">
                <button type="reset">Reset</button>
                <button type="submit">Add</button>
            </div>
        </form>
    </div>
</div>

@endsection



@section('bonus')
@include('includes.bonus')
@endsection

@section('scripts')
<script>

const inputUrl = document.getElementById('thumb');
const imgPlaceholder = document.getElementById('placeholder-thumb');
const emptyImg = "https://bub.bh/wp-content/uploads/2018/02/image-placeholder.jpg"

inputUrl.addEventListener('input', () => {
    typedUrl = inputUrl.value;
    imgPlaceholder.src = typedUrl ? typedUrl : emptyImg;

});

</script>

@endsection