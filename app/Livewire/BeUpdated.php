<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Update;

class BeUpdated extends Component
{
    use WithPagination;

    public bool $scroll = false;
    public $selectedUpdate = null;
    public bool $modalOpen = false;

    protected $paginationTheme = 'simple-tailwind';

    public function showUpdate($id)
    {
        $this->selectedUpdate = Update::findOrFail($id)->only([
            'title',
            'author',
            'content',
            'image_path',
            'created_at',
        ]);
        $this->modalOpen = true;
    }

    public function closeModal()
    {
        $this->modalOpen = false;
    }

    public function render()
    {
        return view('livewire.be-updated', [
            'updates' => Update::where('is_approved', true)->latest()->paginate(6)
        ]);
    }
}
