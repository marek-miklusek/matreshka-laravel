@extends('layouts.master')


@section('title', 'Galéria')

@section('content')

    <header class="gallery">

        <div class="gallery_show_nails">
            <h1>Ukážka mojej práce</h1>
            <p>Nechty</p>
        </div>
    
        <div class="gallery_image_second">
    
            @forelse (glob('images/gallery/*') as $image)
                <a href="{{ $image }}"><img src="{{ $image }}" alt="images of nails"></a>
            @empty
                <h4 class="nothing-to-show">Nothing to show :(</h4>
            @endforelse 
        
        </div>
    
    </header>

@endsection






