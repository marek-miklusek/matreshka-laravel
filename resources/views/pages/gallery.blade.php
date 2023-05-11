@extends('layouts.master')


@section('title', 'Galéria')

@section('content')

    <header class="gallery">

        <div class="gallery-show-nails">
            <h1>Ukážka mojej práce</h1>
            <p>Nechty</p>
        </div>
    
        <div class="gallery-image-second">
            @forelse (glob('images/gallery/*') as $image)
                <a href="{{ $image }}"><img src="{{ $image }}" alt="images of nails"></a>
            @empty
                <h4 class="nothing-to-show">Nothing to show :(</h4>
            @endforelse 
        </div>
    
    </header>

@endsection






