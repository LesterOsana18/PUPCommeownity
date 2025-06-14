<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Event;
use App\Models\Volunteer;

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
            $user = auth()->user();
            $fullName = $user->first_name . ' ' . $user->last_name;

            // Check if already volunteered
            if ($this->event->volunteers()->where('user_id', $user->id)->exists()) {
                session()->flash('error', 'You are already volunteering for this event!');
                $this->redirect(route('volunteer'));
                return;
            }

            // Create new volunteer record
            Volunteer::create([
                'event_id' => $this->event->id,
                'user_id' => $user->id,
                'name' => $fullName
            ]);

            // Flash success message and redirect
            session()->flash('message', 'Thank you for volunteering!');
            $this->redirect(route('volunteer'));
        } else {
            return redirect()->route('register');
        }
    }
    public function render()
    {
        return view('livewire.event-modal');
    }
}