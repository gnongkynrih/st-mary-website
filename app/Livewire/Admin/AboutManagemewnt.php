<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\About;
use Livewire\WithFileUploads;

class AboutManagemewnt extends Component
{
    use WithFileUploads;
    public $title;
    public $contents;
    public $image;

    public function rules(){
        return [
            'title' => 'required',
            'contents' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    public function messages(){
        return [
            'title.required' => 'Title is required',
            'contents.required' => 'Contents is required',
            'image.required' => 'Image is required',
            'image.image' => 'Image must be an image',
            'image.mimes' => 'Image must be a jpeg, png, jpg, gif, or svg',
            'image.max' => 'Image must be less than 2MB',
        ];
    }
    public function mount(){
        $about = About::first();
        if($about){
            $this->title = $about->title;
            $this->contents = $about->contents;
            $this->image = $about->image;
        }
    }
    public function save(){
        $this->validate(); //validate the form

        //store the image
        $imagePath = $this->image->store('abouts', 'public');

        //we will add only one row in the abouts table
        $about = About::first();
        if($about){ //if about exists, then update
            $about->update([
                'title' => $this->title,
                'contents' => $this->contents,
                'image' => $imagePath,
            ]);
        }else{ //if about does not exist, then create
            $about = About::create([
                'title' => $this->title,
                'contents' => $this->contents,
                'image' => $imagePath,
            ]);
        }
        session()->flash('success', 'About created successfully');
        // $this->dispatch('updateContent', $this->contents);

    }
    public function render()
    {
        return view('livewire.admin.about-managemewnt');
    }
}
