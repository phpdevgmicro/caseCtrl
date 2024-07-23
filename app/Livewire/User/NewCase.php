<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Surgeon;
use Livewire\Attributes\Title;

class NewCase extends Component
{
    #[Title('Case Ctrl - New Case')]
    public $surgeons;
    public $selectedSurgeon = null;
    public $surgeonAddresses = [];
    public $surgeonClinicLocations = [];
    public $count = 1;
 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }
 
    
    public function render()
    {
        return view('livewire.user.new-case', [
            'sections' => [
                ["id" => "surgeon", "title" => "Surgeon Information", "icon" => '<i class="las la-user-md text-gray-400 fs-1"></i>'],
                ["id" => "patient", "title" => "Patient Information", "icon" => '<i class="las la-user-circle text-gray-400 fs-1"></i>'],
                ["id" => "scheduling", "title" => "Scheduling Details", "icon" => '<i class="las la-calendar text-gray-400 fs-1"></i>'],
                ["id" => "surgical-case", "title" => "Surgical Case Details", "icon" => '<i class="las la-briefcase-medical text-gray-400 fs-1"></i>'],
                ["id" => "case-preference", "title" => "Case Preferences", "icon" => '<i class="las la-clipboard-list text-gray-400 fs-1"></i>']
            ],
        ])->layoutData(['asideEnabled' => true]);
    }

    public function mount()
    {
        $this->surgeons = Surgeon::with(['address', 'clinicLocation'])->get();
    }

    public function updatedSelectedSurgeon($surgeonId)
    {
       
        $surgeon = Surgeon::with(['address', 'clinicLocation'])->find($surgeonId);

        if ($surgeon) {
            $this->surgeonAddresses = [$surgeon->address];
            $this->surgeonClinicLocations = [$surgeon->clinicLocation];
        } else {
            $this->surgeonAddresses = [];
            $this->surgeonClinicLocations = [];
        }
    }
}
