<x-default-layout>
    @section('title')
    Vertical
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('utilities.search.vertical') }}
    @endsection

    <!--begin::Search vertical-->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Aside-->
        <div class="flex-column flex-lg-row-auto w-100 w-lg-250px w-xxl-325px mb-8 mb-lg-0 me-lg-9 me-5">
            <!--begin::Form-->
            <form action="#">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin:Search-->
                        <div class="position-relative">
                            <i class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 translate-middle ms-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Search" />
                        </div>
                        <!--end:Search-->
                        <!--begin::Border-->
                        <div class="separator separator-dashed my-8"></div>
                        <!--end::Border-->
                        <!--begin::Input group-->
                        <div class="mb-5">
                            <label class="fs-6 form-label fw-bold text-gray-900">Team Type</label>
                            <!--begin::Select-->
                            <select class="form-select form-select-solid" data-control="select2" data-placeholder="In Progress" data-hide-search="true">
                                <option value=""></option>
                                <option value="1">Not Started</option>
                                <option value="2" selected="selected">In Progress</option>
                                <option value="3">Done</option>
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-5">
                            <label class="fs-6 form-label fw-bold text-gray-900">Team Name</label>
                            <input type="text" class="form-control form-control form-control-solid" name="city" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-5">
                            <label class="fs-6 form-label fw-bold text-gray-900">Team Size</label>
                            <!--begin::Radio group-->
                            <div class="nav-group nav-group-fluid">
                                <!--begin::Option-->
                                <label>
                                    <input type="radio" class="btn-check" name="type" value="has" checked="checked" />
                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bold px-4">1-5</span>
                                </label>
                                <!--end::Option-->
                                <!--begin::Option-->
                                <label>
                                    <input type="radio" class="btn-check" name="type" value="users" />
                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bold px-4">5-10</span>
                                </label>
                                <!--end::Option-->
                                <!--begin::Option-->
                                <label>
                                    <input type="radio" class="btn-check" name="type" value="orders" />
                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bold px-4">10++</span>
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Radio group-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-5">
                            <label class="fs-6 form-label fw-bold text-gray-900">Max. Amount</label>
                            <!--begin::Dialer-->
                            <div class="position-relative" data-kt-dialer="true" data-kt-dialer-min="1000" data-kt-dialer-max="50000" data-kt-dialer-step="1000" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
                                <!--begin::Decrease control-->
                                <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
                                    <i class="ki-duotone ki-minus-circle fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </button>
                                <!--end::Decrease control-->
                                <!--begin::Input control-->
                                <input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="$50" />
                                <!--end::Input control-->
                                <!--begin::Increase control-->
                                <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
                                    <i class="ki-duotone ki-plus-circle fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </button>
                                <!--end::Increase control-->
                            </div>
                            <!--end::Dialer-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <label class="fs-6 form-label fw-bold text-gray-900 mb-5">Categories</label>
                            <!--begin::Checkbox-->
                            <div class="form-check form-check-custom form-check-solid mb-5">
                                <input class="form-check-input" type="checkbox" id="kt_search_category_1" />
                                <label class="form-check-label flex-grow-1 fw-semibold text-gray-700 fs-6" for="kt_search_category_1">Electronics</label>
                                <span class="text-gray-500 fw-bold">28</span>
                            </div>
                            <!--end::Checkbox-->
                            <!--begin::Checkbox-->
                            <div class="form-check form-check-custom form-check-solid mb-5">
                                <input class="form-check-input" type="checkbox" id="kt_search_category_2" checked="checked" />
                                <label class="form-check-label flex-grow-1 fw-semibold text-gray-700 fs-6" for="kt_search_category_2">Sport Equipments</label>
                                <span class="text-gray-500 fw-bold">307</span>
                            </div>
                            <!--end::Checkbox-->
                            <!--begin::Checkbox-->
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" id="kt_search_category_3" />
                                <label class="form-check-label flex-grow-1 fw-semibold text-gray-700 fs-6" for="kt_search_category_3">Furnuture</label>
                                <span class="text-gray-500 fw-bold">54</span>
                            </div>
                            <!--end::Checkbox-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Action-->
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="#" class="btn btn-active-light-primary btn-color-gray-500 me-3">Discard</a>
                            <a href="#" class="btn btn-primary">Search</a>
                        </div>
                        <!--end::Action-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Aside-->
        <!--begin::Layout-->
        <div class="flex-lg-row-fluid">
            <!--begin::Toolbar-->
            <div class="d-flex flex-wrap flex-stack pb-7">
                <!--begin::Title-->
                <div class="d-flex flex-wrap align-items-center my-1">
                    <h3 class="fw-bold me-5 my-1">57 Items Found
                        <span class="text-gray-500 fs-6">by Recent Updates ↓</span></h3>
                </div>
                <!--end::Title-->
                <!--begin::Controls-->
                <div class="d-flex flex-wrap my-1">
                    <!--begin::Tab nav-->
                    <ul class="nav nav-pills me-6 mb-2 mb-sm-0">
                        <li class="nav-item m-0">
                            <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active" data-bs-toggle="tab" href="#kt_project_users_card_pane">
                                <i class="ki-duotone ki-element-plus fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item m-0">
                            <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary" data-bs-toggle="tab" href="#kt_project_users_table_pane">
                                <i class="ki-duotone ki-row-horizontal fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </li>
                    </ul>
                    <!--end::Tab nav-->
                    <!--begin::Actions-->
                    <div class="d-flex my-0">
                        <!--begin::Select-->
                        <select name="status" data-control="select2" data-hide-search="true" data-placeholder="Filter" class="form-select form-select-sm form-select-solid w-150px me-5">
                            <option value="1">Recently Updated</option>
                            <option value="2">Last Month</option>
                            <option value="3">Last Quarter</option>
                            <option value="4">Last Year</option>
                        </select>
                        <!--end::Select-->
                        <!--begin::Select-->
                        <select name="status" data-control="select2" data-hide-search="true" data-placeholder="Export" class="form-select form-select-sm form-select-solid w-100px">
                            <option value="1">Excel</option>
                            <option value="1">PDF</option>
                            <option value="2">Print</option>
                        </select>
                        <!--end::Select-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Controls-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Tab Content-->
            <div class="tab-content">
                <!--begin::Tab pane-->
                <div id="kt_project_users_card_pane" class="tab-pane fade show active">
                    <!--begin::Row-->
                    <div class="row g-6 g-xl-9">
                        <!--begin::Col-->
                        <div class="col-md-6 col-xl-12 col-xxl-6">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-65px symbol-circle mb-5">
                                        <img src="{{ asset('assets/media//avatars/300-2.jpg') }}" alt="image" />
                                        <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Karina Clark</a>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                                    <!--end::Position-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-center flex-wrap">
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                            <div class="fw-semibold text-gray-500">Earnings</div>
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">23</div>
                                            <div class="fw-semibold text-gray-500">Tasks</div>
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                            <div class="fw-semibold text-gray-500">Sales</div>
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 col-xl-12 col-xxl-6">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-65px symbol-circle mb-5">
                                        <span class="symbol-label fs-2x fw-semibold text-primary bg-light-primary">S</span>
                                        <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Sean Bean</a>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="fw-semibold text-gray-500 mb-6">Developer at Loop Inc</div>
                                    <!--end::Position-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-center flex-wrap">
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                            <div class="fw-semibold text-gray-500">Earnings</div>
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">23</div>
                                            <div class="fw-semibold text-gray-500">Tasks</div>
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                            <div class="fw-semibold text-gray-500">Sales</div>
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 col-xl-12 col-xxl-6">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-65px symbol-circle mb-5">
                                        <img src="{{ asset('assets/media//avatars/300-1.jpg') }}" alt="image" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Alan Johnson</a>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="fw-semibold text-gray-500 mb-6">Web Designer at Nextop Ltd.</div>
                                    <!--end::Position-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-center flex-wrap">
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                            <div class="fw-semibold text-gray-500">Earnings</div>
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">23</div>
                                            <div class="fw-semibold text-gray-500">Tasks</div>
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                            <div class="fw-semibold text-gray-500">Sales</div>
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 col-xl-12 col-xxl-6">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-65px symbol-circle mb-5">
                                        <img src="{{ asset('assets/media//avatars/300-14.jpg') }}" alt="image" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Robert Doe</a>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="fw-semibold text-gray-500 mb-6">Marketing Analytic at Avito Ltd.</div>
                                    <!--end::Position-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-center flex-wrap">
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                            <div class="fw-semibold text-gray-500">Earnings</div>
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">23</div>
                                            <div class="fw-semibold text-gray-500">Tasks</div>
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                            <div class="fw-semibold text-gray-500">Sales</div>
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 col-xl-12 col-xxl-6">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-65px symbol-circle mb-5">
                                        <img src="{{ asset('assets/media//avatars/300-6.jpg') }}" alt="image" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia Wild</a>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="fw-semibold text-gray-500 mb-6">Art Director at Seal Inc.</div>
                                    <!--end::Position-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-center flex-wrap">
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                            <div class="fw-semibold text-gray-500">Earnings</div>
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">23</div>
                                            <div class="fw-semibold text-gray-500">Tasks</div>
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                            <div class="fw-semibold text-gray-500">Sales</div>
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 col-xl-12 col-xxl-6">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-65px symbol-circle mb-5">
                                        <span class="symbol-label fs-2x fw-semibold text-warning bg-light-warning">A</span>
                                        <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Adam Williams</a>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="fw-semibold text-gray-500 mb-6">System Arcitect at Wolto Co.</div>
                                    <!--end::Position-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-center flex-wrap">
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                            <div class="fw-semibold text-gray-500">Earnings</div>
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">23</div>
                                            <div class="fw-semibold text-gray-500">Tasks</div>
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                            <div class="fw-semibold text-gray-500">Sales</div>
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 col-xl-12 col-xxl-6">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-65px symbol-circle mb-5">
                                        <span class="symbol-label fs-2x fw-semibold text-info bg-light-info">P</span>
                                        <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Peter Marcus</a>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                                    <!--end::Position-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-center flex-wrap">
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                            <div class="fw-semibold text-gray-500">Earnings</div>
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">23</div>
                                            <div class="fw-semibold text-gray-500">Tasks</div>
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                            <div class="fw-semibold text-gray-500">Sales</div>
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 col-xl-12 col-xxl-6">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-65px symbol-circle mb-5">
                                        <span class="symbol-label fs-2x fw-semibold text-success bg-light-success">N</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Neil Owen</a>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="fw-semibold text-gray-500 mb-6">Accountant at Numbers Co.</div>
                                    <!--end::Position-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-center flex-wrap">
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                            <div class="fw-semibold text-gray-500">Earnings</div>
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">23</div>
                                            <div class="fw-semibold text-gray-500">Tasks</div>
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                            <div class="fw-semibold text-gray-500">Sales</div>
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 col-xl-12 col-xxl-6">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-65px symbol-circle mb-5">
                                        <img src="{{ asset('assets/media//avatars/300-12.jpg') }}" alt="image" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Benjamin Jacob</a>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                                    <!--end::Position-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-center flex-wrap">
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                            <div class="fw-semibold text-gray-500">Earnings</div>
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">23</div>
                                            <div class="fw-semibold text-gray-500">Tasks</div>
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Stats-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                            <div class="fw-semibold text-gray-500">Sales</div>
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Pagination-->
                    <div class="d-flex flex-stack flex-wrap pt-10">
                        <div class="fs-6 fw-semibold text-gray-700">Showing 1 to 10 of 50 entries</div>
                        <!--begin::Pages-->
                        <ul class="pagination">
                            <li class="page-item previous">
                                <a href="#" class="page-link">
                                    <i class="previous"></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">4</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">5</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">6</a>
                            </li>
                            <li class="page-item next">
                                <a href="#" class="page-link">
                                    <i class="next"></i>
                                </a>
                            </li>
                        </ul>
                        <!--end::Pages-->
                    </div>
                    <!--end::Pagination-->
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div id="kt_project_users_table_pane" class="tab-pane fade">
                    <!--begin::Card-->
                    <div class="card card-flush">
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                                    <thead class="fs-7 text-gray-500 text-uppercase">
                                        <tr>
                                            <th class="min-w-250px">Manager</th>
                                            <th class="min-w-150px">Date</th>
                                            <th class="min-w-90px">Amount</th>
                                            <th class="min-w-90px">Status</th>
                                            <th class="min-w-50px text-end">Details</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs-6">
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-6.jpg') }}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Emma Smith</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">smith@kpmg.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jun 24, 2023</td>
                                            <td>$912.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Melody Macy</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">melody@altbox.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>May 05, 2023</td>
                                            <td>$647.00</td>
                                            <td>
                                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-1.jpg') }}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Max Smith</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">max@kt.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Mar 10, 2023</td>
                                            <td>$900.00</td>
                                            <td>
                                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-5.jpg') }}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Sean Bean</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">sean@dellito.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Oct 25, 2023</td>
                                            <td>$552.00</td>
                                            <td>
                                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-25.jpg') }}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Brian Cox</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">brian@exchange.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Sep 22, 2023</td>
                                            <td>$877.00</td>
                                            <td>
                                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Mikaela Collins</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">mik@pex.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Feb 21, 2023</td>
                                            <td>$579.00</td>
                                            <td>
                                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-9.jpg') }}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Francis Mitcham</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">f.mit@kpmg.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Dec 20, 2023</td>
                                            <td>$896.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Olivia Wild</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">olivia@corpmail.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Mar 10, 2023</td>
                                            <td>$508.00</td>
                                            <td>
                                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Neil Owen</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">owen.neil@gmail.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jul 25, 2023</td>
                                            <td>$967.00</td>
                                            <td>
                                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-23.jpg') }}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Dan Wilson</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">dam@consilting.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Apr 15, 2023</td>
                                            <td>$420.00</td>
                                            <td>
                                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Emma Bold</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">emma@intenso.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jul 25, 2023</td>
                                            <td>$721.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-12.jpg') }}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Ana Crown</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">ana.cf@limtel.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jul 25, 2023</td>
                                            <td>$540.00</td>
                                            <td>
                                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Robert Doe</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">robert@benko.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jul 25, 2023</td>
                                            <td>$464.00</td>
                                            <td>
                                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-13.jpg') }}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">John Miller</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">miller@mapple.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Apr 15, 2023</td>
                                            <td>$852.00</td>
                                            <td>
                                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Lucy Kunic</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">lucy.m@fentech.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>May 05, 2023</td>
                                            <td>$417.00</td>
                                            <td>
                                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-21.jpg') }}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Ethan Wilder</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">ethan@loop.com.au</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Nov 10, 2023</td>
                                            <td>$620.00</td>
                                            <td>
                                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Neil Owen</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">owen.neil@gmail.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Sep 22, 2023</td>
                                            <td>$547.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-23.jpg') }}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Dan Wilson</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">dam@consilting.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Nov 10, 2023</td>
                                            <td>$401.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Lucy Kunic</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">lucy.m@fentech.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jun 20, 2023</td>
                                            <td>$819.00</td>
                                            <td>
                                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-1.jpg') }}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Max Smith</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">max@kt.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Sep 22, 2023</td>
                                            <td>$443.00</td>
                                            <td>
                                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Mikaela Collins</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">mik@pex.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Nov 10, 2023</td>
                                            <td>$813.00</td>
                                            <td>
                                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-13.jpg') }}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">John Miller</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">miller@mapple.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jul 25, 2023</td>
                                            <td>$591.00</td>
                                            <td>
                                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Emma Bold</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">emma@intenso.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Apr 15, 2023</td>
                                            <td>$545.00</td>
                                            <td>
                                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-6.jpg') }}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Emma Smith</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">smith@kpmg.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Dec 20, 2023</td>
                                            <td>$771.00</td>
                                            <td>
                                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-1.jpg') }}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Max Smith</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">max@kt.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Dec 20, 2023</td>
                                            <td>$460.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-23.jpg') }}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Dan Wilson</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">dam@consilting.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Sep 22, 2023</td>
                                            <td>$972.00</td>
                                            <td>
                                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-25.jpg') }}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Brian Cox</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">brian@exchange.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Mar 10, 2023</td>
                                            <td>$920.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-23.jpg') }}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Dan Wilson</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">dam@consilting.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Aug 19, 2023</td>
                                            <td>$925.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Robert Doe</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">robert@benko.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Sep 22, 2023</td>
                                            <td>$630.00</td>
                                            <td>
                                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Lucy Kunic</a>
                                                        <div class="fw-semibold fs-6 text-gray-500">lucy.m@fentech.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Feb 21, 2023</td>
                                            <td>$774.00</td>
                                            <td>
                                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Tab pane-->
            </div>
            <!--end::Tab Content-->
        </div>
        <!--end::Layout-->
    </div>
    <!--begin::Search vertical-->

</x-default-layout>
