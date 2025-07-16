<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Hero;
use Illuminate\Support\Facades\Storage;

class HeroSliderManagement extends Component
{
    use WithFileUploads;

    public $heroes;
    public $title;
    public $image;
    public $hero_id;
    public $editMode = false;
    public $oldImage;

    protected $rules = [
        'title' => 'required|string|max:100',
        'image' => 'required|image|max:2048', // 2MB Max
    ];

    public function mount()
    {
        $this->fetchHeroes();
    }

    public function fetchHeroes()
    {
        $this->heroes = Hero::all();
    }

    public function resetForm()
    {
        $this->title = '';
        $this->image = null;
        $this->hero_id = null;
        $this->editMode = false;
        $this->oldImage = null;
    }

    public function save()
    {
        $this->validate($this->rules);

        $imagePath = $this->image->store('images', 'public');

        if ($this->editMode) {
            $hero = Hero::findOrFail($this->hero_id);
            if ($this->image && $this->oldImage && Storage::disk('public')->exists($this->oldImage)) {
                Storage::disk('public')->delete($this->oldImage);
            }
            $hero->update([
                'title' => $this->title,
                'images' => $imagePath,
            ]);
        } else {
            Hero::create([
                'title' => $this->title,
                'images' => $imagePath,
            ]);
        }
        $this->resetForm();
        $this->fetchHeroes();
        session()->flash('message', $this->editMode ? 'Hero updated!' : 'Hero added!');
    }

    public function edit($id)
    {
        $hero = Hero::findOrFail($id);
        $this->hero_id = $hero->id;
        $this->title = $hero->title;
        $this->oldImage = $hero->images;
        $this->image = null;
        $this->editMode = true;
    }

    public function delete($id)
    {
        $hero = Hero::findOrFail($id);
        if ($hero->images && Storage::disk('public')->exists($hero->images)) {
            Storage::disk('public')->delete($hero->images);
        }
        $hero->delete();
        $this->resetForm();
        $this->fetchHeroes();
        session()->flash('message', 'Hero deleted!');
    }

    public function render()
    {
        return view('livewire.admin.hero-slider-management');
    }

}
