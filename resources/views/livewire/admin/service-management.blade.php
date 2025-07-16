<div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">Service Management</h2>

    @if (session()->has('message'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="save" enctype="multipart/form-data" class="mb-8 bg-white shadow rounded p-4">
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Title</label>
            <input type="text" wire:model.defer="title" class="w-full border rounded px-3 py-2" placeholder="Enter service title">
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Description</label>
            <textarea wire:model.defer="description" class="w-full border rounded px-3 py-2" placeholder="Service description"></textarea>
            @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Image</label>
            <input type="file" wire:model="image" class="w-full">
            @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            <div class="mt-2">
                @if ($image)
                    <span class="block mb-2">Preview:</span>
                    <img src="{{ $image->temporaryUrl() }}" class="h-24 rounded shadow">
                @elseif ($oldImage)
                    <span class="block mb-2">Current Image:</span>
                    <img src="{{ asset('storage/' . $oldImage) }}" class="h-24 rounded shadow">
                @endif
            </div>
        </div>
        <div class="flex space-x-2">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">{{ $editMode ? 'Update' : 'Add' }}</button>
            <button type="button" wire:click="resetForm" class="bg-gray-400 text-white px-4 py-2 rounded">Reset</button>
        </div>
    </form>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow rounded">
            <thead>
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Image</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($services as $service)
                    <tr>
                        <td class="border px-4 py-2">{{ $service->id }}</td>
                        <td class="border px-4 py-2">{{ $service->title }}</td>
                        <td class="border px-4 py-2">{{ $service->description }}</td>
                        <td class="border px-4 py-2">
                            @if($service->images)
                                <img src="{{ asset('storage/' . $service->images) }}" class="h-12 rounded">
                            @endif
                        </td>
                        <td class="border px-4 py-2 space-x-2">
                            <button wire:click="edit({{ $service->id }})" class="bg-yellow-400 text-white px-2 py-1 rounded">Edit</button>
                            <button wire:click="delete({{ $service->id }})" class="bg-red-600 text-white px-2 py-1 rounded" onclick="return confirm('Delete this service?')">Delete</button>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="text-center py-4">No services found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

