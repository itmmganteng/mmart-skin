<x-default-layout>
    @section('title')
    Feeds
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('widgets.feeds') }}
    @endsection

    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-6">
            <!--begin::Feeds Widget 1-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body pb-0">
                    <!--begin::Header-->
                    <div class="d-flex align-items-center">
                        <!--begin::User-->
                        <div class="d-flex align-items-center flex-grow-1">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-45px me-5">
                                <img src="{{ asset('assets/media/avatars/300-6.jpg') }}" alt="" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Grace Green</a>
                                <span class="text-gray-500 fw-bold">PHP, SQLite, Artisan CLI</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                        <!--begin::Menu-->
                        <div class="my-0">
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
                    <!--end::Header-->
                    <!--begin::Form-->
                    <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
                        <!--begin::Editor-->
                        <div id="kt_forms_widget_1_editor" class="py-6"></div>
                        <!--end::Editor-->
                        <div class="separator"></div>
                        <!--begin::Toolbar-->
                        <div id="kt_forms_widget_1_editor_toolbar" class="ql-toolbar d-flex flex-stack py-2">
                            <div class="me-2">
                                <span class="ql-formats ql-size ms-0">
                                    <select class="ql-size w-75px"></select>
                                </span>
                                <span class="ql-formats">
                                    <button class="ql-bold"></button>
                                    <button class="ql-italic"></button>
                                    <button class="ql-underline"></button>
                                    <button class="ql-strike"></button>
                                    <button class="ql-image"></button>
                                    <button class="ql-link"></button>
                                    <button class="ql-clean"></button>
                                </span>
                            </div>
                            <div class="me-n3">
                                <span class="btn btn-icon btn-sm btn-active-color-primary">
                                    <i class="ki-duotone ki-paper-clip fs-2"></i>
                                </span>
                                <span class="btn btn-icon btn-sm btn-active-color-primary">
                                    <i class="ki-duotone ki-geolocation fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </div>
                        </div>
                        <!--end::Toolbar-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Feeds Widget 1-->
            <!--begin::Feeds Widget 2-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body pb-0">
                    <!--begin::Header-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::User-->
                        <div class="d-flex align-items-center flex-grow-1">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-45px me-5">
                                <img src="{{ asset('assets/media/avatars/300-23.jpg') }}" alt="" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Nick Logan</a>
                                <span class="text-gray-500 fw-bold">PHP, SQLite, Artisan CLI</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                        <!--begin::Menu-->
                        <div class="my-0">
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
                    <!--end::Header-->
                    <!--begin::Post-->
                    <div class="mb-5">
                        <!--begin::Text-->
                        <p class="text-gray-800 fw-normal mb-5">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors about driving and keep you focused on the overall structure of your post</p>
                        <!--end::Text-->
                        <!--begin::Toolbar-->
                        <div class="d-flex align-items-center mb-5">
                            <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                <i class="ki-duotone ki-message-text-2 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>120</a>
                            <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                <i class="ki-duotone ki-heart fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>15</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Post-->
                    <!--begin::Separator-->
                    <div class="separator mb-4"></div>
                    <!--end::Separator-->
                    <!--begin::Reply input-->
                    <form class="position-relative mb-6">
                        <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>
                        <div class="position-absolute top-0 end-0 me-n5">
                            <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>
                            </span>
                            <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                <i class="ki-duotone ki-geolocation fs-2 mb-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                        </div>
                    </form>
                    <!--edit::Reply input-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Feeds Widget 2-->
            <!--begin::Feeds Widget 3-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body pb-0">
                    <!--begin::Header-->
                    <div class="d-flex align-items-center mb-3">
                        <!--begin::User-->
                        <div class="d-flex align-items-center flex-grow-1">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-45px me-5">
                                <img src="{{ asset('assets/media/avatars/300-21.jpg') }}" alt="" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Carles Nilson</a>
                                <span class="text-gray-500 fw-bold">Yestarday at 5:06 PM</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                        <!--begin::Menu-->
                        <div class="my-0">
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
                    <!--end::Header-->
                    <!--begin::Post-->
                    <div class="mb-7">
                        <!--begin::Text-->
                        <div class="text-gray-800 mb-5">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors about driving and keep you focused on the overall structure of your post</div>
                        <!--end::Text-->
                        <!--begin::Toolbar-->
                        <div class="d-flex align-items-center mb-5">
                            <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                <i class="ki-duotone ki-message-text-2 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>12</a>
                            <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                <i class="ki-duotone ki-heart fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>150</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Post-->
                    <!--begin::Replies-->
                    <div class="mb-7">
                        <!--begin::Reply-->
                        <div class="d-flex mb-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-45px me-5">
                                <img src="{{ asset('assets/media/avatars/300-14.jpg') }}" alt="" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column flex-row-fluid">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap mb-1">
                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold me-2">Alice Danchik</a>
                                    <span class="text-gray-500 fw-semibold fs-7">1 day</span>
                                    <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                </div>
                                <!--end::Info-->
                                <!--begin::Post-->
                                <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper you need to make sure you have to sit down and write.</span>
                                <!--end::Post-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Reply-->
                        <!--begin::Reply-->
                        <div class="d-flex">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-45px me-5">
                                <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" alt="" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column flex-row-fluid">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap mb-1">
                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold me-2">Harris Bold</a>
                                    <span class="text-gray-500 fw-semibold fs-7">2 days</span>
                                    <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                </div>
                                <!--end::Info-->
                                <!--begin::Post-->
                                <span class="text-gray-800 fs-7 fw-normal pt-1">Outlines keep you honest. They stop you from indulging in poorly</span>
                                <!--end::Post-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Reply-->
                    </div>
                    <!--end::Replies-->
                    <!--begin::Separator-->
                    <div class="separator mb-4"></div>
                    <!--end::Separator-->
                    <!--begin::Reply input-->
                    <form class="position-relative mb-6">
                        <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>
                        <div class="position-absolute top-0 end-0 me-n5">
                            <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>
                            </span>
                            <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                <i class="ki-duotone ki-geolocation fs-2 mb-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                        </div>
                    </form>
                    <!--edit::Reply input-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Feeds Widget 3-->
            <!--begin::Feeds Widget 4-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body pb-0">
                    <!--begin::Header-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::User-->
                        <div class="d-flex align-items-center flex-grow-1">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-45px me-5">
                                <img src="{{ asset('assets/media/avatars/300-7.jpg') }}" alt="" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Carles Nilson</a>
                                <span class="text-gray-500 fw-bold">Last week at 10:00 PM</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                        <!--begin::Menu-->
                        <div class="my-0">
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
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Post-->
                    <div class="mb-7">
                        <!--begin::Text-->
                        <div class="text-gray-800 mb-5">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors about driving and keep you focused on the overall structure of your post</div>
                        <!--end::Text-->
                        <!--begin::Toolbar-->
                        <div class="d-flex align-items-center mb-5">
                            <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                <i class="ki-duotone ki-message-text-2 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>22</a>
                            <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                <i class="ki-duotone ki-heart fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>59</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Post-->
                    <!--begin::Separator-->
                    <div class="separator mb-4"></div>
                    <!--end::Separator-->
                    <!--begin::Reply input-->
                    <form class="position-relative mb-6">
                        <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>
                        <div class="position-absolute top-0 end-0 me-n5">
                            <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>
                            </span>
                            <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                <i class="ki-duotone ki-geolocation fs-2 mb-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                        </div>
                    </form>
                    <!--edit::Reply input-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Feeds Widget 4-->
            <!--begin::Feeds widget 5-->
            <div class="card d-none" id="kt_widget_5">
                <!--begin::Body-->
                <div class="card-body pb-0">
                    <!--begin::Header-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::User-->
                        <div class="d-flex align-items-center flex-grow-1">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-45px me-5">
                                <img src="{{ asset('assets/media/avatars/300-7.jpg') }}" alt="" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Carles Nilson</a>
                                <span class="text-gray-500 fw-bold">Last week at 10:00 PM</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                        <!--begin::Menu-->
                        <div class="my-0">
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
                    <!--end::Header-->
                    <!--begin::Post-->
                    <div class="mb-7">
                        <!--begin::Image-->
                        <div class="bgi-no-repeat bgi-size-cover rounded min-h-250px mb-5" style="background-image:url('{{ asset('assets/media/stock/900x600/19.jpg') }}');"></div>
                        <!--end::Image-->
                        <!--begin::Text-->
                        <div class="text-gray-800 mb-5">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors about driving and keep you focused on the overall structure of your post</div>
                        <!--end::Text-->
                        <!--begin::Toolbar-->
                        <div class="d-flex align-items-center mb-5">
                            <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                <i class="ki-duotone ki-message-text-2 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>20</a>
                            <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                <i class="ki-duotone ki-heart fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>50</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Post-->
                    <!--begin::Separator-->
                    <div class="separator mb-4"></div>
                    <!--end::Separator-->
                    <!--begin::Reply input-->
                    <form class="position-relative mb-6">
                        <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>
                        <div class="position-absolute top-0 end-0 me-n5">
                            <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>
                            </span>
                            <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                <i class="ki-duotone ki-geolocation fs-2 mb-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                        </div>
                    </form>
                    <!--edit::Reply input-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Feeds widget 5-->
            <!--begin::Feeds widget 4, 5 load more-->
            <button class="btn btn-primary w-100 text-center" id="kt_widget_5_load_more_btn">
                <span class="indicator-label">More Feeds</span>
                <span class="indicator-progress">Loading...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Feeds widget 4, 5 load more-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-6">
            <!--begin::Feeds Widget 5-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body pb-0">
                    <!--begin::Header-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::User-->
                        <div class="d-flex align-items-center flex-grow-1">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-45px me-5">
                                <img src="{{ asset('assets/media/avatars/300-25.jpg') }}" alt="" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Sam Logan</a>
                                <span class="text-gray-500 fw-bold">Mango, Java, Python</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                        <!--begin::Menu-->
                        <div class="my-0">
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
                    <!--end::Header-->
                    <!--begin::Post-->
                    <div class="mb-5">
                        <!--begin::Image-->
                        <div class="bgi-no-repeat bgi-size-cover rounded min-h-250px mb-5" style="background-image:url('{{ asset('assets/media/stock/900x600/20.jpg') }}');"></div>
                        <!--end::Image-->
                        <!--begin::Text-->
                        <div class="text-gray-800 mb-5">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors about driving and keep you focused on the overall structure of your post</div>
                        <!--end::Text-->
                        <!--begin::Toolbar-->
                        <div class="d-flex align-items-center mb-5">
                            <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                <i class="ki-duotone ki-message-text-2 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>89</a>
                            <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                <i class="ki-duotone ki-heart fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>29</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Post-->
                    <!--begin::Separator-->
                    <div class="separator mb-4"></div>
                    <!--end::Separator-->
                    <!--begin::Reply input-->
                    <form class="position-relative mb-6">
                        <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>
                        <div class="position-absolute top-0 end-0 me-n5">
                            <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>
                            </span>
                            <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                <i class="ki-duotone ki-geolocation fs-2 mb-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                        </div>
                    </form>
                    <!--edit::Reply input-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Feeds Widget 5-->
            <!--begin::Forms Widget 6-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body pb-0">
                    <!--begin::Header-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::User-->
                        <div class="d-flex align-items-center flex-grow-1">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-45px me-5">
                                <img src="{{ asset('assets/media/avatars/300-13.jpg') }}" alt="" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Mat Dillon</a>
                                <span class="text-gray-500 fw-bold">Last month</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                        <!--begin::Menu-->
                        <div class="my-0">
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
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Post-->
                    <div class="mb-6">
                        <!--begin::Text-->
                        <div class="text-gray-800 fs-6 fw-normal mb-5">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors</div>
                        <!--end::Text-->
                        <!--begin::Video-->
                        <div class="mb-5">
                            <iframe class="embed-responsive-item rounded h-300px w-100" src="https://www.youtube.com/embed/qIHXpnASPAA" allowfullscreen="allowfullscreen"></iframe>
                        </div>
                        <!--end::Video-->
                        <!--begin::Toolbar-->
                        <div class="d-flex align-items-center mb-5">
                            <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                <i class="ki-duotone ki-message-text-2 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>189</a>
                            <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                <i class="ki-duotone ki-heart fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>229</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Bottom-->
                    <!--begin::Separator-->
                    <div class="separator mb-4"></div>
                    <!--end::Separator-->
                    <!--begin::Reply input-->
                    <form class="position-relative mb-6">
                        <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>
                        <div class="position-absolute top-0 end-0 me-n5">
                            <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>
                            </span>
                            <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                <i class="ki-duotone ki-geolocation fs-2 mb-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                        </div>
                    </form>
                    <!--edit::Reply input-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Forms Widget 6-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->

</x-default-layout>
