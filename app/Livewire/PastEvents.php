<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Event;

class PastEvents extends Component
{
    use WithPagination;

    protected $paginationTheme = 'paginator';

    public function paginationView()
    {
        return 'vendor.pagination.paginator';
    }

    public function render()
    {
        $pastEvents = Event::where(function ($query) {
                $query->where('status', 'PAST')
                    ->orWhere('date', '<', now()->toDateString());
            })
            ->orderByDesc('date')
            ->paginate(3);

        return view('livewire.past-events', [
            'pastEvents' => $pastEvents
        ]);
    }
}
