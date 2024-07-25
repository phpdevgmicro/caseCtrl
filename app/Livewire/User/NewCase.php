<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Surgeon;
use App\Models\Location;
use App\Models\User;
use App\Models\Patient;
use App\Models\CaseModal;
use Livewire\Attributes\Title;

class NewCase extends Component
{
    #[Title('Case Ctrl - New Case')]
    public $surgeons ;
    public $mrn, $fname, $lname, $dob, $ssn, $email, $phone, $phone2 ,
            $address1, $address2, $city, $state, $postal_code, $guardian, $gender = '' ;

    public $priority = 'Low', $surgery_date, $scheduling_status = 'scheduler discretion',$is_standby = false, $clearance = [], $surgery_notes, $case_instruction, $neuromuscular_monitoring = false;

    public $case_title, $surgery_duration, $blood_unit, $facilty_equipment = '' ,$admission_plan = 'outpatient', $anesthesia =[], $antibiotics= [], $pain_medication = [];

    public $selectedSurgeon = null;
    public $surgeryLocations = [];
    public $clinicLocations = [];
    public case_list $draft;

    public function mount()
    {
        $this->surgeons = Surgeon::select('id', 'fullname')->get();
    }

    public function updatedSelectedSurgeon($surgeonId)
    {
        //dd($surgeonId);
        $this->surgeryLocations = [];
        $this->clinicLocations = [];

        if ($surgeonId) {
            $surgeon = Surgeon::find($surgeonId);
           
            if ($surgeon) {
                $this->surgeryLocations = $surgeon->surgeryLocations()->get()->toArray();
                $this->clinicLocations = $surgeon->clinicLocations()->get()->toArray();
            }
        }
    }

    public function validationRuleForSave(): array
    {
        return [
            // 'fname' => 'required',
            // 'lname' => 'required',
            // 'dob' => 'required',
            // 'priority' => 'required',
            // 'surgery_duration' => 'required',
            // 'admission_plan' => 'required',
        ];
    }

    public function PatientInformation()
    {
        // $this->validate( $this->validationRuleForSave() );
      
        $Patient = new Patient ;
        $Patient->mrn  = $this->mrn ;
        $Patient->first_name  = $this->fname;
        $Patient->last_name = this->lname;
        $Patient->dob  = $this->dob ;
        $Patient->ssn  = $this->ssn ;
        $Patient->gender  = $this->gender ;
        $Patient->email  = $this->email ;
        $Patient->phone  = $this->phone ;
        $Patient->home_phone  = $this->phone2;
        $Patient->address_line1  = $this->address1 ;
        $Patient->address_line2  = $this->address2 ;
        $Patient->city  = $this->city ;
        $Patient->state  = $this->state ;
        $Patient->postal_code  = $this->postal_code ;
        $Patient->guardian  = $this->guardian ;
        // dd( $Patient);
        
        // $Patient->save();

        if($Patient->id){
            $Case = new case_list ;
            $Case->patient_id = $Patient->id;
            $Case->priority  = $this->priority ;
            $Case->surgery_date  = $this->surgery_date ;
            $Case->scheduling_status  = $this->scheduling_status ;
            $Case->is_standby  = $this->is_standby ;
            $Case->surgery_notes  = $this->surgery_notes ;
            $Case->case_instruction = $this->case_instruction ;
            $Case->case_title  = $this->case_title ;
            $Case->surgery_duration  = $this->surgery_duration ;
            $Case->blood_unit  = $this->blood_unit ;
            $Case->facilty_equipment  = $this->facilty_equipment ;
            $Case->admission_plan  = $this->admission_plan ;
            $Case->neuromuscular_monitoring =  $this->neuromuscular_monitoring;
            // $Case->clearance  = $this->clearance ;
            // $Case->anesthesia = $this->anesthesia;
            // $Case->antibiotics = $this->antibiotics;
            // $Case->pain_medication = $this->pain_medication ;
        
            // dd($Case);
            // $Case->save();
        }

        // $this->reset( 'mrn', 'fname', 'lname', 'dob', 'ssn','gender','email','phone','home_phone',
        //             'address1','address2','city','state','postal_code','guardian' );
    }

    public function savedraft()
    {
        // dd("hello");
        return response()->savedraft(
            $this->draft, '1' 
        );
    }

    // public function SchedulingDetails()
    // {
    //     $User = new User ;
    //     $User->priority  = $this->priority ;
    //     $User->surgery_date  = $this->surgery_date ;
    //     $User->scheduling_status  = $this->scheduling_status ;
    //     $User->is_standby  = $this->is_standby ;
    //     $User->clearance  = $this->clearance ;
    //     $User->surgery_notes  = $this->surgery_notes ;
    //     $User->case_instruction = $this->case_instruction ;
    //     dd($User);
    // }

    // public function CasePreferences()
    // {
    //     $User = new User ;
    //     $User->case_title  = $this->case_title ;
    //     $User->surgery_duration  = $this->surgery_duration ;
    //     $User->blood_unit  = $this->blood_unit ;
    //     $User->facilty_equipment  = $this->facilty_equipment ;
    //     $User->admission_plan  = $this->admission_plan ;
    //     $User->anesthesia = $this->anesthesia;
    //     $User->antibiotics = $this->antibiotics;
    //     dd($User);
    // }

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
