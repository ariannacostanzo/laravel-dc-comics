{{-- se ho già il comic nel database --}}
@if($comic->exists) 
<form action="{{route('comics.update', $comic->id)}}" method="POST">
    @method('PUT')
{{-- se non ce l'ho --}}
@else
<form action="{{route('comics.store')}}" method="POST">
@endif     
{{-- quello in comune--}}
@csrf
<div class="input-group-container">
    <div class="input-container">
        <label for="title">Title:</label>
        <div>
            {{-- Se ho errori l'input ha la classe invalid, se ho già inviato qualcosa e l'input è valido ha la classe valid, se c'è il comic->value allora lo stampo, altrimenti ho il placeholder, cosi per tutti --}}
            <input type="text" class="comic-input @error('title') invalid-input @elseif(old('title', '')) valid-input @enderror" id="title" name="title" value="{{old('title', "$comic->title")}}" @if(!$comic->exists) placeholder="Es.: Aquaman vol.4: Underworld" @endif>
            @error('title')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>
    </div>
    <div class="input-container">
        <label for="description">Description:</label>
        <div>
            <textarea rows="4" cols="50" class="comic-input @error('description') invalid-input @elseif(old('description', '')) valid-input @enderror" id="description" name="description" @if(!$comic->exists) placeholder="Es.: Enraged by rumors of Arthur’s survival in the slums of Atlantis, the ruthless King Rath orders the use of ancient Atlantean techno-magic to track down the Aquaman at all costs!" @endif>{{old('description', "$comic->description")}}</textarea>
            @error('description')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>
    </div>
    <div class="input-container">
        <label for="thumb">Thumb:</label>
        <div>
            <input type="text" class="comic-input @error('thumb') invalid-input @elseif(old('thumb', '')) valid-input @enderror" id="thumb" name="thumb" value="{{old('thumb', "$comic->thumb")}}" @if(!$comic->exists) placeholder="Es.: https://" @endif>
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
            <input type="text" class="comic-input @error('price') invalid-input @elseif(old('price', '')) valid-input @enderror" id="price" name="price" value="{{old('price', "$comic->price")}}" @if(!$comic->exists) placeholder="Es.: $15.99" @endif>
            @error('price')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>
    </div>
    <div class="input-container">
        <label for="series">Series:</label>
        <div>
            <input type="text" class="comic-input @error('series') invalid-input @elseif(old('series', '')) valid-input @enderror" id="series" name="series" value="{{old('series', "$comic->series")}}" @if(!$comic->exists) placeholder="Es.: Aquaman" @endif>
            @error('series')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>
    </div>
    <div class="input-container">
        <label for="sale_date">Sale date:</label>
        <div>
            <input type="text" class="comic-input @error('sale_date') invalid-input @elseif(old('sale_date', '')) valid-input @enderror" id="sale_date" name="sale_date"  value="{{old('sale_date', "$comic->sale_date")}}" @if(!$comic->exists) placeholder="Es.: 2015-02-24" @endif>
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
            <input type="text" class="comic-input @error('type') invalid-input @elseif(old('type', '')) valid-input @enderror" id="type" name="type" value="{{old('type', "$comic->type")}}" @if(!$comic->exists) placeholder="Es.: Comic Book" @endif>
            @error('type')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>
    </div>
    <div class="input-container">
        <label for="artists">Artists:</label>
        <div>
            <input type="text" class="comic-input @error('artists') invalid-input @elseif(old('artists', '')) valid-input @enderror" id="artists" name="artists"  value="{{old('artists', "$comic->artists")}}" @if(!$comic->exists) placeholder="Es.: Stjepan Sejic, ..." @endif>
            @error('artists')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>
    </div>
    <div class="input-container">
        <label for="writers">Writers:</label>
        <div>
            <input type="text" class="comic-input @error('writers') invalid-input @elseif(old('writers', '')) valid-input @enderror" id="writers" name="writers"  value="{{old('writers', "$comic->writers")}}" @if(!$comic->exists) placeholder="Es.: Dan Abnett, ..." @endif>
            @error('writers')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>
    </div>
</div>
<div class="btn-div justify-center gap">
    {{-- cambio buttons in base a create o edit --}}
    @if($comic->exists)
    {{-- edit --}}
    <a href="{{route('comics.show', $comic->id)}}">Back</a>
    <button type="submit">Save</button>
    @else
    {{-- create --}}
    <button type="reset">Reset</button>
    <button type="submit">Create</button>
    @endif   
</div>
</form>