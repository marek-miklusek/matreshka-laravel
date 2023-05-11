@extends('layouts.master')


@section('title', 'Domov')

@section('content')
    
    <header class="welcome">
        <div class="welcome-box text-center">
            <h1>Perfektná starostlivosť o vaše ruky a nohy <br> v mojom salóne,teším sa na vašu návštevu!</h1>
            <p>{{ order_button() }}</p>
        </div>
    </header>

    <main>

        <section class="services">
            @foreach ($services as $service)
                <div class="services-each">
                    <img src="images/general/logo-smaller.jpg" alt="">
                    <h2>{{ $service->name }}</h2>
                    <p>{{ $service->description }}</p>
                </div>
            @endforeach
        </section>

        @include('partials.why-me')

        <section class="matreshka-on-facebook">
            <h2>Matréshka Manikúra Pedikúra na Facebooku</h2>
            <div class="index-image-second">
                @foreach (glob('images/home/*') as $image)
                    <a href="{{ $image }}"><img src="{{ $image }}" alt="images of nails"></a>
                @endforeach
            </div>
            <a href="https://www.facebook.com/salonmatreshka" class="watch-me-fb"><i class="fa-brands fa-facebook"></i>Sledujte ma na Facebooku</a>
        </section>

    </main>
    
@endsection




 
