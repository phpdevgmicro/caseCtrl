<?php

namespace App\Livewire\User;
use Livewire\Attributes\Title;
use Livewire\Component;


class Cases extends Component
{
    #[Title('Case Ctrl - Cases')]
    public function render()
    {
        return view('livewire.user.cases');
    }
}
