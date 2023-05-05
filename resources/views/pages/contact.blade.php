@extends('layouts.master')


@section('title', 'Kontakt')
    
@section('content')
    
    <div class="form container">

        <form class="form-group" action="/Kontakt" method="POST">
            @csrf

            <h2>Objednajte sa online</h2>

            <p><input type="text" name="name" value="{{ old('name') }}" placeholder="Vaše meno"></p>
            @error('name')
                <p class="errors">{{ $message }}</p>
            @enderror

            <p><input type="email" name="email" value="{{ old('email') }}" placeholder="Váš email"></p>
            @error('email')
                <p class="errors">{{ $message }}</p>
            @enderror

            <p><textarea name="text" cols="50" rows="3" placeholder="Vaša správa">{{ old('text') }}</textarea></p>
            @error('text')
                <p class="errors">{{ $message }}</p>
            @enderror

            <p><button name="submit" type="submit" class="btn">Odoslať email</button></p>

        </form>

    </div>

@endsection









