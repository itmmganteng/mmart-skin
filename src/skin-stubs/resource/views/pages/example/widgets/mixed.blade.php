<x-default-layout>
    @section('title')
    Mixed
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('widgets.mixed') }}
    @endsection

    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 1-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body p-0">
                    <!--begin::Header-->
                    <div class="px-9 pt-7 card-rounded h-275px w-100 bg-primary">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack">
                            <h3 class="m-0 text-white fw-bold fs-3">Sales Summary</h3>
                            <div class="ms-1">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                <i class="ki-duotone ki-information fs-6">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Balance-->
                        <div class="d-flex text-center flex-column text-white pt-8">
                            <span class="fw-semibold fs-7">You Balance</span>
                            <span class="fw-bold fs-2x pt-1">$37,562.00</span>
                        </div>
                        <!--end::Balance-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Items-->
                    <div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -100px">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px w-40px me-5">
                                <span class="symbol-label bg-lighten">
                                    <i class="ki-duotone ki-compass fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Description-->
                            <div class="d-flex align-items-center flex-wrap w-100">
                                <!--begin::Title-->
                                <div class="mb-1 pe-3 flex-grow-1">
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Sales</a>
                                    <div class="text-gray-500 fw-semibold fs-7">100 Regions</div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Label-->
                                <div class="d-flex align-items-center">
                                    <div class="fw-bold fs-5 text-gray-800 pe-1">$2,5b</div>
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px w-40px me-5">
                                <span class="symbol-label bg-lighten">
                                    <i class="ki-duotone ki-element-11 fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Description-->
                            <div class="d-flex align-items-center flex-wrap w-100">
                                <!--begin::Title-->
                                <div class="mb-1 pe-3 flex-grow-1">
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Revenue</a>
                                    <div class="text-gray-500 fw-semibold fs-7">Quarter 2/3</div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Label-->
                                <div class="d-flex align-items-center">
                                    <div class="fw-bold fs-5 text-gray-800 pe-1">$1,7b</div>
                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px w-40px me-5">
                                <span class="symbol-label bg-lighten">
                                    <i class="ki-duotone ki-graph-up fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Description-->
                            <div class="d-flex align-items-center flex-wrap w-100">
                                <!--begin::Title-->
                                <div class="mb-1 pe-3 flex-grow-1">
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Growth</a>
                                    <div class="text-gray-500 fw-semibold fs-7">80% Rate</div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Label-->
                                <div class="d-flex align-items-center">
                                    <div class="fw-bold fs-5 text-gray-800 pe-1">$8,8m</div>
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px w-40px me-5">
                                <span class="symbol-label bg-lighten">
                                    <i class="ki-duotone ki-document fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Description-->
                            <div class="d-flex align-items-center flex-wrap w-100">
                                <!--begin::Title-->
                                <div class="mb-1 pe-3 flex-grow-1">
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Dispute</a>
                                    <div class="text-gray-500 fw-semibold fs-7">3090 Refunds</div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Label-->
                                <div class="d-flex align-items-center">
                                    <div class="fw-bold fs-5 text-gray-800 pe-1">$270m</div>
                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 1-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 1-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body p-0">
                    <!--begin::Header-->
                    <div class="px-9 pt-7 card-rounded h-275px w-100 bg-danger">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack">
                            <h3 class="m-0 text-white fw-bold fs-3">Sales Summary</h3>
                            <div class="ms-1">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                <i class="ki-duotone ki-information fs-6">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Balance-->
                        <div class="d-flex text-center flex-column text-white pt-8">
                            <span class="fw-semibold fs-7">You Balance</span>
                            <span class="fw-bold fs-2x pt-1">$37,562.00</span>
                        </div>
                        <!--end::Balance-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Items-->
                    <div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -100px">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px w-40px me-5">
                                <span class="symbol-label bg-lighten">
                                    <i class="ki-duotone ki-compass fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Description-->
                            <div class="d-flex align-items-center flex-wrap w-100">
                                <!--begin::Title-->
                                <div class="mb-1 pe-3 flex-grow-1">
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Sales</a>
                                    <div class="text-gray-500 fw-semibold fs-7">100 Regions</div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Label-->
                                <div class="d-flex align-items-center">
                                    <div class="fw-bold fs-5 text-gray-800 pe-1">$2,5b</div>
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px w-40px me-5">
                                <span class="symbol-label bg-lighten">
                                    <i class="ki-duotone ki-element-11 fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Description-->
                            <div class="d-flex align-items-center flex-wrap w-100">
                                <!--begin::Title-->
                                <div class="mb-1 pe-3 flex-grow-1">
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Revenue</a>
                                    <div class="text-gray-500 fw-semibold fs-7">Quarter 2/3</div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Label-->
                                <div class="d-flex align-items-center">
                                    <div class="fw-bold fs-5 text-gray-800 pe-1">$1,7b</div>
                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px w-40px me-5">
                                <span class="symbol-label bg-lighten">
                                    <i class="ki-duotone ki-graph-up fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Description-->
                            <div class="d-flex align-items-center flex-wrap w-100">
                                <!--begin::Title-->
                                <div class="mb-1 pe-3 flex-grow-1">
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Growth</a>
                                    <div class="text-gray-500 fw-semibold fs-7">80% Rate</div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Label-->
                                <div class="d-flex align-items-center">
                                    <div class="fw-bold fs-5 text-gray-800 pe-1">$8,8m</div>
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px w-40px me-5">
                                <span class="symbol-label bg-lighten">
                                    <i class="ki-duotone ki-document fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Description-->
                            <div class="d-flex align-items-center flex-wrap w-100">
                                <!--begin::Title-->
                                <div class="mb-1 pe-3 flex-grow-1">
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Dispute</a>
                                    <div class="text-gray-500 fw-semibold fs-7">3090 Refunds</div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Label-->
                                <div class="d-flex align-items-center">
                                    <div class="fw-bold fs-5 text-gray-800 pe-1">$270m</div>
                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 1-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 1-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body p-0">
                    <!--begin::Header-->
                    <div class="px-9 pt-7 card-rounded h-275px w-100 bg-success">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack">
                            <h3 class="m-0 text-white fw-bold fs-3">Sales Summary</h3>
                            <div class="ms-1">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                <i class="ki-duotone ki-information fs-6">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Balance-->
                        <div class="d-flex text-center flex-column text-white pt-8">
                            <span class="fw-semibold fs-7">You Balance</span>
                            <span class="fw-bold fs-2x pt-1">$37,562.00</span>
                        </div>
                        <!--end::Balance-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Items-->
                    <div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -100px">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px w-40px me-5">
                                <span class="symbol-label bg-lighten">
                                    <i class="ki-duotone ki-compass fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Description-->
                            <div class="d-flex align-items-center flex-wrap w-100">
                                <!--begin::Title-->
                                <div class="mb-1 pe-3 flex-grow-1">
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Sales</a>
                                    <div class="text-gray-500 fw-semibold fs-7">100 Regions</div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Label-->
                                <div class="d-flex align-items-center">
                                    <div class="fw-bold fs-5 text-gray-800 pe-1">$2,5b</div>
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px w-40px me-5">
                                <span class="symbol-label bg-lighten">
                                    <i class="ki-duotone ki-element-11 fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Description-->
                            <div class="d-flex align-items-center flex-wrap w-100">
                                <!--begin::Title-->
                                <div class="mb-1 pe-3 flex-grow-1">
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Revenue</a>
                                    <div class="text-gray-500 fw-semibold fs-7">Quarter 2/3</div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Label-->
                                <div class="d-flex align-items-center">
                                    <div class="fw-bold fs-5 text-gray-800 pe-1">$1,7b</div>
                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px w-40px me-5">
                                <span class="symbol-label bg-lighten">
                                    <i class="ki-duotone ki-graph-up fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Description-->
                            <div class="d-flex align-items-center flex-wrap w-100">
                                <!--begin::Title-->
                                <div class="mb-1 pe-3 flex-grow-1">
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Growth</a>
                                    <div class="text-gray-500 fw-semibold fs-7">80% Rate</div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Label-->
                                <div class="d-flex align-items-center">
                                    <div class="fw-bold fs-5 text-gray-800 pe-1">$8,8m</div>
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px w-40px me-5">
                                <span class="symbol-label bg-lighten">
                                    <i class="ki-duotone ki-document fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Description-->
                            <div class="d-flex align-items-center flex-wrap w-100">
                                <!--begin::Title-->
                                <div class="mb-1 pe-3 flex-grow-1">
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Dispute</a>
                                    <div class="text-gray-500 fw-semibold fs-7">3090 Refunds</div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Label-->
                                <div class="d-flex align-items-center">
                                    <div class="fw-bold fs-5 text-gray-800 pe-1">$270m</div>
                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 1-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 2-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 bg-info py-5">
                    <h3 class="card-title fw-bold text-white">Sales Statistics</h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Create Invoice</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                    <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                        <i class="ki-duotone ki-information fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Generate Bill</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Plans</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Billing</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Statements</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                <!--end::Input-->
                                                <!--end::Label-->
                                                <span class="form-check-label text-muted fs-6">Recuring</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body p-0">
                    <!--begin::Chart-->
                    <div class="mixed-widget-2-chart card-rounded-bottom bg-info" data-kt-color="info" style="height: 200px"></div>
                    <!--end::Chart-->
                    <!--begin::Stats-->
                    <div class="card-p mt-n20 position-relative">
                        <!--begin::Row-->
                        <div class="row g-0">
                            <!--begin::Col-->
                            <div class="col d-flex flex-column bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                                <i class="ki-duotone ki-chart-simple fs-2x text-warning my-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                                <a href="#" class="text-warning fw-semibold fs-6">Weekly Sales</a>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col d-flex flex-column bg-light-primary px-6 py-8 rounded-2 mb-7">
                                <i class="ki-duotone ki-briefcase fs-2x text-primary my-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <a href="#" class="text-primary fw-semibold fs-6">New Projects</a>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row g-0">
                            <!--begin::Col-->
                            <div class="col d-flex flex-column bg-light-danger px-6 py-8 rounded-2 me-7">
                                <i class="ki-duotone ki-abstract-26 fs-2x text-danger my-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <a href="#" class="text-danger fw-semibold fs-6 mt-2">Item Orders</a>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col d-flex flex-column bg-light-success px-6 py-8 rounded-2">
                                <i class="ki-duotone ki-sms fs-2x text-success my-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <a href="#" class="text-success fw-semibold fs-6 mt-2">Bug Reports</a>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 2-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 2-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 bg-danger py-5">
                    <h3 class="card-title fw-bold text-white">Sales Statistics</h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Create Invoice</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                    <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                        <i class="ki-duotone ki-information fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Generate Bill</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Plans</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Billing</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Statements</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                <!--end::Input-->
                                                <!--end::Label-->
                                                <span class="form-check-label text-muted fs-6">Recuring</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body p-0">
                    <!--begin::Chart-->
                    <div class="mixed-widget-2-chart card-rounded-bottom bg-danger" data-kt-color="danger" style="height: 200px"></div>
                    <!--end::Chart-->
                    <!--begin::Stats-->
                    <div class="card-p mt-n20 position-relative">
                        <!--begin::Row-->
                        <div class="row g-0">
                            <!--begin::Col-->
                            <div class="col d-flex flex-column bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                                <i class="ki-duotone ki-chart-simple fs-2x text-warning my-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                                <a href="#" class="text-warning fw-semibold fs-6">Weekly Sales</a>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col d-flex flex-column bg-light-primary px-6 py-8 rounded-2 mb-7">
                                <i class="ki-duotone ki-briefcase fs-2x text-primary my-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <a href="#" class="text-primary fw-semibold fs-6">New Projects</a>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row g-0">
                            <!--begin::Col-->
                            <div class="col d-flex flex-column bg-light-danger px-6 py-8 rounded-2 me-7">
                                <i class="ki-duotone ki-abstract-26 fs-2x text-danger my-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <a href="#" class="text-danger fw-semibold fs-6 mt-2">Item Orders</a>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col d-flex flex-column bg-light-success px-6 py-8 rounded-2">
                                <i class="ki-duotone ki-sms fs-2x text-success my-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <a href="#" class="text-success fw-semibold fs-6 mt-2">Bug Reports</a>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 2-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 2-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 bg-primary py-5">
                    <h3 class="card-title fw-bold text-white">Sales Statistics</h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Create Invoice</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                    <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                        <i class="ki-duotone ki-information fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Generate Bill</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Plans</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Billing</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Statements</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                <!--end::Input-->
                                                <!--end::Label-->
                                                <span class="form-check-label text-muted fs-6">Recuring</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body p-0">
                    <!--begin::Chart-->
                    <div class="mixed-widget-2-chart card-rounded-bottom bg-primary" data-kt-color="primary" style="height: 200px"></div>
                    <!--end::Chart-->
                    <!--begin::Stats-->
                    <div class="card-p mt-n20 position-relative">
                        <!--begin::Row-->
                        <div class="row g-0">
                            <!--begin::Col-->
                            <div class="col d-flex flex-column bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                                <i class="ki-duotone ki-chart-simple fs-2x text-warning my-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                                <a href="#" class="text-warning fw-semibold fs-6">Weekly Sales</a>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col d-flex flex-column bg-light-primary px-6 py-8 rounded-2 mb-7">
                                <i class="ki-duotone ki-briefcase fs-2x text-primary my-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <a href="#" class="text-primary fw-semibold fs-6">New Projects</a>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row g-0">
                            <!--begin::Col-->
                            <div class="col d-flex flex-column bg-light-danger px-6 py-8 rounded-2 me-7">
                                <i class="ki-duotone ki-abstract-26 fs-2x text-danger my-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <a href="#" class="text-danger fw-semibold fs-6 mt-2">Item Orders</a>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col d-flex flex-column bg-light-success px-6 py-8 rounded-2">
                                <i class="ki-duotone ki-sms fs-2x text-success my-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <a href="#" class="text-success fw-semibold fs-6 mt-2">Bug Reports</a>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 2-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 12-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 bg-info py-5">
                    <h3 class="card-title fw-bold text-white">Sales Progress</h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Create Invoice</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                    <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                        <i class="ki-duotone ki-information fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Generate Bill</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Plans</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Billing</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Statements</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                <!--end::Input-->
                                                <!--end::Label-->
                                                <span class="form-check-label text-muted fs-6">Recuring</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body p-0">
                    <!--begin::Chart-->
                    <div class="mixed-widget-12-chart card-rounded-bottom bg-info" data-kt-color="info" style="height: 250px"></div>
                    <!--end::Chart-->
                    <!--begin::Stats-->
                    <div class="card-rounded bg-body mt-n10 position-relative card-px py-15">
                        <!--begin::Row-->
                        <div class="row g-0 mb-7">
                            <!--begin::Col-->
                            <div class="col mx-5">
                                <div class="fs-6 text-gray-500">Avarage Sale</div>
                                <div class="fs-2 fw-bold text-gray-800">$650</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col mx-5">
                                <div class="fs-6 text-gray-500">Comissions</div>
                                <div class="fs-2 fw-bold text-gray-800">$29,500</div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row g-0">
                            <!--begin::Col-->
                            <div class="col mx-5">
                                <div class="fs-6 text-gray-500">Revenue</div>
                                <div class="fs-2 fw-bold text-gray-800">$55,000</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col mx-5">
                                <div class="fs-6 text-gray-500">Expenses</div>
                                <div class="fs-2 fw-bold text-gray-800">$1,130,600</div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 12-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 12-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 bg-danger py-5">
                    <h3 class="card-title fw-bold text-white">Sales Progress</h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Create Invoice</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                    <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                        <i class="ki-duotone ki-information fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Generate Bill</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Plans</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Billing</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Statements</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                <!--end::Input-->
                                                <!--end::Label-->
                                                <span class="form-check-label text-muted fs-6">Recuring</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body p-0">
                    <!--begin::Chart-->
                    <div class="mixed-widget-12-chart card-rounded-bottom bg-danger" data-kt-color="danger" style="height: 250px"></div>
                    <!--end::Chart-->
                    <!--begin::Stats-->
                    <div class="card-rounded bg-body mt-n10 position-relative card-px py-15">
                        <!--begin::Row-->
                        <div class="row g-0 mb-7">
                            <!--begin::Col-->
                            <div class="col mx-5">
                                <div class="fs-6 text-gray-500">Avarage Sale</div>
                                <div class="fs-2 fw-bold text-gray-800">$650</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col mx-5">
                                <div class="fs-6 text-gray-500">Comissions</div>
                                <div class="fs-2 fw-bold text-gray-800">$29,500</div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row g-0">
                            <!--begin::Col-->
                            <div class="col mx-5">
                                <div class="fs-6 text-gray-500">Revenue</div>
                                <div class="fs-2 fw-bold text-gray-800">$55,000</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col mx-5">
                                <div class="fs-6 text-gray-500">Expenses</div>
                                <div class="fs-2 fw-bold text-gray-800">$1,130,600</div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 12-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 12-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 bg-primary py-5">
                    <h3 class="card-title fw-bold text-white">Sales Progress</h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Create Invoice</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                    <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                        <i class="ki-duotone ki-information fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Generate Bill</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Plans</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Billing</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Statements</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                <!--end::Input-->
                                                <!--end::Label-->
                                                <span class="form-check-label text-muted fs-6">Recuring</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body p-0">
                    <!--begin::Chart-->
                    <div class="mixed-widget-12-chart card-rounded-bottom bg-primary" data-kt-color="primary" style="height: 250px"></div>
                    <!--end::Chart-->
                    <!--begin::Stats-->
                    <div class="card-rounded bg-body mt-n10 position-relative card-px py-15">
                        <!--begin::Row-->
                        <div class="row g-0 mb-7">
                            <!--begin::Col-->
                            <div class="col mx-5">
                                <div class="fs-6 text-gray-500">Avarage Sale</div>
                                <div class="fs-2 fw-bold text-gray-800">$650</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col mx-5">
                                <div class="fs-6 text-gray-500">Comissions</div>
                                <div class="fs-2 fw-bold text-gray-800">$29,500</div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row g-0">
                            <!--begin::Col-->
                            <div class="col mx-5">
                                <div class="fs-6 text-gray-500">Revenue</div>
                                <div class="fs-2 fw-bold text-gray-800">$55,000</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col mx-5">
                                <div class="fs-6 text-gray-500">Expenses</div>
                                <div class="fs-2 fw-bold text-gray-800">$1,130,600</div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 12-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 8-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Heading-->
                    <div class="d-flex flex-stack">
                        <!--begin:Info-->
                        <div class="d-flex align-items-center">
                            <!--begin:Image-->
                            <div class="symbol symbol-60px me-5">
                                <span class="symbol-label bg-danger-light">
                                    <img src="{{ asset('assets/media/svg/brand-logos/plurk.svg') }}" class="h-50 align-self-center" alt="" />
                                </span>
                            </div>
                            <!--end:Image-->
                            <!--begin:Title-->
                            <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-5">Monthly Subscription</a>
                                <span class="text-muted fw-bold">Due: 27 Apr 2020</span>
                            </div>
                            <!--end:Title-->
                        </div>
                        <!--begin:Info-->
                        <!--begin:Menu-->
                        <div class="ms-1">
                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-category fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Heading-->
                    <!--begin:Stats-->
                    <div class="d-flex flex-column w-100 mt-12">
                        <span class="text-gray-900 me-2 fw-bold pb-3">Progress</span>
                        <div class="progress h-5px w-100">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--end:Stats-->
                    <!--begin:Team-->
                    <div class="d-flex flex-column mt-10">
                        <div class="text-gray-900 me-2 fw-bold pb-4">Team</div>
                        <div class="d-flex">
                            <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Ana Stone">
                                <img src="{{ asset('assets/media/avatars/300-6.jpg') }}" alt="" />
                            </a>
                            <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Mark Larson">
                                <img src="{{ asset('assets/media/avatars/300-5.jpg') }}" alt="" />
                            </a>
                            <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Sam Harris">
                                <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" alt="" />
                            </a>
                            <a href="#" class="symbol symbol-35px" data-bs-toggle="tooltip" title="Alice Micto">
                                <img src="{{ asset('assets/media/avatars/300-10.jpg') }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <!--end:Team-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 8-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 8-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Heading-->
                    <div class="d-flex flex-stack">
                        <!--begin:Info-->
                        <div class="d-flex align-items-center">
                            <!--begin:Image-->
                            <div class="symbol symbol-60px me-5">
                                <span class="symbol-label bg-primary-light">
                                    <img src="{{ asset('assets/media/svg/brand-logos/vimeo.svg') }}" class="h-50 align-self-center" alt="" />
                                </span>
                            </div>
                            <!--end:Image-->
                            <!--begin:Title-->
                            <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-5">Monthly Subscription</a>
                                <span class="text-muted fw-bold">Due: 27 Apr 2020</span>
                            </div>
                            <!--end:Title-->
                        </div>
                        <!--begin:Info-->
                        <!--begin:Menu-->
                        <div class="ms-1">
                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-category fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Heading-->
                    <!--begin:Stats-->
                    <div class="d-flex flex-column w-100 mt-12">
                        <span class="text-gray-900 me-2 fw-bold pb-3">Progress</span>
                        <div class="progress h-5px w-100">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--end:Stats-->
                    <!--begin:Team-->
                    <div class="d-flex flex-column mt-10">
                        <div class="text-gray-900 me-2 fw-bold pb-4">Team</div>
                        <div class="d-flex">
                            <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Ana Stone">
                                <img src="{{ asset('assets/media/avatars/300-6.jpg') }}" alt="" />
                            </a>
                            <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Mark Larson">
                                <img src="{{ asset('assets/media/avatars/300-5.jpg') }}" alt="" />
                            </a>
                            <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Sam Harris">
                                <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" alt="" />
                            </a>
                            <a href="#" class="symbol symbol-35px" data-bs-toggle="tooltip" title="Alice Micto">
                                <img src="{{ asset('assets/media/avatars/300-10.jpg') }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <!--end:Team-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 8-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 8-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Heading-->
                    <div class="d-flex flex-stack">
                        <!--begin:Info-->
                        <div class="d-flex align-items-center">
                            <!--begin:Image-->
                            <div class="symbol symbol-60px me-5">
                                <span class="symbol-label bg-success-light">
                                    <img src="{{ asset('assets/media/svg/brand-logos/kickstarter.svg') }}" class="h-50 align-self-center" alt="" />
                                </span>
                            </div>
                            <!--end:Image-->
                            <!--begin:Title-->
                            <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-5">Monthly Subscription</a>
                                <span class="text-muted fw-bold">Due: 27 Apr 2020</span>
                            </div>
                            <!--end:Title-->
                        </div>
                        <!--begin:Info-->
                        <!--begin:Menu-->
                        <div class="ms-1">
                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-category fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Heading-->
                    <!--begin:Stats-->
                    <div class="d-flex flex-column w-100 mt-12">
                        <span class="text-gray-900 me-2 fw-bold pb-3">Progress</span>
                        <div class="progress h-5px w-100">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--end:Stats-->
                    <!--begin:Team-->
                    <div class="d-flex flex-column mt-10">
                        <div class="text-gray-900 me-2 fw-bold pb-4">Team</div>
                        <div class="d-flex">
                            <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Ana Stone">
                                <img src="{{ asset('assets/media/avatars/300-6.jpg') }}" alt="" />
                            </a>
                            <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Mark Larson">
                                <img src="{{ asset('assets/media/avatars/300-5.jpg') }}" alt="" />
                            </a>
                            <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Sam Harris">
                                <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" alt="" />
                            </a>
                            <a href="#" class="symbol symbol-35px" data-bs-toggle="tooltip" title="Alice Micto">
                                <img src="{{ asset('assets/media/avatars/300-10.jpg') }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <!--end:Team-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 8-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 9-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column pb-10 pb-lg-15">
                    <div class="flex-grow-1">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center pe-2 mb-5">
                            <span class="text-muted fw-bold fs-5 flex-grow-1">7 hours ago</span>
                            <div class="symbol symbol-50px">
                                <span class="symbol-label bg-light">
                                    <img src="{{ asset('assets/media/svg/brand-logos/plurk.svg') }}" class="h-50 align-self-center" alt="" />
                                </span>
                            </div>
                        </div>
                        <!--end::Info-->
                        <!--begin::Link-->
                        <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-4">PitStop - Multiple Email Generator</a>
                        <!--end::Link-->
                        <!--begin::Desc-->
                        <p class="py-3">Pitstop creates quick email campaigns.
                            <br />We help to strengthen your brand
                            <br />for your every purpose.</p>
                        <!--end::Desc-->
                    </div>
                    <!--begin::Team-->
                    <div class="d-flex align-items-center">
                        <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Ana Stone">
                            <img src="{{ asset('assets/media/avatars/300-6.jpg') }}" alt="" />
                        </a>
                        <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Mark Larson">
                            <img src="{{ asset('assets/media/avatars/300-5.jpg') }}" alt="" />
                        </a>
                        <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Sam Harris">
                            <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" alt="" />
                        </a>
                    </div>
                    <!--end::Team-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 9-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 9-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column pb-10 pb-lg-15">
                    <div class="flex-grow-1">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center pe-2 mb-5">
                            <span class="text-muted fw-bold fs-5 flex-grow-1">10 days ago</span>
                            <div class="symbol symbol-50px">
                                <span class="symbol-label bg-light">
                                    <img src="{{ asset('assets/media/svg/brand-logos/telegram.svg') }}" class="h-50 align-self-center" alt="" />
                                </span>
                            </div>
                        </div>
                        <!--end::Info-->
                        <!--begin::Link-->
                        <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-4">ReactJS Admin Theme</a>
                        <!--end::Link-->
                        <!--begin::Desc-->
                        <p class="py-3">Keenthemes uses the latest and greatest frameworks
                            <br />with ReactJS for complete modernization and
                            <br />future.</p>
                        <!--end::Desc-->
                    </div>
                    <!--begin::Team-->
                    <div class="d-flex align-items-center">
                        <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Ana Stone">
                            <img src="{{ asset('assets/media/avatars/300-6.jpg') }}" alt="" />
                        </a>
                        <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Mark Larson">
                            <img src="{{ asset('assets/media/avatars/300-5.jpg') }}" alt="" />
                        </a>
                        <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Sam Harris">
                            <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" alt="" />
                        </a>
                    </div>
                    <!--end::Team-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 9-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 9-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column pb-10 pb-lg-15">
                    <div class="flex-grow-1">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center pe-2 mb-5">
                            <span class="text-muted fw-bold fs-5 flex-grow-1">2 weeks ago</span>
                            <div class="symbol symbol-50px">
                                <span class="symbol-label bg-light">
                                    <img src="{{ asset('assets/media/svg/brand-logos/vimeo.svg') }}" class="h-50 align-self-center" alt="" />
                                </span>
                            </div>
                        </div>
                        <!--end::Info-->
                        <!--begin::Link-->
                        <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-4">KT.com - High Quality Templates</a>
                        <!--end::Link-->
                        <!--begin::Desc-->
                        <p class="py-3">Easy to use, incredibly flexible and secure
                            <br />with in-depth documentation that outlines
                            <br />everything for you</p>
                        <!--end::Desc-->
                    </div>
                    <!--begin::Team-->
                    <div class="d-flex align-items-center">
                        <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Ana Stone">
                            <img src="{{ asset('assets/media/avatars/300-6.jpg') }}" alt="" />
                        </a>
                        <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Mark Larson">
                            <img src="{{ asset('assets/media/avatars/300-5.jpg') }}" alt="" />
                        </a>
                        <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Sam Harris">
                            <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" alt="" />
                        </a>
                    </div>
                    <!--end::Team-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 9-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 3-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Beader-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Sales Overview</span>
                        <span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c7020a0336">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c7020a0336" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body p-0 d-flex flex-column">
                    <!--begin::Stats-->
                    <div class="card-p pt-5 bg-body flex-grow-1">
                        <!--begin::Row-->
                        <div class="row g-0">
                            <!--begin::Col-->
                            <div class="col mr-8">
                                <!--begin::Label-->
                                <div class="fs-7 text-muted fw-bold">Average Sale</div>
                                <!--end::Label-->
                                <!--begin::Stat-->
                                <div class="d-flex align-items-center">
                                    <div class="fs-4 fw-bold">$650</div>
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Label-->
                                <div class="fs-7 text-muted fw-bold">Commission</div>
                                <!--end::Label-->
                                <!--begin::Stat-->
                                <div class="fs-4 fw-bold">$233,600</div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row g-0 mt-8">
                            <!--begin::Col-->
                            <div class="col mr-8">
                                <!--begin::Label-->
                                <div class="fs-7 text-muted fw-bold">Annual Taxes 2019</div>
                                <!--end::Label-->
                                <!--begin::Stat-->
                                <div class="fs-4 fw-bold">$29,004</div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Label-->
                                <div class="fs-7 text-muted fw-bold">Annual Income</div>
                                <!--end::Label-->
                                <!--begin::Stat-->
                                <div class="d-flex align-items-center">
                                    <div class="fs-4 fw-bold">$1,480,00</div>
                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Stats-->
                    <!--begin::Chart-->
                    <div class="mixed-widget-3-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 3-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 3-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Beader-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Sales Overview</span>
                        <span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c7020a034b">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c7020a034b" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body p-0 d-flex flex-column">
                    <!--begin::Stats-->
                    <div class="card-p pt-5 bg-body flex-grow-1">
                        <!--begin::Row-->
                        <div class="row g-0">
                            <!--begin::Col-->
                            <div class="col mr-8">
                                <!--begin::Label-->
                                <div class="fs-7 text-muted fw-bold">Average Sale</div>
                                <!--end::Label-->
                                <!--begin::Stat-->
                                <div class="d-flex align-items-center">
                                    <div class="fs-4 fw-bold">$650</div>
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Label-->
                                <div class="fs-7 text-muted fw-bold">Commission</div>
                                <!--end::Label-->
                                <!--begin::Stat-->
                                <div class="fs-4 fw-bold">$233,600</div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row g-0 mt-8">
                            <!--begin::Col-->
                            <div class="col mr-8">
                                <!--begin::Label-->
                                <div class="fs-7 text-muted fw-bold">Annual Taxes 2019</div>
                                <!--end::Label-->
                                <!--begin::Stat-->
                                <div class="fs-4 fw-bold">$29,004</div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Label-->
                                <div class="fs-7 text-muted fw-bold">Annual Income</div>
                                <!--end::Label-->
                                <!--begin::Stat-->
                                <div class="d-flex align-items-center">
                                    <div class="fs-4 fw-bold">$1,480,00</div>
                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Stats-->
                    <!--begin::Chart-->
                    <div class="mixed-widget-3-chart card-rounded-bottom" data-kt-chart-color="danger" style="height: 150px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 3-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 3-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Beader-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Sales Overview</span>
                        <span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c7020a035e">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c7020a035e" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body p-0 d-flex flex-column">
                    <!--begin::Stats-->
                    <div class="card-p pt-5 bg-body flex-grow-1">
                        <!--begin::Row-->
                        <div class="row g-0">
                            <!--begin::Col-->
                            <div class="col mr-8">
                                <!--begin::Label-->
                                <div class="fs-7 text-muted fw-bold">Average Sale</div>
                                <!--end::Label-->
                                <!--begin::Stat-->
                                <div class="d-flex align-items-center">
                                    <div class="fs-4 fw-bold">$650</div>
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Label-->
                                <div class="fs-7 text-muted fw-bold">Commission</div>
                                <!--end::Label-->
                                <!--begin::Stat-->
                                <div class="fs-4 fw-bold">$233,600</div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row g-0 mt-8">
                            <!--begin::Col-->
                            <div class="col mr-8">
                                <!--begin::Label-->
                                <div class="fs-7 text-muted fw-bold">Annual Taxes 2019</div>
                                <!--end::Label-->
                                <!--begin::Stat-->
                                <div class="fs-4 fw-bold">$29,004</div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Label-->
                                <div class="fs-7 text-muted fw-bold">Annual Income</div>
                                <!--end::Label-->
                                <!--begin::Stat-->
                                <div class="d-flex align-items-center">
                                    <div class="fs-4 fw-bold">$1,480,00</div>
                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Stats-->
                    <!--begin::Chart-->
                    <div class="mixed-widget-3-chart card-rounded-bottom" data-kt-chart-color="success" style="height: 150px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 3-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 4-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Beader-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Action Needed</span>
                        <span class="text-muted fw-semibold fs-7">Complete your profile setup</span>
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c7020a041a">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c7020a041a" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <div class="flex-grow-1">
                        <div class="mixed-widget-4-chart" data-kt-chart-color="primary" style="height: 200px"></div>
                    </div>
                    <div class="pt-5">
                        <p class="text-center fs-6 pb-5">
                            <span class="badge badge-light-danger fs-8">Notes:</span>&nbsp; Current sprint requires stakeholders
                            <br />to approve newly amended policies</p>
                        <a href="#" class="btn btn-primary w-100 py-3">Take Action</a>
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 4-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 4-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Beader-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Action Needed</span>
                        <span class="text-muted fw-semibold fs-7">Complete your profile setup</span>
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c7020a0429">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c7020a0429" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <div class="flex-grow-1">
                        <div class="mixed-widget-4-chart" data-kt-chart-color="success" style="height: 200px"></div>
                    </div>
                    <div class="pt-5">
                        <p class="text-center fs-6 pb-5">
                            <span class="badge badge-light-danger fs-8">Notes:</span>&nbsp; Current sprint requires stakeholders
                            <br />to approve newly amended policies</p>
                        <a href="#" class="btn btn-success w-100 py-3">Take Action</a>
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 4-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 4-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Beader-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Action Needed</span>
                        <span class="text-muted fw-semibold fs-7">Complete your profile setup</span>
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c7020a0438">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c7020a0438" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <div class="flex-grow-1">
                        <div class="mixed-widget-4-chart" data-kt-chart-color="danger" style="height: 200px"></div>
                    </div>
                    <div class="pt-5">
                        <p class="text-center fs-6 pb-5">
                            <span class="badge badge-light-danger fs-8">Notes:</span>&nbsp; Current sprint requires stakeholders
                            <br />to approve newly amended policies</p>
                        <a href="#" class="btn btn-danger w-100 py-3">Take Action</a>
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 4-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 5-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Beader-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Trends</span>
                        <span class="text-muted fw-semibold fs-7">Latest trends</span>
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Create Invoice</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                    <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                        <i class="ki-duotone ki-information fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Generate Bill</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Plans</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Billing</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Statements</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                <!--end::Input-->
                                                <!--end::Label-->
                                                <span class="form-check-label text-muted fs-6">Recuring</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Chart-->
                    <div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="primary" style="height: 150px"></div>
                    <!--end::Chart-->
                    <!--begin::Items-->
                    <div class="mt-5">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack mb-5">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-3">
                                    <div class="symbol-label bg-light">
                                        <img src="{{ asset('assets/media/svg/brand-logos/plurk.svg') }}" class="h-50" alt="" />
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Authors</a>
                                    <div class="fs-7 text-muted fw-semibold mt-1">Ricky Hunt, Sandra Trepp</div>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Label-->
                            <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack mb-5">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-3">
                                    <div class="symbol-label bg-light">
                                        <img src="{{ asset('assets/media/svg/brand-logos/figma-1.svg') }}" class="h-50" alt="" />
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Sales</a>
                                    <div class="fs-7 text-muted fw-semibold mt-1">PitStop Emails</div>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Label-->
                            <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-3">
                                    <div class="symbol-label bg-light">
                                        <img src="{{ asset('assets/media/svg/brand-logos/vimeo.svg') }}" class="h-50" alt="" />
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="py-1">
                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Engagement</a>
                                    <div class="fs-7 text-muted fw-semibold mt-1">KT.com</div>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Label-->
                            <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 5-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 5-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Beader-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Trends</span>
                        <span class="text-muted fw-semibold fs-7">Latest trends</span>
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Create Invoice</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                    <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                        <i class="ki-duotone ki-information fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Generate Bill</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Plans</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Billing</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Statements</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                <!--end::Input-->
                                                <!--end::Label-->
                                                <span class="form-check-label text-muted fs-6">Recuring</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Chart-->
                    <div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="success" style="height: 150px"></div>
                    <!--end::Chart-->
                    <!--begin::Items-->
                    <div class="mt-5">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack mb-5">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-3">
                                    <div class="symbol-label bg-light">
                                        <img src="{{ asset('assets/media/svg/brand-logos/plurk.svg') }}" class="h-50" alt="" />
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Authors</a>
                                    <div class="fs-7 text-muted fw-semibold mt-1">Ricky Hunt, Sandra Trepp</div>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Label-->
                            <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack mb-5">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-3">
                                    <div class="symbol-label bg-light">
                                        <img src="{{ asset('assets/media/svg/brand-logos/figma-1.svg') }}" class="h-50" alt="" />
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Sales</a>
                                    <div class="fs-7 text-muted fw-semibold mt-1">PitStop Emails</div>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Label-->
                            <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-3">
                                    <div class="symbol-label bg-light">
                                        <img src="{{ asset('assets/media/svg/brand-logos/vimeo.svg') }}" class="h-50" alt="" />
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="py-1">
                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Engagement</a>
                                    <div class="fs-7 text-muted fw-semibold mt-1">KT.com</div>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Label-->
                            <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 5-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 5-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Beader-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Trends</span>
                        <span class="text-muted fw-semibold fs-7">Latest trends</span>
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Create Invoice</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                    <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                        <i class="ki-duotone ki-information fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Generate Bill</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Plans</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Billing</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Statements</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                <!--end::Input-->
                                                <!--end::Label-->
                                                <span class="form-check-label text-muted fs-6">Recuring</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Chart-->
                    <div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="danger" style="height: 150px"></div>
                    <!--end::Chart-->
                    <!--begin::Items-->
                    <div class="mt-5">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack mb-5">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-3">
                                    <div class="symbol-label bg-light">
                                        <img src="{{ asset('assets/media/svg/brand-logos/plurk.svg') }}" class="h-50" alt="" />
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Authors</a>
                                    <div class="fs-7 text-muted fw-semibold mt-1">Ricky Hunt, Sandra Trepp</div>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Label-->
                            <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack mb-5">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-3">
                                    <div class="symbol-label bg-light">
                                        <img src="{{ asset('assets/media/svg/brand-logos/figma-1.svg') }}" class="h-50" alt="" />
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Sales</a>
                                    <div class="fs-7 text-muted fw-semibold mt-1">PitStop Emails</div>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Label-->
                            <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-3">
                                    <div class="symbol-label bg-light">
                                        <img src="{{ asset('assets/media/svg/brand-logos/vimeo.svg') }}" class="h-50" alt="" />
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="py-1">
                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Engagement</a>
                                    <div class="fs-7 text-muted fw-semibold mt-1">KT.com</div>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Label-->
                            <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 5-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 17-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body pt-5">
                    <!--begin::Heading-->
                    <div class="d-flex flex-stack">
                        <!--begin::Title-->
                        <h4 class="fw-bold text-gray-800 m-0">User Base</h4>
                        <!--end::Title-->
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Create Invoice</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                    <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                        <i class="ki-duotone ki-information fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Generate Bill</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Plans</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Billing</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Statements</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                <!--end::Input-->
                                                <!--end::Label-->
                                                <span class="form-check-label text-muted fs-6">Recuring</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Chart-->
                    <div class="d-flex flex-center w-100">
                        <div class="mixed-widget-17-chart" data-kt-chart-color="primary" style="height: 300px"></div>
                    </div>
                    <!--end::Chart-->
                    <!--begin::Content-->
                    <div class="text-center w-100 position-relative z-index-1" style="margin-top: -130px">
                        <!--begin::Text-->
                        <p class="fw-semibold fs-4 text-gray-500 mb-6">Long before you sit down to put the
                            <br />make sure you breathe</p>
                        <!--end::Text-->
                        <!--begin::Action-->
                        <div class="mb-9 mb-xxl-1">
                            <a href='#' class="btn btn-danger fw-semibold" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Increase Users</a>
                        </div>
                        <!--ed::Action-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Body-->
                <!--begin::Footer-->
                <div class="card-footer d-flex flex-center py-5">
                    <!--begin::Item-->
                    <div class="d-flex align-items-center flex-shrink-0 me-7 me-lg-12">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                        <!--end::Bullet-->
                        <!--begin::Label-->
                        <span class="fw-semibold text-gray-500 fs-6">Amount X</span>
                        <!--end::Label-->
                    </div>
                    <!--ed::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center flex-shrink-0">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                        <!--end::Bullet-->
                        <!--begin::Label-->
                        <span class="fw-semibold text-gray-500 fs-6">Amount Y</span>
                        <!--end::Label-->
                    </div>
                    <!--ed::Item-->
                </div>
                <!--ed::Info-->
            </div>
            <!--end::Mixed Widget 17-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 17-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body pt-5">
                    <!--begin::Heading-->
                    <div class="d-flex flex-stack">
                        <!--begin::Title-->
                        <h4 class="fw-bold text-gray-800 m-0">User Base</h4>
                        <!--end::Title-->
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Create Invoice</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                    <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                        <i class="ki-duotone ki-information fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Generate Bill</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Plans</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Billing</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Statements</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                <!--end::Input-->
                                                <!--end::Label-->
                                                <span class="form-check-label text-muted fs-6">Recuring</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Chart-->
                    <div class="d-flex flex-center w-100">
                        <div class="mixed-widget-17-chart" data-kt-chart-color="success" style="height: 300px"></div>
                    </div>
                    <!--end::Chart-->
                    <!--begin::Content-->
                    <div class="text-center w-100 position-relative z-index-1" style="margin-top: -130px">
                        <!--begin::Text-->
                        <p class="fw-semibold fs-4 text-gray-500 mb-6">Long before you sit down to put the
                            <br />make sure you breathe</p>
                        <!--end::Text-->
                        <!--begin::Action-->
                        <div class="mb-9 mb-xxl-1">
                            <a href='#' class="btn btn-info fw-semibold" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Increase Users</a>
                        </div>
                        <!--ed::Action-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Body-->
                <!--begin::Footer-->
                <div class="card-footer d-flex flex-center py-5">
                    <!--begin::Item-->
                    <div class="d-flex align-items-center flex-shrink-0 me-7 me-lg-12">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                        <!--end::Bullet-->
                        <!--begin::Label-->
                        <span class="fw-semibold text-gray-500 fs-6">Amount X</span>
                        <!--end::Label-->
                    </div>
                    <!--ed::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center flex-shrink-0">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                        <!--end::Bullet-->
                        <!--begin::Label-->
                        <span class="fw-semibold text-gray-500 fs-6">Amount Y</span>
                        <!--end::Label-->
                    </div>
                    <!--ed::Item-->
                </div>
                <!--ed::Info-->
            </div>
            <!--end::Mixed Widget 17-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 17-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body pt-5">
                    <!--begin::Heading-->
                    <div class="d-flex flex-stack">
                        <!--begin::Title-->
                        <h4 class="fw-bold text-gray-800 m-0">User Base</h4>
                        <!--end::Title-->
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Create Invoice</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                    <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                        <i class="ki-duotone ki-information fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Generate Bill</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Plans</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Billing</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Statements</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                <!--end::Input-->
                                                <!--end::Label-->
                                                <span class="form-check-label text-muted fs-6">Recuring</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Chart-->
                    <div class="d-flex flex-center w-100">
                        <div class="mixed-widget-17-chart" data-kt-chart-color="danger" style="height: 300px"></div>
                    </div>
                    <!--end::Chart-->
                    <!--begin::Content-->
                    <div class="text-center w-100 position-relative z-index-1" style="margin-top: -130px">
                        <!--begin::Text-->
                        <p class="fw-semibold fs-4 text-gray-500 mb-6">Long before you sit down to put the
                            <br />make sure you breathe</p>
                        <!--end::Text-->
                        <!--begin::Action-->
                        <div class="mb-9 mb-xxl-1">
                            <a href='#' class="btn btn-success fw-semibold" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Increase Users</a>
                        </div>
                        <!--ed::Action-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Body-->
                <!--begin::Footer-->
                <div class="card-footer d-flex flex-center py-5">
                    <!--begin::Item-->
                    <div class="d-flex align-items-center flex-shrink-0 me-7 me-lg-12">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                        <!--end::Bullet-->
                        <!--begin::Label-->
                        <span class="fw-semibold text-gray-500 fs-6">Amount X</span>
                        <!--end::Label-->
                    </div>
                    <!--ed::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center flex-shrink-0">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                        <!--end::Bullet-->
                        <!--begin::Label-->
                        <span class="fw-semibold text-gray-500 fs-6">Amount Y</span>
                        <!--end::Label-->
                    </div>
                    <!--ed::Item-->
                </div>
                <!--ed::Info-->
            </div>
            <!--end::Mixed Widget 17-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 6-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Beader-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Sales Statistics</span>
                        <span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c7020a073f">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c7020a073f" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body p-0 d-flex flex-column">
                    <!--begin::Stats-->
                    <div class="card-px pt-5 pb-10 flex-grow-1">
                        <!--begin::Row-->
                        <div class="row g-0 mt-5 mb-10">
                            <!--begin::Col-->
                            <div class="col">
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-3">
                                        <div class="symbol-label bg-light-info">
                                            <i class="ki-duotone ki-bucket fs-1 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <div class="fs-4 text-gray-900 fw-bold">$2,034</div>
                                        <div class="fs-7 text-muted fw-bold">Author Sales</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-3">
                                        <div class="symbol-label bg-light-danger">
                                            <i class="ki-duotone ki-abstract-26 fs-1 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <div class="fs-4 text-gray-900 fw-bold">$706</div>
                                        <div class="fs-7 text-muted fw-bold">Commision</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row g-0">
                            <!--begin::Col-->
                            <div class="col">
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-3">
                                        <div class="symbol-label bg-light-success">
                                            <i class="ki-duotone ki-basket fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <div class="fs-4 text-gray-900 fw-bold">$49</div>
                                        <div class="fs-7 text-muted fw-bold">Average Bid</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-3">
                                        <div class="symbol-label bg-light-primary">
                                            <i class="ki-duotone ki-barcode fs-1 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                                <span class="path7"></span>
                                                <span class="path8"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <div class="fs-4 text-gray-900 fw-bold">$5.8M</div>
                                        <div class="fs-7 text-muted fw-bold">All Time Sales</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Stats-->
                    <!--begin::Chart-->
                    <div class="mixed-widget-6-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 6-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 6-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Beader-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Sales Statistics</span>
                        <span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c7020a0760">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c7020a0760" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body p-0 d-flex flex-column">
                    <!--begin::Stats-->
                    <div class="card-px pt-5 pb-10 flex-grow-1">
                        <!--begin::Row-->
                        <div class="row g-0 mt-5 mb-10">
                            <!--begin::Col-->
                            <div class="col">
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-3">
                                        <div class="symbol-label bg-light-info">
                                            <i class="ki-duotone ki-bucket fs-1 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <div class="fs-4 text-gray-900 fw-bold">$2,034</div>
                                        <div class="fs-7 text-muted fw-bold">Author Sales</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-3">
                                        <div class="symbol-label bg-light-danger">
                                            <i class="ki-duotone ki-abstract-26 fs-1 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <div class="fs-4 text-gray-900 fw-bold">$706</div>
                                        <div class="fs-7 text-muted fw-bold">Commision</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row g-0">
                            <!--begin::Col-->
                            <div class="col">
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-3">
                                        <div class="symbol-label bg-light-success">
                                            <i class="ki-duotone ki-basket fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <div class="fs-4 text-gray-900 fw-bold">$49</div>
                                        <div class="fs-7 text-muted fw-bold">Average Bid</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-3">
                                        <div class="symbol-label bg-light-primary">
                                            <i class="ki-duotone ki-barcode fs-1 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                                <span class="path7"></span>
                                                <span class="path8"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <div class="fs-4 text-gray-900 fw-bold">$5.8M</div>
                                        <div class="fs-7 text-muted fw-bold">All Time Sales</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Stats-->
                    <!--begin::Chart-->
                    <div class="mixed-widget-6-chart card-rounded-bottom" data-kt-chart-color="success" style="height: 150px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 6-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 6-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Beader-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Sales Statistics</span>
                        <span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c7020a077a">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c7020a077a" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body p-0 d-flex flex-column">
                    <!--begin::Stats-->
                    <div class="card-px pt-5 pb-10 flex-grow-1">
                        <!--begin::Row-->
                        <div class="row g-0 mt-5 mb-10">
                            <!--begin::Col-->
                            <div class="col">
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-3">
                                        <div class="symbol-label bg-light-info">
                                            <i class="ki-duotone ki-bucket fs-1 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <div class="fs-4 text-gray-900 fw-bold">$2,034</div>
                                        <div class="fs-7 text-muted fw-bold">Author Sales</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-3">
                                        <div class="symbol-label bg-light-danger">
                                            <i class="ki-duotone ki-abstract-26 fs-1 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <div class="fs-4 text-gray-900 fw-bold">$706</div>
                                        <div class="fs-7 text-muted fw-bold">Commision</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row g-0">
                            <!--begin::Col-->
                            <div class="col">
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-3">
                                        <div class="symbol-label bg-light-success">
                                            <i class="ki-duotone ki-basket fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <div class="fs-4 text-gray-900 fw-bold">$49</div>
                                        <div class="fs-7 text-muted fw-bold">Average Bid</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-3">
                                        <div class="symbol-label bg-light-primary">
                                            <i class="ki-duotone ki-barcode fs-1 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                                <span class="path7"></span>
                                                <span class="path8"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <div class="fs-4 text-gray-900 fw-bold">$5.8M</div>
                                        <div class="fs-7 text-muted fw-bold">All Time Sales</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Stats-->
                    <!--begin::Chart-->
                    <div class="mixed-widget-6-chart card-rounded-bottom" data-kt-chart-color="danger" style="height: 150px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 6-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 7-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column p-0">
                    <!--begin::Stats-->
                    <div class="flex-grow-1 card-p pb-0">
                        <div class="d-flex flex-stack flex-wrap">
                            <div class="me-2">
                                <a href="#" class="text-gray-900 text-hover-primary fw-bold fs-3">Generate Reports</a>
                                <div class="text-muted fs-7 fw-bold">Finance and accounting reports</div>
                            </div>
                            <div class="fw-bold fs-3 text-info">$24,500</div>
                        </div>
                    </div>
                    <!--end::Stats-->
                    <!--begin::Chart-->
                    <div class="mixed-widget-7-chart card-rounded-bottom" data-kt-chart-color="info" style="height: 150px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 7-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 7-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column p-0">
                    <!--begin::Stats-->
                    <div class="flex-grow-1 card-p pb-0">
                        <div class="d-flex flex-stack flex-wrap">
                            <div class="me-2">
                                <a href="#" class="text-gray-900 text-hover-primary fw-bold fs-3">Generate Reports</a>
                                <div class="text-muted fs-7 fw-bold">Finance and accounting reports</div>
                            </div>
                            <div class="fw-bold fs-3 text-warning">$24,500</div>
                        </div>
                    </div>
                    <!--end::Stats-->
                    <!--begin::Chart-->
                    <div class="mixed-widget-7-chart card-rounded-bottom" data-kt-chart-color="warning" style="height: 150px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 7-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 7-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column p-0">
                    <!--begin::Stats-->
                    <div class="flex-grow-1 card-p pb-0">
                        <div class="d-flex flex-stack flex-wrap">
                            <div class="me-2">
                                <a href="#" class="text-gray-900 text-hover-primary fw-bold fs-3">Generate Reports</a>
                                <div class="text-muted fs-7 fw-bold">Finance and accounting reports</div>
                            </div>
                            <div class="fw-bold fs-3 text-primary">$24,500</div>
                        </div>
                    </div>
                    <!--end::Stats-->
                    <!--begin::Chart-->
                    <div class="mixed-widget-7-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 7-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 10-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden">
                    <!--begin::Hidden-->
                    <div class="d-flex flex-stack flex-wrap flex-grow-1 px-9 pt-9 pb-3">
                        <div class="me-2">
                            <span class="fw-bold text-gray-800 d-block fs-3">Sales</span>
                            <span class="text-gray-500 fw-bold">Oct 8 - Oct 26 23</span>
                        </div>
                        <div class="fw-bold fs-3 text-info">$15,300</div>
                    </div>
                    <!--end::Hidden-->
                    <!--begin::Chart-->
                    <div class="mixed-widget-10-chart" data-kt-color="info" style="height: 200px"></div>
                    <!--end::Chart-->
                </div>
            </div>
            <!--end::Mixed Widget 10-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 10-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden">
                    <!--begin::Hidden-->
                    <div class="d-flex flex-stack flex-wrap flex-grow-1 px-9 pt-9 pb-3">
                        <div class="me-2">
                            <span class="fw-bold text-gray-800 d-block fs-3">Sales</span>
                            <span class="text-gray-500 fw-bold">Oct 8 - Oct 26 23</span>
                        </div>
                        <div class="fw-bold fs-3 text-warning">$15,300</div>
                    </div>
                    <!--end::Hidden-->
                    <!--begin::Chart-->
                    <div class="mixed-widget-10-chart" data-kt-color="warning" style="height: 200px"></div>
                    <!--end::Chart-->
                </div>
            </div>
            <!--end::Mixed Widget 10-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 10-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden">
                    <!--begin::Hidden-->
                    <div class="d-flex flex-stack flex-wrap flex-grow-1 px-9 pt-9 pb-3">
                        <div class="me-2">
                            <span class="fw-bold text-gray-800 d-block fs-3">Sales</span>
                            <span class="text-gray-500 fw-bold">Oct 8 - Oct 26 23</span>
                        </div>
                        <div class="fw-bold fs-3 text-primary">$15,300</div>
                    </div>
                    <!--end::Hidden-->
                    <!--begin::Chart-->
                    <div class="mixed-widget-10-chart" data-kt-color="primary" style="height: 200px"></div>
                    <!--end::Chart-->
                </div>
            </div>
            <!--end::Mixed Widget 10-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 13-->
            <div class="card card-xl-stretch mb-xl-8 theme-dark-bg-body" style="background-color: #F7D9E3">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-grow-1">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-900 text-hover-primary fw-bold fs-3">Earnings</a>
                        <!--end::Title-->
                        <!--begin::Chart-->
                        <div class="mixed-widget-13-chart" style="height: 100px"></div>
                        <!--end::Chart-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Stats-->
                    <div class="pt-5">
                        <!--begin::Symbol-->
                        <span class="text-gray-900 fw-bold fs-2x lh-0">$</span>
                        <!--end::Symbol-->
                        <!--begin::Number-->
                        <span class="text-gray-900 fw-bold fs-3x me-2 lh-0">560</span>
                        <!--end::Number-->
                        <!--begin::Text-->
                        <span class="text-gray-900 fw-bold fs-6 lh-0">+ 28% this week</span>
                        <!--end::Text-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 13-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 13-->
            <div class="card card-xl-stretch mb-xl-8 theme-dark-bg-body" style="background-color: #CBF0F4">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-grow-1">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-900 text-hover-primary fw-bold fs-3">Earnings</a>
                        <!--end::Title-->
                        <!--begin::Chart-->
                        <div class="mixed-widget-13-chart" style="height: 100px"></div>
                        <!--end::Chart-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Stats-->
                    <div class="pt-5">
                        <!--begin::Symbol-->
                        <span class="text-gray-900 fw-bold fs-2x lh-0">$</span>
                        <!--end::Symbol-->
                        <!--begin::Number-->
                        <span class="text-gray-900 fw-bold fs-3x me-2 lh-0">560</span>
                        <!--end::Number-->
                        <!--begin::Text-->
                        <span class="text-gray-900 fw-bold fs-6 lh-0">+ 28% this week</span>
                        <!--end::Text-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 13-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 13-->
            <div class="card card-xl-stretch mb-5 mb-xl-8 theme-dark-bg-body" style="background-color: #CBD4F4">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-grow-1">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-900 text-hover-primary fw-bold fs-3">Earnings</a>
                        <!--end::Title-->
                        <!--begin::Chart-->
                        <div class="mixed-widget-13-chart" style="height: 100px"></div>
                        <!--end::Chart-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Stats-->
                    <div class="pt-5">
                        <!--begin::Symbol-->
                        <span class="text-gray-900 fw-bold fs-2x lh-0">$</span>
                        <!--end::Symbol-->
                        <!--begin::Number-->
                        <span class="text-gray-900 fw-bold fs-3x me-2 lh-0">560</span>
                        <!--end::Number-->
                        <!--begin::Text-->
                        <span class="text-gray-900 fw-bold fs-6 lh-0">+ 28% this week</span>
                        <!--end::Text-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 13-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 14-->
            <div class="card card-xxl-stretch mb-xl-8 theme-dark-bg-body" style="background-color: #F7D9E3">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-grow-1">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-900 text-hover-primary fw-bold fs-3">Contributors</a>
                        <!--end::Title-->
                        <!--begin::Chart-->
                        <div class="mixed-widget-14-chart" style="height: 125px"></div>
                        <!--end::Chart-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Stats-->
                    <div class="pt-5">
                        <!--begin::Number-->
                        <span class="text-gray-900 fw-bold fs-3x me-2 lh-0">47</span>
                        <!--end::Number-->
                        <!--begin::Text-->
                        <span class="text-gray-900 fw-bold fs-6 lh-0">- 12% this week</span>
                        <!--end::Text-->
                    </div>
                    <!--end::Stats-->
                </div>
            </div>
            <!--end::Mixed Widget 14-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 14-->
            <div class="card card-xxl-stretch mb-xl-8 theme-dark-bg-body" style="background-color: #CBF0F4">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-grow-1">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-900 text-hover-primary fw-bold fs-3">Contributors</a>
                        <!--end::Title-->
                        <!--begin::Chart-->
                        <div class="mixed-widget-14-chart" style="height: 125px"></div>
                        <!--end::Chart-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Stats-->
                    <div class="pt-5">
                        <!--begin::Number-->
                        <span class="text-gray-900 fw-bold fs-3x me-2 lh-0">47</span>
                        <!--end::Number-->
                        <!--begin::Text-->
                        <span class="text-gray-900 fw-bold fs-6 lh-0">- 12% this week</span>
                        <!--end::Text-->
                    </div>
                    <!--end::Stats-->
                </div>
            </div>
            <!--end::Mixed Widget 14-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 14-->
            <div class="card card-xxl-stretch mb-5 mb-xl-8 theme-dark-bg-body" style="background-color: #CBD4F4">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-grow-1">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-900 text-hover-primary fw-bold fs-3">Contributors</a>
                        <!--end::Title-->
                        <!--begin::Chart-->
                        <div class="mixed-widget-14-chart" style="height: 125px"></div>
                        <!--end::Chart-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Stats-->
                    <div class="pt-5">
                        <!--begin::Number-->
                        <span class="text-gray-900 fw-bold fs-3x me-2 lh-0">47</span>
                        <!--end::Number-->
                        <!--begin::Text-->
                        <span class="text-gray-900 fw-bold fs-6 lh-0">- 12% this week</span>
                        <!--end::Text-->
                    </div>
                    <!--end::Stats-->
                </div>
            </div>
            <!--end::Mixed Widget 14-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 14-->
            <div class="card card-xxl-stretch mb-xl-8 theme-dark-bg-body" style="background-color: #F7D9E3">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column mb-7">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-900 text-hover-primary fw-bold fs-3">Summary</a>
                        <!--end::Title-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Row-->
                    <div class="row g-0">
                        <!--begin::Col-->
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-9 me-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-3">
                                    <div class="symbol-label bg-light">
                                        <i class="ki-duotone ki-abstract-42 fs-1 text-gray-900">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <div class="fs-5 text-gray-900 fw-bold lh-1">$50K</div>
                                    <div class="fs-7 text-gray-600 fw-bold">Sales</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-9 ms-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-3">
                                    <div class="symbol-label bg-light">
                                        <i class="ki-duotone ki-abstract-45 fs-1 text-gray-900">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <div class="fs-5 text-gray-900 fw-bold lh-1">$4,5K</div>
                                    <div class="fs-7 text-gray-600 fw-bold">Revenue</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-3">
                                    <div class="symbol-label bg-light">
                                        <i class="ki-duotone ki-abstract-21 fs-1 text-gray-900">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <div class="fs-5 text-gray-900 fw-bold lh-1">40</div>
                                    <div class="fs-7 text-gray-600 fw-bold">Tasks</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                            <div class="d-flex align-items-center ms-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-3">
                                    <div class="symbol-label bg-light">
                                        <i class="ki-duotone ki-abstract-44 fs-1 text-gray-900">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <div class="fs-5 text-gray-900 fw-bold lh-1">$5.8M</div>
                                    <div class="fs-7 text-gray-600 fw-bold">Sales</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
            </div>
            <!--end::Mixed Widget 14-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 14-->
            <div class="card card-xxl-stretch mb-xl-8 theme-dark-bg-body" style="background-color: #CBF0F4">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column mb-7">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-900 text-hover-primary fw-bold fs-3">Summary</a>
                        <!--end::Title-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Row-->
                    <div class="row g-0">
                        <!--begin::Col-->
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-9 me-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-3">
                                    <div class="symbol-label bg-light">
                                        <i class="ki-duotone ki-abstract-42 fs-1 text-gray-900">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <div class="fs-5 text-gray-900 fw-bold lh-1">$50K</div>
                                    <div class="fs-7 text-gray-600 fw-bold">Sales</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-9 ms-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-3">
                                    <div class="symbol-label bg-light">
                                        <i class="ki-duotone ki-abstract-45 fs-1 text-gray-900">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <div class="fs-5 text-gray-900 fw-bold lh-1">$4,5K</div>
                                    <div class="fs-7 text-gray-600 fw-bold">Revenue</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-3">
                                    <div class="symbol-label bg-light">
                                        <i class="ki-duotone ki-abstract-21 fs-1 text-gray-900">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <div class="fs-5 text-gray-900 fw-bold lh-1">40</div>
                                    <div class="fs-7 text-gray-600 fw-bold">Tasks</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                            <div class="d-flex align-items-center ms-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-3">
                                    <div class="symbol-label bg-light">
                                        <i class="ki-duotone ki-abstract-44 fs-1 text-gray-900">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <div class="fs-5 text-gray-900 fw-bold lh-1">$5.8M</div>
                                    <div class="fs-7 text-gray-600 fw-bold">Sales</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
            </div>
            <!--end::Mixed Widget 14-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Mixed Widget 14-->
            <div class="card card-xxl-stretch mb-xl-8 theme-dark-bg-body" style="background-color: #CBD4F4">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column mb-7">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-900 text-hover-primary fw-bold fs-3">Summary</a>
                        <!--end::Title-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Row-->
                    <div class="row g-0">
                        <!--begin::Col-->
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-9 me-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-3">
                                    <div class="symbol-label bg-light">
                                        <i class="ki-duotone ki-abstract-42 fs-1 text-gray-900">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <div class="fs-5 text-gray-900 fw-bold lh-1">$50K</div>
                                    <div class="fs-7 text-gray-600 fw-bold">Sales</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-9 ms-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-3">
                                    <div class="symbol-label bg-light">
                                        <i class="ki-duotone ki-abstract-45 fs-1 text-gray-900">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <div class="fs-5 text-gray-900 fw-bold lh-1">$4,5K</div>
                                    <div class="fs-7 text-gray-600 fw-bold">Revenue</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                            <div class="d-flex align-items-center me-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-3">
                                    <div class="symbol-label bg-light">
                                        <i class="ki-duotone ki-abstract-21 fs-1 text-gray-900">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <div class="fs-5 text-gray-900 fw-bold lh-1">40</div>
                                    <div class="fs-7 text-gray-600 fw-bold">Tasks</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                            <div class="d-flex align-items-center ms-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-3">
                                    <div class="symbol-label bg-light">
                                        <i class="ki-duotone ki-abstract-44 fs-1 text-gray-900">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <div class="fs-5 text-gray-900 fw-bold lh-1">$5.8M</div>
                                    <div class="fs-7 text-gray-600 fw-bold">Sales</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
            </div>
            <!--end::Mixed Widget 14-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
</x-default-layout>
