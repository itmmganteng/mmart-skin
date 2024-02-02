<x-default-layout>
    @section('title')
    Activity
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('social.activity') }}
    @endsection

    <!--begin::Social - Activity -->
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
                                <a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0 active" href="pages/social/activity.html">
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
            <!--begin::List widget 10-->
            <div class="card card-flush">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Shipment History</span>
                        <span class="text-gray-500 mt-1 fw-semibold fs-6">59 Active Shipments</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle='tooltip' data-bs-dismiss='click' data-bs-custom-class="tooltip-inverse" title="Logistics App is coming soon">View All</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Nav-->
                    <ul class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-9">
                        <!--begin::Item-->
                        <li class="nav-item col-4 mx-0 p-0">
                            <!--begin::Link-->
                            <a class="nav-link active d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_10_tab_1">
                                <!--begin::Subtitle-->
                                <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Notable</span>
                                <!--end::Subtitle-->
                                <!--begin::Bullet-->
                                <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item col-4 mx-0 px-0">
                            <!--begin::Link-->
                            <a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_10_tab_2">
                                <!--begin::Subtitle-->
                                <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Delivered</span>
                                <!--end::Subtitle-->
                                <!--begin::Bullet-->
                                <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item col-4 mx-0 px-0">
                            <!--begin::Link-->
                            <a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_10_tab_3">
                                <!--begin::Subtitle-->
                                <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Shipping</span>
                                <!--end::Subtitle-->
                                <!--begin::Bullet-->
                                <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Bullet-->
                        <span class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"></span>
                        <!--end::Bullet-->
                    </ul>
                    <!--end::Nav-->
                    <!--begin::Tab Content-->
                    <div class="tab-content">
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade show active" id="kt_list_widget_10_tab_1">
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-sm-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px me-4">
                                        <span class="symbol-label bg-primary">
                                            <i class="ki-duotone ki-ship text-inverse-primary fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-500 fs-6 fw-semibold">Ship Freight</a>
                                            <span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                        </div>
                                        <span class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Timeline-->
                                <div class="timeline">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-cd fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Messina Harbor</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Sicily, Italy</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Hektor Container Hotel</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Tallin, EST</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-6"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-sm-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px me-4">
                                        <span class="symbol-label bg-primary">
                                            <i class="ki-duotone ki-truck text-inverse-primary fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-500 fs-6 fw-semibold">Truck Freight</a>
                                            <span class="text-gray-800 fw-bold d-block fs-4">#0066-954784</span>
                                        </div>
                                        <span class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Timeline-->
                                <div class="timeline">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-cd fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Haven van Rotterdam</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Rotterdam, Netherlands</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Forest-Midi</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Brussels, Belgium</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-6"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-sm-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px me-4">
                                        <span class="symbol-label bg-primary">
                                            <i class="ki-duotone ki-delivery text-inverse-primary fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-500 fs-6 fw-semibold">Delivery Freight</a>
                                            <span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                        </div>
                                        <span class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Timeline-->
                                <div class="timeline">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-cd fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Mina St - Zayed Port</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Abu Dhabi, UAE</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">27 Drydock Boston</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Boston, USA</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-6"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-sm-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px me-4">
                                        <span class="symbol-label bg-primary">
                                            <i class="ki-duotone ki-airplane-square text-inverse-primary fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-500 fs-6 fw-semibold">Plane Freight</a>
                                            <span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                        </div>
                                        <span class="badge badge-lg badge-light-danger fw-bold my-2 fs-8">Delayed</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Timeline-->
                                <div class="timeline">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-cd fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">KLM Cargo</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Schipol Airport, Amsterdam</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Singapore Cargo</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Changi Airport, Singapore</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_list_widget_10_tab_2">
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-sm-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px me-4">
                                        <span class="symbol-label bg-primary">
                                            <i class="ki-duotone ki-airplane-square text-inverse-primary fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-500 fs-6 fw-semibold">Plane Freight</a>
                                            <span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                        </div>
                                        <span class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Timeline-->
                                <div class="timeline">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-cd fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">KLM Cargo</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Schipol Airport, Amsterdam</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Singapore Cargo</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Changi Airport, Singapore</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-6"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-sm-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px me-4">
                                        <span class="symbol-label bg-primary">
                                            <i class="ki-duotone ki-truck text-inverse-primary fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-500 fs-6 fw-semibold">Truck Freight</a>
                                            <span class="text-gray-800 fw-bold d-block fs-4">#0066-954784</span>
                                        </div>
                                        <span class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Timeline-->
                                <div class="timeline">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-cd fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Haven van Rotterdam</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Rotterdam, Netherlands</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Forest-Midi</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Brussels, Belgium</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-6"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-sm-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px me-4">
                                        <span class="symbol-label bg-primary">
                                            <i class="ki-duotone ki-ship text-inverse-primary fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-500 fs-6 fw-semibold">Ship Freight</a>
                                            <span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                        </div>
                                        <span class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Timeline-->
                                <div class="timeline">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-cd fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Mina St - Zayed Port</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Abu Dhabi, UAE</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">27 Drydock Boston</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Boston, USA</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-6"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-sm-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px me-4">
                                        <span class="symbol-label bg-primary">
                                            <i class="ki-duotone ki-ship text-inverse-primary fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-500 fs-6 fw-semibold">Ship Freight</a>
                                            <span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                        </div>
                                        <span class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Timeline-->
                                <div class="timeline">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-cd fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Messina Harbor</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Sicily, Italy</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Hektor Container Hotel</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Tallin, EST</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_list_widget_10_tab_3">
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-sm-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px me-4">
                                        <span class="symbol-label bg-primary">
                                            <i class="ki-duotone ki-ship text-inverse-primary fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-500 fs-6 fw-semibold">Ship Freight</a>
                                            <span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                        </div>
                                        <span class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Timeline-->
                                <div class="timeline">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-cd fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Mina St - Zayed Port</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Abu Dhabi, UAE</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">27 Drydock Boston</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Boston, USA</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-6"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-sm-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px me-4">
                                        <span class="symbol-label bg-primary">
                                            <i class="ki-duotone ki-airplane-square text-inverse-primary fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-500 fs-6 fw-semibold">Plane Freight</a>
                                            <span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                        </div>
                                        <span class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Timeline-->
                                <div class="timeline">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-cd fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">KLM Cargo</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Schipol Airport, Amsterdam</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Singapore Cargo</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Changi Airport, Singapore</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-6"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-sm-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px me-4">
                                        <span class="symbol-label bg-primary">
                                            <i class="ki-duotone ki-ship text-inverse-primary fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-500 fs-6 fw-semibold">Ship Freight</a>
                                            <span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                        </div>
                                        <span class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Timeline-->
                                <div class="timeline">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-cd fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Messina Harbor</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Sicily, Italy</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Hektor Container Hotel</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Tallin, EST</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-6"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-sm-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px me-4">
                                        <span class="symbol-label bg-primary">
                                            <i class="ki-duotone ki-truck text-inverse-primary fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-500 fs-6 fw-semibold">Truck Freight</a>
                                            <span class="text-gray-800 fw-bold d-block fs-4">#0066-954784</span>
                                        </div>
                                        <span class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Timeline-->
                                <div class="timeline">
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center mb-7">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-cd fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Haven van Rotterdam</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Rotterdam, Netherlands</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                    <!--begin::Timeline item-->
                                    <div class="timeline-item align-items-center">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon">
                                            <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content m-0">
                                            <!--begin::Title-->
                                            <span class="fs-6 text-gray-500 fw-semibold d-block">Forest-Midi</span>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <span class="fs-6 fw-bold text-gray-800">Brussels, Belgium</span>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                                    <!--end::Timeline item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Tap pane-->
                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end: Card Body-->
            </div>
            <!--end::List widget 10-->
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
            <!--begin::Timeline-->
            <div class="card">
                <!--begin::Card head-->
                <div class="card-header card-header-stretch">
                    <!--begin::Title-->
                    <div class="card-title d-flex align-items-center">
                        <i class="ki-duotone ki-calendar-8 fs-1 text-primary me-3 lh-0">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                            <span class="path6"></span>
                        </i>
                        <h3 class="fw-bold m-0 text-gray-800">Jan 23, 2023</h3>
                    </div>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar m-0">
                        <!--begin::Tab nav-->
                        <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bold" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a id="kt_activity_today_tab" class="nav-link justify-content-center text-active-gray-800 active" data-bs-toggle="tab" role="tab" href="#kt_activity_today">Today</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="kt_activity_week_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_week">Week</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="kt_activity_month_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_month">Month</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="kt_activity_year_tab" class="nav-link justify-content-center text-active-gray-800 text-hover-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_year">2023</a>
                            </li>
                        </ul>
                        <!--end::Tab nav-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card head-->
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Tab Content-->
                    <div class="tab-content">
                        <!--begin::Tab panel-->
                        <div id="kt_activity_today" class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_activity_today_tab">
                            <!--begin::Timeline-->
                            <div class="timeline timeline-border-dashed">
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-message-text-2 fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                                    <img src="{{ asset('assets/media/avatars/300-14.jpg') }}" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <!--begin::Record-->
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                                <!--begin::Title-->
                                                <a href="apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <div class="min-w-175px pe-2">
                                                    <span class="badge badge-light text-muted">Application Design</span>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Users-->
                                                <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-25px">
                                                        <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="img" />
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-25px">
                                                        <img src="{{ asset('assets/media/avatars/300-14.jpg') }}" alt="img" />
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-25px">
                                                        <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Users-->
                                                <!--begin::Progress-->
                                                <div class="min-w-125px pe-2">
                                                    <span class="badge badge-light-primary">In Progress</span>
                                                </div>
                                                <!--end::Progress-->
                                                <!--begin::Action-->
                                                <a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Record-->
                                            <!--begin::Record-->
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                                <!--begin::Title-->
                                                <a href="apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <div class="min-w-175px">
                                                    <span class="badge badge-light text-muted">CRM System Development</span>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Users-->
                                                <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-25px">
                                                        <img src="{{ asset('assets/media/avatars/300-20.jpg') }}" alt="img" />
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-25px">
                                                        <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Users-->
                                                <!--begin::Progress-->
                                                <div class="min-w-125px">
                                                    <span class="badge badge-light-success">Completed</span>
                                                </div>
                                                <!--end::Progress-->
                                                <!--begin::Action-->
                                                <a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Record-->
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon me-4">
                                        <i class="ki-duotone ki-flag fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n2">
                                        <!--begin::Timeline heading-->
                                        <div class="overflow-auto pe-3">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                                    <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="mb-5 pe-3">
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                                    <img src="{{ asset('assets/media/avatars/300-23.jpg') }}" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                    <!--begin::Icon-->
                                                    <img alt="" class="w-30px me-3" src="{{ asset('assets/media/svg/files/pdf.svg') }}" />
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-500">1.9mb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--begin::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                    <!--begin::Icon-->
                                                    <img alt="apps/projects/project.html" class="w-30px me-3" src="{{ asset('assets/media/svg/files/doc.svg') }}" />
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-500">18kb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center">
                                                    <!--begin::Icon-->
                                                    <img alt="apps/projects/project.html" class="w-30px me-3" src="{{ asset('assets/media/svg/files/css.svg') }}" />
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-500">20mb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Icon-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">Task
                                                <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                                                <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                                    <img src="{{ asset('assets/media/avatars/300-14.jpg') }}" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                                    <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                                <!--begin::Item-->
                                                <div class="overlay me-10">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="{{ asset('assets/media/stock/600x400/img-29.jpg') }}" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="overlay me-10">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="{{ asset('assets/media/stock/600x400/img-31.jpg') }}" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="overlay">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="{{ asset('assets/media/stock/600x400/img-40.jpg') }}" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-sms fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">New case
                                                <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="overflow-auto pb-5">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center mt-1 fs-6">
                                                    <!--begin::Info-->
                                                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                    <!--end::Info-->
                                                    <!--begin::User-->
                                                    <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                                    <img src="{{ asset('assets/media/avatars/300-4.jpg') }}" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <!--begin::Notice-->
                                            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                                <!--begin::Icon-->
                                                <i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                                <!--end::Icon-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                                    <!--begin::Content-->
                                                    <div class="mb-3 mb-md-0 fw-semibold">
                                                        <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
                                                        <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
                                                    </div>
                                                    <!--end::Content-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Notice-->
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-basket fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">New order
                                                <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                            </div>
                            <!--end::Timeline-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_activity_week" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_week_tab">
                            <!--begin::Timeline-->
                            <div class="timeline timeline-border-dashed">
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon me-4">
                                        <i class="ki-duotone ki-flag fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n2">
                                        <!--begin::Timeline heading-->
                                        <div class="overflow-auto pe-3">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                                    <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="mb-5 pe-3">
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                                    <img src="{{ asset('assets/media/avatars/300-23.jpg') }}" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                    <!--begin::Icon-->
                                                    <img alt="" class="w-30px me-3" src="{{ asset('assets/media/svg/files/pdf.svg') }}" />
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-500">1.9mb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--begin::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                    <!--begin::Icon-->
                                                    <img alt="apps/projects/project.html" class="w-30px me-3" src="{{ asset('assets/media/svg/files/doc.svg') }}" />
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-500">18kb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center">
                                                    <!--begin::Icon-->
                                                    <img alt="apps/projects/project.html" class="w-30px me-3" src="{{ asset('assets/media/svg/files/css.svg') }}" />
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-500">20mb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Icon-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">Task
                                                <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                                                <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                                    <img src="{{ asset('assets/media/avatars/300-14.jpg') }}" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                                    <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                                <!--begin::Item-->
                                                <div class="overlay me-10">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="{{ asset('assets/media/stock/600x400/img-29.jpg') }}" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="overlay me-10">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="{{ asset('assets/media/stock/600x400/img-31.jpg') }}" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="overlay">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="{{ asset('assets/media/stock/600x400/img-40.jpg') }}" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-sms fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">New case
                                                <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="overflow-auto pb-5">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center mt-1 fs-6">
                                                    <!--begin::Info-->
                                                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                    <!--end::Info-->
                                                    <!--begin::User-->
                                                    <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                            </div>
                            <!--end::Timeline-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_activity_month" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_month_tab">
                            <!--begin::Timeline-->
                            <div class="timeline timeline-border-dashed">
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                                    <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                                <!--begin::Item-->
                                                <div class="overlay me-10">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="{{ asset('assets/media/stock/600x400/img-29.jpg') }}" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="overlay me-10">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="{{ asset('assets/media/stock/600x400/img-31.jpg') }}" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="overlay">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="{{ asset('assets/media/stock/600x400/img-40.jpg') }}" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-sms fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">New case
                                                <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="overflow-auto pb-5">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center mt-1 fs-6">
                                                    <!--begin::Info-->
                                                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                    <!--end::Info-->
                                                    <!--begin::User-->
                                                    <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-basket fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">New order
                                                <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon me-4">
                                        <i class="ki-duotone ki-flag fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n2">
                                        <!--begin::Timeline heading-->
                                        <div class="overflow-auto pe-3">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                                    <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="mb-5 pe-3">
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                                    <img src="{{ asset('assets/media/avatars/300-23.jpg') }}" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                    <!--begin::Icon-->
                                                    <img alt="" class="w-30px me-3" src="{{ asset('assets/media/svg/files/pdf.svg') }}" />
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-500">1.9mb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--begin::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                    <!--begin::Icon-->
                                                    <img alt="apps/projects/project.html" class="w-30px me-3" src="{{ asset('assets/media/svg/files/doc.svg') }}" />
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-500">18kb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center">
                                                    <!--begin::Icon-->
                                                    <img alt="apps/projects/project.html" class="w-30px me-3" src="{{ asset('assets/media/svg/files/css.svg') }}" />
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-500">20mb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Icon-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">Task
                                                <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                                                <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                                    <img src="{{ asset('assets/media/avatars/300-14.jpg') }}" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                            </div>
                            <!--end::Timeline-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_activity_year" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_year_tab">
                            <!--begin::Timeline-->
                            <div class="timeline timeline-border-dashed">
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="mb-5 pe-3">
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                                    <img src="{{ asset('assets/media/avatars/300-23.jpg') }}" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                    <!--begin::Icon-->
                                                    <img alt="" class="w-30px me-3" src="{{ asset('assets/media/svg/files/pdf.svg') }}" />
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-500">1.9mb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--begin::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                    <!--begin::Icon-->
                                                    <img alt="apps/projects/project.html" class="w-30px me-3" src="{{ asset('assets/media/svg/files/doc.svg') }}" />
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-500">18kb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center">
                                                    <!--begin::Icon-->
                                                    <img alt="apps/projects/project.html" class="w-30px me-3" src="{{ asset('assets/media/svg/files/css.svg') }}" />
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-500">20mb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Icon-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">Task
                                                <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                                                <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                                    <img src="{{ asset('assets/media/avatars/300-14.jpg') }}" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                                    <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="img" />
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                                <!--begin::Item-->
                                                <div class="overlay me-10">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="{{ asset('assets/media/stock/600x400/img-29.jpg') }}" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="overlay me-10">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="{{ asset('assets/media/stock/600x400/img-31.jpg') }}" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="overlay">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="{{ asset('assets/media/stock/600x400/img-40.jpg') }}" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-sms fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">New case
                                                <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="overflow-auto pb-5">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center mt-1 fs-6">
                                                    <!--begin::Info-->
                                                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                    <!--end::Info-->
                                                    <!--begin::User-->
                                                    <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-duotone ki-basket fs-2 text-gray-500">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">New order
                                                <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                            </div>
                            <!--end::Timeline-->
                        </div>
                        <!--end::Tab panel-->
                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Timeline-->
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
    <!--end::Social - Activity-->

</x-default-layout>
