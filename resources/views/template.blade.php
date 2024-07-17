<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto web</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
	<div class="container px-4 mx-auto">
		<header class="flex justify-between items-center py-4">
			<div class="flex items-center flex-grow gap-4">
				<a href="{{ route('home') }}">
					<img src="{{ asset('images/logo.png') }}" class="h-12">
				</a>
				<form action="">
					<input type="text" placeholder="Buscar">
				</form>
			</div>

			@auth
			<a href="{{ route('dashboard') }}">Dashboard</a>
			@else
			<a href="{{ route('login') }}">Login</a>
			@endif
		</header>

        <div class="opacity-60 h-px mb-8" style="background: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.75) 50%, rgba(0, 0, 0, 0) 100%);"></div>
        </div>

		@yield('content')

        <p class="py-16">
            <img src="{{ asset('images/logo.png') }}" alt="" class="h-12 mx-auto">
        </p>
	</div>
</body>
</html>
