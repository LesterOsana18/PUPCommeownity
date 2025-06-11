<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Update;
use Illuminate\Support\Facades\Auth;

class PostUpdate extends Component
{
    use WithFileUploads;

    public string $title = '';
    public string $content = '';
    public $image;

    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'nullable|image|max:2048',
    ];

    public function submit()
    {
        $this->validate();

        $imagePath = $this->image
            ? $this->image->store('updates', 'public')
            : null;

        Update::create([
            'title' => $this->title,
            'author' => Auth::check()
                ? trim(Auth::user()->first_name . ' ' . Auth::user()->last_name)
                : 'Anonymous',
            'excerpt' => str()->limit(strip_tags($this->content), 300),
            'content' => $this->content,
            'image_path' => $imagePath,
            'is_approved' => false,
        ]);

        // Reset only your form fields, leave UI to Alpine
        $this->reset(['title', 'content', 'image']);

        // Flash message for the next Blade render
        session()->flash('message', 'Your update has been submitted and is pending approval.');

        // Tell Alpine “hey, we’re done—close the modal”
        $this->dispatchBrowserEvent('update-posted');
    }

    public function render()
    {
        return view('livewire.post-update');
    }
}
