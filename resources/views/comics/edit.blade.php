@extends('layouts.main')

@section('title', 'Modify Comic')

@section('main-content')
<div  id="comic-updating-form" class="comic-form">
    <div class="container">
        @if ($errors->any())
        <div class="form-errors">
            <h4>There are errors in the form</h4>
        </div>
        @endif
        <h2>Update the comic!</h2>
        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="input-group-container">
                <div class="input-container">
                    <label for="title">Title:</label>
                    <div>
                        <input type="text" class="comic-input @error('title') invalid-input @enderror" id="title" name="title" value="{{old('title', "$comic->title")}}">
                        @error('title')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="input-container">
                    <label for="description">Description:</label>
                    <div>
                        <textarea rows="4" cols="50" class="comic-input @error('description') invalid-input @enderror" id="description" name="description" >{{old('description', "$comic->description")}}</textarea>
                        @error('description')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="input-container">
                    <label for="thumb">Thumb:</label>
                    <div>
                        <input type="text" class="comic-input @error('thumb') invalid-input @enderror" id="thumb" name="thumb" value="{{old('thumb', "$comic->thumb")}}">
                        @error('thumb')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </div>
                    <img src="{{$comic->thumb}}" alt="" id="placeholder-thumb" >
                </div>
            </div>
            <div class="input-group-container">

                <div class="input-container">
                    <label for="price">Price:</label>
                    <div>
                        <input type="text" class="comic-input @error('price') invalid-input @enderror" id="price" name="price" value="{{old('price', "$comic->price")}}">
                        @error('price')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="input-container">
                    <label for="series">Series:</label>
                    <div>
                        <input type="text" class="comic-input @error('series') invalid-input @enderror" id="series" name="series" value="{{old('series', "$comic->series")}}">
                        @error('series')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="input-container">
                    <label for="sale_date">Sale date:</label>
                    <div>
                        <input type="text" class="comic-input @error('sale_date') invalid-input @enderror" id="sale_date" name="sale_date"  value="{{old('sale_date', "$comic->sale_date")}}">
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
                        <input type="text" class="comic-input @error('type') invalid-input @enderror" id="type" name="type" value="{{old('type', "$comic->type")}}">
                        @error('type')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="input-container">
                    <label for="artists">Artists:</label>
                    <div>
                        <input type="text" class="comic-input @error('artists') invalid-input @enderror" id="artists" name="artists"  value="{{old('artists', "$comic->artists")}}">
                        @error('artists')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="input-container">
                    <label for="writers">Writers:</label>
                    <div>
                        <input type="text" class="comic-input @error('writers') invalid-input @enderror" id="writers" name="writers"  value="{{old('writers', "$comic->writers")}}">
                        @error('writers')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="btn-div justify-center gap">
                <a href="{{route('comics.show', $comic->id)}}">Back</a>
                <button type="submit">Save</button>
            </div>
        </form>
    </div>
</div>

    
@endsection


@section('scripts')
<script>

const inputUrl = document.getElementById('thumb');
const imgPlaceholder = document.getElementById('placeholder-thumb');
const emptyImg = "https://bub.bh/wp-content/uploads/2018/02/image-placeholder.jpg"

inputUrl.addEventListener('input', () => {
    typedUrl = inputUrl.value;
    console.log(typedUrl)
    imgPlaceholder.src = typedUrl ? typedUrl : emptyImg;

});

</script>

@endsection