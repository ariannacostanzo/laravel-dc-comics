@extends('layouts.main')

@section('title', 'Add a new Comic')




@section('main-content')

<main  id="comic-creation-form">
    <div class="container">
        <form action="" method="POST">
            <div class="input-container">
                <label for="title">Title</label>
                <input type="text" class="comic-input" id="title" name="title" placeholder="Es.: Aquaman vol.4: Underworld">
            </div>
            <div class="input-container">
                <label for="description">Description</label>
                <textarea rows="4" cols="50" class="comic-input" id="description" name="description" placeholder="Es.: Enraged by rumors of Arthur’s survival in the slums of Atlantis, the ruthless King Rath orders the use of ancient Atlantean techno-magic to track down the Aquaman at all costs!"></textarea>
            </div>
            <div class="input-container">
                <label for="thumb">Thumb</label>
                <input type="text" class="comic-input" id="thumb" name="thumb" placeholder="Es.: https://">
                <img src="https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg" alt="" id="placeholder" >
            </div>
            <div class="input-container">
                <label for="price">Price</label>
                <input type="text" class="comic-input" id="price" name="price" placeholder="Es.: $15.99">
            </div>
            <div class="input-container">
                <label for="series">Series</label>
                <input type="text" class="comic-input" id="series" name="series" placeholder="Es.: Aquaman">
            </div>
            <div class="input-container">
                <label for="sale_date">Sale date</label>
                <input type="text" class="comic-input" id="sale_date" name="sale_date" placeholder="Es.: 2015-02-24">
            </div>
            <div class="input-container">
                <label for="type">Type</label>
                <input type="text" class="comic-input" id="type" name="type" placeholder="Es.: Graphic Novel">
            </div>
            <div class="input-container">
                <label for="artists">Artists</label>
                <input type="text" class="comic-input" id="artists" name="artists" placeholder="Es.: Stjepan Sejic, ...">
            </div>
            <div class="input-container">
                <label for="writers">Writers</label>
                <input type="text" class="comic-input" id="writers" name="writers" placeholder="Es.: Dan Abnett...">
            </div>
            <div class="btn-div">
                <button>Add</button>
            </div>
        </form>
    </div>
</main>

@endsection



@section('bonus')
@include('includes.bonus')
@endsection