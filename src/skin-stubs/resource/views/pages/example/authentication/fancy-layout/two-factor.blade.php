<x-auth-layout>

    @section('title')
    Two Factor
    @endsection

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Authentication - Two-factor -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Logo-->
            <a href="index.html" class="d-block d-lg-none mx-auto py-20">
                <img alt="Logo" src="{{ asset('assets/media/logos/default.svg') }}" class="theme-light-show h-25px" />
                <img alt="Logo" src="{{ asset('assets/media/logos/default-dark.svg') }}" class="theme-dark-show h-25px" />
            </a>
            <!--end::Logo-->
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
                <!--begin::Wrapper-->
                <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
                    <!--begin::Header-->
                    <div class="d-flex flex-stack py-2">
                        <!--begin::Back link-->
                        <div class="me-2">
                            <a href="authentication/layouts/fancy/sign-in.html" class="btn btn-icon bg-light rounded-circle">
                                <i class="ki-duotone ki-black-left fs-2 text-gray-800"></i>
                            </a>
                        </div>
                        <!--end::Back link-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="py-20">
                        <!--begin::Form-->
                        <form class="form w-100 mb-10" novalidate="novalidate" data-kt-redirect-url="index.html" id="kt_sing_in_two_factor_form">
                            <!--begin::Icon-->
                            <div class="text-center mb-10">
                                <img alt="Logo" class="theme-light-show mh-125px" src="{{ asset('assets/media/svg/misc/smartphone-2.svg') }}" />
                                <img alt="Logo" class="theme-dark-show mh-125px" src="{{ asset('assets/media/svg/misc/smartphone-2-dark.svg') }}" />
                            </div>
                            <!--end::Icon-->
                            <!--begin::Heading-->
                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-gray-900 mb-3" data-kt-translate="two-step-title">Two-Factor Verification</h1>
                                <!--end::Title-->
                                <!--begin::Sub-title-->
                                <div class="text-muted fw-semibold fs-5 mb-5" data-kt-translate="two-step-deck">Enter the verification code we sent to</div>
                                <!--end::Sub-title-->
                                <!--begin::Mobile no-->
                                <div class="fw-bold text-gray-900 fs-3">******7859</div>
                                <!--end::Mobile no-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Section-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <div class="fw-bold text-start text-gray-900 fs-6 mb-1 ms-1" data-kt-translate="two-step-label">Type your 6 digit security code</div>
                                <!--end::Label-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-wrap flex-stack">
                                    <input type="text" name="code_1" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
                                    <input type="text" name="code_2" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
                                    <input type="text" name="code_3" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
                                    <input type="text" name="code_4" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
                                    <input type="text" name="code_5" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
                                    <input type="text" name="code_6" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
                                </div>
                                <!--begin::Input group-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <!--begin::Submit-->
                                <button id="kt_sing_in_two_factor_submit" class="btn btn-primary" data-kt-translate="two-step-submit">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">Submit</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator progress-->
                                </button>
                                <!--end::Submit-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="m-0">
                        <!--begin::Toggle-->
                        <button class="btn btn-flex btn-link rotate" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
                            <img data-kt-element="current-lang-flag" class="w-25px h-25px rounded-circle me-3" src="{{ asset('assets/media/flags/united-states.svg') }}" alt="" />
                            <span data-kt-element="current-lang-name" class="me-2">English</span>
                            <i class="ki-duotone ki-down fs-2 text-muted rotate-180 m-0"></i>
                        </button>
                        <!--end::Toggle-->
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4" data-kt-menu="true" id="kt_auth_lang_menu">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1" src="{{ asset('assets/media/flags/united-states.svg') }}" alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">English</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1" src="{{ asset('assets/media/flags/spain.svg') }}" alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">Spanish</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="German">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1" src="{{ asset('assets/media/flags/germany.svg') }}" alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">German</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1" src="{{ asset('assets/media/flags/japan.svg') }}" alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">Japanese</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="French">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1" src="{{ asset('assets/media/flags/france.svg') }}" alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">French</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Aside-->
            <!--begin::Body-->
            <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat" style="background-image: url({{ asset('assets/media/auth/bg11.png') }})"></div>
            <!--begin::Body-->
        </div>
        <!--end::Authentication - Two-factor-->
    </div>
    <!--end::Root-->
</x-auth-layout>
