<x-default-layout>
    @section('title')
    Share & Earn
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('utilities.modals.general.share-earn') }}
    @endsection

    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body">
            <!--begin::Heading-->
            <div class="card-px text-center pt-15 pb-15">
                <!--begin::Title-->
                <h2 class="fs-2x fw-bold mb-0">Share & Earn Modal Example</h2>
                <!--end::Title-->
                <!--begin::Description-->
                <p class="text-gray-500 fs-4 fw-semibold py-7">Click on the below buttons to launch
                    <br />a share & earn example.</p>
                <!--end::Description-->
                <!--begin::Action-->
                <a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_share_earn">Share & Earn</a>
                <!--end::Action-->
            </div>
            <!--end::Heading-->
            <!--begin::Illustration-->
            <div class="text-center pb-15 px-5">
                <img src="{{ asset('assets/media/illustrations/sketchy-1/9.png') }}" alt="" class="mw-100 h-200px h-sm-325px" />
            </div>
            <!--end::Illustration-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->

    <!--begin::Modal - Share & Earn-->
    <div class="modal fade" id="kt_modal_share_earn" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-800px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y pt-0 pb-15">
                    <!--begin::Wrapper-->
                    <div class="mw-lg-600px mx-auto">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Share & Earn</h1>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <div class="text-muted fw-semibold fs-5">If you need more info, please check
                                <a href="#" class="link-primary fw-bold">Author Commision</a>.</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Title-->
                            <h4 class="fs-5 fw-semibold text-gray-800">Share my referral link with friends</h4>
                            <!--end::Title-->
                            <!--begin::Title-->
                            <div class="d-flex">
                                <input id="kt_share_earn_link_input" type="text" class="form-control form-control-solid me-3 flex-grow-1" name="search" value="https://keenthemes.com/?ref=skitechnology" />
                                <button id="kt_share_earn_link_copy_button" class="btn btn-light fw-bold flex-shrink-0" data-clipboard-target="#kt_share_earn_link_input">Copy Link</button>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex">
                            <a href="#" class="btn btn-light w-100">
                                <img alt="Logo" src="{{ asset('assets/media/svg/social-logos/google.svg') }}" class="h-15px me-3" />Import Contacts</a>
                            <a href="#" class="btn btn-light w-100 mx-6">
                                <img alt="Logo" src="{{ asset('assets/media/svg/social-logos/facebook.svg') }}" class="h-20px me-3" />Facebook</a>
                            <a href="#" class="btn btn-light w-100">
                                <img alt="Logo" src="{{ asset('assets/media/svg/social-logos/twitter.svg') }}" class="h-20px me-3" />Twitter</a>
                        </div>
                        <!--end::Actions-->
                        <!--begin::Input group-->
                        <div class="d-flex align-items-center mt-10">
                            <!--begin::Label-->
                            <div class="flex-grow-1">
                                <span class="fs-6 fw-semibold text-gray-800 d-block">Adding Users by Team Members</span>
                                <span class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</span>
                            </div>
                            <!--end::Label-->
                            <!--begin::Switch-->
                            <label class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                <span class="form-check-label">Allowed</span>
                            </label>
                            <!--end::Switch-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Share & Earn-->

</x-default-layout>
