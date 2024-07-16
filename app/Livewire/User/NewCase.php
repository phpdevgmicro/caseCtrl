<?php

namespace App\Livewire\User;
use Livewire\Attributes\Title;
use Livewire\Component;

class NewCase extends Component
{
    #[Title('Case Ctrl - New Case')]
    public function render()
    {
        return view('livewire.user.new-case')->layoutData(['asideEnabled' => true]);
    }
}
