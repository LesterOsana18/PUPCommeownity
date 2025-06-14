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
    public bool $filterByPaws = false;

    protected $paginationTheme = 'simple-tailwind';
    protected $queryString = ['search'];
    protected $listeners = ['filter-updated' => 'onFilterUpdated'];

    public function onFilterUpdated()
    {
        $this->filterByPaws = session('filterByPaws', false);
        $this->resetPage();
    }

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
            'user_id',
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
        $this->filterByPaws = session('filterByPaws', false);

        $updates = Update::with('pawedByUsers')
            ->where('is_approved', true)
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('author', 'like', '%' . $this->search . '%')
                    ->orWhere('excerpt', 'like', '%' . $this->search . '%');
            })
            ->when($this->filterByPaws && auth()->check(), function ($query) {
                $query->whereHas('pawedByUsers', function ($q) {
                    $q->where('users.id', auth()->id());
                });
            })
            ->orderBy('id', 'desc')
            ->paginate(6);

        return view('livewire.be-updated', [
            'updates' => $updates,
            'filterByPaws' => $this->filterByPaws,
        ]);
    }
}
