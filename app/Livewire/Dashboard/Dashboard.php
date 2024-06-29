<?php

namespace App\Livewire\Dashboard;

use App\Models\Rsvp;
use App\Models\Tamu;
use Livewire\Component;

class Dashboard extends Component
{
    public $tamuCount;
    public $rsvpCount;

    public function mount()
    {
        $this->tamuCount = Tamu::count();
        $this->rsvpCount = Rsvp::count();
    }
    public function render()
    {
        return view('livewire.dashboard.dashboard');
    }
}
