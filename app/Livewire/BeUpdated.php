<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Update;

class BeUpdated extends Component
{
    use WithPagination;

    public string $paginationTheme = 'simple-tailwind';
    public bool $scroll = false;

    public function render()
    {
        return view('livewire.be-updated', [
            'updates' => Update::where('is_approved', true)->latest()->paginate(6),
        ]);
    }
}

