<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<!--begin::Head-->
	<head><base href="">
		<title>{{ $title ?? 'Case Ctrl' }}</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="web app" />
		<meta property="og:title" content="" />
		<meta property="og:url" content="" />
		<meta property="og:site_name" content="" />
		<link rel="canonical" href="" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
        @stack('page-css')		
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
        <link href="{{ URL::asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ URL::asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />		
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" style="background-image: url(assets/media/patterns/header-bg.jpg)" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled {{ isset($asideEnabled) && $asideEnabled ? 'aside-enabled' : '' }}">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

					<!--begin::Header-->
					<x-user.header/>
					<!--end::Header-->

					<!-- start::Page Content -->
						{{$slot}}
					<!-- end::Page Content -->

					<!--begin::Footer-->
					<x-user.footer/>
					<!--end::Footer-->

				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->			

		<!--begin::Drawers-->		
			<x-user.modals.activity/>
		<!--end::Drawers-->

		<!--begin::Scrolltop-->
			<x-user.scrolltop/>
		<!--end::Scrolltop-->

		<!--end::Main-->
		
		<!-- <script>var hostUrl = "assets/";</script> -->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="{{ URL::asset('assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ URL::asset('assets/js/scripts.bundle.js') }}"></script>  
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
        @stack('page-scripts')
		<script>
			toastr.options = {
				"closeButton": false,
				"debug": false,
				"newestOnTop": false,
				"progressBar": false,
				"positionClass": "toast-top-right",
				"preventDuplicates": false,
				"onclick": null,
				"showDuration": "300",
				"hideDuration": "1000",
				"showEasing": "swing",
				"hideEasing": "linear",
				"showMethod": "fadeIn",
				"hideMethod": "fadeOut"
				};
				// Inputmask({
				// 	"mask" : "(999) 999-9999"
				// }).mask(".kt_inputmask_phone");

				// Inputmask({
				// 	mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
				// 	greedy: false,
				// 	onBeforePaste: function (pastedValue, opts) {
				// 		pastedValue = pastedValue.toLowerCase();
				// 		return pastedValue.replace("mailto:", "");
				// 	},
				// 	definitions: {
				// 		"*": {
				// 			validator: '[0-9A-Za-z!#$%&"*+/=?^_`{|}~\-]',
				// 			cardinality: 1,
				// 			casing: "lower"
				// 		}
				// 	}
				// }).mask("#kt_inputmask_email");
		</script>
		<!--end::Page Vendors Javascript-->		
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>