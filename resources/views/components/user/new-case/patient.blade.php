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
        <form id="kt_account_profile_details_form" class="form">
            <!--begin::Card body-->
            <div class="card-body border-top p-9">              
                <!--begin::Input group-->                
                <div class="mb-6">
                    <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Medical Record Number (MRN)</label>
                    <input type="text" class="form-control" name ="mrn"/>
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
					<!--begin::Col-->
                    <div class="col-lg-4">
                        <label class="required form-label fw-bold fs-8 text-gray-500 text-uppercase">First Name</label>
                        <input type="text" name="fname" class="form-control">
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <label class="required form-label fw-bold fs-8 text-gray-500 text-uppercase">Last Name</label>
                        <input type="text" name="lname" class="form-control">
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <label class="required form-label fw-bold fs-8 text-gray-500 text-uppercase">Date of Birth</label>
                        <input type="date" name="dob" class="form-control">
                    </div>
                    <!--end::Col-->
                </div> 

                <!--begin::Input group-->
                <div class="row mb-6">
					<!--begin::Col-->
                    <div class="col-lg-6">
                        <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">SSN</label>
                        <input type="text" name="ssn" class="form-control">
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-lg-6">
                        <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Gender</label>
                        <select name="gender" aria-label="Select gender" data-control="select2" data-placeholder="Select gender" class="form-select" data-allow-clear="true" data-hide-search="true">
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
                        <input type="email" name="email" class="form-control">
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Mobile/Phone Number</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <!--end::Col-->     
                    
                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Home Phone Number</label>
                        <input type="text" name="home_phone" class="form-control">
                    </div>
                    <!--end::Col-->  
                </div>

                <div class="row mb-6">
					<!--begin::Col-->
                    <div class="col">
                        <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Address Line 1</label>
                        <input type="text" name="address1" class="form-control">
                    </div>
                    <!--end::Col-->
                </div>

                <div class="row mb-6">
					<!--begin::Col-->
                    <div class="col-sm-6">
                        <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Address Line 2</label>
                        <input type="text" name="address2" class="form-control">
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-sm-6">
                        <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">City</label>
                        <input type="text" name="city" class="form-control">
                    </div>
                    <!--end::Col-->
                </div>

                <div class="row mb-6">
					<!--begin::Col-->
                    <div class="col-sm-6">
                        <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">State</label>
                        <input type="text" name="state" class="form-control">
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-sm-6">
                        <label class="form-label fw-bold fs-8 text-gray-500 text-uppercase">Postal Code</label>
                        <input type="text" name="postal_code" class="form-control">
                    </div>
                    <!--end::Col-->
                </div>

                <div class="row">
                    <label class="form-check form-check-custom">
                        <input class="form-check-input h-20px w-20px" name="guardian" type="checkbox" value=""/>
                        <span class="form-check-label fw-bold">
                            Does patient have a guardian?
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