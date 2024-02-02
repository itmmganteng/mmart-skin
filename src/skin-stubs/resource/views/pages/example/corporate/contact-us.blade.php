<x-default-layout>
    @section('title')
        Contact Us
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('corporate.contact-us') }}
    @endsection

    <!--begin::Contact-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body p-lg-17">
            <!--begin::Row-->
            <div class="row mb-3">
                <!--begin::Col-->
                <div class="col-md-6 pe-lg-10">
                    <!--begin::Form-->
                    <form action="" class="form mb-15" method="post" id="kt_contact_form">
                        <h1 class="fw-bold text-gray-900 mb-9">Send Us Email</h1>
                        <!--begin::Input group-->
                        <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-semibold mb-2">Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="name" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="fs-5 fw-semibold mb-2">Email</label>
                                <!--end::Label-->
                                <!--end::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="email" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="fs-5 fw-semibold mb-2">Subject</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-solid" placeholder="" name="subject" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-10 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Message</label>
                            <textarea class="form-control form-control-solid" rows="6" name="message" placeholder=""></textarea>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Submit-->
                        <button type="submit" class="btn btn-primary" id="kt_contact_submit_button">
                            <!--begin::Indicator label-->
                            <span class="indicator-label">Send Feedback</span>
                            <!--end::Indicator label-->
                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            <!--end::Indicator progress-->
                        </button>
                        <!--end::Submit-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 ps-lg-10">
                    <!--begin::Map-->
                    <div id="kt_contact_map" class="w-100 rounded mb-2 mb-lg-0 mt-2" style="height: 486px"></div>
                    <!--end::Map-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 mb-5 mb-lg-15">
                <!--begin::Col-->
                <div class="col-sm-6 pe-lg-10">
                    <!--begin::Phone-->
                    <div class="bg-light card-rounded d-flex flex-column flex-center flex-center p-10 h-100">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-briefcase fs-3tx text-primary">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <!--end::Icon-->
                        <!--begin::Subtitle-->
                        <h1 class="text-gray-900 fw-bold my-5">Let’s Speak</h1>
                        <!--end::Subtitle-->
                        <!--begin::Number-->
                        <div class="text-gray-700 fw-semibold fs-2">1 (833) 597-7538</div>
                        <!--end::Number-->
                    </div>
                    <!--end::Phone-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-6 ps-lg-10">
                    <!--begin::Address-->
                    <div class="text-center bg-light card-rounded d-flex flex-column flex-center p-10 h-100">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-geolocation fs-3tx text-primary">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <!--end::Icon-->
                        <!--begin::Subtitle-->
                        <h1 class="text-gray-900 fw-bold my-5">Our Head Office</h1>
                        <!--end::Subtitle-->
                        <!--begin::Description-->
                        <div class="text-gray-700 fs-3 fw-semibold">Churchill-laan 16 II, 1052 CD, Amsterdam</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Address-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Card-->
            <div class="card mb-4 bg-light text-center">
                <!--begin::Body-->
                <div class="card-body py-12">
                    <!--begin::Icon-->
                    <a href="#" class="mx-4">
                        <img src="{{ asset('assets/media/svg/brand-logos/facebook-4.svg') }}" class="h-30px my-2" alt="" />
                    </a>
                    <!--end::Icon-->
                    <!--begin::Icon-->
                    <a href="#" class="mx-4">
                        <img src="{{ asset('assets/media/svg/brand-logos/instagram-2-1.svg') }}" class="h-30px my-2" alt="" />
                    </a>
                    <!--end::Icon-->
                    <!--begin::Icon-->
                    <a href="#" class="mx-4">
                        <img src="{{ asset('assets/media/svg/brand-logos/github.svg') }}" class="h-30px my-2" alt="" />
                    </a>
                    <!--end::Icon-->
                    <!--begin::Icon-->
                    <a href="#" class="mx-4">
                        <img src="{{ asset('assets/media/svg/brand-logos/behance.svg') }}" class="h-30px my-2" alt="" />
                    </a>
                    <!--end::Icon-->
                    <!--begin::Icon-->
                    <a href="#" class="mx-4">
                        <img src="{{ asset('assets/media/svg/brand-logos/pinterest-p.svg') }}" class="h-30px my-2" alt="" />
                    </a>
                    <!--end::Icon-->
                    <!--begin::Icon-->
                    <a href="#" class="mx-4">
                        <img src="{{ asset('assets/media/svg/brand-logos/twitter.svg') }}" class="h-30px my-2" alt="" />
                    </a>
                    <!--end::Icon-->
                    <!--begin::Icon-->
                    <a href="#" class="mx-4">
                        <img src="{{ asset('assets/media/svg/brand-logos/dribbble-icon-1.svg') }}" class="h-30px my-2" alt="" />
                    </a>
                    <!--end::Icon-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Contact-->

</x-default-layout>
