@php
	$social = config('myconfig.social');
@endphp

<nav>

	<div class="tel-social-media">

		<div class="telephone">
			<i class="fa-solid fa-phone"></i>
			<p>{{ $social->contact_phone }}</p>
		</div>

		<a href="{{ $social->facebook }}" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
		<a href="{{ $social->instagram }}" title="Instagram"><i class="fa-brands fa-instagram"></i></a>

	</div>

	<div class="main-navigation">

		<a href="/">
			<img src="{{ asset('images/general/logo1.jpg') }}" class="logo" alt="logo">
		</a>

		<ul class="main-navigation-a">

			@foreach ($nav_links as $path => $name)
				<li>
					@if (trim($path, '/') == Request::segment(1))
						<strong class="{{ contact_bg($name) }}">{{ $name }}</strong>
					@else
						<a href="{{ $path }}" class="{{ contact_bg($name) }}">{{ $name }}</a>
					@endif
				</li>
			@endforeach

		</ul>

	</div>

</nav>