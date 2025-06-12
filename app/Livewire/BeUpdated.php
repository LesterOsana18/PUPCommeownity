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
            'id',
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

    public function togglePaw($updateId)
    {
        $update = Update::findOrFail($updateId);
        $user = auth()->user();

        if (!$user)
            return;

        if ($update->pawedByUsers()->where('user_id', $user->id)->exists()) {
            $update->pawedByUsers()->detach($user->id);
            $this->dispatch('paw-toggled', status: 'unpawed');
        } else {
            $update->pawedByUsers()->attach($user->id);
            $this->dispatch('paw-toggled', status: 'pawed');
        }

        $this->dispatch('$refresh'); // force UI to reflect update
    }

    public function render()
    {
        $updates = Update::with('pawedByUsers') // 🐾 Load relationship
            ->where('is_approved', true)
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('author', 'like', '%' . $this->search . '%')
                    ->orWhere('excerpt', 'like', '%' . $this->search . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(6);

        return view('livewire.be-updated', [
            'updates' => $updates,
        ]);
    }
}
