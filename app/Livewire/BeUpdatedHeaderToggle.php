<?php

namespace App\Livewire;

use Livewire\Component;

class BeUpdatedHeaderToggle extends Component
{
    public bool $filterByPaws = false;

    protected $listeners = ['filter-updated' => '$refresh'];

    public function toggle()
    {
        $this->filterByPaws = !$this->filterByPaws;
        session(['filterByPaws' => $this->filterByPaws]);

        $this->dispatch('filter-updated')->to('be-updated');
    }

    public function mount()
    {
        $this->filterByPaws = session('filterByPaws', false);
    }

    public function render()
    {
        return view('livewire.be-updated-header-toggle');
    }
}
