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
        $currentEvents = Event::where('status', 'CURRENT')
            ->whereDate('date', '>=', now()->toDateString())
            ->orderBy('date')
            ->paginate(3);

        return view('livewire.current-events', [
            'currentEvents' => $currentEvents
        ]);
    }
}
