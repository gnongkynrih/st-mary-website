
<footer class="w-full min-h-[20vh] bg-gray-900 text-gray-300 py-6 mt-8 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center justify-between">
        <div class="text-center md:text-left w-full md:w-auto mb-2 md:mb-0">
            <span class="font-semibold text-white">&copy; {{ date('Y') }} St. Mary's College</span> — All rights reserved.
        </div>
        <div class="flex space-x-4 justify-center md:justify-end w-full md:w-auto">
            <a href="{{ route('about-us') }}" class="hover:text-yellow-400 transition">About</a>
            <a href="{{ route('contact-us') }}" class="hover:text-yellow-400 transition">Contact</a>
            <a href="https://www.instagram.com/" target="_blank" class="hover:text-pink-400 transition" aria-label="Instagram">
                <svg class="inline h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.584.012 4.85.07 1.366.062 2.633.334 3.608 1.308.974.974 1.246 2.241 1.308 3.608.058 1.266.07 1.65.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.334 2.633-1.308 3.608-.974.974-2.241 1.246-3.608 1.308-1.266.058-1.65.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.334-3.608-1.308-.974-.974-1.246-2.241-1.308-3.608C2.212 15.584 2.2 15.2 2.2 12s.012-3.584.07-4.85c.062-1.366.334-2.633 1.308-3.608C4.552 2.604 5.819 2.332 7.185 2.27 8.45 2.212 8.834 2.2 12 2.2zm0-2.2C8.736 0 8.332.013 7.052.072 5.771.13 4.524.406 3.5 1.43c-1.024 1.024-1.3 2.271-1.358 3.552C2.013 8.332 2 8.736 2 12c0 3.264.013 3.668.072 4.948.058 1.281.334 2.528 1.358 3.552 1.024 1.024 2.271 1.3 3.552 1.358C8.332 21.987 8.736 22 12 22s3.668-.013 4.948-.072c1.281-.058 2.528-.334 3.552-1.358 1.024-1.024 1.3-2.271 1.358-3.552.059-1.28.072-1.684.072-4.948 0-3.264-.013-3.668-.072-4.948-.058-1.281-.334-2.528-1.358-3.552C19.476.406 18.229.13 16.948.072 15.668.013 15.264 0 12 0z"/><path d="M12 5.838A6.162 6.162 0 1 0 12 18.162 6.162 6.162 0 1 0 12 5.838zm0 10.162A4 4 0 1 1 12 8a4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.88 1.44 1.44 0 0 0 0-2.88z"/></svg>
            </a>
        </div>
    </div>
</footer>