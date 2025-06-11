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

    public string $search = '';

    protected $paginationTheme = 'simple-tailwind';

    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

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
        $updates = Update::where('is_approved', true)
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('author', 'like', '%' . $this->search . '%')
                    ->orWhere('excerpt', 'like', '%' . $this->search . '%');
            })
            ->latest()
            ->paginate(6);

        return view('livewire.be-updated', [
            'updates' => $updates,
        ]);
    }
}
