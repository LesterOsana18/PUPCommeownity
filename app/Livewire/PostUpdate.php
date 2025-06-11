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
    public string $excerpt = '';
    public string $content = '';
    public $image;
    public $postModalOpen = false;

    protected $rules = [
        'title' => 'required|string|max:255',
        'excerpt' => 'nullable|string|max:300',
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
            'excerpt' => $this->excerpt,
            'content' => $this->content,
            'image_path' => $imagePath,
            'is_approved' => false,
        ]);


        $this->reset(['title', 'excerpt', 'content', 'image', 'postModalOpen']);
        session()->flash('message', 'Your update has been submitted and is pending approval.');
        $this->dispatch('updatePosted');
    }

    public function openModal()
    {
        $this->postModalOpen = true;
    }

    public function closeModal()
    {
        $this->postModalOpen = false;
    }

    public function render()
    {
        return view('livewire.post-update');
    }
}
