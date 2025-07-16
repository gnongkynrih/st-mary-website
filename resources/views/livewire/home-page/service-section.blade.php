<section class="py-12  min-h-[80vh] bg-yellow-300">
    <div class="max-w-5xl mx-auto px-4">
        <h2 class="text-5xl font-bold text-center mb-2 animate__animated animate__fadeInLeft animate__slower">Our <span class="text-white">Services</span></h2>
        <hr class="my-4 w-1/3 border-4 border-white mx-auto" />
        <p class="text-center text-gray-600 mb-8 text-lg">Enjoy a wide range of amenities designed for your comfort and convenience.</p>
        <div class="grid grid-cols-1  md:grid-cols-3 gap-8 animate__animated animate__fadeInRight animate__slow">
            @foreach ($services as $service)
            <div class="flex flex-col items-center text-center p-4 bg-gray-50 rounded shadow-sm">
                <svg class="w-12 h-12 text-yellow-500 mb-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M16 8a6 6 0 11-12 0 6 6 0 0112 0z"/><path d="M2 20h20M12 14v6m-6-6h12"/></svg>
                <span class="font-semibold text-lg mt-2">{{ $service->title }}</span>
                <span class="text-gray-500 text-sm mt-1">{{ $service->description }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

