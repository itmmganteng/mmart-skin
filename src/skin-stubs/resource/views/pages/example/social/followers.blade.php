<x-default-layout>
    @section('title')
    Followers
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('social.followers') }}
    @endsection

    <!--begin::Social - Followers -->
    <div class="d-flex flex-row">
        <!--begin::Start sidebar-->
        <div class="d-lg-flex flex-column flex-lg-row-auto w-lg-325px" data-kt-drawer="true" data-kt-drawer-name="start-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '250px': '300px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_social_start_sidebar_toggle">
            <!--begin::User menu-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body pt-15 px-0">
                    <!--begin::Member-->
                    <div class="d-flex flex-column text-center mb-9 px-9">
                        <!--begin::Photo-->
                        <div class="symbol symbol-80px symbol-lg-150px mb-4">
                            <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" class="" alt="" />
                        </div>
                        <!--end::Photo-->
                        <!--begin::Info-->
                        <div class="text-center">
                            <!--begin::Name-->
                            <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary fs-4">Jerry Kane</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <span class="text-muted d-block fw-semibold">Grade 8, AE3 Student</span>
                            <!--end::Position-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Member-->
                    <!--begin::Row-->
                    <div class="row px-9 mb-4">
                        <!--begin::Col-->
                        <div class="col-md-4 text-center">
                            <div class="text-gray-800 fw-bold fs-3">
                                <span class="m-0" data-kt-countup="true" data-kt-countup-value="642">0</span>
                            </div>
                            <span class="text-gray-500 fs-8 d-block fw-bold">POSTS</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 text-center">
                            <div class="text-gray-800 fw-bold fs-3">
                            <span class="m-0" data-kt-countup="true" data-kt-countup-value="24">0</span>K</div>
                            <span class="text-gray-500 fs-8 d-block fw-bold">FOLLOWERS</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 text-center">
                            <div class="text-gray-800 fw-bold fs-3">
                            <span class="m-0" data-kt-countup="true" data-kt-countup-value="12">0</span>K</div>
                            <span class="text-gray-500 fs-8 d-block fw-bold">FOLLOWING</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Navbar-->
                    <div class="m-0">
                        <!--begin::Navs-->
                        <ul class="nav nav-pills nav-pills-custom flex-column border-transparent fs-5 fw-bold">
                            <!--begin::Nav item-->
                            <li class="nav-item mt-5">
                                <a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="pages/social/feeds.html">
                                <i class="ki-duotone ki-row-horizontal fs-3 text-muted me-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>Feeds
                                <!--begin::Bullet-->
                                <span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
                                <!--end::Bullet--></a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-5">
                                <a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="pages/social/activity.html">
                                <i class="ki-duotone ki-chart-simple-2 fs-3 text-muted me-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>Activity
                                <!--begin::Bullet-->
                                <span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
                                <!--end::Bullet--></a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-5">
                                <a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0 active" href="pages/social/followers.html">
                                <i class="ki-duotone ki-profile-circle fs-3 text-muted me-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>Followers
                                <!--begin::Bullet-->
                                <span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
                                <!--end::Bullet--></a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-5">
                                <a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="pages/social/settings.html">
                                <i class="ki-duotone ki-setting-2 fs-3 text-muted me-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>Settings
                                <!--begin::Bullet-->
                                <span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
                                <!--end::Bullet--></a>
                            </li>
                            <!--end::Nav item-->
                        </ul>
                        <!--begin::Navs-->
                    </div>
                    <!--end::Navbar-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::User menu-->
            <!--begin::List widget 14-->
            <div class="card card-flush">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">Timeline</span>
                        <span class="text-gray-500 pt-2 fw-semibold fs-6">Latest activities</span>
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
                <div class="card-body pt-6">
                    <!--begin::Timeline-->
                    <div class="timeline-label">
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="ki-duotone ki-abstract-8 text-gray-600 fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Text-->
                            <div class="fw-semibold text-gray-700 ps-3 fs-7">Outlines keep you honest. Indulging in poorly driving and keep structure</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="timeline-item d-flex align-items-center">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="ki-duotone ki-abstract-8 text-gray-600 fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Content-->
                            <div class="d-flex align-items-center">
                                <span class="fw-bold text-gray-800 px-3">AEOL meeting with</span>
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px me-3">
                                    <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px">
                                    <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="" />
                                </div>
                                <!--end::Avatar-->
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
                                <i class="ki-duotone ki-abstract-8 text-gray-600 fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
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
                                <i class="ki-duotone ki-abstract-8 text-gray-600 fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Text-->
                            <div class="fw-semibold text-gray-700 ps-3 fs-7">Outlines keep you honest. Indulging in poorly driving and keep structure keep you honest great</div>
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
                                <i class="ki-duotone ki-abstract-8 text-gray-600 fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
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
                                <i class="ki-duotone ki-abstract-8 text-gray-600 fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Text-->
                            <div class="fw-semibold text-gray-700 ps-3 fs-7">Outlines keep you honest. Indulging in poorly driving and keep structure</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="ki-duotone ki-abstract-8 text-gray-600 fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Desc-->
                            <div class="timeline-content fw-bold text-gray-800 ps-3">Make deposit
                            <a href="#" class="text-primary">USD 700</a>. to ESL</div>
                            <!--end::Desc-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Timeline-->
                </div>
                <!--end: Card Body-->
            </div>
            <!--end: List widget 14-->
        </div>
        <!--end::Start sidebar-->
        <!--begin::Content-->
        <div class="w-100 flex-lg-row-fluid mx-lg-13">
            <!--begin::Mobile toolbar-->
            <div class="d-flex d-lg-none align-items-center justify-content-end mb-10">
                <div class="d-flex align-items-center gap-2">
                    <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_social_start_sidebar_toggle">
                        <i class="ki-duotone ki-profile-circle fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </div>
                    <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_social_end_sidebar_toggle">
                        <i class="ki-duotone ki-scroll fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </div>
                </div>
            </div>
            <!--end::Mobile toolbar-->
            <!--begin::Followers toolbar-->
            <div class="d-flex flex-wrap flex-stack mb-6">
                <!--begin::Title-->
                <h3 class="text-gray-800 fw-bold my-2">My Connections
                <span class="fs-6 text-gray-500 fw-semibold ms-1">(29)</span></h3>
                <!--end::Title-->
                <!--begin::Controls-->
                <div class="d-flex my-2">
                    <!--begin::Select-->
                    <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm form-select-solid w-125px">
                        <option value="Active" selected="selected">Active</option>
                        <option value="Approved">In Progress</option>
                        <option value="Declined">To Do</option>
                        <option value="In Progress">Completed</option>
                    </select>
                    <!--end::Select-->
                </div>
                <!--end::Controls-->
            </div>
            <!--end::Followers toolbar-->
            <!--begin::Row-->
            <div class="row g-6 mb-6 g-xl-9 mb-xl-9">
                <!--begin::Followers-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column py-9 px-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-5">
                                <img src="{{ asset('assets/media//avatars/300-11.jpg') }}" alt="image" />
                                <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric Watson</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <div class="d-flex flex-center flex-wrap mb-5">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                    <div class="fw-semibold text-gray-500">Earnings</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                    <div class="fw-semibold text-gray-500">Sales</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                                <i class="ki-duotone ki-check following fs-3"></i>
                                <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Following</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column py-9 px-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-5">
                                <img src="{{ asset('assets/media//avatars/300-6.jpg') }}" alt="image" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia Larson</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fw-semibold text-gray-500 mb-6">Art Director at Seal Inc.</div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <div class="d-flex flex-center flex-wrap mb-5">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                    <div class="fw-semibold text-gray-500">Earnings</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                    <div class="fw-semibold text-gray-500">Sales</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                                <i class="ki-duotone ki-plus follow fs-3"></i>
                                <i class="ki-duotone ki-check following fs-3 d-none"></i>
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Follow</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column py-9 px-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-5">
                                <span class="symbol-label fs-2x fw-semibold text-warning bg-light-warning">A</span>
                                <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Adam Williams</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fw-semibold text-gray-500 mb-6">System Arcitect at Wolto Co.</div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <div class="d-flex flex-center flex-wrap mb-5">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                    <div class="fw-semibold text-gray-500">Earnings</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                    <div class="fw-semibold text-gray-500">Sales</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                                <i class="ki-duotone ki-check following fs-3"></i>
                                <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Following</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column py-9 px-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-5">
                                <span class="symbol-label fs-2x fw-semibold text-info bg-light-info">P</span>
                                <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Paul Marcus</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <div class="d-flex flex-center flex-wrap mb-5">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                    <div class="fw-semibold text-gray-500">Earnings</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                    <div class="fw-semibold text-gray-500">Sales</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                                <i class="ki-duotone ki-check following fs-3"></i>
                                <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Following</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column py-9 px-5">
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
                            <div class="d-flex flex-center flex-wrap mb-5">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                    <div class="fw-semibold text-gray-500">Earnings</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                    <div class="fw-semibold text-gray-500">Sales</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                                <i class="ki-duotone ki-plus follow fs-3"></i>
                                <i class="ki-duotone ki-check following fs-3 d-none"></i>
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Follow</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column py-9 px-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-5">
                                <span class="symbol-label fs-2x fw-semibold text-primary bg-light-primary">S</span>
                                <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Sean Paul</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fw-semibold text-gray-500 mb-6">Developer at Loop Inc</div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <div class="d-flex flex-center flex-wrap mb-5">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                    <div class="fw-semibold text-gray-500">Earnings</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                    <div class="fw-semibold text-gray-500">Sales</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                                <i class="ki-duotone ki-plus follow fs-3"></i>
                                <i class="ki-duotone ki-check following fs-3 d-none"></i>
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Follow</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column py-9 px-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-5">
                                <img src="{{ asset('assets/media//avatars/300-1.jpg') }}" alt="image" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Kitona Johnson</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fw-semibold text-gray-500 mb-6">Web Designer at Nextop Ltd.</div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <div class="d-flex flex-center flex-wrap mb-5">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                    <div class="fw-semibold text-gray-500">Earnings</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                    <div class="fw-semibold text-gray-500">Sales</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                                <i class="ki-duotone ki-check following fs-3"></i>
                                <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Following</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column py-9 px-5">
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
                            <div class="d-flex flex-center flex-wrap mb-5">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                    <div class="fw-semibold text-gray-500">Earnings</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                    <div class="fw-semibold text-gray-500">Sales</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                                <i class="ki-duotone ki-plus follow fs-3"></i>
                                <i class="ki-duotone ki-check following fs-3 d-none"></i>
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Follow</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column py-9 px-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-5">
                                <img src="{{ asset('assets/media//avatars/300-12.jpg') }}" alt="image" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Soul Jacob</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <div class="d-flex flex-center flex-wrap mb-5">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                    <div class="fw-semibold text-gray-500">Earnings</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                    <div class="fw-semibold text-gray-500">Sales</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                                <i class="ki-duotone ki-plus follow fs-3"></i>
                                <i class="ki-duotone ki-check following fs-3 d-none"></i>
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Follow</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column py-9 px-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-5">
                                <img src="{{ asset('assets/media//avatars/300-7.jpg') }}" alt="image" />
                                <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Nina Strong</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fw-semibold text-gray-500 mb-6">CTO at Kilp Ltd.</div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <div class="d-flex flex-center flex-wrap mb-5">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                    <div class="fw-semibold text-gray-500">Earnings</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                    <div class="fw-semibold text-gray-500">Sales</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                                <i class="ki-duotone ki-check following fs-3"></i>
                                <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Following</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column py-9 px-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-5">
                                <img src="{{ asset('assets/media//avatars/300-11.jpg') }}" alt="image" />
                                <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric Watson</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <div class="d-flex flex-center flex-wrap mb-5">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                    <div class="fw-semibold text-gray-500">Earnings</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                    <div class="fw-semibold text-gray-500">Sales</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                                <i class="ki-duotone ki-check following fs-3"></i>
                                <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Following</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column py-9 px-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-5">
                                <img src="{{ asset('assets/media//avatars/300-6.jpg') }}" alt="image" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia Larson</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fw-semibold text-gray-500 mb-6">Art Director at Seal Inc.</div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <div class="d-flex flex-center flex-wrap mb-5">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                    <div class="fw-semibold text-gray-500">Earnings</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                    <div class="fw-semibold text-gray-500">Sales</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                                <i class="ki-duotone ki-plus follow fs-3"></i>
                                <i class="ki-duotone ki-check following fs-3 d-none"></i>
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Follow</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--end::Col-->
                <!--end::Followers-->
            </div>
            <!--end::Row-->
            <!--begin::Row(for show more)-->
            <div class="row g-6 mb-6 g-xl-9 mb-xl-9 d-none" id="kt_followers_show_more_cards">
                <!--begin::Followers-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column py-9 px-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-5">
                                <img src="{{ asset('assets/media//avatars/300-11.jpg') }}" alt="image" />
                                <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric Watson</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <div class="d-flex flex-center flex-wrap mb-5">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                    <div class="fw-semibold text-gray-500">Earnings</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                    <div class="fw-semibold text-gray-500">Sales</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                                <i class="ki-duotone ki-check following fs-3"></i>
                                <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Following</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column py-9 px-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-5">
                                <img src="{{ asset('assets/media//avatars/300-6.jpg') }}" alt="image" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia Larson</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fw-semibold text-gray-500 mb-6">Art Director at Seal Inc.</div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <div class="d-flex flex-center flex-wrap mb-5">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                    <div class="fw-semibold text-gray-500">Earnings</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                    <div class="fw-semibold text-gray-500">Sales</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                                <i class="ki-duotone ki-plus follow fs-3"></i>
                                <i class="ki-duotone ki-check following fs-3 d-none"></i>
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Follow</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column py-9 px-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-5">
                                <span class="symbol-label fs-2x fw-semibold text-warning bg-light-warning">A</span>
                                <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Adam Williams</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fw-semibold text-gray-500 mb-6">System Arcitect at Wolto Co.</div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <div class="d-flex flex-center flex-wrap mb-5">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                    <div class="fw-semibold text-gray-500">Earnings</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                    <div class="fw-semibold text-gray-500">Sales</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                                <i class="ki-duotone ki-check following fs-3"></i>
                                <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Following</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column py-9 px-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-5">
                                <span class="symbol-label fs-2x fw-semibold text-info bg-light-info">P</span>
                                <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Paul Marcus</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <div class="d-flex flex-center flex-wrap mb-5">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                    <div class="fw-semibold text-gray-500">Earnings</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                    <div class="fw-semibold text-gray-500">Sales</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                                <i class="ki-duotone ki-check following fs-3"></i>
                                <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Following</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column py-9 px-5">
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
                            <div class="d-flex flex-center flex-wrap mb-5">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                    <div class="fw-semibold text-gray-500">Earnings</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                    <div class="fw-semibold text-gray-500">Sales</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                                <i class="ki-duotone ki-plus follow fs-3"></i>
                                <i class="ki-duotone ki-check following fs-3 d-none"></i>
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Follow</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column py-9 px-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-5">
                                <span class="symbol-label fs-2x fw-semibold text-primary bg-light-primary">S</span>
                                <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Sean Paul</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fw-semibold text-gray-500 mb-6">Developer at Loop Inc</div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <div class="d-flex flex-center flex-wrap mb-5">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                    <div class="fw-semibold text-gray-500">Earnings</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                    <div class="fw-semibold text-gray-500">Sales</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                                <i class="ki-duotone ki-plus follow fs-3"></i>
                                <i class="ki-duotone ki-check following fs-3 d-none"></i>
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Follow</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--end::Col-->
                <!--end::Followers-->
            </div>
            <!--end::Row-->
            <!--begin::Show more-->
            <div class="d-flex flex-center">
                <button class="btn btn-primary" id="kt_followers_show_more_button">
                    <!--begin::Indicator label-->
                    <span class="indicator-label">Show more</span>
                    <!--end::Indicator label-->
                    <!--begin::Indicator progress-->
                    <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    <!--end::Indicator progress-->
                </button>
            </div>
            <!--end::Show more-->
        </div>
        <!--end::Content-->
        <!--begin::End sidebar-->
        <div class="d-lg-flex flex-column flex-lg-row-auto w-lg-325px" data-kt-drawer="true" data-kt-drawer-name="end-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '250px': '300px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_social_end_sidebar_toggle">
            <!--begin::Social widget 1-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">Suggestions for you</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">8k social visitors</span>
                    </h3>
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
                <div class="card-body pt-5">
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-5">
                            <img src="{{ asset('assets/media/avatars/300-11.jpg') }}" class="h-50 align-self-center" alt="" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <!--begin:Author-->
                            <div class="flex-grow-1 me-2">
                                <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Jacob Jones</a>
                                <span class="text-muted fw-semibold d-block fs-7">Barone LLC.</span>
                            </div>
                            <!--end:Author-->
                            <!--begin:Action-->
                            <a href="pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
                            <!--end:Action-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-4"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-5">
                            <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" class="h-50 align-self-center" alt="" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <!--begin:Author-->
                            <div class="flex-grow-1 me-2">
                                <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Annette Black</a>
                                <span class="text-muted fw-semibold d-block fs-7">Binford Ltd.</span>
                            </div>
                            <!--end:Author-->
                            <!--begin:Action-->
                            <a href="pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
                            <!--end:Action-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-4"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-5">
                            <img src="{{ asset('assets/media/avatars/300-7.jpg') }}" class="h-50 align-self-center" alt="" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <!--begin:Author-->
                            <div class="flex-grow-1 me-2">
                                <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Devon Lane</a>
                                <span class="text-muted fw-semibold d-block fs-7">Acme Co.</span>
                            </div>
                            <!--end:Author-->
                            <!--begin:Action-->
                            <a href="pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
                            <!--end:Action-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-4"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-5">
                            <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" class="h-50 align-self-center" alt="" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <!--begin:Author-->
                            <div class="flex-grow-1 me-2">
                                <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Kristin Watson</a>
                                <span class="text-muted fw-semibold d-block fs-7">Biffco Enterprises Ltd.</span>
                            </div>
                            <!--end:Author-->
                            <!--begin:Action-->
                            <a href="pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
                            <!--end:Action-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-4"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-5">
                            <img src="{{ asset('assets/media/avatars/300-12.jpg') }}" class="h-50 align-self-center" alt="" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <!--begin:Author-->
                            <div class="flex-grow-1 me-2">
                                <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Eleanor Pena</a>
                                <span class="text-muted fw-semibold d-block fs-7">Abstergo Ltd.</span>
                            </div>
                            <!--end:Author-->
                            <!--begin:Action-->
                            <a href="pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
                            <!--end:Action-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Social widget 1-->
            <!--begin::Social widget 2-->
            <div class="card card-flush mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">Trending Feeds</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">8k social visitors</span>
                    </h3>
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <a href="pages/social/activity.html" class="btn btn-sm btn-light">View All</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Row-->
                    <div class="row g-3 g-lg-6">
                        <!--begin::Col-->
                        <div class="col-md-6">
                            <!--begin::Img-->
                            <a href="">
                                <img src="{{ asset('assets/media/stock/600x600/img-33.jpg') }}" class="rounded w-100" alt="" />
                            </a>
                            <!--end::Img-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                            <!--begin::Img-->
                            <a href="">
                                <img src="{{ asset('assets/media/stock/600x600/img-26.jpg') }}" class="rounded w-100" alt="" />
                            </a>
                            <!--end::Img-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                            <!--begin::Img-->
                            <a href="">
                                <img src="{{ asset('assets/media/stock/600x600/img-25.jpg') }}" class="rounded w-100" alt="" />
                            </a>
                            <!--end::Img-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                            <!--begin::Img-->
                            <a href="">
                                <img src="{{ asset('assets/media/stock/600x600/img-35.jpg') }}" class="rounded w-100" alt="" />
                            </a>
                            <!--end::Img-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Social widget 2-->
        </div>
        <!--end::End sidebar-->
    </div>
    <!--end::Social - Followers-->

</x-default-layout>
