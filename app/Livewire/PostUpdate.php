<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Update;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PostUpdate extends Component
{
    use WithFileUploads;

    public string $title = '';
    public string $content = '';
    public $image;

    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string|max:10000',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ];

    protected $messages = [
        'title.required' => 'Title is required.',
        'title.max' => 'Title cannot exceed 255 characters.',
        'content.required' => 'Content is required.',
        'content.max' => 'Content cannot exceed 10,000 characters.',
        'image.image' => 'The file must be an image.',
        'image.mimes' => 'Only JPEG, PNG, JPG, and GIF images are allowed.',
        'image.max' => 'Image size cannot exceed 2MB.',
    ];

    public function submit()
    {
        try {
            // Validate the form data
            $this->validate();

            // Handle image upload
            $imagePath = $this->image
                ? $this->image->store('updates', 'public')
                : 'images/def-img.svg';

            // Get authenticated user
            $user = Auth::user();

            // Create the update record
            $update = Update::create([
                'title' => $this->title,
                'author' => $user ? trim($user->first_name . ' ' . $user->last_name) : 'Anonymous',
                'excerpt' => $this->generateExcerpt($this->content),
                'content' => $this->content,
                'image_path' => $imagePath,
                'is_approved' => false,
                'user_id' => $user?->id,
            ]);

            // Log successful creation for debugging
            Log::info('Update created successfully', [
                'update_id' => $update->id,
                'title' => $update->title,
                'user_id' => $user?->id,
                'author' => $update->author
            ]);

            // Reset form fields
            $this->reset(['title', 'content', 'image']);

            // Flash success message
            session()->flash('message', 'Your post has been submitted for review.');
            return redirect()->route('home');

        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Failed to create update', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'user_id' => Auth::id()
            ]);

            // Show error to user
            session()->flash('error', 'There was an error submitting your update. Please try again.');
            return redirect()->route('home');
        }
    }

    private function generateExcerpt(string $content): string
    {
        return str()->limit(strip_tags($content), 300);
    }

    public function render()
    {
        return view('livewire.post-update-page')
            ->layout('components.layout'); // uses your existing layout
    }
}
