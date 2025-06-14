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
        return view('livewire.past-events', [
            'pastEvents' => Event::where('status', 'PAST')
                            ->orderByDesc('date')
                            ->paginate(3)
        ]);
    }
}
