<x-default-layout>
    @section('title')
        Social
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard.social') }}
    @endsection

    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-xl-8">
            <!--begin::Chart Widget 1-->
            <div class="card card-flush h-lg-100">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">Instagram Subscribers</span>
                        <span class="text-gray-500 pt-2 fw-semibold fs-6">75% activity growth</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
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
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0 px-0">
                    <!--begin::Chart-->
                    <div id="kt_charts_widget_1" class="min-h-auto ps-4 pe-6 mb-3" style="height: 350px"></div>
                    <!--end::Chart-->
                    <!--begin::Info-->
                    <div class="d-flex align-items-center px-9">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center me-6">
                            <!--begin::Bullet-->
                            <span class="rounded-1 bg-primary me-2 h-10px w-10px"></span>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <span class="fw-semibold fs-6 text-gray-600">Gained</span>
                            <!--end::Label-->
                        </div>
                        <!--ed::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                            <!--begin::Bullet-->
                            <span class="rounded-1 bg-success me-2 h-10px w-10px"></span>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <span class="fw-semibold fs-6 text-gray-600">Lost</span>
                            <!--end::Label-->
                        </div>
                        <!--ed::Item-->
                    </div>
                    <!--ed::Info-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Chart Widget 1-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Engage widget 1-->
            <div class="card h-md-100" dir="ltr">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column flex-center">
                    <!--begin::Heading-->
                    <div class="mb-2">
                        <!--begin::Title-->
                        <h1 class="fw-semibold text-gray-800 text-center lh-lg">Have you tried
                        <br />new
                        <span class="fw-bolder">Mobile Application ?</span></h1>
                        <!--end::Title-->
                        <!--begin::Illustration-->
                        <div class="py-10 text-center">
                            <img src="{{ asset('assets/media/svg/illustrations/easy/1.svg') }}" class="theme-light-show w-200px" alt="" />
                            <img src="{{ asset('assets/media/svg/illustrations/easy/1-dark.svg') }}" class="theme-dark-show w-200px" alt="" />
                        </div>
                        <!--end::Illustration-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Links-->
                    <div class="text-center mb-1">
                        <!--begin::Link-->
                        <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_create_app" data-bs-toggle="modal">Try now</a>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <a class="btn btn-sm btn-light" href="pages/user-profile/activity.html">Learn more</a>
                        <!--end::Link-->
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Engage widget 1-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <!--begin::Card widget 2-->
            <div class="card h-lg-100">
                <!--begin::Body-->
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <!--begin::Icon-->
                    <div class="m-0">
                        <img src="{{ asset('assets/media/svg/brand-logos/instagram-2-1.svg') }}" class="w-35px" alt="" />
                    </div>
                    <!--end::Icon-->
                    <!--begin::Section-->
                    <div class="d-flex flex-column my-7">
                        <!--begin::Number-->
                        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">320k</span>
                        <!--end::Number-->
                        <!--begin::Follower-->
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-500">Followers</span>
                        </div>
                        <!--end::Follower-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Badge-->
                    <span class="badge badge-light-success fs-base">
                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>2.1%</span>
                    <!--end::Badge-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card widget 2-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <!--begin::Card widget 2-->
            <div class="card h-lg-100">
                <!--begin::Body-->
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <!--begin::Icon-->
                    <div class="m-0">
                        <img src="{{ asset('assets/media/svg/brand-logos/facebook-3.svg') }}" class="w-35px" alt="" />
                    </div>
                    <!--end::Icon-->
                    <!--begin::Section-->
                    <div class="d-flex flex-column my-7">
                        <!--begin::Number-->
                        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">1.5M</span>
                        <!--end::Number-->
                        <!--begin::Follower-->
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-500">Followers</span>
                        </div>
                        <!--end::Follower-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Badge-->
                    <span class="badge badge-light-danger fs-base">
                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>0.47%</span>
                    <!--end::Badge-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card widget 2-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <!--begin::Card widget 2-->
            <div class="card h-lg-100">
                <!--begin::Body-->
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <!--begin::Icon-->
                    <div class="m-0">
                        <img src="{{ asset('assets/media/svg/brand-logos/dribbble-icon-1.svg') }}" class="w-35px" alt="" />
                    </div>
                    <!--end::Icon-->
                    <!--begin::Section-->
                    <div class="d-flex flex-column my-7">
                        <!--begin::Number-->
                        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">84k</span>
                        <!--end::Number-->
                        <!--begin::Follower-->
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-500">Followers</span>
                        </div>
                        <!--end::Follower-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Badge-->
                    <span class="badge badge-light-success fs-base">
                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>0.6%</span>
                    <!--end::Badge-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card widget 2-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <!--begin::Card widget 2-->
            <div class="card h-lg-100">
                <!--begin::Body-->
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <!--begin::Icon-->
                    <div class="m-0">
                        <img src="{{ asset('assets/media/svg/brand-logos/twitter.svg') }}" class="w-35px" alt="" />
                    </div>
                    <!--end::Icon-->
                    <!--begin::Section-->
                    <div class="d-flex flex-column my-7">
                        <!--begin::Number-->
                        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">570k</span>
                        <!--end::Number-->
                        <!--begin::Follower-->
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-500">Followers</span>
                        </div>
                        <!--end::Follower-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Badge-->
                    <span class="badge badge-light-success fs-base">
                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>3%</span>
                    <!--end::Badge-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card widget 2-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4 mb-5 mb-xl-10">
            <!--begin::Card widget 1-->
            <div class="card card-flush border-0 h-lg-100" data-bs-theme="light" style="background-color: #7239EA">
                <!--begin::Header-->
                <div class="card-header pt-2">
                    <!--begin::Title-->
                    <h3 class="card-title">
                        <span class="text-white fs-3 fw-bold me-2">Facebook Campaign</span>
                        <span class="badge badge-success">Active</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button class="btn btn-icon bg-white bg-opacity-10 btn-color-white btn-active-success w-25px h-25px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <i class="ki-duotone ki-black-right fs-5"></i>
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
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body d-flex justify-content-between flex-column pt-1 px-0 pb-0">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-wrap px-9 mb-5">
                        <!--begin::Stat-->
                        <div class="rounded min-w-125px py-3 px-4 my-1 me-6" style="border: 1px dashed rgba(255, 255, 255, 0.2)">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                                <div class="text-white fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="4368" data-kt-countup-prefix="$">0</div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-white opacity-50">New Followers</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <div class="rounded min-w-125px py-3 px-4 my-1" style="border: 1px dashed rgba(255, 255, 255, 0.2)">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                                <div class="text-white fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="120,000">0</div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-white opacity-50">Followers Goal</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Chart-->
                    <div id="kt_card_widget_1_chart" data-kt-chart-color="#8F5FF4" style="height: 105px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card widget 1-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row gy-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-xl-8 mb-xl-10">
            <!--begin::Timeline Widget 1-->
            <div class="card card-flush h-xl-100">
                <!--begin::Card header-->
                <div class="card-header pt-5">
                    <!--begin::Card title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">Team Schedule</span>
                        <span class="text-gray-500 pt-2 fw-semibold fs-6">49 Acual Tasks</span>
                    </h3>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Tabs-->
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_day">Day</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_week">Week</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_month">Month</a>
                            </li>
                        </ul>
                        <!--end::Tabs-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pb-0">
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane active" id="kt_timeline_widget_1_tab_day" role="tabpanel" aria-labelledby="day-tab" data-kt-timeline-widget-1-blockui="true">
                            <div class="table-responsive pb-10">
                                <!--begin::Timeline-->
                                <div id="kt_timeline_widget_1_1" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-1-image-root="{{ asset('assets/media/') }}/"></div>
                                <!--end::Timeline-->
                            </div>
                        </div>
                        <!--end::Tab pane-->
                        <!--begin::Tab pane-->
                        <div class="tab-pane" id="kt_timeline_widget_1_tab_week" role="tabpanel" aria-labelledby="week-tab" data-kt-timeline-widget-1-blockui="true">
                            <div class="table-responsive pb-10">
                                <!--begin::Timeline-->
                                <div id="kt_timeline_widget_1_2" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-1-image-root="{{ asset('assets/media/') }}/"></div>
                                <!--end::Timeline-->
                            </div>
                        </div>
                        <!--end::Tab pane-->
                        <!--begin::Tab pane-->
                        <div class="tab-pane" id="kt_timeline_widget_1_tab_month" role="tabpanel" aria-labelledby="month-tab" data-kt-timeline-widget-1-blockui="true">
                            <div class="table-responsive pb-10">
                                <!--begin::Timeline-->
                                <div id="kt_timeline_widget_1_3" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-1-image-root="{{ asset('assets/media/') }}/"></div>
                                <!--end::Timeline-->
                            </div>
                        </div>
                        <!--end::Tab pane-->
                    </div>
                    <!--end::Tab content-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Timeline Widget 1-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4 mb-5 mb-xl-10">
            <!--begin::List widget 4-->
            <div class="card card-flush h-lg-100">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">Key Statistics</span>
                        <span class="text-gray-500 mt-1 fw-semibold fs-6">Social activities overview</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <i class="ki-duotone ki-dots-square fs-1">
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
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-9 pb-5">
                    <!--begin::Slider-->
                    <div class="tns">
                        <!--begin::Slider wrapper-->
                        <div data-tns="true" data-tns-nav-position="bottom" data-tns-controls="false">
                            <!--begin::Slide-->
                            <div class="mb-3">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <span class="text-gray-800 fw-bold d-block fs-2hx lh-1 ls-n2">6.3k</span>
                                        <span class="text-gray-500 fw-semibold fs-6">Avarage
                                        <br />Likes</span>
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                                        <!--begin::Select-->
                                        <div class="mb-2">
                                            <select class="form-select form-select-transparent p-0 w-150px me-n5" data-control="select2" data-placeholder="All Users" data-dropdown-css-class="w-150px" data-hide-search="true">
                                                <option value="1" selected="selected">Jul 22 - Aug 22</option>
                                                <option value="2">Jul 24 - Aug 24</option>
                                                <option value="3">Jul 26 - Aug 29</option>
                                            </select>
                                        </div>
                                        <!--end::Select-->
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 bg-light">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-5"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <span class="text-gray-800 fw-bold d-block fs-2hx lh-1 ls-n2">2.1k</span>
                                        <span class="text-gray-500 fw-semibold fs-6">Avarage
                                        <br />Comments</span>
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                                        <!--begin::Select-->
                                        <div class="mb-2">
                                            <select class="form-select form-select-transparent p-0 w-150px me-n5" data-control="select2" data-placeholder="All Users" data-dropdown-css-class="w-150px" data-hide-search="true">
                                                <option value="1" selected="selected">Jul 22 - Aug 22</option>
                                                <option value="2">Jul 24 - Aug 24</option>
                                                <option value="3">Jul 26 - Aug 29</option>
                                            </select>
                                        </div>
                                        <!--end::Select-->
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 bg-light">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-5"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <span class="text-gray-800 fw-bold d-block fs-2hx lh-1 ls-n2">650</span>
                                        <span class="text-gray-500 fw-semibold fs-6">Avarage
                                        <br />Shares</span>
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                                        <!--begin::Select-->
                                        <div class="mb-2">
                                            <select class="form-select form-select-transparent p-0 w-150px me-n5" data-control="select2" data-placeholder="All Users" data-dropdown-css-class="w-150px" data-hide-search="true">
                                                <option value="1" selected="selected">Jul 22 - Aug 22</option>
                                                <option value="2">Jul 24 - Aug 24</option>
                                                <option value="3">Jul 26 - Aug 29</option>
                                            </select>
                                        </div>
                                        <!--end::Select-->
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 bg-light">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Slide-->
                            <!--begin::Slide-->
                            <div class="mb-3">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <span class="text-gray-800 fw-bold d-block fs-2hx lh-1 ls-n2">3.4k</span>
                                        <span class="text-gray-500 fw-semibold fs-6">Avarage
                                        <br />Comments</span>
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                                        <!--begin::Select-->
                                        <div class="mb-2">
                                            <select class="form-select form-select-transparent p-0 w-150px me-n5" data-control="select2" data-placeholder="All Users" data-dropdown-css-class="w-150px" data-hide-search="true">
                                                <option value="1" selected="selected">Jul 22 - Aug 22</option>
                                                <option value="2">Jul 24 - Aug 24</option>
                                                <option value="3">Jul 26 - Aug 29</option>
                                            </select>
                                        </div>
                                        <!--end::Select-->
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 bg-light">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-5"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <span class="text-gray-800 fw-bold d-block fs-2hx lh-1 ls-n2">7.1k</span>
                                        <span class="text-gray-500 fw-semibold fs-6">Avarage
                                        <br />Likes</span>
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                                        <!--begin::Select-->
                                        <div class="mb-2">
                                            <select class="form-select form-select-transparent p-0 w-150px me-n5" data-control="select2" data-placeholder="All Users" data-dropdown-css-class="w-150px" data-hide-search="true">
                                                <option value="1" selected="selected">Jul 22 - Aug 22</option>
                                                <option value="2">Jul 24 - Aug 24</option>
                                                <option value="3">Jul 26 - Aug 29</option>
                                            </select>
                                        </div>
                                        <!--end::Select-->
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 bg-light">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-5"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <span class="text-gray-800 fw-bold d-block fs-2hx lh-1 ls-n2">345</span>
                                        <span class="text-gray-500 fw-semibold fs-6">Avarage
                                        <br />Shares</span>
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                                        <!--begin::Select-->
                                        <div class="mb-2">
                                            <select class="form-select form-select-transparent p-0 w-150px me-n5" data-control="select2" data-placeholder="All Users" data-dropdown-css-class="w-150px" data-hide-search="true">
                                                <option value="1" selected="selected">Jul 22 - Aug 22</option>
                                                <option value="2">Jul 24 - Aug 24</option>
                                                <option value="3">Jul 26 - Aug 29</option>
                                            </select>
                                        </div>
                                        <!--end::Select-->
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 bg-light">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Slide-->
                            <!--begin::Slide-->
                            <div class="mb-3">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <span class="text-gray-800 fw-bold d-block fs-2hx lh-1 ls-n2">650</span>
                                        <span class="text-gray-500 fw-semibold fs-6">Avarage
                                        <br />Shares</span>
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                                        <!--begin::Select-->
                                        <div class="mb-2">
                                            <select class="form-select form-select-transparent p-0 w-150px me-n5" data-control="select2" data-placeholder="All Users" data-dropdown-css-class="w-150px" data-hide-search="true">
                                                <option value="1" selected="selected">Jul 22 - Aug 22</option>
                                                <option value="2">Jul 24 - Aug 24</option>
                                                <option value="3">Jul 26 - Aug 29</option>
                                            </select>
                                        </div>
                                        <!--end::Select-->
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 bg-light">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-5"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <span class="text-gray-800 fw-bold d-block fs-2hx lh-1 ls-n2">3.5k</span>
                                        <span class="text-gray-500 fw-semibold fs-6">Avarage
                                        <br />Comments</span>
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                                        <!--begin::Select-->
                                        <div class="mb-2">
                                            <select class="form-select form-select-transparent p-0 w-150px me-n5" data-control="select2" data-placeholder="All Users" data-dropdown-css-class="w-150px" data-hide-search="true">
                                                <option value="1" selected="selected">Jul 22 - Aug 22</option>
                                                <option value="2">Jul 24 - Aug 24</option>
                                                <option value="3">Jul 26 - Aug 29</option>
                                            </select>
                                        </div>
                                        <!--end::Select-->
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 bg-light">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-5"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <span class="text-gray-800 fw-bold d-block fs-2hx lh-1 ls-n2">7.5k</span>
                                        <span class="text-gray-500 fw-semibold fs-6">Avarage
                                        <br />Likes</span>
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                                        <!--begin::Select-->
                                        <div class="mb-2">
                                            <select class="form-select form-select-transparent p-0 w-150px me-n5" data-control="select2" data-placeholder="All Users" data-dropdown-css-class="w-150px" data-hide-search="true">
                                                <option value="1" selected="selected">Jul 22 - Aug 22</option>
                                                <option value="2">Jul 24 - Aug 24</option>
                                                <option value="3">Jul 26 - Aug 29</option>
                                            </select>
                                        </div>
                                        <!--end::Select-->
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 bg-light">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Slide-->
                            <!--begin::Slide-->
                            <div class="mb-3">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <span class="text-gray-800 fw-bold d-block fs-2hx lh-1 ls-n2">9.1k</span>
                                        <span class="text-gray-500 fw-semibold fs-6">Avarage
                                        <br />Likes</span>
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                                        <!--begin::Select-->
                                        <div class="mb-2">
                                            <select class="form-select form-select-transparent p-0 w-150px me-n5" data-control="select2" data-placeholder="All Users" data-dropdown-css-class="w-150px" data-hide-search="true">
                                                <option value="1" selected="selected">Jul 22 - Aug 22</option>
                                                <option value="2">Jul 24 - Aug 24</option>
                                                <option value="3">Jul 26 - Aug 29</option>
                                            </select>
                                        </div>
                                        <!--end::Select-->
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 bg-light">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-5"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <span class="text-gray-800 fw-bold d-block fs-2hx lh-1 ls-n2">4.2k</span>
                                        <span class="text-gray-500 fw-semibold fs-6">Avarage
                                        <br />Comments</span>
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                                        <!--begin::Select-->
                                        <div class="mb-2">
                                            <select class="form-select form-select-transparent p-0 w-150px me-n5" data-control="select2" data-placeholder="All Users" data-dropdown-css-class="w-150px" data-hide-search="true">
                                                <option value="1" selected="selected">Jul 22 - Aug 22</option>
                                                <option value="2">Jul 24 - Aug 24</option>
                                                <option value="3">Jul 26 - Aug 29</option>
                                            </select>
                                        </div>
                                        <!--end::Select-->
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 bg-light">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-5"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <span class="text-gray-800 fw-bold d-block fs-2hx lh-1 ls-n2">450</span>
                                        <span class="text-gray-500 fw-semibold fs-6">Avarage
                                        <br />Shares</span>
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                                        <!--begin::Select-->
                                        <div class="mb-2">
                                            <select class="form-select form-select-transparent p-0 w-150px me-n5" data-control="select2" data-placeholder="All Users" data-dropdown-css-class="w-150px" data-hide-search="true">
                                                <option value="1" selected="selected">Jul 22 - Aug 22</option>
                                                <option value="2">Jul 24 - Aug 24</option>
                                                <option value="3">Jul 26 - Aug 29</option>
                                            </select>
                                        </div>
                                        <!--end::Select-->
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 bg-light">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Slide-->
                        </div>
                        <!--end::Slider wrapper-->
                    </div>
                    <!--end::Slider-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::List widget 4-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row gy-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-xl-8">
            <!--begin::Table Widget 3-->
            <div class="card card-flush h-lg-100">
                <!--begin::Card header-->
                <div class="card-header py-7">
                    <!--begin::Tabs-->
                    <div class="card-title pt-3 mb-0 gap-4 gap-lg-10 gap-xl-15 nav nav-tabs border-bottom-0" data-kt-table-widget-3="tabs_nav">
                        <!--begin::Tab item-->
                        <div class="fs-4 fw-bold pb-3 border-bottom border-3 border-primary cursor-pointer" data-kt-table-widget-3="tab" data-kt-table-widget-3-value="Show All">All Campaigns (47)</div>
                        <!--end::Tab item-->
                        <!--begin::Tab item-->
                        <div class="fs-4 fw-bold text-muted pb-3 cursor-pointer" data-kt-table-widget-3="tab" data-kt-table-widget-3-value="Pending">Pending (8)</div>
                        <!--end::Tab item-->
                        <!--begin::Tab item-->
                        <div class="fs-4 fw-bold text-muted pb-3 cursor-pointer" data-kt-table-widget-3="tab" data-kt-table-widget-3-value="Completed">Completed (39)</div>
                        <!--end::Tab item-->
                    </div>
                    <!--end::Tabs-->
                    <!--begin::Create campaign button-->
                    <div class="card-toolbar">
                        <a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Create Campaign</a>
                    </div>
                    <!--end::Create campaign button-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-1">
                    <!--begin::Sort & Filter-->
                    <div class="d-flex flex-stack flex-wrap gap-4">
                        <!--begin::Sort-->
                        <div class="d-flex align-items-center flex-wrap gap-3 gap-xl-9">
                            <!--begin::Type-->
                            <div class="d-flex align-items-center fw-bold">
                                <!--begin::Label-->
                                <div class="text-muted fs-7">Type</div>
                                <!--end::Label-->
                                <!--begin::Select-->
                                <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-hide-search="true" data-control="select2" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                    <option></option>
                                    <option value="Show All" selected="selected">Show All</option>
                                    <option value="Newest">Newest</option>
                                    <option value="oldest">Oldest</option>
                                </select>
                                <!--end::Select-->
                            </div>
                            <!--end::Type-->
                            <!--begin::Status-->
                            <div class="d-flex align-items-center fw-bold">
                                <!--begin::Label-->
                                <div class="text-muted fs-7 me-2">Status</div>
                                <!--end::Label-->
                                <!--begin::Select-->
                                <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-hide-search="true" data-control="select2" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-3="filter_status">
                                    <option></option>
                                    <option value="Show All" selected="selected">Show All</option>
                                    <option value="Live Now">Live Now</option>
                                    <option value="Reviewing">Reviewing</option>
                                    <option value="Paused">Paused</option>
                                </select>
                                <!--end::Select-->
                            </div>
                            <!--begin::Status-->
                            <!--begin::Budget-->
                            <div class="d-flex align-items-center fw-bold">
                                <!--begin::Label-->
                                <div class="text-muted me-2">Budget</div>
                                <!--end::Label-->
                                <!--begin::Select-->
                                <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-hide-search="true" data-dropdown-css-class="w-150px" data-control="select2" data-placeholder="Select an option" data-kt-table-widget-3="filter_status">
                                    <option></option>
                                    <option value="Show All" selected="selected">Show All</option>
                                    <option value="&lt;5000">Less than $5,000</option>
                                    <option value="5000-10000">$5,001 - $10,000</option>
                                    <option value="&gt;10000">More than $10,001</option>
                                </select>
                                <!--end::Select-->
                            </div>
                            <!--begin::Budget-->
                        </div>
                        <!--end::Sort-->
                        <!--begin::Filter-->
                        <div class="d-flex align-items-center gap-4">
                            <!--begin::Filter button-->
                            <a href="#" class="text-hover-primary ps-4" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-filter fs-2 text-gray-500">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c70235ced4">
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
                                            <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c70235ced4" data-allow-clear="true">
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
                            <!--end::Filter button-->
                        </div>
                        <!--end::Filter-->
                    </div>
                    <!--end::Sort & Filter-->
                    <!--begin::Seprator-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--end::Seprator-->
                    <!--begin::Table-->
                    <table id="kt_widget_table_3" class="table table-row-dashed align-middle fs-6 gy-4 my-0 pb-3" data-kt-table-widget-3="all">
                        <thead class="d-none">
                            <tr>
                                <th>Campaign</th>
                                <th>Platforms</th>
                                <th>Status</th>
                                <th>Team</th>
                                <th>Date</th>
                                <th>Progress</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="min-w-175px">
                                    <div class="position-relative ps-6 pe-3 py-2">
                                        <div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-info"></div>
                                        <a href="#" class="mb-1 text-gray-900 text-hover-primary fw-bold">Happy Christmas</a>
                                        <div class="fs-7 text-muted fw-bold">Created on 24 Dec 21</div>
                                    </div>
                                </td>
                                <td>
                                    <!--begin::Icons-->
                                    <div class="d-flex gap-2 mb-2">
                                        <a href="#">
                                            <img src="{{ asset('assets/media/svg/brand-logos/facebook-4.svg') }}" class="w-20px" alt="" />
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('assets/media/svg/brand-logos/twitter-2.svg') }}" class="w-20px" alt="" />
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('assets/media/svg/brand-logos/linkedin-2.svg') }}" class="w-20px" alt="" />
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('assets/media/svg/brand-logos/youtube-3.svg') }}" class="w-20px" alt="" />
                                        </a>
                                    </div>
                                    <!--end::Icons-->
                                    <div class="fs-7 text-muted fw-bold">Labor 24 - 35 years</div>
                                </td>
                                <td>
                                    <span class="badge badge-light-success">Live Now</span>
                                </td>
                                <td class="min-w-125px">
                                    <!--begin::Team members-->
                                    <div class="symbol-group symbol-hover mb-1">
                                        <!--begin::Member-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{ asset('assets/media/avatars/300-6.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Member-->
                                        <!--begin::Member-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{ asset('assets/media/avatars/300-5.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Member-->
                                        <!--begin::Member-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{ asset('assets/media/avatars/300-25.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Member-->
                                        <!--begin::Member-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Member-->
                                        <!--begin::Member-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div class="symbol-label bg-danger">
                                                <span class="fs-7 text-inverse-danger">E</span>
                                            </div>
                                        </div>
                                        <!--end::Member-->
                                        <!--begin::More members-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div class="symbol-label bg-dark">
                                                <span class="fs-8 text-inverse-dark">+0</span>
                                            </div>
                                        </div>
                                        <!--end::More members-->
                                    </div>
                                    <!--end::Team members-->
                                    <div class="fs-7 fw-bold text-muted">Team Members</div>
                                </td>
                                <td class="min-w-150px">
                                    <div class="mb-2 fw-bold">24 Dec 21 - 06 Jan 22</div>
                                    <div class="fs-7 fw-bold text-muted">Date range</div>
                                </td>
                                <td class="d-none">Pending</td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-icon btn-sm btn-light btn-active-primary w-25px h-25px">
                                        <i class="ki-duotone ki-black-right fs-2 text-muted"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="min-w-175px">
                                    <div class="position-relative ps-6 pe-3 py-2">
                                        <div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-warning"></div>
                                        <a href="#" class="mb-1 text-gray-900 text-hover-primary fw-bold">Halloween</a>
                                        <div class="fs-7 text-muted fw-bold">Created on 24 Dec 21</div>
                                    </div>
                                </td>
                                <td>
                                    <!--begin::Icons-->
                                    <div class="d-flex gap-2 mb-2">
                                        <a href="#">
                                            <img src="{{ asset('assets/media/svg/brand-logos/twitter-2.svg') }}" class="w-20px" alt="" />
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('assets/media/svg/brand-logos/instagram-2-1.svg') }}" class="w-20px" alt="" />
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('assets/media/svg/brand-logos/youtube-3.svg') }}" class="w-20px" alt="" />
                                        </a>
                                    </div>
                                    <!--end::Icons-->
                                    <div class="fs-7 text-muted fw-bold">Labor 37 - 52 years</div>
                                </td>
                                <td>
                                    <span class="badge badge-light-primary">Reviewing</span>
                                </td>
                                <td class="min-w-125px">
                                    <!--begin::Team members-->
                                    <div class="symbol-group symbol-hover mb-1">
                                        <!--begin::Member-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Member-->
                                        <!--begin::Member-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{ asset('assets/media/avatars/300-25.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Member-->
                                        <!--begin::Member-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{ asset('assets/media/avatars/300-6.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Member-->
                                    </div>
                                    <!--end::Team members-->
                                    <div class="fs-7 fw-bold text-muted">Team Members</div>
                                </td>
                                <td class="min-w-150px">
                                    <div class="mb-2 fw-bold">03 Feb 22 - 14 Feb 22</div>
                                    <div class="fs-7 fw-bold text-muted">Date range</div>
                                </td>
                                <td class="d-none">Completed</td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-icon btn-sm btn-light btn-active-primary w-25px h-25px">
                                        <i class="ki-duotone ki-black-right fs-2 text-muted"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="min-w-175px">
                                    <div class="position-relative ps-6 pe-3 py-2">
                                        <div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-success"></div>
                                        <a href="#" class="mb-1 text-gray-900 text-hover-primary fw-bold">Cyber Monday</a>
                                        <div class="fs-7 text-muted fw-bold">Created on 24 Dec 21</div>
                                    </div>
                                </td>
                                <td>
                                    <!--begin::Icons-->
                                    <div class="d-flex gap-2 mb-2">
                                        <a href="#">
                                            <img src="{{ asset('assets/media/svg/brand-logos/facebook-4.svg') }}" class="w-20px" alt="" />
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('assets/media/svg/brand-logos/instagram-2-1.svg') }}" class="w-20px" alt="" />
                                        </a>
                                    </div>
                                    <!--end::Icons-->
                                    <div class="fs-7 text-muted fw-bold">Labor 24 - 38 years</div>
                                </td>
                                <td>
                                    <span class="badge badge-light-success">Live Now</span>
                                </td>
                                <td class="min-w-125px">
                                    <!--begin::Team members-->
                                    <div class="symbol-group symbol-hover mb-1">
                                        <!--begin::Member-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div class="symbol-label bg-danger">
                                                <span class="fs-7 text-inverse-danger">M</span>
                                            </div>
                                        </div>
                                        <!--end::Member-->
                                        <!--begin::Member-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{ asset('assets/media/avatars/300-6.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Member-->
                                        <!--begin::Member-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div class="symbol-label bg-primary">
                                                <span class="fs-7 text-inverse-primary">N</span>
                                            </div>
                                        </div>
                                        <!--end::Member-->
                                        <!--begin::Member-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{ asset('assets/media/avatars/300-13.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Member-->
                                    </div>
                                    <!--end::Team members-->
                                    <div class="fs-7 fw-bold text-muted">Team Members</div>
                                </td>
                                <td class="min-w-150px">
                                    <div class="mb-2 fw-bold">19 Mar 22 - 04 Apr 22</div>
                                    <div class="fs-7 fw-bold text-muted">Date range</div>
                                </td>
                                <td class="d-none">Pending</td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-icon btn-sm btn-light btn-active-primary w-25px h-25px">
                                        <i class="ki-duotone ki-black-right fs-2 text-muted"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="min-w-175px">
                                    <div class="position-relative ps-6 pe-3 py-2">
                                        <div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-danger"></div>
                                        <a href="#" class="mb-1 text-gray-900 text-hover-primary fw-bold">Thanksgiving</a>
                                        <div class="fs-7 text-muted fw-bold">Created on 24 Dec 21</div>
                                    </div>
                                </td>
                                <td>
                                    <!--begin::Icons-->
                                    <div class="d-flex gap-2 mb-2">
                                        <a href="#">
                                            <img src="{{ asset('assets/media/svg/brand-logos/twitter-2.svg') }}" class="w-20px" alt="" />
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('assets/media/svg/brand-logos/instagram-2-1.svg') }}" class="w-20px" alt="" />
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('assets/media/svg/brand-logos/linkedin-2.svg') }}" class="w-20px" alt="" />
                                        </a>
                                    </div>
                                    <!--end::Icons-->
                                    <div class="fs-7 text-muted fw-bold">Labor 24 - 38 years</div>
                                </td>
                                <td>
                                    <span class="badge badge-light-warning">Paused</span>
                                </td>
                                <td class="min-w-125px">
                                    <!--begin::Team members-->
                                    <div class="symbol-group symbol-hover mb-1">
                                        <!--begin::Member-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{ asset('assets/media/avatars/300-6.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Member-->
                                        <!--begin::Member-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{ asset('assets/media/avatars/300-25.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Member-->
                                        <!--begin::Member-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Member-->
                                        <!--begin::Member-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div class="symbol-label bg-primary">
                                                <span class="fs-7 text-inverse-primary">N</span>
                                            </div>
                                        </div>
                                        <!--end::Member-->
                                        <!--begin::Member-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{ asset('assets/media/avatars/300-5.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Member-->
                                        <!--begin::More members-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div class="symbol-label bg-dark">
                                                <span class="fs-8 text-inverse-dark">+0</span>
                                            </div>
                                        </div>
                                        <!--end::More members-->
                                    </div>
                                    <!--end::Team members-->
                                    <div class="fs-7 fw-bold text-muted">Team Members</div>
                                </td>
                                <td class="min-w-150px">
                                    <div class="mb-2 fw-bold">20 Jun 22 - 30 Jun 22</div>
                                    <div class="fs-7 fw-bold text-muted">Date range</div>
                                </td>
                                <td class="d-none">Pending</td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-icon btn-sm btn-light btn-active-primary w-25px h-25px">
                                        <i class="ki-duotone ki-black-right fs-2 text-muted"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="min-w-175px">
                                    <div class="position-relative ps-6 pe-3 py-2">
                                        <div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-primary"></div>
                                        <a href="#" class="mb-1 text-gray-900 text-hover-primary fw-bold">Happy Mother's Day</a>
                                        <div class="fs-7 text-muted fw-bold">Created on 24 Dec 21</div>
                                    </div>
                                </td>
                                <td>
                                    <!--begin::Icons-->
                                    <div class="d-flex gap-2 mb-2">
                                        <a href="#">
                                            <img src="{{ asset('assets/media/svg/brand-logos/youtube-3.svg') }}" class="w-20px" alt="" />
                                        </a>
                                    </div>
                                    <!--end::Icons-->
                                    <div class="fs-7 text-muted fw-bold">Labor 30 - 40 years</div>
                                </td>
                                <td>
                                    <span class="badge badge-light-warning">Paused</span>
                                </td>
                                <td class="min-w-125px">
                                    <!--begin::Team members-->
                                    <div class="symbol-group symbol-hover mb-1">
                                        <!--begin::Member-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{ asset('assets/media/avatars/300-23.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Member-->
                                        <!--begin::Member-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="{{ asset('assets/media/avatars/300-13.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Member-->
                                    </div>
                                    <!--end::Team members-->
                                    <div class="fs-7 fw-bold text-muted">Team Members</div>
                                </td>
                                <td class="min-w-150px">
                                    <div class="mb-2 fw-bold">01 Aug 22 - 01 Sep 22</div>
                                    <div class="fs-7 fw-bold text-muted">Date range</div>
                                </td>
                                <td class="d-none">Completed</td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-icon btn-sm btn-light btn-active-primary w-25px h-25px">
                                        <i class="ki-duotone ki-black-right fs-2 text-muted"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        <!--end::Table-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Table Widget 3-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Chart widget 2-->
            <div class="card card-flush h-lg-100">
                <!--begin::Header-->
                <div class="card-header pt-5 mb-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">Notable Channels</span>
                        <span class="text-gray-500 mt-1 fw-semibold fs-6">Social networks overview</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <i class="ki-duotone ki-dots-square fs-1">
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
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body d-flex justify-content-between flex-column p-0">
                    <!--begin::Items-->
                    <div class="mb-5 px-9">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-3">
                                <!--begin::Icon-->
                                <img src="{{ asset('assets/media/svg/brand-logos/dribbble-icon-1.svg') }}" class="me-3 w-30px" alt="" />
                                <!--end::Icon-->
                                <!--begin::Section-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Dribbble</a>
                                    <span class="text-gray-500 fw-semibold d-block fs-6">Community</span>
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Statistics-->
                            <div class="d-flex align-items-center w-100 mw-125px">
                                <!--begin::Progress-->
                                <div class="progress h-6px w-100 me-2 bg-light-success">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <!--end::Progress-->
                                <!--begin::Value-->
                                <span class="text-gray-500 fw-semibold">65%</span>
                                <!--end::Value-->
                            </div>
                            <!--end::Statistics-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-4"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-3">
                                <!--begin::Icon-->
                                <img src="{{ asset('assets/media/svg/brand-logos/instagram-2-1.svg') }}" class="me-3 w-30px" alt="" />
                                <!--end::Icon-->
                                <!--begin::Section-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Linked In</a>
                                    <span class="text-gray-500 fw-semibold d-block fs-6">Social Media</span>
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Statistics-->
                            <div class="d-flex align-items-center w-100 mw-125px">
                                <!--begin::Progress-->
                                <div class="progress h-6px w-100 me-2 bg-light-warning">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <!--end::Progress-->
                                <!--begin::Value-->
                                <span class="text-gray-500 fw-semibold">87%</span>
                                <!--end::Value-->
                            </div>
                            <!--end::Statistics-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-4"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-3">
                                <!--begin::Icon-->
                                <img src="{{ asset('assets/media/svg/brand-logos/slack-icon.svg') }}" class="me-3 w-30px" alt="" />
                                <!--end::Icon-->
                                <!--begin::Section-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Slack</a>
                                    <span class="text-gray-500 fw-semibold d-block fs-6">Messanger</span>
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Statistics-->
                            <div class="d-flex align-items-center w-100 mw-125px">
                                <!--begin::Progress-->
                                <div class="progress h-6px w-100 me-2 bg-light-primary">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 44%" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <!--end::Progress-->
                                <!--begin::Value-->
                                <span class="text-gray-500 fw-semibold">44%</span>
                                <!--end::Value-->
                            </div>
                            <!--end::Statistics-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-4"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-3">
                                <!--begin::Icon-->
                                <img src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}" class="me-3 w-30px" alt="" />
                                <!--end::Icon-->
                                <!--begin::Section-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Google</a>
                                    <span class="text-gray-500 fw-semibold d-block fs-6">SEO & PPC</span>
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Statistics-->
                            <div class="d-flex align-items-center w-100 mw-125px">
                                <!--begin::Progress-->
                                <div class="progress h-6px w-100 me-2 bg-light-info">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <!--end::Progress-->
                                <!--begin::Value-->
                                <span class="text-gray-500 fw-semibold">70%</span>
                                <!--end::Value-->
                            </div>
                            <!--end::Statistics-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-4"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-3">
                                <!--begin::Icon-->
                                <img src="{{ asset('assets/media/svg/brand-logos/invision.svg') }}" class="me-3 w-30px" alt="" />
                                <!--end::Icon-->
                                <!--begin::Section-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">inVision</a>
                                    <span class="text-gray-500 fw-semibold d-block fs-6">Collaboration</span>
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Statistics-->
                            <div class="d-flex align-items-center w-100 mw-125px">
                                <!--begin::Progress-->
                                <div class="progress h-6px w-100 me-2 bg-light-danger">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <!--end::Progress-->
                                <!--begin::Value-->
                                <span class="text-gray-500 fw-semibold">56%</span>
                                <!--end::Value-->
                            </div>
                            <!--end::Statistics-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-4"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-3">
                                <!--begin::Icon-->
                                <img src="{{ asset('assets/media/svg/brand-logos/facebook-3.svg') }}" class="me-3 w-30px" alt="" />
                                <!--end::Icon-->
                                <!--begin::Section-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Facebook</a>
                                    <span class="text-gray-500 fw-semibold d-block fs-6">Social Network</span>
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Statistics-->
                            <div class="d-flex align-items-center w-100 mw-125px">
                                <!--begin::Progress-->
                                <div class="progress h-6px w-100 me-2 bg-light-success">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <!--end::Progress-->
                                <!--begin::Value-->
                                <span class="text-gray-500 fw-semibold">82%</span>
                                <!--end::Value-->
                            </div>
                            <!--end::Statistics-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Items-->
                    <!--begin::Chart-->
                    <div class="card-rounded-bottom" id="kt_charts_widget_2" data-kt-chart-color="primary" style="height: 90px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Chart widget 2-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->

</x-default-layout>
