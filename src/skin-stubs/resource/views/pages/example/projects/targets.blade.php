<x-default-layout>
    @section('title')
    Targets
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('projects.targets') }}
    @endsection

    @include('pages.example.projects.header')
    <!--begin::Toolbar-->
    <div class="d-flex flex-wrap flex-stack pt-10 pb-8">
        <!--begin::Heading-->
        <h3 class="fw-bold my-2">Project Targets
        <span class="fs-6 text-gray-500 fw-semibold ms-1">by Recent Updates ↓</span></h3>
        <!--end::Heading-->
        <!--begin::Controls-->
        <div class="d-flex flex-wrap my-1">
            <!--begin::Tab nav-->
            <ul class="nav nav-pills me-5">
                <li class="nav-item m-0">
                    <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary active me-3" data-bs-toggle="tab" href="#kt_project_targets_card_pane">
                        <i class="ki-duotone ki-element-plus fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                        </i>
                    </a>
                </li>
                <li class="nav-item m-0">
                    <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary" data-bs-toggle="tab" href="#kt_project_targets_table_pane">
                        <i class="ki-duotone ki-row-horizontal fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </li>
            </ul>
            <!--end::Tab nav-->
            <!--begin::Wrapper-->
            <div class="my-0">
                <!--begin::Select-->
                <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm form-select-solid w-150px">
                    <option value="1" selected="selected">Recently Updated</option>
                    <option value="2">Last Month</option>
                    <option value="3">Last Quarter</option>
                    <option value="4">Last Year</option>
                </select>
                <!--end::Select-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Controls-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Tab Content-->
    <div class="tab-content">
        <!--begin::Tab pane-->
        <div id="kt_project_targets_card_pane" class="tab-pane fade show active">
            <!--begin::Row-->
            <div class="row g-9">
                <!--begin::Col-->
                <div class="col-md-4 col-lg-12 col-xl-4">
                    <!--begin::Col header-->
                    <div class="mb-9">
                        <div class="d-flex flex-stack">
                            <div class="fw-bold fs-4">Yet to start
                            <span class="fs-6 text-gray-500 ms-2">2</span></div>
                            <!--begin::Menu-->
                            <div>
                                <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-element-plus fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c7022deaab">
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
                                                <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c7022deaab" data-allow-clear="true">
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
                            </div>
                            <!--end::Menu-->
                        </div>
                        <div class="h-3px w-100 bg-warning"></div>
                    </div>
                    <!--end::Col header-->
                    <!--begin::Card-->
                    <div class="card mb-6 mb-xl-9">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Header-->
                            <div class="d-flex flex-stack mb-3">
                                <!--begin::Badge-->
                                <div class="badge badge-light">UI Design</div>
                                <!--end::Badge-->
                                <!--begin::Menu-->
                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-element-plus fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
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
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Title-->
                            <div class="mb-2">
                                <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">Meeting with customer</a>
                            </div>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often takes a couple of hours if you can type</div>
                            <!--end::Content-->
                            <!--begin::Footer-->
                            <div class="d-flex flex-stack flex-wrapr">
                                <!--begin::Users-->
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-2.jpg') }}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Harry Mcpherson">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-19.jpg') }}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                </div>
                                <!--end::Users-->
                                <!--begin::Stats-->
                                <div class="d-flex my-1">
                                    <!--begin::Stat-->
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">4</span>
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="ki-duotone ki-message-text-2 fs-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">5</span>
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <div class="card mb-6 mb-xl-9">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Header-->
                            <div class="d-flex flex-stack mb-3">
                                <!--begin::Badge-->
                                <div class="badge badge-light">Phase 2.6 QA</div>
                                <!--end::Badge-->
                                <!--begin::Menu-->
                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-element-plus fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
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
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Title-->
                            <div class="mb-2">
                                <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">User Module Testing</a>
                            </div>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often.</div>
                            <!--end::Content-->
                            <!--begin::Footer-->
                            <div class="d-flex flex-stack flex-wrapr">
                                <!--begin::Users-->
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                        <span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
                                    </div>
                                </div>
                                <!--end::Users-->
                                <!--begin::Stats-->
                                <div class="d-flex my-1">
                                    <!--begin::Stat-->
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">1</span>
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="ki-duotone ki-message-text-2 fs-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">3</span>
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <a href="#" class="btn btn-primary er w-100 fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Create New Target</a>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4 col-lg-12 col-xl-4">
                    <!--begin::Col header-->
                    <div class="mb-9">
                        <div class="d-flex flex-stack">
                            <div class="fw-bold fs-4">In Progress
                            <span class="fs-6 text-gray-500 ms-2">4</span></div>
                            <!--begin::Menu-->
                            <div>
                                <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-element-plus fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c7022dec82">
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
                                                <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c7022dec82" data-allow-clear="true">
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
                            </div>
                            <!--end::Menu-->
                        </div>
                        <div class="h-3px w-100 bg-primary"></div>
                    </div>
                    <!--end::Col header-->
                    <!--begin::Card-->
                    <div class="card mb-6 mb-xl-9">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Header-->
                            <div class="d-flex flex-stack mb-3">
                                <!--begin::Badge-->
                                <div class="badge badge-light">Development</div>
                                <!--end::Badge-->
                                <!--begin::Menu-->
                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-element-plus fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
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
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Title-->
                            <div class="mb-2">
                                <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">Sales report page</a>
                            </div>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer takes a couple hours</div>
                            <!--end::Content-->
                            <!--begin::Footer-->
                            <div class="d-flex flex-stack flex-wrapr">
                                <!--begin::Users-->
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-7.jpg') }}" />
                                    </div>
                                </div>
                                <!--end::Users-->
                                <!--begin::Stats-->
                                <div class="d-flex my-1">
                                    <!--begin::Stat-->
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">8</span>
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="ki-duotone ki-message-text-2 fs-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">3</span>
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <div class="card mb-6 mb-xl-9">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Header-->
                            <div class="d-flex flex-stack mb-3">
                                <!--begin::Badge-->
                                <div class="badge badge-light">Testing</div>
                                <!--end::Badge-->
                                <!--begin::Menu-->
                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-element-plus fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
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
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Title-->
                            <div class="mb-2">
                                <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">Meeting with customer</a>
                            </div>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often takes a couple of hours if you can type</div>
                            <!--end::Content-->
                            <!--begin::Footer-->
                            <div class="d-flex flex-stack flex-wrapr">
                                <!--begin::Users-->
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-20.jpg') }}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Harry Mcpherson">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-19.jpg') }}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                </div>
                                <!--end::Users-->
                                <!--begin::Stats-->
                                <div class="d-flex my-1">
                                    <!--begin::Stat-->
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">3</span>
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="ki-duotone ki-message-text-2 fs-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">9</span>
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <div class="card mb-6 mb-xl-9">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Header-->
                            <div class="d-flex flex-stack mb-3">
                                <!--begin::Badge-->
                                <div class="badge badge-light">UI Design</div>
                                <!--end::Badge-->
                                <!--begin::Menu-->
                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-element-plus fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
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
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Title-->
                            <div class="mb-2">
                                <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">Design main Dashboard</a>
                            </div>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer takes a couple hours</div>
                            <!--end::Content-->
                            <!--begin::Footer-->
                            <div class="d-flex flex-stack flex-wrapr">
                                <!--begin::Users-->
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-20.jpg') }}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-7.jpg') }}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                </div>
                                <!--end::Users-->
                                <!--begin::Stats-->
                                <div class="d-flex my-1">
                                    <!--begin::Stat-->
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">10</span>
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="ki-duotone ki-message-text-2 fs-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">10</span>
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <div class="card mb-6 mb-xl-9">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Header-->
                            <div class="d-flex flex-stack mb-3">
                                <!--begin::Badge-->
                                <div class="badge badge-light">Phase 2.6 QA</div>
                                <!--end::Badge-->
                                <!--begin::Menu-->
                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-element-plus fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
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
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Title-->
                            <div class="mb-2">
                                <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">User Module Testing</a>
                            </div>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often.</div>
                            <!--end::Content-->
                            <!--begin::Footer-->
                            <div class="d-flex flex-stack flex-wrapr">
                                <!--begin::Users-->
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-2.jpg') }}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-12.jpg') }}" />
                                    </div>
                                </div>
                                <!--end::Users-->
                                <!--begin::Stats-->
                                <div class="d-flex my-1">
                                    <!--begin::Stat-->
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">2</span>
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="ki-duotone ki-message-text-2 fs-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">7</span>
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4 col-lg-12 col-xl-4">
                    <!--begin::Col header-->
                    <div class="mb-9">
                        <div class="d-flex flex-stack">
                            <div class="fw-bold fs-4">Completed
                            <span class="fs-6 text-gray-500 ms-2">3</span></div>
                            <!--begin::Menu-->
                            <div>
                                <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-element-plus fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c7022ded04">
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
                                                <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c7022ded04" data-allow-clear="true">
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
                            </div>
                            <!--end::Menu-->
                        </div>
                        <div class="h-3px w-100 bg-success"></div>
                    </div>
                    <!--end::Col header-->
                    <!--begin::Card-->
                    <div class="card mb-6 mb-xl-9">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Header-->
                            <div class="d-flex flex-stack mb-3">
                                <!--begin::Badge-->
                                <div class="badge badge-light">UI Design</div>
                                <!--end::Badge-->
                                <!--begin::Menu-->
                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-element-plus fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
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
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Title-->
                            <div class="mb-2">
                                <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">Branding Logo</a>
                            </div>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often takes a couple of hours if you can type</div>
                            <!--end::Content-->
                            <!--begin::Footer-->
                            <div class="d-flex flex-stack flex-wrapr">
                                <!--begin::Users-->
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                        <span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-12.jpg') }}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                </div>
                                <!--end::Users-->
                                <!--begin::Stats-->
                                <div class="d-flex my-1">
                                    <!--begin::Stat-->
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">1</span>
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="ki-duotone ki-message-text-2 fs-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">4</span>
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <div class="card mb-6 mb-xl-9">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Header-->
                            <div class="d-flex flex-stack mb-3">
                                <!--begin::Badge-->
                                <div class="badge badge-light">QA</div>
                                <!--end::Badge-->
                                <!--begin::Menu-->
                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-element-plus fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
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
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Title-->
                            <div class="mb-2">
                                <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">To check User Management</a>
                            </div>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer takes a couple hours</div>
                            <!--end::Content-->
                            <!--begin::Footer-->
                            <div class="d-flex flex-stack flex-wrapr">
                                <!--begin::Users-->
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-2.jpg') }}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                        <span class="symbol-label bg-info text-inverse-info fw-bold">P</span>
                                    </div>
                                </div>
                                <!--end::Users-->
                                <!--begin::Stats-->
                                <div class="d-flex my-1">
                                    <!--begin::Stat-->
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">3</span>
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="ki-duotone ki-message-text-2 fs-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">2</span>
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <div class="card mb-6 mb-xl-9">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Header-->
                            <div class="d-flex flex-stack mb-3">
                                <!--begin::Badge-->
                                <div class="badge badge-light">Phase 2.6 QA</div>
                                <!--end::Badge-->
                                <!--begin::Menu-->
                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-element-plus fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
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
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Title-->
                            <div class="mb-2">
                                <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">User Module Testing</a>
                            </div>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often.</div>
                            <!--end::Content-->
                            <!--begin::Footer-->
                            <div class="d-flex flex-stack flex-wrapr">
                                <!--begin::Users-->
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                        <span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-2.jpg') }}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                </div>
                                <!--end::Users-->
                                <!--begin::Stats-->
                                <div class="d-flex my-1">
                                    <!--begin::Stat-->
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">3</span>
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="ki-duotone ki-message-text-2 fs-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <span class="ms-1 fs-7 fw-bold text-gray-600">5</span>
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Tab pane-->
        <!--begin::Tab pane-->
        <div id="kt_project_targets_table_pane" class="tab-pane fade">
            <div class="card card-flush">
                <div class="card-body pt-3">
                    <!--begin::Table-->
                    <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                        <thead class="fs-7 text-gray-500 text-uppercase">
                            <tr>
                                <th class="min-w-250px">Target</th>
                                <th class="min-w-90px">Section</th>
                                <th class="min-w-150px">Due Date</th>
                                <th class="min-w-90px">Members</th>
                                <th class="min-w-90px">Status</th>
                                <th class="min-w-50px"></th>
                            </tr>
                        </thead>
                        <tbody class="fs-6">
                            <tr>
                                <td class="fw-bold">
                                    <a href="#" class="text-gray-900 text-hover-primary">Meeting with customer</a>
                                </td>
                                <td>
                                    <span class="badge badge-light fw-semibold me-auto">UI Design</span>
                                </td>
                                <td>Dec 4, 2020</td>
                                <td>
                                    <div class="symbol-group symbol-hover fs-8">
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-2.jpg') }}" />
                                        </div>
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="John Mixin">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-14.jpg') }}" />
                                        </div>
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge badge-light-primary fw-bold me-auto">In Progress</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold">
                                    <a href="#" class="text-gray-900 text-hover-primary">User Module Testing</a>
                                </td>
                                <td>
                                    <span class="badge badge-light fw-semibold me-auto">Phase 2.6 QA</span>
                                </td>
                                <td>May 26, 2020</td>
                                <td>
                                    <div class="symbol-group symbol-hover fs-8">
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                            <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                        </div>
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Robin Watterman">
                                            <span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge badge-light-success fw-bold me-auto">Completed</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold">
                                    <a href="#" class="text-gray-900 text-hover-primary">Sales report page</a>
                                </td>
                                <td>
                                    <span class="badge badge-light fw-semibold me-auto">QA</span>
                                </td>
                                <td>Apr 14, 2020</td>
                                <td>
                                    <div class="symbol-group symbol-hover fs-8">
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-2.jpg') }}" />
                                        </div>
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Kristen Goodwin">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-9.jpg') }}" />
                                        </div>
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Mikaela Collins">
                                            <span class="symbol-label bg-info text-inverse-info fw-bold">M</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge badge-light fw-bold me-auto">Yet to start</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold">
                                    <a href="#" class="text-gray-900 text-hover-primary">Meeting with customer</a>
                                </td>
                                <td>
                                    <span class="badge badge-light fw-semibold me-auto">Prototype</span>
                                </td>
                                <td>Dec 22, 2020</td>
                                <td>
                                    <div class="symbol-group symbol-hover fs-8">
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Robin Watterman">
                                            <span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
                                        </div>
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Brian Cox">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-5.jpg') }}" />
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge badge-light-success fw-bold me-auto">Completed</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold">
                                    <a href="#" class="text-gray-900 text-hover-primary">Design main Dashboard</a>
                                </td>
                                <td>
                                    <span class="badge badge-light fw-semibold me-auto">UI Design</span>
                                </td>
                                <td>Apr 6, 2020</td>
                                <td>
                                    <div class="symbol-group symbol-hover fs-8">
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-2.jpg') }}" />
                                        </div>
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Emma Smith">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-6.jpg') }}" />
                                        </div>
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Lucy Matthews">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-21.jpg') }}" />
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge badge-light-success fw-bold me-auto">Completed</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold">
                                    <a href="#" class="text-gray-900 text-hover-primary">User Module Testing</a>
                                </td>
                                <td>
                                    <span class="badge badge-light fw-semibold me-auto">Development</span>
                                </td>
                                <td>Sep 24, 2020</td>
                                <td>
                                    <div class="symbol-group symbol-hover fs-8">
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-20.jpg') }}" />
                                        </div>
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Deanna Taylor">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-23.jpg') }}" />
                                        </div>
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Mikaela Collins">
                                            <span class="symbol-label bg-info text-inverse-info fw-bold">M</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge badge-light-primary fw-bold me-auto">In Progress</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold">
                                    <a href="#" class="text-gray-900 text-hover-primary">To check User Management</a>
                                </td>
                                <td>
                                    <span class="badge badge-light fw-semibold me-auto">Pahse 3.2</span>
                                </td>
                                <td>Sep 3, 2020</td>
                                <td>
                                    <div class="symbol-group symbol-hover fs-8">
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Lucy Matthews">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-21.jpg') }}" />
                                        </div>
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Kristen Goodwin">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-9.jpg') }}" />
                                        </div>
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-7.jpg') }}" />
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge badge-light fw-bold me-auto">Yet to start</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold">
                                    <a href="#" class="text-gray-900 text-hover-primary">Create Roles Module</a>
                                </td>
                                <td>
                                    <span class="badge badge-light fw-semibold me-auto">Branding</span>
                                </td>
                                <td>Feb 23, 2020</td>
                                <td>
                                    <div class="symbol-group symbol-hover fs-8">
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-7.jpg') }}" />
                                        </div>
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Robin Watterman">
                                            <span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
                                        </div>
                                        <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                            <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge badge-light fw-bold me-auto">Yet to start</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
            </div>
        </div>
        <!--end::Tab pane-->
    </div>
    <!--end::Tab Content-->

</x-default-layout>
