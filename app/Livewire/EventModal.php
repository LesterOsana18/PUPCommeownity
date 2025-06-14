<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Event;

class EventModal extends Component
{
    public $eventId;
    public $event;
    public $showModal = false;

    protected $listeners = ['openEventModal' => 'loadEvent'];

    public function loadEvent($eventId)
    {
        $this->eventId = $eventId;
        $this->event = Event::findOrFail($eventId);
        $this->showModal = true;
    }

    public function volunteer()
    {
        if (auth()->check()) {
            // Add volunteer logic here
            $this->event->volunteers()->attach(auth()->id());
            session()->flash('message', 'Thank you for volunteering!');
            $this->showModal = false;
            $this->dispatch('eventUpdated');
        } else {
            return redirect()->route('register');
        }
    }

    public function render()
    {
        return view('livewire.event-modal');
    }
}