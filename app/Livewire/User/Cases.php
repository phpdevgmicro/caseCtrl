<?php

namespace App\Livewire\User;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\CaseModel;

class Cases extends Component
{
    #[Title('Case Ctrl - Cases')]

    public $cases = [];
    public $status = "INPROGRESS";
    public $caseCount = 0;

    public $caseStatus = [
        "DRAFT" => ["text" => "Draft Cases", "count" => 0],
        "INPROGRESS" => ["text" => "In Progress Cases", "count" => 0],
        "READYTOCONFIRM" => ["text" => "Ready To Confirm Cases", "count" => 0],
        "CONFIRMED" => ["text" => "Confirmed Cases", "count" => 0],
        "COMPLETED" => ["text" => "Completed Cases", "count" => 0],
        "HOLD" => ["text" => "Holding Cases", "count" => 0],
        "CANCELED" => ["text" => "Canceled Cases", "count" => 0]
    ];  

    public function mount() 
    {
        $this->cases = CaseModel::with(['surgeon', 'patient', 'location'])->orderby('id', 'desc')->get();
        $this->updatedStatus();
    }

    public function updatedStatus()
    {
        $this->caseStatus[$this->status]['count'] = CaseModel::where('case_status', $this->status)->count();
    }

    public function render()
    {
        return view('livewire.user.cases');
    }    
}
