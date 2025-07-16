<?php

namespace App\Livewire\HomePage;

use App\Models\Service;
use Livewire\Component;

class ServiceSection extends Component
{
    public $services;
    public function mount()
    {
        $this->services = Service::all();
    }
    public function render()
    {
        return view('livewire.home-page.service-section');
    }
}
