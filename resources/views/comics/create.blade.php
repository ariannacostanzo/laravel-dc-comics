@extends('layouts.main')

@section('title', 'Add a new Comic')




@section('main-content')

<div  id="comic-creation-form" class="comic-form">
    <div class="container">
        {{-- errors container  --}}
        @include('includes.comics.errors')

        <h2>Fill the fields to create a new comic!</h2>

        {{-- form --}}
        @include('includes.comics.form')
        
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