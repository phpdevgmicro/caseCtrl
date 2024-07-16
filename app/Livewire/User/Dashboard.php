<?php

namespace App\Livewire\User;
use Livewire\Attributes\Title;
use Livewire\Component;

class Dashboard extends Component
{
    
    #[Title('Case Ctrl - Dashboard')]
    public function render()
    {
        return view('livewire.user.dashboard');
    }
}
