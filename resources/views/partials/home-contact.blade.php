<section id="contact" class="my-12 scroll-mt-16 p-6">
	<h2 class="mb-6 text-center text-3xl font-bold text-white sm:text-4xl">
		Contact Us
	</h2>
	<form action="/contact" method="post" class="items-left mx-auto flex max-w-3xl flex-col gap-4 text-xl sm:text-2xl pb-20">
		@csrf

		<label for="name">Name:</label>
		<input type="text" id="name" name="name" minlength="3" maxlength="60" placeholder="Your Name" value="{{ old('name') }}" class="w-full rounded-xl border border-solid border-slate-900 p-3 text-xl text-black dark:border-none sm:text-2xl"  required />
		<label for="email" >Email:</label>
		<input type="text" id="email" name="email" minlength="3" maxlength="60" placeholder="Your Email" value="{{ old('email') }}" class="w-full rounded-xl border border-solid border-slate-900 p-3 text-1xl text-black dark:border-none sm:text-2xl"  />
		<label for="message">Message:</label>
		<textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" class="w-full rounded-xl border border-solid border-slate-900 p-3 text-1xl text-black dark:border-none sm:text-2xl" required>{{ old('message') }}</textarea>
		<button
			class="w-48 rounded-xl border border-solid border-slate-900 bg-slate-300 p-3 text-slate-800 hover:bg-slate-200 active:bg-slate-100 dark:border-none">
			Submit
		</button>
	</form>
</section>