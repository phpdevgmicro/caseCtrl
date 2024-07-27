<?php

namespace App\Livewire\User;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\CaseModel;

class Dashboard extends Component
{    
    #[Title('Case Ctrl - Dashboard')]

    public $draftCase = 0;
    public $progressCase = 0;
    public $readyToConfirmCase = 0;
    public $confirmedCase = 0;
    public $completedCase = 0;
    public $holdCase = 0;
    public $canceledCase = 0;

    public function mount() 
    {
        $this->draftCase = CaseModel::where('save_as', 'draft')->count();
        // $this->draftCase = CaseModel::where('save_as', 'draft')->count();
        // $this->draftCase = CaseModel::where('save_as', 'draft')->count();
        // $this->draftCase = CaseModel::where('save_as', 'draft')->count();
        // $this->draftCase = CaseModel::where('save_as', 'draft')->count();
        // $this->draftCase = CaseModel::where('save_as', 'draft')->count();
        // $this->draftCase = CaseModel::where('save_as', 'draft')->count();
        //dd($this->cases);
    }

    public function render()
    {
        return view('livewire.user.dashboard');
    }   
}
