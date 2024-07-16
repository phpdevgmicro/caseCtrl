<div class="card card-xxl-stretch mb-5 mb-xl-8" id="case-preference" data-kt-scroll-offset="100"
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
        <form id="kt_account_profile_details_form" class="form">
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Input group-->                
                <div class="mb-6">
                    <label class="form-label fw-bold text-uppercase fs-8 text-gray-500">Surgery Case Title</label>
                    <input type="email" name="case_title" class="form-control">
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->                
                <div class="row mb-6">
					<!--begin::Col-->
                    <div class="col-lg-6">
                        <label class="required form-label fw-bold fs-8 text-gray-500 text-uppercase">Duration Of Surgery</label>
                        <input type="number" name="surgery_duration" class="form-control">
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-lg-6">
                        <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Unit Of Blood</label>
                        <input type="number" name="blood_unit" min="0" class="form-control" value="0">
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
                    <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">DME</label>
                    <x-user.new-case.anesthesia/> 
                </div> 
                <!--end::Input group-->

                <!--begin::Input group-->                
                <div class="mb-6">
                    <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Facility Equipment</label>
                    <select name="gender" aria-label="Select or add facility equipment" data-control="select2" data-placeholder="Select or add facility equipment" class="form-select" data-allow-clear="true" data-hide-search="true">
                        <option value="">Select or add facility equipment</option>
                        <option value="male">Leg holder</option>
                        <option value="female">standard Or table</option>
                        <option value="other">Supine</option>
                    </select>
                </div> 
                <!--end::Input group-->

                <!--begin::Input group-->  
                <div class="row mb-10">
                    <label class="required form-label fw-bold fs-8 text-gray-500 text-uppercase">Admission Plan</label>
                    <div class="mb-3">
                        <label class="form-check form-check-custom">
                            <input class="form-check-input h-20px w-20px" name="admission_plan" type="radio" value="" checked/>
                            <span class="form-check-label fw-bold">
                               Outpatient
                            </span>
                        </label>
                    </div>    

                    <div class="mb-3">
                        <label class="form-check form-check-custom">
                            <input class="form-check-input h-20px w-20px" name="admission_plan" type="radio" value=""/>
                            <span class="form-check-label fw-bold">
                                Extended Recovery (23 Hours Observation)
                            </span>
                        </label>
                    </div>

                    <div class="mb-3">
                        <label class="form-check form-check-custom">
                            <input class="form-check-input h-20px w-20px" name="admission_plan" type="radio" value=""/>
                            <span class="form-check-label fw-bold">
                                Same Day Admit
                            </span>
                        </label>
                    </div>
                </div> 
                <!--end::Input group-->

                <div class="row">
                    <label class="form-check form-check-custom">
                        <input class="form-check-input h-20px w-20px" name="monitoring_request" type="checkbox" value=""/>
                        <span class="form-check-label fw-bold">
                            Neuromuscular Monitoring Requested
                        </span>
                    </label>
                </div>

            </div>
            <!--end::Card body-->            
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>