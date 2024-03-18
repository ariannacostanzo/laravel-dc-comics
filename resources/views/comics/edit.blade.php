@extends('layouts.main')

@section('title', 'Modify Comic')

@section('main-content')
<div  id="comic-updating-form" class="comic-form">
    <div class="container">
        {{-- errors container  --}}
        @include('includes.comics.errors')

        <h2>Update the comic!</h2>
        
        {{-- form --}}
        @include('includes.comics.form')
    </div>
</div>

    
@endsection


@section('scripts')
<script>
@vite('resources/js/preview_img.js')
</script>

@endsection