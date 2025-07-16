<?php

namespace App\Livewire\HomePage;

use App\Models\Hero;
use Livewire\Component;

class HeroSection extends Component
{
    public $images;
    public function mount()
    {
        $this->images = Hero::all();
    }
    public function render()
    {
        return view('livewire.home-page.hero-section');
    }
}
