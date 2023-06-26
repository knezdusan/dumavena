<!DOCTYPE html>
<html lang="en" class="scroll-pt-6">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ $title ?? 'Dumavena IM Consulting' }}</title>
	@vite('resources/css/app.css')
	@vite('resources/js/app.js')

</head>
<body {{ $attributes->merge(['class' => 'text-gray-300 bg-gray-900']) }}>
	@if ($errors->any())
		<div class="bg-red-900 text-pale-200 text-center py-3">
				<strong>Whoops!</strong> There were some problems with your input.<br><br>
				<ul>
						@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
						@endforeach
				</ul>
		</div>
	@endif

	@if (session('msg'))
		<div class="bg-green-900 text-pale-200 text-center py-3">
				<strong>{{ session('msg') }}</strong>
		</div>
	@endif
	<header class="bg-slate-800  sticky top-0 z-10 border-b-2 border-black">	
		@include('partials/header')
	</header>
	<main class="">
		{{ $slot }}
	</main>
	<footer class="bg-slate-800 font-tsukimi border-2 border-black">
		@include('partials/footer')
	</footer>
</body>
</html>