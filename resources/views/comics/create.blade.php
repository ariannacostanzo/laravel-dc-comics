@extends('layouts.main')

@section('title', 'Add a new Comic')




@section('main-content')

<div  id="comic-creation-form" class="comic-form">
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
        <h2>Fill the fields to create a new comic!</h2>
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="input-group-container">
                <div class="input-container">
                    <label for="title">Title:</label>
                    <input type="text" class="comic-input @error('title') invalid-input @enderror" id="title" name="title" placeholder="Es.: Aquaman vol.4: Underworld" value="{{old('title', '')}}">
                </div>
                <div class="input-container">
                    <label for="description">Description:</label>
                    <textarea rows="4" cols="50" class="comic-input @error('description') invalid-input @enderror" id="description" name="description" placeholder="Es.: Enraged by rumors of Arthur’s survival in the slums of Atlantis, the ruthless King Rath orders the use of ancient Atlantean techno-magic to track down the Aquaman at all costs!">{{old('description', '')}}</textarea>
                </div>
                <div class="input-container">
                    <label for="thumb">Thumb:</label>
                    <input type="text" class="comic-input @error('thumb') invalid-input @enderror" id="thumb" name="thumb" placeholder="Es.: https://" value="{{old('thumb', '')}}">
                    <img src="https://bub.bh/wp-content/uploads/2018/02/image-placeholder.jpg" alt="" id="placeholder-thumb" >
                </div>
            </div>
            <div class="input-group-container">

                <div class="input-container">
                    <label for="price">Price:</label>
                    <input type="text" class="comic-input @error('price') invalid-input @enderror" id="price" name="price" placeholder="Es.: $15.99" value="{{old('price', '')}}">
                </div>
                <div class="input-container">
                    <label for="series">Series:</label>
                    <input type="text" class="comic-input @error('series') invalid-input @enderror" id="series" name="series" placeholder="Es.: Aquaman" value="{{old('series', '')}}">
                </div>
                <div class="input-container">
                    <label for="sale_date">Sale date:</label>
                    <input type="text" class="comic-input @error('sale_date') invalid-input @enderror" id="sale_date" name="sale_date" placeholder="Es.: 2015-02-24" value="{{old('sale_date', '')}}">
                </div>
            </div>
            <div class="input-group-container">

                <div class="input-container">
                    <label for="type">Type:</label>
                    <input type="text" class="comic-input @error('type') invalid-input @enderror" id="type" name="type" placeholder="Es.: Graphic Novel" value="{{old('type', '')}}">
                </div>
                <div class="input-container">
                    <label for="artists">Artists:</label>
                    <input type="text" class="comic-input @error('artists') invalid-input @enderror" id="artists" name="artists" placeholder="Es.: Stjepan Sejic, ..." value="{{old('artists', '')}}">
                </div>
                <div class="input-container">
                    <label for="writers">Writers:</label>
                    <input type="text" class="comic-input @error('writers') invalid-input @enderror" id="writers" name="writers" placeholder="Es.: Dan Abnett, ..." value="{{old('writers', '')}}">
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