@extends('layouts.main')

@section('title', 'Modify Comic')

@section('main-content')
<div  id="comic-updating-form" class="comic-form">
    <div class="container">
        @if ($errors->any())
        <div class="form-errors">
            <h4>There are errors in the form:</h4>
            <ul>
                @foreach ($errors->all() as $error)
                <li>-{{$error}}</li>    
                @endforeach
            </ul>
        </div>
        @endif
        <h2>Update the comic!</h2>
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="input-group-container">
                <div class="input-container">
                    <label for="title">Title:</label>
                    <input type="text" class="comic-input" id="title" name="title" value="{{old('title', "$comic->title")}}">
                </div>
                <div class="input-container">
                    <label for="description">Description:</label>
                    <textarea rows="4" cols="50" class="comic-input" id="description" name="description" >{{old('description', "$comic->description")}}</textarea>
                </div>
                <div class="input-container">
                    <label for="thumb">Thumb:</label>
                    <input type="text" class="comic-input" id="thumb" name="thumb" value="{{old('thumb', "$comic->thumb")}}">
                    <img src="{{$comic->thumb}}" alt="" id="placeholder-thumb" >
                </div>
            </div>
            <div class="input-group-container">

                <div class="input-container">
                    <label for="price">Price:</label>
                    <input type="text" class="comic-input" id="price" name="price" value="{{old('price', "$comic->price")}}">
                </div>
                <div class="input-container">
                    <label for="series">Series:</label>
                    <input type="text" class="comic-input" id="series" name="series" value="{{old('series', "$comic->series")}}">
                </div>
                <div class="input-container">
                    <label for="sale_date">Sale date:</label>
                    <input type="text" class="comic-input" id="sale_date" name="sale_date"  value="{{old('sale_date', "$comic->sale_date")}}">
                </div>
            </div>
            <div class="input-group-container">

                <div class="input-container">
                    <label for="type">Type:</label>
                    <input type="text" class="comic-input" id="type" name="type" value="{{old('type', "$comic->type")}}">
                </div>
                <div class="input-container">
                    <label for="artists">Artists:</label>
                    <input type="text" class="comic-input" id="artists" name="artists"  value="{{old('artists', "$comic->artists")}}">
                </div>
                <div class="input-container">
                    <label for="writers">Writers:</label>
                    <input type="text" class="comic-input" id="writers" name="writers"  value="{{old('writers', "$comic->writers")}}">
                </div>
            </div>
            <div class="btn-div justify-center gap">
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