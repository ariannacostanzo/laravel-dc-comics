@extends('layouts.main')

@section('title', 'Add a new Comic')




@section('main-content')

<div class="container" id="comic-creation-form">
<form action="" method="POST">
        <div class="input-container">
            <label for="title">Title</label>
            <input type="text" class="comic-input" id="title" name="title" >
        </div>
        <div class="input-container">
            <label for="description">Description</label>
            <textarea rows="4" cols="50" class="comic-input" id="description" name="description"></textarea>
        </div>
        <div class="input-container">
            <label for="thumb">Thumb</label>
            <input type="text" class="comic-input" id="thumb" name="thumb" >
        </div>
        <div class="input-container">
            <label for="price">Price</label>
            <input type="text" class="comic-input" id="price" name="price" >
        </div>
        <div class="input-container">
            <label for="series">Series</label>
            <input type="text" class="comic-input" id="series" name="series" >
        </div>
        <div class="input-container">
            <label for="sale_date">Sale date</label>
            <input type="text" class="comic-input" id="sale_date" name="sale_date" >
        </div>
        <div class="input-container">
            <label for="type">Type</label>
            <input type="text" class="comic-input" id="type" name="type" >
        </div>
        <div class="input-container">
            <label for="artists">Artists</label>
            <input type="text" class="comic-input" id="artists" name="artists" >
        </div>
        <div class="input-container">
            <label for="writers">Writers</label>
            <input type="text" class="comic-input" id="writers" name="writers" >
        </div>
        <button>Add</button>
    </form>
</div>

@endsection



@section('bonus')
@include('includes.bonus')
@endsection