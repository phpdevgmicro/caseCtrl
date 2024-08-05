<?php

namespace App\Livewire\User;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Surgeon;
use App\Models\Location;
use App\Models\Patient;
use App\Models\CaseModel;
use App\Models\surgeonSurgeryLocation;

class Cases extends Component
{
    #[Title('Case Ctrl - Cases')]

    public $clinic_location = [] ;
    public $surgeonfilter = [] ;
    public $surgeons = [] ;
    public $surgeonId ;
    public $cases = [];
    public $status = "INPROGRESS";
    public $caseCount = "";
    public $clinicSurgeryLocation = [] ;

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
        $this->surgeons = Surgeon::select('id', 'fullname')->take(4)->get(); 
        $this->cases = CaseModel::with(['surgeon', 'patient', 'location' ])->orderby('id', 'desc')->get();

        $surgeryLocations = $this->cases->pluck('surgery_location');
        $surgeonSurgeryLocation = surgeonSurgeryLocation::wherein('id' ,  $surgeryLocations)->get();
        // dd($surgeonSurgeryLocation);
        
        $clinicLocations = $this->cases->pluck('clinic_location');
        $clinicSurgeryLocation = Location::wherein('id' ,  $clinicLocations)->get();
        // dd( $clinicSurgeryLocation  ) ;
        $this->updatedStatus();
    }

    public function updatedStatus()
    {
        $this->caseStatus[$this->status]['count'] = CaseModel::where('case_status', $this->status)->count();
       
    }

    public function changeCaseStatus($caseId ,$newStatus)
    {
        $case = CaseModel::find($caseId);
        
        if($case){
            $oldstatus = $case->case_status;
            $case->case_status = $newStatus ;
            $case->save();
        }
    //     $this->caseStatus[$oldstatus]['count']-- ;
    //     $this->caseStatus[$newStatus]['count']++ ;
        
    }
    
    public function applySurgeonfilter()
    {
        $this->cases = CaseModel::wherein('surgeon_id', $this->surgeonfilter)->with(['surgeon', 'patient', 'location'])->orderby('id', 'desc')->get();
        // dd( $this->cases); 
    }

    public function render()
    {
        return view('livewire.user.cases');
    }    
}
