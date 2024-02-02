<x-auth-layout>

    @section('title')
    Account Deactivation
    @endsection

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url('{{ asset('assets/media/auth/bg3.jpg') }}');
            }

            [data-bs-theme="dark"] body {
                background-image: url('{{ asset('assets/media/auth/bg3-dark.jpg') }}');
            }

        </style>
        <!--end::Page bg image-->
        <!--begin::Authentication - Signup Welcome Message -->
        <div class="d-flex flex-column flex-center flex-column-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-center text-center p-10">
                <!--begin::Wrapper-->
                <div class="card card-flush w-lg-650px py-5">
                    <div class="card-body py-15 py-lg-20">
                        <!--begin::Logo-->
                        <div class="mb-14">
                            <a href="index.html" class="">
                                <img alt="Logo" src="{{ asset('assets/media/logos/m-mart.svg') }}" class="h-40px" />
								</a>
							</div>
							<!--end::Logo-->
							<!--begin::Title-->
							<h1 class="fw-bolder text-gray-900 mb-5">Your account is deactivated</h1>
							<!--end::Title-->
							<!--begin::Text-->
							<div class="fw-semibold fs-6 text-gray-500 mb-8">This is your opportunity to get creative amazing opportunaties
							<br />that gives readers an idea</div>
							<!--end::Text-->
							<!--begin::Link-->
							<div class="mb-11">
								<a href="index.html" class="btn btn-sm btn-primary">Go to Home Page</a>
							</div>
							<!--end::Link-->
							<!--begin::Illustration-->
							<div class="mb-0">
								<img src="{{ asset('assets/media/auth/membership.png') }}" class="mw-100 mh-300px theme-light-show" alt="" />
								<img src="{{ asset('assets/media/auth/membership-dark.png') }}" class="mw-100 mh-300px theme-dark-show" alt="" />
							</div>
							<!--end::Illustration-->
						</div>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Authentication - Signup Welcome Message-->
		</div>
		<!--end::Root-->

</x-auth-layout>
