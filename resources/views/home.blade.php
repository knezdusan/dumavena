<x-layout class="text-blue-600">
	<div id="main-wrapper" class="max-w-5xl border border-slate-800 mx-auto flex flex-col">
		@include('partials/home-hero')
		<hr class="mx-auto w-1/2 border-solid border-slate-500" />
		@include('partials/home-services')
		<hr class="mx-auto w-1/2 border-solid border-slate-500" />
		@include('partials/home-website-building')
		<hr class="mx-auto w-1/2 border-solid border-slate-500" />
		@include('partials/home-internet-marketing')
		<hr class="mx-auto w-1/2 border-solid border-slate-500" />
		@include('partials/home-consulting')
		<hr class="mx-auto w-1/2 border-solid border-slate-500" />
		@include('partials/home-testimonials')
		<hr class="mx-auto w-1/2 border-solid border-slate-500" />
		@include('partials/home-contact')

	</div>
	
</x-layout>