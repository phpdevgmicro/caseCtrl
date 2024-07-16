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
                        <x-user.new-case.section/>
                    </div>
                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Aside menu-->           
        </div>
        <!--end::Aside-->
        <!--begin::Content-->
        <div class="content flex-row-fluid" id="kt_content">
            <x-user.new-case.surgeon/>
            <x-user.new-case.patient/>
            <x-user.new-case.scheduling/>
            <x-user.new-case.surgical-case/>
            <x-user.new-case.case-preferences/>
            <div class="card card-xxl-stretch mb-5 mb-xl-8">
                <!--begin::Content-->
                <div id="kt_account_profile_details" class="collapse show">
                    <div class="card-body border-top p-3">
                        <a href="#" class="btn btn-light-success me-2 mb-2">Save as New Quick Pick</a>
                        <a href="#" class="btn btn-outline btn-outline-solid btn-outline-success btn-active-light-success me-2 mb-2">Reset</a>
                        <a href="#" class="btn btn-outline btn-outline-solid btn-outline-success btn-active-light-success me-2 mb-2">Save as Draft</a>
                        <a href="#" class="btn btn-success mb-2">Create Case</a>
                    </div> 
                </div>
                <!--end::Content-->
            </div>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Container-->
</div>


