<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\About;

class AboutUs extends Component
{
    public function render()
    {
        $about = About::first(); //get the first row from the abouts table
        return view('livewire.about-us',[
            'about' => $about
        ]);
    }
}
