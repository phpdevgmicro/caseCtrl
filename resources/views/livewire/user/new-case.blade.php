<div>
    <!--begin::Toolbar-->
    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-white fw-bolder my-1 fs-3">New Case</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">
                        <a href="/" wire:navigate class="text-white text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">Cases</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">Add</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-3 py-md-1">                
                <!--begin::Button-->
                <a href="#" class="btn btn-custom btn-active-white btn-flex btn-color-white btn-active-color-primary fw-bolder me-4">Save as New Quick Pick</a>

                <a href="#" class="btn btn-outline btn-outline-light me-4">Reset</a>

                <a href="#" class="btn btn-outline btn-outline-light me-4">Save as Draft</a>

                <a href="#" class="btn btn-bg-white btn-active-color-primary me-4">Create Case</a>
                <!--end::Button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Container-->
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Aside-->
        <div id="kt_aside" class="aside card" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle" data-kt-sticky="true" data-kt-sticky-name="aside-sticky" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '265px'}" data-kt-sticky-left="auto" data-kt-sticky-top="95px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
            <!--begin::Aside menu-->
            <div class="aside-menu flex-column-fluid">
                <!--begin::Aside Menu-->
                <div class="hover-scroll-overlay-y my-5 my-lg-6" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_aside_footer, #kt_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="0px">
                    <!--begin::Menu-->
                    <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item">
                            <div class="menu-content pb-2">
                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Sections</span>
                            </div>
                        </div>
                        @foreach ($sections as $section)
                            <div class="menu-item">
                                <a href="#{{$section['id']}}" data-kt-scroll-toggle="true" class="menu-link text-gray-400" >
                                    <span class="menu-icon">{!! $section['icon'] !!}</span>
                                    <span class="fw-bold">{{$section['title']}}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Aside menu-->           
        </div>
        <!--end::Aside-->
        <!--begin::Content-->
        <div class="content flex-row-fluid" id="kt_content"> 
            <form wire:submit="saveCase" class="form">
                <!--- Surgeon Info start -->
                <div class="card card-xxl-stretch mb-5 mb-xl-8" id="surgeon" data-kt-scroll-offset="100">
                    <!--begin::Card header-->
                    <div class="card-header border-0">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0"><i class="las la-user-md text-gray-400 fs-2qx"></i> Surgeon Information</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Content-->
                    <div id="" class="collapse show">
                        <!--begin::Form-->
                        <div id="" class="form">
                            <!--begin::Card body-->

                            <div class="card-body border-top p-9">              
                                <!--begin::Input group-->
                                <div class="mb-6">
                                    <label class="required form-label fw-bold fs-8 text-gray-500 text-uppercase">Surgeon</label>
                                    <select wire:model.live="surgeon" name="surgeon" aria-label="Select a Surgeon" data-control="select52" data-placeholder="Select a surgeon..." class="form-select" data-allow-clear="true">
                                        <option value="">Select a Surgeon</option>
                                        @foreach($surgeons as $value)
                                            <option value="{{ $value->id }}">{{ $value->fullname }}</option>
                                        @endforeach
                                    </select>                                  
                                    @error('surgeon')
                                    <div class="fv-plugins-message-container invalid-feedback"><div data-field="email_input" data-validator="notEmpty">{{$message}}</div></div>
                                    @enderror
                                    {{$surgeon}}
                                </div>
                                <!--end::Input group-->
                            
                                <!--begin::Input group-->
                                <div class="mb-6">
                                    <label class="required form-label fw-bold fs-8 text-gray-500 text-uppercase">Location</label>
                                    <select wire:model="surgery_location" name="surgery_location" wire:key="{{ $surgeon }} aria-label="Select a Surgery Location" data-control="selectd2" data-placeholder="Select a surgeon first" class="form-select form-select-solid" data-allow-clear="true">
                                        <option value="">Select a Surgery Location</option>
                                        @foreach($surgeryLocations as $location)
                                            <option value="{{ $location['id'] }}">{{ $location['address']}} {{$location['city']}} {{$location['state']}}</option>
                                        @endforeach
                                    </select>
                                    @error('surgery_location') 
                                    <div class="fv-plugins-message-container invalid-feedback"><div data-field="email_input" data-validator="notEmpty">{{$message}}</div></div>
                                    @enderror
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="">
                                    <label class="required form-label fw-bold fs-8 text-gray-500 text-uppercase">Clinic Location</label>
                                    <select wire:model="clinic_location" name="clinic_location" wire:key="{{ $surgeon }} aria-label="Select a Clinic Location" data-control="select2" data-placeholder="Select a surgeon first" class="form-select form-select-solid" data-allow-clear="true">
                                        <option value="">Select a Clinic Location</option>
                                        @foreach($clinicLocations as $location)
                                            <option value="{{ $location['id'] }}">{{ $location['address']}} {{$location['city']}} {{$location['state']}}</option>
                                        @endforeach
                                    </select>
                                    @error('clinic_location')
                                    <div class="fv-plugins-message-container invalid-feedback"><div data-field="email_input" data-validator="notEmpty">{{$message}}</div></div>
                                    @enderror
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card body-->            
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!-- Surgeon info end --->
            
              <!-- Patient start -->
                <div class="card card-xxl-stretch mb-5 mb-xl-8" id="patient" data-kt-scroll-offset="100">
                    <!--begin::Card header-->
                    <div class="card-header border-0">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0"><i class="las la-user-circle text-gray-400 fs-2qx"></i>  Patient Information</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Content-->
                    <div id="kt_account_profile_details" class="collapse show">
                        <!--begin::Form-->
                            <!--begin::Card body-->
                            <div class="card-body border-top p-9">              
                                <!--begin::Input group-->                
                                <div class="mb-6">
                                    <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Medical Record Number (MRN)</label>
                                    <input type="text" wire:model="mrn" class="form-control" name="mrn">
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Col-->
                                    <div class="col-lg-4">
                                        <label class="required form-label fw-bold fs-8 text-gray-500 text-uppercase">First Name</label>
                                        <input type="text" wire:model="first_name"  class="form-control" name="first_name">
                                        @error('first_name')
                                        <div class="fv-plugins-message-container invalid-feedback"><div data-field="email_input" data-validator="notEmpty">{{$message}}</div></div>
                                        @enderror
                                    </div>
                                    
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-4">
                                        <label class="required form-label fw-bold fs-8 text-gray-500 text-uppercase">Last Name</label>
                                        <input type="text" wire:model="last_name"  class="form-control" name="last_name">
                                        @error('last_name')
                                        <div class="fv-plugins-message-container invalid-feedback"><div data-field="email_input" data-validator="notEmpty">{{$message}}</div></div>
                                        @enderror
                                    </div>
                                    
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-4">
                                        <label class="required form-label fw-bold fs-8 text-gray-500 text-uppercase">Date of Birth</label>
                                        <input type="date" wire:model="dob" class="form-control" name="dob">
                                        @error('dob')
                                        <div class="fv-plugins-message-container invalid-feedback"><div data-field="email_input" data-validator="notEmpty">{{$message}}</div></div>
                                        @enderror
                                    </div>
                                    
                                    <!--end::Col-->
                                </div> 

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">SSN</label>
                                        <input type="text" wire:model="ssn" class="form-control" name="ssn">
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <label for="gender" class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Gender</label>
                                        <select wire:model="gender" name="gender" aria-label="Select gender" data-placeholder="Select gender" class="form-select" data-allow-clear="true" data-hide-search="true" >
                                            <option value="">Select gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <!--end::Col-->                   
                                </div>

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Col-->
                                    <div class="col-lg-4">
                                        <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Email</label>
                                        <input wire:model="email" class="form-control" id="kt_inputmask_email" name="email">
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-4">
                                        <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Mobile/Phone Number</label>
                                        <input wire:model="phone" class="form-control kt_inputmask_phone" name="phone" type="text">
                                    </div>
                                    <!--end::Col-->     
                                    
                                    <!--begin::Col-->
                                    <div class="col-lg-4">
                                        <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Home Phone Number</label>
                                        <input wire:model="phone2" class="form-control kt_inputmask_phone" name="phone2" type="text">
                                    </div>
                                    <!--end::Col-->  
                                </div>

                                <div class="row mb-6">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Address Line 1</label>
                                        <input type="text" wire:model="address1" class="form-control" name="address1">
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="row mb-6">
                                    <!--begin::Col-->
                                    <div class="col-sm-6">
                                        <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Address Line 2</label>
                                        <input type="text" wire:model="address2" class="form-control" name="address2">
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-sm-6">
                                        <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">City</label>
                                        <input type="text" wire:model="city" class="form-control" name="city">
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="row mb-6">
                                    <!--begin::Col-->
                                    <div class="col-sm-6">
                                        <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">State</label>
                                        <input type="text" wire:model="state" class="form-control" name="state">
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-sm-6">
                                        <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Postal Code</label>
                                        <input type="text" name="postal_code" wire:model="postal_code" class="form-control">
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="row">
                                    <label class="form-check form-check-custom">
                                        <input class="form-check-input h-20px w-20px" wire:model="guardian" type="checkbox" name="guardian">
                                        <span class="form-check-label fw-bold">
                                            Does patient have a guardian?
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <!--end::Card body-->
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!-- Patient end -->

                
            
                <!-- Scheduling start -->
                <div class="card card-xxl-stretch mb-5 mb-xl-8" id="scheduling" data-kt-scroll-offset="100" >
                    <!--begin::Card header-->
                    <div class="card-header border-0">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0"><i class="las la-calendar text-gray-400 fs-2qx"></i>  Scheduling Details</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Content-->
                    <div id="kt_account_profile_details" class="collapse show">
                        <!--begin::Form-->                       
                            <!--begin::Card body-->
                            <div class="card-body border-top p-9">

                                <!--begin::Input group-->  
                                <div class="row mb-10">
                                    <label class="required form-label fw-bold text-uppercase fs-8 text-gray-500">Scheduling Priority</label>
                                    <div class="mb-4">
                                        <label class="form-check form-check-custom">
                                            <input class="form-check-input h-20px w-20px" type="radio" name="priority" wire:model="priority" value="High"/>
                                            <span class="form-check-label fw-bold">
                                                <span class="badge badge-light-success text-success fs-7 fw-bolder">High</span> must be done ASAP
                                            </span>
                                        </label>
                                    </div>                                     

                                    <div class="mb-4">
                                        <label class="form-check form-check-custom">
                                            <input class="form-check-input h-20px w-20px" type="radio" name="priority" wire:model="priority" value="Medium"  />
                                            <span class="form-check-label fw-bold">
                                                <span class="badge badge-light-warning text-warning fs-7 fw-bolder">Medium</span> can be done within next 2 weeks
                                            </span>
                                        </label>
                                    </div> 
                               
                                    <div class="mb-4">
                                        <label class="form-check form-check-custom">
                                            <input class="form-check-input h-20px w-20px" type="radio" wire:model="priority" value="Low" name="priority" checked/>
                                            <span class="form-check-label fw-bold">
                                                <span class="badge badge-light-dark text-muted fs-7 fw-bolder">Low</span> Elective, at patient's discretion (default priority)
                                            </span>
                                        </label>
                                    </div>
                                    @error('priority')
                                        <span class="text-red-500 text-xs mt-3 block ">{{$message}}</span>
                                    @enderror  
                                </div> 
                                            
                                <!--end::Input group-->
                                
                                <!--begin::Input group-->                
                                <div class="mb-10">
                                    <label class="form-label fw-bold text-uppercase fs-8 text-gray-500">Date of Surgery</label>
                                    <input type="date" class="form-control" wire:model="surgery_date"/>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->  
                                <div class="row mb-10">
                                    <div class="mb-3">
                                        <label class="form-check form-check-custom">
                                            <input class="form-check-input h-20px w-20px" name="scheduling_status" wire:model="scheduling_status" type="radio" value="scheduler discretion" checked/>
                                            <span class="form-check-label fw-bold">
                                            Scheduler's Discretion
                                            </span>
                                        </label>
                                    </div>    

                                    <div class="mb-3">
                                        <label class="form-check form-check-custom">
                                            <input class="form-check-input h-20px w-20px" wire:model="scheduling_status" type="radio" value="patient undecided" name="scheduling_status" />
                                            <span class="form-check-label fw-bold">
                                                Patient Undecided
                                            </span>
                                        </label>
                                    </div>
                                </div> 
                                <!--end::Input group-->

                                <!--begin::Input group-->  
                                <div class="row mb-6">
                                    <div class="mb-3">
                                        <label class="form-check form-check-custom">
                                            <input class="form-check-input h-20px w-20px" type="checkbox" wire:model="is_standby"/>
                                            <span class="form-check-label fw-bold">
                                            Place on Standby
                                            </span>
                                        </label>
                                    </div>  
                                </div> 
                                <!--end::Input group-->

                                <!--begin::Input group-->  
                                <div class="row mb-6">
                                    <label class="form-label fw-bold text-uppercase fs-8 text-gray-500">Clearances</label>
                                    <div class="mb-3">
                                        <label class="form-check form-check-custom">
                                            <input class="form-check-input h-20px w-20px" type="checkbox" wire:model="clearance" value="Cardiac"/>
                                            <span class="form-check-label fw-bold">
                                                Require Cardiac Clearance
                                            </span>
                                        </label>
                                    </div> 
                                    <div class="mb-3">
                                        <label class="form-check form-check-custom">
                                            <input class="form-check-input h-20px w-20px" type="checkbox" wire:model="clearance" value="PCP"/>
                                            <span class="form-check-label fw-bold">
                                            Require PCP Clearance
                                            </span>
                                        </label>
                                    </div>  
                                </div> 
                                <!--end::Input group-->

                                <!--begin::Input group-->                
                                <div class="">
                                    <label class="form-label fw-bold text-uppercase fs-8 text-gray-500">Scheduling Surgery Notes</label>
                                    <textarea class="form-control" wire:model="surgery_notes" data-kt-autosize="true"></textarea>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card body-->
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!-- Scheduling end -->

                <!-- Surgical start -->
                <div class="card card-xxl-stretch mb-5 mb-xl-8" id="surgical-case" data-kt-scroll-offset="100">
                    <!--begin::Card header-->
                    <div class="card-header border-0">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0"><i class="las la-briefcase-medical text-gray-400 fs-2qx"></i>  Surgical Case Details</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Content-->
                    <div id="kt_account_profile_details" class="collapse show">
                        <!--begin::Form-->
                            <!--begin::Card body-->
                            <div class="card-body border-top p-9">

                                <!--begin::Input group-->                
                                <div class="col">
                                    <label class="form-label fw-bold text-uppercase fs-8 text-gray-500">Special Perioperative Nursing Instructions</label>
                                    <textarea class="form-control" wire:model="case_instruction" data-kt-autosize="true"></textarea>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card body-->                          
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!-- Surgical end -->
            
                <!-- Case start -->
                <div class="card card-xxl-stretch mb-5 mb-xl-8" id="case-preference" data-kt-scroll-offset="100">
                    <!--begin::Card header-->
                    <div class="card-header border-0">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0"><i class="las la-clipboard-list text-gray-400 fs-2qx"></i>  Case Preferences</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Content-->
                    <div id="kt_account_profile_details" class="collapse show">
                        <!--begin::Form-->
                            <!--begin::Card body-->
                            <div class="card-body border-top p-9">
                                <!--begin::Input group-->                
                                <div class="mb-6">
                                    <label class="form-label fw-bold text-uppercase fs-8 text-gray-500">Surgery Case Title</label>
                                    <input type="text" wire:model="case_title" class="form-control">
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->                
                                <div class="row mb-6">
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <label class="required form-label fw-bold fs-8 text-gray-500 text-uppercase">Duration Of Surgery</label>
                                        <input type="number"wire:model="surgery_duration" class="form-control">
                                        @error('surgery_duration')
                                        <div class="fv-plugins-message-container invalid-feedback"><div data-field="email_input" data-validator="notEmpty">{{$message}}</div></div>
                                        @enderror
                                    </div>
                                    
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Unit Of Blood</label>
                                        <input type="number" wire:model="blood_unit" min="0" class="form-control">
                                    </div>
                                    <!--end::Col-->
                                </div> 
                                <!--end::Input group-->

                                <!--begin::Input group-->                
                                <div class="mb-6">
                                    <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Premedication</label>
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <label class="form-label fw-bold fs-9 text-gray-400 text-uppercase">Pain Medication</label>
                                            <x-user.new-case.pain-medications/>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <label class="form-label fw-bold fs-9 text-gray-400 text-uppercase">Antibiotics</label>
                                            <x-user.new-case.antibiotics/>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                </div> 
                                <!--end::Input group-->

                                <!--begin::Input group-->                
                                <div class="mb-6">
                                    <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Anesthesia Type</label>
                                    <x-user.new-case.anesthesia/> 
                                </div> 
                                <!--end::Input group-->

                                <!--begin::Input group-->                
                                <div class="mb-6">
                                    <!-- <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">DME</label> -->
                                    
                                </div> 
                                <!--end::Input group-->

                                <!--begin::Input group-->                
                                <div class="mb-6">
                                    <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Facility Equipment</label>
                                    <select aria-label="Select or add facility equipment" wire:model="facilty_equipment" data-placeholder="Select or add facility equipment" class="form-select" data-allow-clear="true" data-hide-search="true">
                                        <option value="">Select or add facility equipment</option>
                                        <option value="Legholder">Leg holder</option>
                                        <option value="standard/table">standard Or table</option>
                                        <option value="Supine">Supine</option>
                                    </select>
                                </div> 
                                <!--end::Input group-->

                                <!--begin::Input group-->  
                                <div class="row mb-10">
                                    <label class="required form-label fw-bold fs-8 text-gray-500 text-uppercase">Admission Plan</label>
                                    <div class="mb-3">
                                        <label class="form-check form-check-custom">
                                            <input class="form-check-input h-20px w-20px" type="radio" name="admission_plan" wire:model="admission_plan" value="outpatient" checked/>
                                            <span class="form-check-label fw-bold">
                                            Outpatient
                                            </span>
                                        </label>
                                    </div>    

                                    <div class="mb-3">
                                        <label class="form-check form-check-custom">
                                            <input class="form-check-input h-20px w-20px" type="radio" name="admission_plan" wire:model="admission_plan"  value="extended_recovery"/>
                                            <span class="form-check-label fw-bold">
                                                Extended Recovery (23 Hours Observation)
                                            </span>
                                        </label>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-check form-check-custom">
                                            <input class="form-check-input h-20px w-20px" name="admission_plan" type="radio" wire:modal="admission_plan"  value="same_day_admit"/>
                                            <span class="form-check-label fw-bold">
                                                Same Day Admit
                                            </span>
                                        </label>
                                    </div>
                                    @error('admission_plan')
                                        <span class="text-red-500 text-xs mt-3 block ">{{$message}}</span>
                                    @enderror
                                </div> 
                                {{$admission_plan}}
                                <!--end::Input group-->
                                <div class="row">
                                    <label class="form-check form-check-custom">
                                        <input class="form-check-input h-20px w-20px"  type="checkbox" wire:model="neuromuscular_monitoring"/>
                                        <span class="form-check-label fw-bold">
                                            Neuromuscular Monitoring Requested
                                        </span>
                                    </label>
                                </div>

                            </div>
                            <!--end::Card body--> 
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!-- Case start -->
                
                <div class="card card-xxl-stretch mb-5 mb-xl-8">
                    <!--begin::Content-->
                    <div id="kt_account_profile_details" class="collapse show">
                        <div class="card-body border-top p-3">
                            <button type="submit" class="btn btn-light-success me-2 mb-2" wire:click="$set('save_as', 'quick-pick')">Save as New Quick Pick</button>
                            <button type="reset" class="btn btn-outline btn-outline-solid btn-outline-success btn-active-light-success me-2 mb-2" wire:click="$set('save_as', 'reset')" >Reset</button>
                            <button type="submit" class="btn btn-outline btn-outline-solid btn-outline-success btn-active-light-success me-2 mb-2" wire:click="$set('save_as', 'drafts')">Save as Draft</button>
                            <button class="btn btn-success mb-2" type="submit" wire:click="$set('save_as', 'new-case')">Create Case</button>
                        </div> 
                    </div>
                    <!--end::Content-->
                </div>
            </form>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Container-->
</div>
@script
<script>
    $wire.on('save-case', (data) => {
        if(data.status == 'error'){
            toastr.error(data.msg);
        }else{
            toastr.success(data.msg);
        }        
    }); 
    $wire.on('aside-enabled', () => {
        setTimeout(function () {
            $('#kt_aside').css({position:'fixed', top:'95px', zIndex:95, width:'265px'})
        }, 10);         
    });
</script>
@endscript


