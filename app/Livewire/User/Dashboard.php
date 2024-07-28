<?php

namespace App\Livewire\User;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\CaseModel;

class Dashboard extends Component
{    
    #[Title('Case Ctrl - Dashboard')]

    public $caseCounts = [
        'DRAFT' => 0,
        'INPROGRESS' => 0,
        'READYTOCONFIRM' => 0,
        'CONFIRMED' => 0,
        'COMPLETED' => 0,
        'HOLD' => 0,
        'CANCELED' => 0,
    ];

    public function mount() 
    {
        $cases = CaseModel::select('case_status', \DB::raw('count(*) as total'))
                          ->groupBy('case_status')
                          ->get();

        foreach ($cases as $case) {
            $this->caseCounts[$case->case_status] = $case->total;
        }
    }

    public function render()
    {
        return view('livewire.user.dashboard');
    }   
}
