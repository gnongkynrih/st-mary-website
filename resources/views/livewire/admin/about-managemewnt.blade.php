<div>
    <form wire:submit="save" enctype="multipart/form-data" class="max-w-6xl mx-auto p-6 bg-white rounded shadow">
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="title">Title</label>
            <input wire:model="title" type="text" id="title" class="w-full px-3 py-2 border rounded" placeholder="Enter title">
            @error('title') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="contents">Contents</label>
            <div wire:ignore>
                <div id="quill-editor" class="bg-white" style="min-height: 150px; border-radius: 0.375rem;"></div>
            </div>
            <input type="hidden" wire:model.debounce.500ms="contents" id="contents">
            @error('contents') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="image">Image</label>
            <input wire:model="image" type="file" id="image" class="w-full">
            @error('image') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
        @if($image)
            <img src="{{ asset('storage/' . $image) }}" alt="Preview" class="w-24 h-24">
        @endif
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add About Content</button>
        @if (session('success'))
            <div class="mt-4 text-green-600">{{ session('success') }}</div>
        @endif
    </form>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        //this is executed when the DOM is loaded
        document.addEventListener('DOMContentLoaded', function () {
                // Initialize Quill  #quill-editor is the id of the div
                const quill = new Quill('#quill-editor', {
                    theme: 'snow',
                    modules: {
                        toolbar: [
                            [{ 'header': [1, 2, 3,4, false] }],
                            ['bold', 'italic', 'underline'],
                            // ['image', 'code-block'],
                            [{ 'list': 'ordered' }, { 'list': 'bullet' }]
                        ]
                    }
                });

                // Get initial content from Livewire
                const initialContent = @json($this->contents);
                if (initialContent) {
                    quill.root.innerHTML = initialContent;
                }

                // Update Livewire on text change with debounce
                let debounceTimeout;
                quill.on('text-change', function () {
                    clearTimeout(debounceTimeout);
                    debounceTimeout = setTimeout(() => {
                        const content = quill.root.innerHTML;
                        @this.set('contents', content);
                    }, 500); // Match wire:model.debounce.500ms
                });

                // Listen for Livewire updates to avoid infinite loops
                window.Livewire.on('updateContent', (content) => {
                    if (quill.root.innerHTML !== content) {
                        quill.root.innerHTML = content || '';
                    }
                });

                // Debugging: Log initialization
                console.log('Quill initialized');
            });
        </script>
</div>