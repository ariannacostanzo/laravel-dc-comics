<header>
    <div class="header container">
        <figure>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
        </figure>
        <nav>
            <ul>
                @foreach (config('header_nav') as $nav)
                    <li><a href="{{ route($nav['url']) }}" class=" @if (Route::is($nav['url'])) active @endif">{{ $nav['text'] }}</a></li>
                @endforeach
                {{-- <li><a href="{{route('characters')}}" class="{{ Route::is('characters') ? 'active' : '' }}">characters</a></li>  si poteva usare anche route is --}}
            </ul>
        </nav>
    </div>
</header>