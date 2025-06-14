<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Event;

class CurrentEvents extends Component
{
    use WithPagination;

    protected $paginationTheme = 'paginator';

    public function paginationView()
    {
        return 'vendor.pagination.paginator';
    }

    public function render()
    {
        return view('livewire.current-events', [
            'currentEvents' => Event::where('status', 'CURRENT')
                                ->orderBy('date')
                                ->paginate(3)
        ]);
    }
}
