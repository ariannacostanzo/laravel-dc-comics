<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics | @yield('title')</title>
    <link rel="icon" href="{{Vite::asset('resources/img/favicon.ico')}}" >
    <style>body {visibility: hidden}</style>
    @yield('cdns')
    @vite('resources/js/app.js')
    
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>
<body>
    {{-- header --}}
    @include('includes.header')
    {{-- header --}}

    {{-- jumbotron --}}
    <figure id="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">
    </figure>
     {{-- jumbotron --}}

     {{-- main --}}
     @yield('main-content')
     {{-- main --}}

    {{-- bonus --}}
    @yield('bonus')
    
    {{-- bonus --}}

    {{-- footer --}}
    @include('includes.footer')
    {{-- footer --}}

</body>
</html>