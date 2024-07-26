<?php

namespace App\Livewire\User;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\CaseModel;

class Cases extends Component
{
    #[Title('Case Ctrl - Cases')]

    public $cases = [];

    public function mount() 
    {
        $this->cases = CaseModel::with(['surgeon', 'patient', 'location'])->get();
    }

    public function render()
    {
        return view('livewire.user.cases');
    }    
}
