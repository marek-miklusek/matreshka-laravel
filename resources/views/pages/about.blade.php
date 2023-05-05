@extends('layouts.master')


@section('title', 'O salóne')

@section('content')

    <header class="about-salon-bg">

        <div class="about-salon-header">

            <h2>Matréshka Manikúra Pedikúra</h2>
            <p>Salón Matréshka Manikúra Pedikúra vás víta v útulnom a príjemnom prostredí, v Banskej Bystrici v mestskej časti Fončorda. Teším sa na vašu návštevu. </p>
            
            <div class="buttons-about-salon">
                <?= order_button() ?>
                <a href="cenník.php" class="price_button"><i class="fa-solid fa-circle-chevron-right"></i>CENNÍK</a>
            </div>

        </div>

    </header>

    @include('partials.why-me')

    <div class="about-owner">

        <img src="images/general/the-most-beautiful-woman-in-the-world.jpg" alt="fotka majitelky salona">

        <div class="about-owner-text">
            <p>„Salón začínal s jedným malým manikérskym stolíkom v roku 2010 a vďaka spokojnosti klientov sme časom vybudovali celý systém služieb v oblasti nechtového dizajnu, pedikúry a kozmetiky. Pravidelné vzdelávanie je u nás prvoradé, aby sme vedeli ponúkať prvotriednu kvalitu, ale stále s individuálnym prístupom ku klientovi.„</p>
            <h4>Viktória Ilchenko</h4>
            <p>Majiteľka, Matréshka Manikúra Pedikúra</p>
        </div>

    </div>

@endsection
