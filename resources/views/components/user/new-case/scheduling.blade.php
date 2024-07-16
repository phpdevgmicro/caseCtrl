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
        <form id="kt_account_profile_details_form" class="form">
            <!--begin::Card body-->
            <div class="card-body border-top p-9">

                <!--begin::Input group-->  
                <div class="row mb-10">
                    <label class="required form-label fw-bold text-uppercase fs-8 text-gray-500">Scheduling Priority</label>
                    <div class="mb-4">
                        <label class="form-check form-check-custom">
                            <input class="form-check-input h-20px w-20px" name="priority" type="radio" value=""/>
                            <span class="form-check-label fw-bold">
                                <span class="badge badge-light-success text-success fs-7 fw-bolder">High</span> must be done ASAP
                            </span>
                        </label>
                    </div>    

                    <div class="mb-4">
                        <label class="form-check form-check-custom">
                            <input class="form-check-input h-20px w-20px" name="priority" type="radio" value=""/>
                            <span class="form-check-label fw-bold">
                                <span class="badge badge-light-warning text-warning fs-7 fw-bolder">Medium</span> can be done within next 2 weeks
                            </span>
                        </label>
                    </div> 

                    <div class="mb-4">
                        <label class="form-check form-check-custom">
                            <input class="form-check-input h-20px w-20px" name="priority" type="radio" value="" checked/>
                            <span class="form-check-label fw-bold">
                                <span class="badge badge-light-dark text-muted fs-7 fw-bolder">Low</span> Elective, at patient's discretion (default priority)
                            </span>
                        </label>
                    </div>
                </div>                
                <!--end::Input group-->
                
                <!--begin::Input group-->                
                <div class="mb-10">
                    <label class="form-label fw-bold text-uppercase fs-8 text-gray-500">Date of Surgery</label>
                    <input type="date" class="form-control" name ="dos"/>
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->  
                <div class="row mb-10">
                    <div class="mb-3">
                        <label class="form-check form-check-custom">
                            <input class="form-check-input h-20px w-20px" name="appointment_preference" type="radio" value="" checked/>
                            <span class="form-check-label fw-bold">
                               Scheduler's Discretion
                            </span>
                        </label>
                    </div>    

                    <div class="mb-3">
                        <label class="form-check form-check-custom">
                            <input class="form-check-input h-20px w-20px" name="appointment_preference" type="radio" value=""/>
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
                            <input class="form-check-input h-20px w-20px" name="place_standby" type="checkbox" value=""/>
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
                            <input class="form-check-input h-20px w-20px" name="clearance" type="checkbox" value=""/>
                            <span class="form-check-label fw-bold">
                                Require Cardiac Clearance
                            </span>
                        </label>
                    </div> 
                    <div class="mb-3">
                        <label class="form-check form-check-custom">
                            <input class="form-check-input h-20px w-20px" name="clearance" type="checkbox" value=""/>
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
                    <textarea class="form-control" name="scheduling_surgery_notes" data-kt-autosize="true"></textarea>
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Card body-->            
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>