<x-default-layout>
    @section('title')
    Lists
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('widgets.lists') }}
    @endsection

    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <div class="col-xl-4">
            <!--begin::List Widget 1-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">Tasks Overview</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">Pending 10 tasks</span>
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
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c70152476a">
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
                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c70152476a" data-allow-clear="true">
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
                <div class="card-body pt-5">
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50px me-5">
                            <span class="symbol-label bg-light-success">
                                <i class="ki-duotone ki-abstract-26 fs-2x text-success">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Text-->
                        <div class="d-flex flex-column">
                            <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Project Briefing</a>
                            <span class="text-muted fw-bold">Project Manager</span>
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50px me-5">
                            <span class="symbol-label bg-light-warning">
                                <i class="ki-duotone ki-pencil fs-2x text-warning">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Text-->
                        <div class="d-flex flex-column">
                            <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Concept Design</a>
                            <span class="text-muted fw-bold">Art Director</span>
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50px me-5">
                            <span class="symbol-label bg-light-primary">
                                <i class="ki-duotone ki-message-text-2 fs-2x text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Text-->
                        <div class="d-flex flex-column">
                            <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Functional Logics</a>
                            <span class="text-muted fw-bold">Lead Developer</span>
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50px me-5">
                            <span class="symbol-label bg-light-danger">
                                <i class="ki-duotone ki-disconnect fs-2x text-danger">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Text-->
                        <div class="d-flex flex-column">
                            <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Development</a>
                            <span class="text-muted fw-bold">DevOps</span>
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50px me-5">
                            <span class="symbol-label bg-light-info">
                                <i class="ki-duotone ki-security-user fs-2x text-info">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Text-->
                        <div class="d-flex flex-column">
                            <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Testing</a>
                            <span class="text-muted fw-bold">QA Managers</span>
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 1-->
        </div>
        <div class="col-xl-4">
            <!--begin::List Widget 2-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0">
                    <h3 class="card-title fw-bold text-gray-900">Authors</h3>
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
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-2">
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-7">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px me-5">
                            <img src="{{ asset('assets/media/avatars/300-6.jpg') }}" class="" alt="" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Text-->
                        <div class="flex-grow-1">
                            <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Emma Smith</a>
                            <span class="text-muted d-block fw-bold">Project Manager</span>
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-7">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px me-5">
                            <img src="{{ asset('assets/media/avatars/300-5.jpg') }}" class="" alt="" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Text-->
                        <div class="flex-grow-1">
                            <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Sean Bean</a>
                            <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-7">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px me-5">
                            <img src="{{ asset('assets/media/avatars/300-11.jpg') }}" class="" alt="" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Text-->
                        <div class="flex-grow-1">
                            <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Brian Cox</a>
                            <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-7">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px me-5">
                            <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" class="" alt="" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Text-->
                        <div class="flex-grow-1">
                            <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Francis Mitcham</a>
                            <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px me-5">
                            <img src="{{ asset('assets/media/avatars/300-23.jpg') }}" class="" alt="" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Text-->
                        <div class="flex-grow-1">
                            <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Dan Wilson</a>
                            <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 2-->
        </div>
        <div class="col-xl-4">
            <!--begin::List Widget 3-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0">
                    <h3 class="card-title fw-bold text-gray-900">Todo</h3>
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
                <div class="card-body pt-2">
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-8">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-vertical h-40px bg-success"></span>
                        <!--end::Bullet-->
                        <!--begin::Checkbox-->
                        <div class="form-check form-check-custom form-check-solid mx-5">
                            <input class="form-check-input" type="checkbox" value="" />
                        </div>
                        <!--end::Checkbox-->
                        <!--begin::Description-->
                        <div class="flex-grow-1">
                            <a href="#" class="text-gray-800 text-hover-primary fw-bold fs-6">Create FireStone Logo</a>
                            <span class="text-muted fw-semibold d-block">Due in 2 Days</span>
                        </div>
                        <!--end::Description-->
                        <span class="badge badge-light-success fs-8 fw-bold">New</span>
                    </div>
                    <!--end:Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-8">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-vertical h-40px bg-primary"></span>
                        <!--end::Bullet-->
                        <!--begin::Checkbox-->
                        <div class="form-check form-check-custom form-check-solid mx-5">
                            <input class="form-check-input" type="checkbox" value="" />
                        </div>
                        <!--end::Checkbox-->
                        <!--begin::Description-->
                        <div class="flex-grow-1">
                            <a href="#" class="text-gray-800 text-hover-primary fw-bold fs-6">Stakeholder Meeting</a>
                            <span class="text-muted fw-semibold d-block">Due in 3 Days</span>
                        </div>
                        <!--end::Description-->
                        <span class="badge badge-light-primary fs-8 fw-bold">New</span>
                    </div>
                    <!--end:Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-8">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-vertical h-40px bg-warning"></span>
                        <!--end::Bullet-->
                        <!--begin::Checkbox-->
                        <div class="form-check form-check-custom form-check-solid mx-5">
                            <input class="form-check-input" type="checkbox" value="" />
                        </div>
                        <!--end::Checkbox-->
                        <!--begin::Description-->
                        <div class="flex-grow-1">
                            <a href="#" class="text-gray-800 text-hover-primary fw-bold fs-6">Scoping & Estimations</a>
                            <span class="text-muted fw-semibold d-block">Due in 5 Days</span>
                        </div>
                        <!--end::Description-->
                        <span class="badge badge-light-warning fs-8 fw-bold">New</span>
                    </div>
                    <!--end:Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-8">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-vertical h-40px bg-primary"></span>
                        <!--end::Bullet-->
                        <!--begin::Checkbox-->
                        <div class="form-check form-check-custom form-check-solid mx-5">
                            <input class="form-check-input" type="checkbox" value="" />
                        </div>
                        <!--end::Checkbox-->
                        <!--begin::Description-->
                        <div class="flex-grow-1">
                            <a href="#" class="text-gray-800 text-hover-primary fw-bold fs-6">KPI App Showcase</a>
                            <span class="text-muted fw-semibold d-block">Due in 2 Days</span>
                        </div>
                        <!--end::Description-->
                        <span class="badge badge-light-primary fs-8 fw-bold">New</span>
                    </div>
                    <!--end:Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-8">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-vertical h-40px bg-danger"></span>
                        <!--end::Bullet-->
                        <!--begin::Checkbox-->
                        <div class="form-check form-check-custom form-check-solid mx-5">
                            <input class="form-check-input" type="checkbox" value="" />
                        </div>
                        <!--end::Checkbox-->
                        <!--begin::Description-->
                        <div class="flex-grow-1">
                            <a href="#" class="text-gray-800 text-hover-primary fw-bold fs-6">Project Meeting</a>
                            <span class="text-muted fw-semibold d-block">Due in 12 Days</span>
                        </div>
                        <!--end::Description-->
                        <span class="badge badge-light-danger fs-8 fw-bold">New</span>
                    </div>
                    <!--end:Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-vertical h-40px bg-success"></span>
                        <!--end::Bullet-->
                        <!--begin::Checkbox-->
                        <div class="form-check form-check-custom form-check-solid mx-5">
                            <input class="form-check-input" type="checkbox" value="" />
                        </div>
                        <!--end::Checkbox-->
                        <!--begin::Description-->
                        <div class="flex-grow-1">
                            <a href="#" class="text-gray-800 text-hover-primary fw-bold fs-6">Customers Update</a>
                            <span class="text-muted fw-semibold d-block">Due in 1 week</span>
                        </div>
                        <!--end::Description-->
                        <span class="badge badge-light-success fs-8 fw-bold">New</span>
                    </div>
                    <!--end:Item-->
                </div>
                <!--end::Body-->
            </div>
            <!--end:List Widget 3-->
        </div>
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <div class="col-xl-4">
            <!--begin::List Widget 4-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">Trends</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">Latest tech trends</span>
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
                <div class="card-body pt-5">
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50px me-5">
                            <span class="symbol-label">
                                <img src="{{ asset('assets/media/svg/brand-logos/plurk.svg') }}" class="h-50 align-self-center" alt="" />
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Top Authors</a>
                                <span class="text-muted fw-semibold d-block fs-7">Mark, Rowling, Esther</span>
                            </div>
                            <span class="badge badge-light fw-bold my-2">+82$</span>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50px me-5">
                            <span class="symbol-label">
                                <img src="{{ asset('assets/media/svg/brand-logos/telegram.svg') }}" class="h-50 align-self-center" alt="" />
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Popular Authors</a>
                                <span class="text-muted fw-semibold d-block fs-7">Randy, Steve, Mike</span>
                            </div>
                            <span class="badge badge-light fw-bold my-2">+280$</span>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50px me-5">
                            <span class="symbol-label">
                                <img src="{{ asset('assets/media/svg/brand-logos/vimeo.svg') }}" class="h-50 align-self-center" alt="" />
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">New Users</a>
                                <span class="text-muted fw-semibold d-block fs-7">John, Pat, Jimmy</span>
                            </div>
                            <span class="badge badge-light fw-bold my-2">+4500$</span>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50px me-5">
                            <span class="symbol-label">
                                <img src="{{ asset('assets/media/svg/brand-logos/bebo.svg') }}" class="h-50 align-self-center" alt="" />
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Active Customers</a>
                                <span class="text-muted fw-semibold d-block fs-7">Mark, Rowling, Esther</span>
                            </div>
                            <span class="badge badge-light fw-bold my-2">+686$</span>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50px me-5">
                            <span class="symbol-label">
                                <img src="{{ asset('assets/media/svg/brand-logos/kickstarter.svg') }}" class="h-50 align-self-center" alt="" />
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Bestseller Theme</a>
                                <span class="text-muted fw-semibold d-block fs-7">Disco, Retro, Sports</span>
                            </div>
                            <span class="badge badge-light fw-bold my-2">+726$</span>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50px me-5">
                            <span class="symbol-label">
                                <img src="{{ asset('assets/media/svg/brand-logos/fox-hub.svg') }}" class="h-50 align-self-center" alt="" />
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Fox Broker App</a>
                                <span class="text-muted fw-semibold d-block fs-7">Finance, Corporate, Apps</span>
                            </div>
                            <span class="badge badge-light fw-bold my-2">+145$</span>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 4-->
        </div>
        <div class="col-xl-4">
            <!--begin::List Widget 5-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Header-->
                <div class="card-header align-items-center border-0 mt-4">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="fw-bold mb-2 text-gray-900">Activities</span>
                        <span class="text-muted fw-semibold fs-7">890,344 Sales</span>
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
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c701524b29">
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
                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c701524b29" data-allow-clear="true">
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
                <div class="card-body pt-5">
                    <!--begin::Timeline-->
                    <div class="timeline-label">
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-warning fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Text-->
                            <div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest. And keep structure</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-success fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Content-->
                            <div class="timeline-content d-flex">
                                <span class="fw-bold text-gray-800 ps-3">AEOL meeting</span>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-danger fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Desc-->
                            <div class="timeline-content fw-bold text-gray-800 ps-3">Make deposit
                                <a href="#" class="text-primary">USD 700</a>. to ESL</div>
                            <!--end::Desc-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-primary fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Text-->
                            <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-danger fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Desc-->
                            <div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
                                <a href="#" class="text-primary">#XF-2356</a>.</div>
                            <!--end::Desc-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-primary fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Text-->
                            <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-danger fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Desc-->
                            <div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
                                <a href="#" class="text-primary">#XF-2356</a>.</div>
                            <!--end::Desc-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">10:30</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-success fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Text-->
                            <div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app launch preparion meeting</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Timeline-->
                </div>
                <!--end: Card Body-->
            </div>
            <!--end: List Widget 5-->
        </div>
        <div class="col-xl-4">
            <!--begin::List Widget 6-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0">
                    <h3 class="card-title fw-bold text-gray-900">Notifications</h3>
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
                <div class="card-body pt-0">
                    <!--begin::Item-->
                    <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-7">
                        <i class="ki-duotone ki-abstract-26 text-warning fs-1 me-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <!--begin::Title-->
                        <div class="flex-grow-1 me-2">
                            <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-6">Group lunch celebration</a>
                            <span class="text-muted fw-semibold d-block">Due in 2 Days</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Lable-->
                        <span class="fw-bold text-warning py-1">+28%</span>
                        <!--end::Lable-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center bg-light-success rounded p-5 mb-7">
                        <i class="ki-duotone ki-abstract-26 text-success fs-1 me-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <!--begin::Title-->
                        <div class="flex-grow-1 me-2">
                            <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-6">Navigation optimization</a>
                            <span class="text-muted fw-semibold d-block">Due in 2 Days</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Lable-->
                        <span class="fw-bold text-success py-1">+50%</span>
                        <!--end::Lable-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-7">
                        <i class="ki-duotone ki-abstract-26 text-danger fs-1 me-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <!--begin::Title-->
                        <div class="flex-grow-1 me-2">
                            <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-6">Rebrand strategy planning</a>
                            <span class="text-muted fw-semibold d-block">Due in 5 Days</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Lable-->
                        <span class="fw-bold text-danger py-1">-27%</span>
                        <!--end::Lable-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center bg-light-info rounded p-5">
                        <i class="ki-duotone ki-abstract-26 text-info fs-1 me-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <!--begin::Title-->
                        <div class="flex-grow-1 me-2">
                            <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-6">Product goals strategy</a>
                            <span class="text-muted fw-semibold d-block">Due in 7 Days</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Lable-->
                        <span class="fw-bold text-info py-1">+8%</span>
                        <!--end::Lable-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 6-->
        </div>
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <div class="col-xl-6">
            <!--begin::List Widget 7-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Header-->
                <div class="card-header align-items-center border-0 mt-4">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="fw-bold text-gray-900">Latest Media</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">Articles and publications</span>
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
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c701524c3a">
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
                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c701524c3a" data-allow-clear="true">
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
                <div class="card-body pt-3">
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label" style="background-image: url('{{ asset('assets/media/stock/600x400/img-20.jpg') }}')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Cup & Green</a>
                                <span class="text-muted fw-semibold d-block pt-1">Size: 87KB</span>
                            </div>
                            <span class="badge badge-light-success fs-8 fw-bold my-2">Approved</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label" style="background-image: url('{{ asset('assets/media/stock/600x400/img-19.jpg') }}')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Yellow Background</a>
                                <span class="text-muted fw-semibold d-block pt-1">Size: 1.2MB</span>
                            </div>
                            <span class="badge badge-light-warning fs-8 fw-bold my-2">In Progress</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label" style="background-image: url('{{ asset('assets/media/stock/600x400/img-25.jpg') }}')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Nike & Blue</a>
                                <span class="text-muted fw-semibold d-block pt-1">Size: 87KB</span>
                            </div>
                            <span class="badge badge-light-success fs-8 fw-bold my-2">Success</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label" style="background-image: url('{{ asset('assets/media/stock/600x400/img-24.jpg') }}')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Red Boots</a>
                                <span class="text-muted fw-semibold d-block pt-1">Size: 345KB</span>
                            </div>
                            <span class="badge badge-light-danger fs-8 fw-bold my-2">Rejected</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 7-->
        </div>
        <div class="col-xl-6">
            <!--begin::List Widget 8-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header align-items-center border-0 mt-4">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="fw-bold text-gray-900">Latest Products</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">Gifts and more</span>
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
                <div class="card-body pt-3">
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label" style="background-image: url('{{ asset('assets/media/stock/600x400/img-17.jpg') }}')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Content-->
                        <div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
                            <!--begin::Title-->
                            <div class="flex-grow-1 my-lg-0 my-2 me-2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Cup & Green</a>
                                <span class="text-muted fw-semibold d-block pt-1">Visually stunning</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                                <div class="me-6">
                                    <i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
                                    <span class="text-gray-800 fw-bold">4.2</span>
                                </div>
                                <a href="#" class="btn btn-icon btn-light btn-sm border-0">
                                    <i class="ki-duotone ki-arrow-right fs-2 text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label" style="background-image: url('{{ asset('assets/media/stock/600x400/img-10.jpg') }}')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Content-->
                        <div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
                            <!--begin::Title-->
                            <div class="flex-grow-1 my-lg-0 my-2 me-2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Pink Patterns</a>
                                <span class="text-muted fw-semibold d-block pt-1">Feminine all around</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                                <div class="me-6">
                                    <i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
                                    <span class="text-gray-800 fw-bold">5.0</span>
                                </div>
                                <a href="#" class="btn btn-icon btn-light btn-sm border-0">
                                    <i class="ki-duotone ki-arrow-right fs-2 text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label" style="background-image: url('{{ asset('assets/media/stock/600x400/img-1.jpg') }}')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Content-->
                        <div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
                            <!--begin::Title-->
                            <div class="flex-grow-1 my-lg-0 my-2 me-2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstract Art</a>
                                <span class="text-muted fw-semibold d-block pt-1">The will to capture readers</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                                <div class="me-6">
                                    <i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
                                    <span class="text-gray-800 fw-bold">5.7</span>
                                </div>
                                <a href="#" class="btn btn-icon btn-light btn-sm border-0">
                                    <i class="ki-duotone ki-arrow-right fs-2 text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label" style="background-image: url('{{ asset('assets/media/stock/600x400/img-9.jpg') }}')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Content-->
                        <div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
                            <!--begin::Title-->
                            <div class="flex-grow-1 my-lg-0 my-2 me-2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Desserts platter</a>
                                <span class="text-muted fw-semibold d-block pt-1">Food trends & inspirations</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                                <div class="me-6">
                                    <i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
                                    <span class="text-gray-800 fw-bold">3.7</span>
                                </div>
                                <a href="#" class="btn btn-icon btn-light btn-sm border-0">
                                    <i class="ki-duotone ki-arrow-right fs-2 text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 8-->
        </div>
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <div class="col-xl-6">
            <!--begin::List Widget 9-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header align-items-center border-0 mt-3">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="fw-bold text-gray-900 fs-3">My Competitors</span>
                        <span class="text-gray-500 mt-2 fw-semibold fs-6">More than 400+ new members</span>
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6 text-primary">
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
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-5">
                    <!--begin::Item-->
                    <div class="d-flex mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                            <img src="{{ asset('assets/media/stock/600x400/img-3.jpg') }}" class="mw-100" alt="" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                            <!--begin::Title-->
                            <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Cup & Green</a>
                                <span class="text-gray-500 fw-semibold fs-7 my-1">Study highway types</span>
                                <span class="text-gray-500 fw-semibold fs-7">By:
                                    <a href="#" class="text-primary fw-bold">CoreAd</a></span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Info-->
                            <div class="text-end py-lg-0 py-2">
                                <span class="text-gray-800 fw-bolder fs-3">24,900</span>
                                <span class="text-gray-500 fs-7 fw-semibold d-block">Sales</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                            <img src="{{ asset('assets/media/stock/600x400/img-4.jpg') }}" class="mw-100" alt="" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                            <!--begin::Title-->
                            <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Yellow Hearts</a>
                                <span class="text-gray-500 fw-semibold fs-7 my-1">Study highway types</span>
                                <span class="text-gray-500 fw-semibold fs-7">By:
                                    <a href="#" class="text-primary fw-bold">KeenThemes</a></span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Info-->
                            <div class="text-end py-lg-0 py-2">
                                <span class="text-gray-800 fw-bolder fs-3">70,380</span>
                                <span class="text-gray-500 fs-7 fw-semibold d-block">Sales</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                            <img src="{{ asset('assets/media/stock/600x400/img-5.jpg') }}" class="mw-100" alt="" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                            <!--begin::Title-->
                            <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Nike & Blue</a>
                                <span class="text-gray-500 fw-semibold fs-7 my-1">Study highway types</span>
                                <span class="text-gray-500 fw-semibold fs-7">By:
                                    <a href="#" class="text-primary fw-bold">Invision Inc.</a></span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Info-->
                            <div class="text-end py-lg-0 py-2">
                                <span class="text-gray-800 fw-bolder fs-3">7,200</span>
                                <span class="text-gray-500 fs-7 fw-semibold d-block">Sales</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                            <img src="{{ asset('assets/media/stock/600x400/img-6.jpg') }}" class="mw-100" alt="" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                            <!--begin::Title-->
                            <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Red Boots</a>
                                <span class="text-gray-500 fw-semibold fs-7 my-1">Study highway types</span>
                                <span class="text-gray-500 fw-semibold fs-7">By:
                                    <a href="#" class="text-primary fw-bold">Figma Studio</a></span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Info-->
                            <div class="text-end py-lg-0 py-2">
                                <span class="text-gray-800 fw-bolder fs-3">36,450</span>
                                <span class="text-gray-500 fs-7 fw-semibold d-block">Sales</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                            <img src="{{ asset('assets/media/stock/600x400/img-7.jpg') }}" class="mw-100" alt="" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                            <!--begin::Title-->
                            <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Desserts platter</a>
                                <span class="text-gray-500 fw-semibold fs-7 my-1">Food trends & reviews</span>
                                <span class="text-gray-500 fw-semibold fs-7">By:
                                    <a href="#" class="text-primary fw-bold">Figma Studio</a></span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Info-->
                            <div class="text-end py-lg-0 py-2">
                                <span class="text-gray-800 fw-bolder fs-3">64,753</span>
                                <span class="text-gray-500 fs-7 fw-semibold d-block">Sales</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 9-->
        </div>
    </div>
    <!--end::Row-->

</x-default-layout>
