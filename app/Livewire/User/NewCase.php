<?php

namespace App\Livewire\User;

use Livewire\Attributes\Validate; 
use Livewire\Component;
use App\Models\Surgeon;
use App\Models\Location;
use App\Models\Patient;
use App\Models\CaseModel;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\DB;


class NewCase extends Component
{   
    #[Title('Case Ctrl - New Case')] 
    
    public $save_as = "draft";
    public $priority='Low';
    public $surgery_date;
    public $scheduling_status = 'scheduler discretion';
    public $is_standby = false;
    public $clearance = [];
    public $surgery_notes;
    public $case_instruction;
    public $neuromuscular_monitoring = false;
    public $facilty_equipment;

    public $case_title;
    public $blood_unit = 0;
    public $facility_equipment;
    public $admission_plan='outpatient';
    public $anesthesia = [];
    public $antibiotics = [];
    public $pain_medication = [];

    public $mrn;
    public $ssn;
    public $email;
    public $phone;
    public $phone2;
    public $address1;
    public $address2;
    public $city;
    public $state;
    public $postal_code;
    public $guardian = false;
    public $gender ;

    #[Validate('required')]
    public $surgeon, $first_name, $last_name, $dob, $surgery_location, $clinic_location, $surgery_duration; 
    
    public $surgeryLocations = [];
    public $surgeons = [];
    public $clinicLocations = [];

    public function mount()
    {
        $this->surgeons = Surgeon::select('id', 'fullname')->get();
    }    

    public function saveCase()
    {           
        try {            
            $this->validate(); 
            //dd($this->all());
            DB::beginTransaction();

            $patient = new Patient;       
            $patient->first_name  = $this->first_name;
            $patient->last_name = $this->last_name;
            $patient->dob = $this->dob;
            $patient->ssn = $this->ssn;
            $patient->mrn = $this->mrn;
            $patient->gender = $this->gender;
            $patient->email = $this->email;
            $patient->phone = $this->phone;
            $patient->home_phone = $this->phone2;
            $patient->address_line1 = $this->address1;
            $patient->address_line2 = $this->address2;
            $patient->city = $this->city;
            $patient->state = $this->state;
            $patient->postal_code = $this->postal_code;
            $patient->guardian = $this->guardian;
            $patient->save();        

            $caseNo = $this->generateCaseNo();

            $case = new caseModel;
            $case->case_number = $caseNo;
            $case->title  = $this->case_title;
            $case->surgeon_id = $this->surgeon;
            $case->surgery_location = $this->surgery_location;
            $case->clinic_location = $this->clinic_location;
            $case->patient_id = $patient->id;        
            $case->priority  = $this->priority;
            $case->surgery_date  = $this->surgery_date;
            $case->scheduling_status  = $this->scheduling_status;
            $case->is_standby  = $this->is_standby;
            $case->surgery_notes  = $this->surgery_notes;
            $case->clearance  = $this->clearance;
            $case->case_instruction = $this->case_instruction;       
            $case->surgery_duration  = $this->surgery_duration;
            $case->blood_unit  = $this->blood_unit;
            $case->facilty_equipment  = $this->facilty_equipment;
            $case->admission_plan  = $this->admission_plan;
            $case->neuromuscular_monitoring =  $this->neuromuscular_monitoring;
            $case->clearance  = $this->clearance;
            $case->anesthesia = $this->anesthesia;
            $case->antibiotics = $this->antibiotics;
            $case->pain_medication = $this->pain_medication;
            $case->save_as = $this->save_as;
            if($this->save_as == "draft"){
                $case->case_status = "DRAFT"; 
            }
            $case->save();

            DB::commit();
            
            $this->dispatch('save-case', status: 'success', msg: 'Case is save successfully as '.$this->save_as);
            $this->redirect('/cases', navigate: true); 
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error(":: EXCEPTION CASE:: " . $th->getMessage() . "\n" . $th->getTraceAsString());
            $this->dispatch('save-case', status: 'error', msg: 'Missing details! Please check your fields and try again.');
        }            
    }

    public function updatedSurgeon($surgeonId)
    {   
        if ($surgeonId) {
            $surgeon = Surgeon::find($surgeonId);
           
            if ($surgeon) {
                $this->surgeryLocations = $surgeon->surgeryLocations()->get()->toArray();
                $this->clinicLocations = $surgeon->clinicLocations()->get()->toArray();
            }
        }
    }

    private function generateCaseNo()
    {    
        $lastCase = CaseModel::orderBy('id', 'desc')->first();
        
        if ($lastCase) {
            $CaseNo = 'Case' . str_pad((int)substr($lastCase->case_number, 7) + 1, strlen($lastCase->case_number) - 7, '0', STR_PAD_LEFT);
        } else {
            $CaseNo = 'Case000000001';
        }

        return $CaseNo;
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
}
