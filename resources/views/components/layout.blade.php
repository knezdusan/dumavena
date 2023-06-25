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