<div class="px-10">
    <h1 class="text-2xl font-bold">About Us</h1>
    <hr class="mt-4 rounded-lg w-1/4 mx-auto border-6 border-white"/>
    <div>
        <img src="{{ asset('storage/' . $about->image) }}" alt="About Us" class="w-full h-[80vh] rounded-lg">
    </div>
    <div>
        <h2 class="text-2xl font-bold">{{ $about->title }}</h2>
        <p class="mt-4">{!! $about->contents !!}</p>
    </div>
</div>
