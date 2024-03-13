<section id="bonus">
    <ul class="container">
        @foreach (config('bonus') as $merch)
            <li>
            <img src="{{ Vite::asset('resources/img/' . $merch['image']) }}" alt="{{$merch['name']}}">
            {{$merch['name']}}
        </li>
        @endforeach
    </ul>
</section>