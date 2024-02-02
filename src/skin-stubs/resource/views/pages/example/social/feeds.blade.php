<x-default-layout>
    @section('title')
    Feeds
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('social.feeds') }}
    @endsection

    <!--begin::Social - Feeds -->
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
                                <a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0 active" href="pages/social/feeds.html">
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
                                <a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="pages/social/followers.html">
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
            <!--begin::Main form-->
            <div class="card card-flush mb-10">
                <!--begin::Header-->
                <div class="card-header justify-content-start align-items-center pt-4">
                    <!--begin::Photo-->
                    <div class="symbol symbol-45px me-5">
                        <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" class="" alt="" />
                    </div>
                    <!--end::Photo-->
                    <span class="text-gray-500 fw-semibold fs-6">What’s on your mind, Jerry?</span>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-2 pb-0">
                    <!--begin::Input-->
                    <textarea class="form-control bg-transparent border-0 px-0" id="kt_social_feeds_post_input" name="message" data-kt-autosize="true" rows="1" placeholder="Type your message..."></textarea>
                    <!--end::Input-->
                </div>
                <!--end::Body-->
                <!--begin::Footer-->
                <div class="card-footer d-flex justify-content-end pt-0">
                    <!--begin::Post action-->
                    <a href="pages/blog/post.html" class="btn btn-sm btn-primary" id="kt_social_feeds_post_btn">
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Post</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </a>
                    <!--end::Post action-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Main form-->
            <!--begin::Posts-->
            <div class="mb-10" id="kt_social_feeds_posts">
                <!--begin::Post 1-->
                <!--begin::Card-->
                <div class="card card-flush mb-10">
                    <!--begin::Card header-->
                    <div class="card-header pt-9">
                        <!--begin::Author-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img src="{{ asset('assets/media/avatars/300-4.jpg') }}" class="" alt="" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <!--begin::Name-->
                                <a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">Grace Logan</a>
                                <!--end::Name-->
                                <!--begin::Date-->
                                <span class="text-gray-500 fw-semibold d-block">Yestarday at 5:06 PM</span>
                                <!--end::Date-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Author-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Menu wrapper-->
                            <div class="m-0">
                                <!--begin::Menu toggle-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary me-n4" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--end::Menu toggle-->
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
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Post content-->
                        <div class="fs-6 fw-normal text-gray-700 mb-5">There are two main approaches you can take to writing amazing blog post headlines. You can either decide on your final headline before outstanding you write the most of the rest of your creative post</div>
                        <!--end::Post content-->
                        <!--begin::Post media-->
                        <div class="row g-7 h-250px h-md-375px">
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Item-->
                                <a class="d-block card-rounded overlay h-100" data-fslightbox="lightbox-projects" href="{{ asset('assets/media/stock/600x600/img-23.jpg') }}">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-100" style="background-image:url('{{ asset('assets/media/stock/600x600/img-23.jpg') }}')"></div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                        <i class="ki-duotone ki-eye fs-3x text-white">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Item-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Row-->
                                <div class="row g-7 h-250px h-md-375px">
                                    <!--begin::Col-->
                                    <div class="col-lg-12">
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay h-100" data-fslightbox="lightbox-projects" href="{{ asset('assets/media/stock/600x600/img-22.jpg') }}">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-100" style="background-image:url('{{ asset('assets/media/stock/600x400/img-71.jpg') }}')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="ki-duotone ki-eye fs-3x text-white">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-12">
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay h-100" data-fslightbox="lightbox-projects" href="{{ asset('assets/media/stock/600x600/img-21.jpg') }}">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-100" style="background-image:url('{{ asset('assets/media/stock/600x400/img-79.jpg') }}')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="ki-duotone ki-eye fs-3x text-white">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Post media-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer pt-0">
                        <!--begin::Info-->
                        <div class="mb-6">
                            <!--begin::Separator-->
                            <div class="separator separator-solid"></div>
                            <!--end::Separator-->
                            <!--begin::Nav-->
                            <ul class="nav py-3">
                                <!--begin::Item-->
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary btn-active-light-primary fw-bold px-4 me-1 collapsible active" data-bs-toggle="collapse" href="#kt_social_feeds_comments_1">
                                        <i class="ki-duotone ki-message-text-2 fs-2 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>2 Comments</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item">
                                    <a href="#" class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4 me-1">
                                        <i class="ki-duotone ki-heart fs-2 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>47k Likes</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item">
                                    <a href="#" class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4">
                                        <i class="ki-duotone ki-bookmark fs-2 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>900 Saves</a>
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav-->
                            <!--begin::Separator-->
                            <div class="separator separator-solid mb-1"></div>
                            <!--end::Separator-->
                            <!--begin::Comments-->
                            <div class="collapse show" id="kt_social_feeds_comments_1">
                                <!--begin::Comment-->
                                <div class="d-flex pt-6">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{ asset('assets/media/avatars/300-13.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-row-fluid">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center flex-wrap mb-0">
                                            <!--begin::Name-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Mr. Anderson</a>
                                            <!--end::Name-->
                                            <!--begin::Date-->
                                            <span class="text-gray-500 fw-semibold fs-7 me-5">1 Day ago</span>
                                            <!--end::Date-->
                                            <!--begin::Reply-->
                                            <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                            <!--end::Reply-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Text-->
                                        <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper you need to make sure you have to sit down and write.</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Comment-->
                                <!--begin::Comment-->
                                <div class="d-flex pt-6">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-row-fluid">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center flex-wrap mb-0">
                                            <!--begin::Name-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Mrs. Anderson</a>
                                            <!--end::Name-->
                                            <!--begin::Date-->
                                            <span class="text-gray-500 fw-semibold fs-7 me-5">2 Days ago</span>
                                            <!--end::Date-->
                                            <!--begin::Reply-->
                                            <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                            <!--end::Reply-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Text-->
                                        <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Comment-->
                            </div>
                            <!--end::Collapse-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Comment form-->
                        <div class="d-flex align-items-center">
                            <!--begin::Author-->
                            <div class="symbol symbol-35px me-3">
                                <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" alt="" />
                            </div>
                            <!--end::Author-->
                            <!--begin::Input group-->
                            <div class="position-relative w-100">
                                <!--begin::Input-->
                                <textarea type="text" class="form-control form-control-solid border ps-5" rows="1" name="search" value="" data-kt-autosize="true" placeholder="Write your comment.."></textarea>
                                <!--end::Input-->
                                <!--begin::Actions-->
                                <div class="position-absolute top-0 end-0 translate-middle-x mt-1 me-n14">
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-paper-clip fs-2"></i>
                                    </button>
                                    <!--end::Btn-->
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-like fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>
                                    <!--end::Btn-->
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-badge fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>
                                    </button>
                                    <!--end::Btn-->
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-geolocation fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>
                                    <!--end::Btn-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Comment form-->
                    </div>
                    <!--end::Card footer-->
                </div>
                <!--end::Card-->
                <!--end::Post 1-->
                <!--begin::Post 2-->
                <!--begin::Card-->
                <div class="card card-flush mb-10">
                    <!--begin::Card header-->
                    <div class="card-header pt-9">
                        <!--begin::Author-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img src="{{ asset('assets/media/avatars/300-7.jpg') }}" class="" alt="" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <!--begin::Name-->
                                <a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">Brooklyn Simmons</a>
                                <!--end::Name-->
                                <!--begin::Date-->
                                <span class="text-gray-500 fw-semibold d-block">Yestarday at 5:06 PM</span>
                                <!--end::Date-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Author-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Menu wrapper-->
                            <div class="m-0">
                                <!--begin::Menu toggle-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary me-n4" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--end::Menu toggle-->
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
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Post content-->
                        <div class="fs-6 fw-normal text-gray-700">You can either decide on your final headline before outstanding you write the most of the rest of your creative post</div>
                        <!--end::Post content-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer pt-0">
                        <!--begin::Info-->
                        <div class="mb-6">
                            <!--begin::Separator-->
                            <div class="separator separator-solid"></div>
                            <!--end::Separator-->
                            <!--begin::Nav-->
                            <ul class="nav py-3">
                                <!--begin::Item-->
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary btn-active-light-primary fw-bold px-4 me-1 collapsible" data-bs-toggle="collapse" href="#kt_social_feeds_comments_2">
                                        <i class="ki-duotone ki-message-text-2 fs-2 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>3 Comments</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item">
                                    <a href="#" class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4 me-1">
                                        <i class="ki-duotone ki-heart fs-2 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>8 Likes</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item">
                                    <a href="#" class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4">
                                        <i class="ki-duotone ki-bookmark fs-2 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>47k Saves</a>
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav-->
                            <!--begin::Separator-->
                            <div class="separator separator-solid mb-1"></div>
                            <!--end::Separator-->
                            <!--begin::Comments-->
                            <div class="collapse" id="kt_social_feeds_comments_2">
                                <!--begin::Comment-->
                                <div class="d-flex pt-6">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{ asset('assets/media/avatars/300-13.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-row-fluid">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center flex-wrap mb-0">
                                            <!--begin::Name-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Mr. Anderson</a>
                                            <!--end::Name-->
                                            <!--begin::Date-->
                                            <span class="text-gray-500 fw-semibold fs-7 me-5">1 Day ago</span>
                                            <!--end::Date-->
                                            <!--begin::Reply-->
                                            <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                            <!--end::Reply-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Text-->
                                        <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper you need to make sure you have to sit down and write.</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Comment-->
                                <!--begin::Comment-->
                                <div class="d-flex pt-6">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-row-fluid">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center flex-wrap mb-0">
                                            <!--begin::Name-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Mrs. Anderson</a>
                                            <!--end::Name-->
                                            <!--begin::Date-->
                                            <span class="text-gray-500 fw-semibold fs-7 me-5">2 Days ago</span>
                                            <!--end::Date-->
                                            <!--begin::Reply-->
                                            <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                            <!--end::Reply-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Text-->
                                        <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Comment-->
                                <!--begin::Comment-->
                                <div class="d-flex pt-6">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{ asset('assets/media/avatars/300-20.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-row-fluid">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center flex-wrap mb-0">
                                            <!--begin::Name-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Alice Danchik</a>
                                            <!--end::Name-->
                                            <!--begin::Date-->
                                            <span class="text-gray-500 fw-semibold fs-7 me-5">3 Days ago</span>
                                            <!--end::Date-->
                                            <!--begin::Reply-->
                                            <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                            <!--end::Reply-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Text-->
                                        <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper you need to make sure you have to sit down and write.</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Comment-->
                            </div>
                            <!--end::Collapse-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Comment form-->
                        <div class="d-flex align-items-center">
                            <!--begin::Author-->
                            <div class="symbol symbol-35px me-3">
                                <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" alt="" />
                            </div>
                            <!--end::Author-->
                            <!--begin::Input group-->
                            <div class="position-relative w-100">
                                <!--begin::Input-->
                                <textarea type="text" class="form-control form-control-solid border ps-5" rows="1" name="search" value="" data-kt-autosize="true" placeholder="Write your comment.."></textarea>
                                <!--end::Input-->
                                <!--begin::Actions-->
                                <div class="position-absolute top-0 end-0 translate-middle-x mt-1 me-n14">
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-paper-clip fs-2"></i>
                                    </button>
                                    <!--end::Btn-->
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-like fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>
                                    <!--end::Btn-->
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-badge fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>
                                    </button>
                                    <!--end::Btn-->
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-geolocation fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>
                                    <!--end::Btn-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Comment form-->
                    </div>
                    <!--end::Card footer-->
                </div>
                <!--end::Card-->
                <!--end::Post 2-->
                <!--begin::Post 3-->
                <!--begin::Card-->
                <div class="card card-flush mb-10">
                    <!--begin::Card header-->
                    <div class="card-header pt-9">
                        <!--begin::Author-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <div class="symbol-label fs-2 fw-semibold bg-light text-inverse-success">
                                    <i class="ki-duotone ki-file-added fs-2x text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <!--begin::Name-->
                                <a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">Finance Deprt - Annual Report</a>
                                <!--end::Name-->
                                <!--begin::Date-->
                                <span class="text-gray-500 fw-semibold d-block">Yestarday at 5:06 PM</span>
                                <!--end::Date-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Author-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Menu wrapper-->
                            <div class="m-0">
                                <!--begin::Menu toggle-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary me-n4" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--end::Menu toggle-->
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
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Post content-->
                        <div class="fs-6 fw-normal text-gray-700 mb-5">You can either decide on your final headline before outstanding you write the most of the rest of your creative post</div>
                        <!--end::Post content-->
                        <!--begin::Video-->
                        <div class="m-0">
                            <iframe class="embed-responsive-item rounded h-300px w-100" src="https://www.youtube.com/embed/TWdDZYNqlg4" allowfullscreen="allowfullscreen"></iframe>
                        </div>
                        <!--end::Video-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer pt-0">
                        <!--begin::Info-->
                        <div class="mb-6">
                            <!--begin::Separator-->
                            <div class="separator separator-solid"></div>
                            <!--end::Separator-->
                            <!--begin::Nav-->
                            <ul class="nav py-3">
                                <!--begin::Item-->
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary btn-active-light-primary fw-bold px-4 me-1 collapsible" data-bs-toggle="collapse" href="#kt_social_feeds_comments_3">
                                        <i class="ki-duotone ki-message-text-2 fs-2 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>4 Comments</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item">
                                    <a href="#" class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4 me-1">
                                        <i class="ki-duotone ki-heart fs-2 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>10k Likes</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item">
                                    <a href="#" class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4">
                                        <i class="ki-duotone ki-bookmark fs-2 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>2 Saves</a>
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav-->
                            <!--begin::Separator-->
                            <div class="separator separator-solid mb-1"></div>
                            <!--end::Separator-->
                            <!--begin::Comments-->
                            <div class="collapse" id="kt_social_feeds_comments_3">
                                <!--begin::Comment-->
                                <div class="d-flex pt-6">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{ asset('assets/media/avatars/300-13.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-row-fluid">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center flex-wrap mb-0">
                                            <!--begin::Name-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Mr. Anderson</a>
                                            <!--end::Name-->
                                            <!--begin::Date-->
                                            <span class="text-gray-500 fw-semibold fs-7 me-5">1 Day ago</span>
                                            <!--end::Date-->
                                            <!--begin::Reply-->
                                            <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                            <!--end::Reply-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Text-->
                                        <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper you need to make sure you have to sit down and write.</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Comment-->
                                <!--begin::Comment-->
                                <div class="d-flex pt-6">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-row-fluid">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center flex-wrap mb-0">
                                            <!--begin::Name-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Mrs. Anderson</a>
                                            <!--end::Name-->
                                            <!--begin::Date-->
                                            <span class="text-gray-500 fw-semibold fs-7 me-5">2 Days ago</span>
                                            <!--end::Date-->
                                            <!--begin::Reply-->
                                            <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                            <!--end::Reply-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Text-->
                                        <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Comment-->
                                <!--begin::Comment-->
                                <div class="d-flex pt-6">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{ asset('assets/media/avatars/300-20.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-row-fluid">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center flex-wrap mb-0">
                                            <!--begin::Name-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Alice Danchik</a>
                                            <!--end::Name-->
                                            <!--begin::Date-->
                                            <span class="text-gray-500 fw-semibold fs-7 me-5">3 Days ago</span>
                                            <!--end::Date-->
                                            <!--begin::Reply-->
                                            <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                            <!--end::Reply-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Text-->
                                        <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper you need to make sure you have to sit down and write.</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Comment-->
                                <!--begin::Comment-->
                                <div class="d-flex pt-6">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{ asset('assets/media/avatars/300-6.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-row-fluid">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center flex-wrap mb-0">
                                            <!--begin::Name-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Grace Green</a>
                                            <!--end::Name-->
                                            <!--begin::Date-->
                                            <span class="text-gray-500 fw-semibold fs-7 me-5">4 Days ago</span>
                                            <!--end::Date-->
                                            <!--begin::Reply-->
                                            <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                            <!--end::Reply-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Text-->
                                        <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Comment-->
                            </div>
                            <!--end::Collapse-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Comment form-->
                        <div class="d-flex align-items-center">
                            <!--begin::Author-->
                            <div class="symbol symbol-35px me-3">
                                <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" alt="" />
                            </div>
                            <!--end::Author-->
                            <!--begin::Input group-->
                            <div class="position-relative w-100">
                                <!--begin::Input-->
                                <textarea type="text" class="form-control form-control-solid border ps-5" rows="1" name="search" value="" data-kt-autosize="true" placeholder="Write your comment.."></textarea>
                                <!--end::Input-->
                                <!--begin::Actions-->
                                <div class="position-absolute top-0 end-0 translate-middle-x mt-1 me-n14">
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-paper-clip fs-2"></i>
                                    </button>
                                    <!--end::Btn-->
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-like fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>
                                    <!--end::Btn-->
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-badge fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>
                                    </button>
                                    <!--end::Btn-->
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-geolocation fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>
                                    <!--end::Btn-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Comment form-->
                    </div>
                    <!--end::Card footer-->
                </div>
                <!--end::Card-->
                <!--end::Post 3-->
                <!--begin::Post 4-->
                <!--begin::Card-->
                <div class="card card-flush mb-10">
                    <!--begin::Card header-->
                    <div class="card-header pt-9">
                        <!--begin::Author-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img src="{{ asset('assets/media/avatars/300-10.jpg') }}" class="" alt="" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <!--begin::Name-->
                                <a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">Ana Lee</a>
                                <!--end::Name-->
                                <!--begin::Date-->
                                <span class="text-gray-500 fw-semibold d-block">Yestarday at 5:06 PM</span>
                                <!--end::Date-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Author-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Menu wrapper-->
                            <div class="m-0">
                                <!--begin::Menu toggle-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary me-n4" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--end::Menu toggle-->
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
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Post content-->
                        <div class="fs-6 fw-normal text-gray-700">You can either decide on your final headline before outstanding you write the most of the rest of your creative post</div>
                        <!--end::Post content-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer pt-0">
                        <!--begin::Info-->
                        <div class="mb-6">
                            <!--begin::Separator-->
                            <div class="separator separator-solid"></div>
                            <!--end::Separator-->
                            <!--begin::Nav-->
                            <ul class="nav py-3">
                                <!--begin::Item-->
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary btn-active-light-primary fw-bold px-4 me-1 collapsible" data-bs-toggle="collapse" href="#kt_social_feeds_comments_4">
                                        <i class="ki-duotone ki-message-text-2 fs-2 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>10 Comments</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item">
                                    <a href="#" class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4 me-1">
                                        <i class="ki-duotone ki-heart fs-2 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>10k Likes</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item">
                                    <a href="#" class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4">
                                        <i class="ki-duotone ki-bookmark fs-2 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>3k Saves</a>
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav-->
                            <!--begin::Separator-->
                            <div class="separator separator-solid mb-1"></div>
                            <!--end::Separator-->
                            <!--begin::Comments-->
                            <div class="collapse" id="kt_social_feeds_comments_4">
                                <!--begin::Comment-->
                                <div class="d-flex pt-6">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{ asset('assets/media/avatars/300-13.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-row-fluid">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center flex-wrap mb-0">
                                            <!--begin::Name-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Mr. Anderson</a>
                                            <!--end::Name-->
                                            <!--begin::Date-->
                                            <span class="text-gray-500 fw-semibold fs-7 me-5">1 Day ago</span>
                                            <!--end::Date-->
                                            <!--begin::Reply-->
                                            <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                            <!--end::Reply-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Text-->
                                        <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper you need to make sure you have to sit down and write.</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Comment-->
                                <!--begin::Comment-->
                                <div class="d-flex pt-6">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-row-fluid">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center flex-wrap mb-0">
                                            <!--begin::Name-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Mrs. Anderson</a>
                                            <!--end::Name-->
                                            <!--begin::Date-->
                                            <span class="text-gray-500 fw-semibold fs-7 me-5">2 Days ago</span>
                                            <!--end::Date-->
                                            <!--begin::Reply-->
                                            <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                            <!--end::Reply-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Text-->
                                        <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Comment-->
                                <!--begin::Comment-->
                                <div class="d-flex pt-6">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{ asset('assets/media/avatars/300-20.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-row-fluid">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center flex-wrap mb-0">
                                            <!--begin::Name-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Alice Danchik</a>
                                            <!--end::Name-->
                                            <!--begin::Date-->
                                            <span class="text-gray-500 fw-semibold fs-7 me-5">3 Days ago</span>
                                            <!--end::Date-->
                                            <!--begin::Reply-->
                                            <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                            <!--end::Reply-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Text-->
                                        <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper you need to make sure you have to sit down and write.</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Comment-->
                                <!--begin::Comment-->
                                <div class="d-flex pt-6">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{ asset('assets/media/avatars/300-6.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-row-fluid">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center flex-wrap mb-0">
                                            <!--begin::Name-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Grace Green</a>
                                            <!--end::Name-->
                                            <!--begin::Date-->
                                            <span class="text-gray-500 fw-semibold fs-7 me-5">4 Days ago</span>
                                            <!--end::Date-->
                                            <!--begin::Reply-->
                                            <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                            <!--end::Reply-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Text-->
                                        <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Comment-->
                                <!--begin::Comment-->
                                <div class="d-flex pt-6">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{ asset('assets/media/avatars/300-25.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-row-fluid">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center flex-wrap mb-0">
                                            <!--begin::Name-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Mat Dillon</a>
                                            <!--end::Name-->
                                            <!--begin::Date-->
                                            <span class="text-gray-500 fw-semibold fs-7 me-5">5 Days ago</span>
                                            <!--end::Date-->
                                            <!--begin::Reply-->
                                            <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                            <!--end::Reply-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Text-->
                                        <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper you need to make sure you have to sit down and write.</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Comment-->
                            </div>
                            <!--end::Collapse-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Comment form-->
                        <div class="d-flex align-items-center">
                            <!--begin::Author-->
                            <div class="symbol symbol-35px me-3">
                                <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" alt="" />
                            </div>
                            <!--end::Author-->
                            <!--begin::Input group-->
                            <div class="position-relative w-100">
                                <!--begin::Input-->
                                <textarea type="text" class="form-control form-control-solid border ps-5" rows="1" name="search" value="" data-kt-autosize="true" placeholder="Write your comment.."></textarea>
                                <!--end::Input-->
                                <!--begin::Actions-->
                                <div class="position-absolute top-0 end-0 translate-middle-x mt-1 me-n14">
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-paper-clip fs-2"></i>
                                    </button>
                                    <!--end::Btn-->
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-like fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>
                                    <!--end::Btn-->
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-badge fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>
                                    </button>
                                    <!--end::Btn-->
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-geolocation fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>
                                    <!--end::Btn-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Comment form-->
                    </div>
                    <!--end::Card footer-->
                </div>
                <!--end::Card-->
                <!--end::Post 4-->
                <!--begin::More posts-->
                <div class="d-none" id="kt_social_feeds_more_posts">
                    <!--begin::Post 4-->
                    <!--begin::Card-->
                    <div class="card card-flush mb-10">
                        <!--begin::Card header-->
                        <div class="card-header pt-9">
                            <!--begin::Author-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img src="{{ asset('assets/media/avatars/300-11.jpg') }}" class="" alt="" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Info-->
                                <div class="flex-grow-1">
                                    <!--begin::Name-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">Stive Strong</a>
                                    <!--end::Name-->
                                    <!--begin::Date-->
                                    <span class="text-gray-500 fw-semibold d-block">Yestarday at 3:30 PM</span>
                                    <!--end::Date-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Author-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu wrapper-->
                                <div class="m-0">
                                    <!--begin::Menu toggle-->
                                    <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary me-n4" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                        <i class="ki-duotone ki-dots-square fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </button>
                                    <!--end::Menu toggle-->
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
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Post content-->
                            <div class="fs-6 fw-normal text-gray-700 mb-5">You can either decide on your final headline before outstanding.</div>
                            <!--end::Post content-->
                            <!--begin::Post media-->
                            <div class="row g-3 g-lg-6">
                                <!--begin::Col-->
                                <div class="col-md-6 col-lg-4">
                                    <!--begin::Img-->
                                    <a href="">
                                        <img src="{{ asset('assets/media/stock/600x600/img-14.jpg') }}" class="rounded w-100" alt="" />
                                    </a>
                                    <!--end::Img-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 col-lg-4">
                                    <!--begin::Img-->
                                    <a href="">
                                        <img src="{{ asset('assets/media/stock/600x600/img-10.jpg') }}" class="rounded w-100" alt="" />
                                    </a>
                                    <!--end::Img-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 col-lg-4">
                                    <!--begin::Img-->
                                    <a href="">
                                        <img src="{{ asset('assets/media/stock/600x600/img-18.jpg') }}" class="rounded w-100" alt="" />
                                    </a>
                                    <!--end::Img-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 col-lg-4">
                                    <!--begin::Img-->
                                    <a href="">
                                        <img src="{{ asset('assets/media/stock/600x600/img-30.jpg') }}" class="rounded w-100" alt="" />
                                    </a>
                                    <!--end::Img-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 col-lg-4">
                                    <!--begin::Img-->
                                    <a href="">
                                        <img src="{{ asset('assets/media/stock/600x600/img-31.jpg') }}" class="rounded w-100" alt="" />
                                    </a>
                                    <!--end::Img-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Post media-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Card footer-->
                        <div class="card-footer pt-0">
                            <!--begin::Info-->
                            <div class="mb-6">
                                <!--begin::Separator-->
                                <div class="separator separator-solid"></div>
                                <!--end::Separator-->
                                <!--begin::Nav-->
                                <ul class="nav py-3">
                                    <!--begin::Item-->
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary btn-active-light-primary fw-bold px-4 me-1 collapsible" data-bs-toggle="collapse" href="#kt_social_feeds_comments_5">
                                            <i class="ki-duotone ki-message-text-2 fs-2 me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>3 Comments</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item">
                                        <a href="#" class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4 me-1">
                                            <i class="ki-duotone ki-heart fs-2 me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>15k Likes</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item">
                                        <a href="#" class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4">
                                            <i class="ki-duotone ki-bookmark fs-2 me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>3.8k Saves</a>
                                    </li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Nav-->
                                <!--begin::Separator-->
                                <div class="separator separator-solid mb-1"></div>
                                <!--end::Separator-->
                                <!--begin::Comments-->
                                <div class="collapse" id="kt_social_feeds_comments_5">
                                    <!--begin::Comment-->
                                    <div class="d-flex pt-6">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-45px me-5">
                                            <img src="{{ asset('assets/media/avatars/300-13.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column flex-row-fluid">
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center flex-wrap mb-0">
                                                <!--begin::Name-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Mr. Anderson</a>
                                                <!--end::Name-->
                                                <!--begin::Date-->
                                                <span class="text-gray-500 fw-semibold fs-7 me-5">1 Day ago</span>
                                                <!--end::Date-->
                                                <!--begin::Reply-->
                                                <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                                <!--end::Reply-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Text-->
                                            <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper you need to make sure you have to sit down and write.</span>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Comment-->
                                    <!--begin::Comment-->
                                    <div class="d-flex pt-6">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-45px me-5">
                                            <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column flex-row-fluid">
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center flex-wrap mb-0">
                                                <!--begin::Name-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Mrs. Anderson</a>
                                                <!--end::Name-->
                                                <!--begin::Date-->
                                                <span class="text-gray-500 fw-semibold fs-7 me-5">2 Days ago</span>
                                                <!--end::Date-->
                                                <!--begin::Reply-->
                                                <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                                <!--end::Reply-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Text-->
                                            <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper</span>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Comment-->
                                    <!--begin::Comment-->
                                    <div class="d-flex pt-6">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-45px me-5">
                                            <img src="{{ asset('assets/media/avatars/300-20.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column flex-row-fluid">
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center flex-wrap mb-0">
                                                <!--begin::Name-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Alice Danchik</a>
                                                <!--end::Name-->
                                                <!--begin::Date-->
                                                <span class="text-gray-500 fw-semibold fs-7 me-5">3 Days ago</span>
                                                <!--end::Date-->
                                                <!--begin::Reply-->
                                                <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                                <!--end::Reply-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Text-->
                                            <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper you need to make sure you have to sit down and write.</span>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Comment-->
                                </div>
                                <!--end::Collapse-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Comment form-->
                            <div class="d-flex align-items-center">
                                <!--begin::Author-->
                                <div class="symbol symbol-35px me-3">
                                    <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" alt="" />
                                </div>
                                <!--end::Author-->
                                <!--begin::Input group-->
                                <div class="position-relative w-100">
                                    <!--begin::Input-->
                                    <textarea type="text" class="form-control form-control-solid border ps-5" rows="1" name="search" value="" data-kt-autosize="true" placeholder="Write your comment.."></textarea>
                                    <!--end::Input-->
                                    <!--begin::Actions-->
                                    <div class="position-absolute top-0 end-0 translate-middle-x mt-1 me-n14">
                                        <!--begin::Btn-->
                                        <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                            <i class="ki-duotone ki-paper-clip fs-2"></i>
                                        </button>
                                        <!--end::Btn-->
                                        <!--begin::Btn-->
                                        <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                            <i class="ki-duotone ki-like fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </button>
                                        <!--end::Btn-->
                                        <!--begin::Btn-->
                                        <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                            <i class="ki-duotone ki-badge fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </button>
                                        <!--end::Btn-->
                                        <!--begin::Btn-->
                                        <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                            <i class="ki-duotone ki-geolocation fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </button>
                                        <!--end::Btn-->
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Comment form-->
                        </div>
                        <!--end::Card footer-->
                    </div>
                    <!--end::Card-->
                    <!--end::Post 4-->
                    <!--begin::Post 6-->
                    <!--begin::Card-->
                    <div class="card card-flush mb-10">
                        <!--begin::Card header-->
                        <div class="card-header pt-9">
                            <!--begin::Author-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img src="{{ asset('assets/media/avatars/300-12.jpg') }}" class="" alt="" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Info-->
                                <div class="flex-grow-1">
                                    <!--begin::Name-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">Lara Nilson</a>
                                    <!--end::Name-->
                                    <!--begin::Date-->
                                    <span class="text-gray-500 fw-semibold d-block">Yestarday at 10:10 AM</span>
                                    <!--end::Date-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Author-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu wrapper-->
                                <div class="m-0">
                                    <!--begin::Menu toggle-->
                                    <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary me-n4" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                        <i class="ki-duotone ki-dots-square fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </button>
                                    <!--end::Menu toggle-->
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
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Post content-->
                            <div class="fs-6 fw-normal text-gray-700">You can either decide on your final headline before outstanding you write the most of the rest of your creative post</div>
                            <!--end::Post content-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Card footer-->
                        <div class="card-footer pt-0">
                            <!--begin::Info-->
                            <div class="mb-6">
                                <!--begin::Separator-->
                                <div class="separator separator-solid"></div>
                                <!--end::Separator-->
                                <!--begin::Nav-->
                                <ul class="nav py-3">
                                    <!--begin::Item-->
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary btn-active-light-primary fw-bold px-4 me-1 collapsible" data-bs-toggle="collapse" href="#kt_social_feeds_comments_6">
                                            <i class="ki-duotone ki-message-text-2 fs-2 me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>2 Comments</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item">
                                        <a href="#" class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4 me-1">
                                            <i class="ki-duotone ki-heart fs-2 me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>14k Likes</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item">
                                        <a href="#" class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4">
                                            <i class="ki-duotone ki-bookmark fs-2 me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>7.5k Saves</a>
                                    </li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Nav-->
                                <!--begin::Separator-->
                                <div class="separator separator-solid mb-1"></div>
                                <!--end::Separator-->
                                <!--begin::Comments-->
                                <div class="collapse" id="kt_social_feeds_comments_6">
                                    <!--begin::Comment-->
                                    <div class="d-flex pt-6">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-45px me-5">
                                            <img src="{{ asset('assets/media/avatars/300-13.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column flex-row-fluid">
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center flex-wrap mb-0">
                                                <!--begin::Name-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Mr. Anderson</a>
                                                <!--end::Name-->
                                                <!--begin::Date-->
                                                <span class="text-gray-500 fw-semibold fs-7 me-5">1 Day ago</span>
                                                <!--end::Date-->
                                                <!--begin::Reply-->
                                                <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                                <!--end::Reply-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Text-->
                                            <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper you need to make sure you have to sit down and write.</span>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Comment-->
                                    <!--begin::Comment-->
                                    <div class="d-flex pt-6">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-45px me-5">
                                            <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column flex-row-fluid">
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center flex-wrap mb-0">
                                                <!--begin::Name-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Mrs. Anderson</a>
                                                <!--end::Name-->
                                                <!--begin::Date-->
                                                <span class="text-gray-500 fw-semibold fs-7 me-5">2 Days ago</span>
                                                <!--end::Date-->
                                                <!--begin::Reply-->
                                                <a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                                <!--end::Reply-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Text-->
                                            <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper</span>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Comment-->
                                </div>
                                <!--end::Collapse-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Comment form-->
                            <div class="d-flex align-items-center">
                                <!--begin::Author-->
                                <div class="symbol symbol-35px me-3">
                                    <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" alt="" />
                                </div>
                                <!--end::Author-->
                                <!--begin::Input group-->
                                <div class="position-relative w-100">
                                    <!--begin::Input-->
                                    <textarea type="text" class="form-control form-control-solid border ps-5" rows="1" name="search" value="" data-kt-autosize="true" placeholder="Write your comment.."></textarea>
                                    <!--end::Input-->
                                    <!--begin::Actions-->
                                    <div class="position-absolute top-0 end-0 translate-middle-x mt-1 me-n14">
                                        <!--begin::Btn-->
                                        <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                            <i class="ki-duotone ki-paper-clip fs-2"></i>
                                        </button>
                                        <!--end::Btn-->
                                        <!--begin::Btn-->
                                        <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                            <i class="ki-duotone ki-like fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </button>
                                        <!--end::Btn-->
                                        <!--begin::Btn-->
                                        <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                            <i class="ki-duotone ki-badge fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </button>
                                        <!--end::Btn-->
                                        <!--begin::Btn-->
                                        <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                            <i class="ki-duotone ki-geolocation fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </button>
                                        <!--end::Btn-->
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Comment form-->
                        </div>
                        <!--end::Card footer-->
                    </div>
                    <!--end::Card-->
                    <!--end::Post 6-->
                </div>
                <!--end::More posts-->
            </div>
            <!--end::Posts-->
            <!--begin::New post template-->
            <div class="d-none" id="kt_social_feeds_new_post">
                <!--begin::Post New-->
                <!--begin::Card-->
                <div class="card card-flush mb-10">
                    <!--begin::Card header-->
                    <div class="card-header pt-9">
                        <!--begin::Author-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" class="" alt="" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <!--begin::Name-->
                                <a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">Jerry Kane</a>
                                <!--end::Name-->
                                <!--begin::Date-->
                                <span class="text-gray-500 fw-semibold d-block">Yestarday at 5:06 PM</span>
                                <!--end::Date-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Author-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Menu wrapper-->
                            <div class="m-0">
                                <!--begin::Menu toggle-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary me-n4" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--end::Menu toggle-->
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
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Post content-->
                        <div class="fs-6 fw-normal text-gray-700" data-kt-post-element="content">You can either decide on your final headline before outstanding you write the most of the rest of your creative post</div>
                        <!--end::Post content-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer pt-0">
                        <!--begin::Info-->
                        <div class="mb-6">
                            <!--begin::Separator-->
                            <div class="separator separator-solid"></div>
                            <!--end::Separator-->
                            <!--begin::Nav-->
                            <ul class="nav py-3">
                                <!--begin::Item-->
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary btn-active-light-primary fw-bold px-4 me-1 collapsible" data-bs-toggle="collapse" href="#kt_social_feeds_comments_2">
                                        <i class="ki-duotone ki-message-text-2 fs-2 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>0 Comment</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item">
                                    <a href="#" class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4 me-1">
                                        <i class="ki-duotone ki-heart fs-2 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>0 Like</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item">
                                    <a href="#" class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4">
                                        <i class="ki-duotone ki-bookmark fs-2 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>0 Saves</a>
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav-->
                            <!--begin::Separator-->
                            <div class="separator separator-solid mb-1"></div>
                            <!--end::Separator-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Comment form-->
                        <div class="d-flex align-items-center">
                            <!--begin::Author-->
                            <div class="symbol symbol-35px me-3">
                                <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" alt="" />
                            </div>
                            <!--end::Author-->
                            <!--begin::Input group-->
                            <div class="position-relative w-100">
                                <!--begin::Input-->
                                <textarea type="text" class="form-control form-control-solid border ps-5" rows="1" name="search" value="" data-kt-autosize="true" placeholder="Write your comment.."></textarea>
                                <!--end::Input-->
                                <!--begin::Actions-->
                                <div class="position-absolute top-0 end-0 translate-middle-x mt-1 me-n14">
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-paper-clip fs-2"></i>
                                    </button>
                                    <!--end::Btn-->
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-like fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>
                                    <!--end::Btn-->
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-badge fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>
                                    </button>
                                    <!--end::Btn-->
                                    <!--begin::Btn-->
                                    <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                                        <i class="ki-duotone ki-geolocation fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>
                                    <!--end::Btn-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Comment form-->
                    </div>
                    <!--end::Card footer-->
                </div>
                <!--end::Card-->
                <!--end::Post New-->
            </div>
            <!--end::More posts-->
            <!--begin::Show more feeds-->
            <div class="d-flex flex-center">
                <a href="#" class="btn btn-primary fw-bold px-6" id="kt_social_feeds_more_posts_btn">
                    <!--begin::Indicator label-->
                    <span class="indicator-label">Show more</span>
                    <!--end::Indicator label-->
                    <!--begin::Indicator progress-->
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    <!--end::Indicator progress-->
                </a>
            </div>
            <!--end::Show more feeds-->
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
    <!--end::Social - Feeds-->

</x-default-layout>
