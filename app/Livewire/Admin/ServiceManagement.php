<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceManagement extends Component
{
    use WithFileUploads;

    public $services;
    public $title;
    public $description;
    public $image;
    public $service_id;
    public $editMode = false;
    public $oldImage;

    protected $rules = [
        'title' => 'required|string|max:100',
        'description' => 'required|string|max:255',
        'image' => 'nullable|image|max:2048',
    ];

    public function mount()
    {
        $this->fetchServices();
    }

    public function fetchServices()
    {
        $this->services = Service::all();
    }

    public function resetForm()
    {
        $this->title = '';
        $this->description = '';
        $this->image = null;
        $this->service_id = null;
        $this->editMode = false;
        $this->oldImage = null;
    }

    public function save()
    {
        $this->validate($this->rules);
        $imagePath = $this->image ? $this->image->store('services', 'public') : $this->oldImage;

        if ($this->editMode) {
            $service = Service::findOrFail($this->service_id);
            if ($this->image && $this->oldImage && Storage::disk('public')->exists($this->oldImage)) {
                Storage::disk('public')->delete($this->oldImage);
            }
            $service->update([
                'title' => $this->title,
                'description' => $this->description,
                'images' => $imagePath,
            ]);
        } else {
            Service::create([
                'title' => $this->title,
                'description' => $this->description,
                'images' => $imagePath,
            ]);
        }
        $this->resetForm();
        $this->fetchServices();
        session()->flash('message', $this->editMode ? 'Service updated!' : 'Service added!');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $this->service_id = $service->id;
        $this->title = $service->title;
        $this->description = $service->description;
        $this->oldImage = $service->images;
        $this->image = null;
        $this->editMode = true;
    }

    public function delete($id)
    {
        $service = Service::findOrFail($id);
        if ($service->images && Storage::disk('public')->exists($service->images)) {
            Storage::disk('public')->delete($service->images);
        }
        $service->delete();
        $this->resetForm();
        $this->fetchServices();
        session()->flash('message', 'Service deleted!');
    }

    public function render()
    {
        return view('livewire.admin.service-management');
    }
}
