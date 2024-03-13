<header>
    <div class="header container">
        <figure>
            <a href="{{route('home')}}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
            </a>
        </figure>
        <nav>
            <ul>
                @foreach (config('header_nav') as $nav)
                    <li><a href="{{ route($nav['url']) }}" class=" @if (Route::is($nav['url'])) active @endif">{{ $nav['text'] }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>