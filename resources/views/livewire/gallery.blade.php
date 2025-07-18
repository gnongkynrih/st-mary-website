<div class="p-10" x-data="{ showModal: false, modalImg: '' }">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        @foreach([
            'https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg',
            'https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg',
            'https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg',
            'https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg',
            'https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg',
            'https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg',
            'https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg',
            'https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg',
            'https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg',
            'https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg',
            'https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg',
            'https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg'
        ] as $img)
        <div>
            <img 
                @click="showModal = true; modalImg = '{{ $img }}'" 
                class="h-auto max-w-full rounded-lg cursor-pointer transition-transform hover:scale-105"
                src="{{ $img }}" alt="">
        </div>
        @endforeach
    </div>

    <!-- Modal -->
    <div 
        x-show="showModal" 
        x-transition 
        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-70"
        style="display: none;"
        @click.self="showModal = false"
    >
        <div class="relative bg-white rounded-lg shadow-lg max-w-2xl w-full p-4">
            <button @click="showModal = false" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800 text-2xl">&times;</button>
            <img :src="modalImg" class="w-full h-auto rounded" alt="Gallery Image">
        </div>
    </div>
</div>