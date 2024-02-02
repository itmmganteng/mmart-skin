<x-default-layout>

    @section('title')
        Bidding
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard.bidding') }}
    @endsection

    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-xxl-6">
            <!--begin::Card widget 15-->
            <div class="card card-flush h-xl-100">
                <!--begin::Body-->
                <div class="card-body py-9">
                    <!--begin::Row-->
                    <div class="row gx-9 h-100">
                        <!--begin::Col-->
                        <div class="col-sm-6 mb-10 mb-sm-0">
                            <!--begin::Overlay-->
                            <a class="d-block overlay h-100" data-fslightbox="lightbox-hot-sales" href="{{ asset('assets/media/stock/600x600/img-42.jpg') }}">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-200px h-100" style="background-image:url('{{ asset('assets/media/stock/600x600/img-42.jpg') }}')"></div>
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
                            <!--end::Overlay-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column h-100">
                                <!--begin::Header-->
                                <div class="mb-7">
                                    <!--begin::Title-->
                                    <div class="mb-6">
                                        <span class="text-gray-500 fs-7 fw-bold me-2 d-block lh-1 pb-1">NFT ID: 34356776</span>
                                        <a href="apps/projects/users.html" class="text-gray-800 text-hover-primary fs-1 fw-bold">California Art</a>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Items-->
                                    <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center me-5 me-xl-13">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" class="" alt="" />
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <span class="fw-semibold text-gray-500 d-block fs-8">Creator</span>
                                                <a href="apps/projects/users.html" class="fw-bold text-gray-800 text-hover-primary fs-7">Robert Fox</a>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                <span class="symbol-label bg-success">
                                                    <i class="ki-duotone ki-abstract-41 fs-5 text-white">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <span class="fw-semibold text-gray-500 d-block fs-8">Instant Price</span>
                                                <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-7">4.2 ETH</a>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="d-flex flex-column border border-1 border-gray-300 text-center pt-5 pb-7 mb-8 card-rounded">
                                    <span class="fw-semibold text-gray-600 fs-7 pb-1">Last Bid</span>
                                    <span class="fw-bold text-gray-800 fs-2hx lh-1 pb-1">2.48 ETH</span>
                                    <span class="fw-bold text-gray-600 fs-4 pb-5">$6,047.84</span>
                                    <span class="fw-semibold text-gray-600 fs-7 pb-1">Ending in</span>
                                    <span class="fw-bold text-gray-800 fs-3">06h 52m 47s</span>
                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->
                                <div class="d-flex flex-stack mt-auto bd-highlight">
                                    <!--begin::Actions-->
                                    <a href="#" class="btn btn-primary btn-sm flex-shrink-0 me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_bidding">Place a Bid</a>
                                    <a href="#" class="btn btn-light btn-sm flex-shrink-0" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">View Item</a>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Footer-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card widget 15-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-sm-6 col-xxl-3">
            <!--begin::Card widget 14-->
            <div class="card card-flush h-xl-100">
                <!--begin::Body-->
                <div class="card-body text-center pb-5">
                    <!--begin::Overlay-->
                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ asset('assets/media/stock/600x600/img-39.jpg') }}">
                        <!--begin::Image-->
                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7" style="height: 266px;background-image:url('{{ asset('assets/media/stock/600x600/img-39.jpg') }}"></div>
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
                    <!--end::Overlay-->
                    <!--begin::Info-->
                    <div class="d-flex align-items-end flex-stack mb-1">
                        <!--begin::Title-->
                        <div class="text-start">
                            <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">Wavy Curved Art</span>
                            <span class="text-gray-500 mt-1 fw-bold fs-6">Last Bid: 1.07 ETH</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Total-->
                        <span class="text-gray-600 text-end fw-bold fs-6">$2,630</span>
                        <!--end::Total-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Body-->
                <!--begin::Footer-->
                <div class="card-footer d-flex flex-stack pt-0">
                    <!--begin::Link-->
                    <a class="btn btn-sm btn-primary flex-shrink-0 me-2" data-bs-target="#kt_modal_bidding" data-bs-toggle="modal">Place a Bid</a>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <a class="btn btn-sm btn-light flex-shrink-0" href="apps/ecommerce/sales/listing.html">View Item</a>
                    <!--end::Link-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Card widget 14-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-sm-6 col-xxl-3">
            <!--begin::Card widget 14-->
            <div class="card card-flush h-xl-100">
                <!--begin::Body-->
                <div class="card-body text-center pb-5">
                    <!--begin::Overlay-->
                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ asset('assets/media/stock/600x600/img-47.jpg') }}">
                        <!--begin::Image-->
                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7" style="height: 266px;background-image:url('{{ asset('assets/media/stock/600x600/img-47.jpg') }}"></div>
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
                    <!--end::Overlay-->
                    <!--begin::Info-->
                    <div class="d-flex align-items-end flex-stack mb-1">
                        <!--begin::Title-->
                        <div class="text-start">
                            <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block">Happy Kitty Art</span>
                            <span class="text-gray-500 mt-1 fw-bold fs-6">Last Bid: 7.83 ETH</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Total-->
                        <span class="text-gray-600 text-end fw-bold fs-6">$17,035</span>
                        <!--end::Total-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Body-->
                <!--begin::Footer-->
                <div class="card-footer d-flex flex-stack pt-0">
                    <!--begin::Link-->
                    <a class="btn btn-sm btn-primary flex-shrink-0 me-2" data-bs-target="#kt_modal_bidding" data-bs-toggle="modal">Place a Bid</a>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <a class="btn btn-sm btn-light flex-shrink-0" href="apps/ecommerce/sales/listing.html">View Item</a>
                    <!--end::Link-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Card widget 14-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Chart Widget 33-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-5 mb-6">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <!--begin::Statistics-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Currency-->
                            <span class="fs-3 fw-semibold text-gray-500 align-self-start me-1">$</span>
                            <!--end::Currency-->
                            <!--begin::Value-->
                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>
                            <!--end::Value-->
                            <!--begin::Label-->
                            <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>9.2%</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Statistics-->
                        <!--begin::Description-->
                        <span class="fs-6 fw-semibold text-gray-500">Etherium rate</span>
                        <!--end::Description-->
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
                <div class="card-body py-0 px-0">
                    <!--begin::Nav-->
                    <ul class="nav d-flex justify-content-between mb-3 mx-9">
                        <!--begin::Item-->
                        <li class="nav-item mb-3">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active" data-bs-toggle="tab" id="kt_charts_widget_33_tab_1" href="#kt_charts_widget_33_tab_content_1">1d</a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_33_tab_2" href="#kt_charts_widget_33_tab_content_2">5d</a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_33_tab_3" href="#kt_charts_widget_33_tab_content_3">1m</a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_33_tab_4" href="#kt_charts_widget_33_tab_content_4">6m</a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_33_tab_5" href="#kt_charts_widget_33_tab_content_5">1y</a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Nav-->
                    <!--begin::Tab Content-->
                    <div class="tab-content mt-n6">
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade active show" id="kt_charts_widget_33_tab_content_1">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_33_chart_1" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->
                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-danger">-139.34</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:10 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-success">+576.24</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:55 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-success">+124.03</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_charts_widget_33_tab_content_2">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_33_chart_2" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->
                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-success">+231.01</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-primary">+233.07</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,145.55</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-danger">+134.06</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_charts_widget_33_tab_content_3">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_33_chart_3" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->
                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">12:40 AM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,346.25</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-warning">+134.57</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">11:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$1,565.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-danger">+155.03</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">4:25 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-success">+124.03</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_charts_widget_33_tab_content_4">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_33_chart_4" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->
                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:20 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-danger">+234.03</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">10:30 AM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$1,474.04</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-info">-134.03</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">1:30 AM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-primary">+124.03</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_charts_widget_33_tab_content_5">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_33_chart_5" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->
                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.25</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-primary">+144.04</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-danger">+124.03</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">12:30 AM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,034.65</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-success">+184.05</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Chart Widget 33-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-8">
            <!--begin::Table widget 12-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Active Auctions</span>
                        <span class="text-gray-500 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <a href="apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">History</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                    <th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
                                    <th class="p-0 pb-3 min-w-100px text-end">OPEN PRICE</th>
                                    <th class="p-0 pb-3 min-w-100px text-end">YOUR OFFER</th>
                                    <th class="p-0 pb-3 min-w-125px text-end">RECENT OFFER</th>
                                    <th class="p-0 pb-3 min-w-100px text-end">TIME LEFT</th>
                                    <th class="p-0 pb-3 w-80px text-end">VIEW</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="{{ asset('assets/media/stock/600x600/img-49.jpg') }}" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">The Art</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Jenny Wilson</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">0.054 ETH</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">0.089 ETH</span>
                                    </td>
                                    <td class="pe-0">
                                        <div class="d-flex align-items-center justify-content-end">
                                            <div class="symbol symbol-30px me-3">
                                                <img src="{{ asset('assets/media/avatars/300-13.jpg') }}" class="" alt="" />
                                            </div>
                                            <span class="text-gray-600 fw-bold d-block fs-6">0.089 ETH</span>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">1h 43m 52s</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="{{ asset('assets/media/stock/600x600/img-43.jpg') }}" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Blue Bubble Art</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Guy Hawkins</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">1.830 ETH</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">2.451 ETH</span>
                                    </td>
                                    <td class="pe-0">
                                        <div class="d-flex align-items-center justify-content-end">
                                            <div class="symbol symbol-30px me-3">
                                                <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" class="" alt="" />
                                            </div>
                                            <span class="text-gray-600 fw-bold d-block fs-6">3.083 ETH</span>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">4h 28m 07s</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="{{ asset('assets/media/stock/600x600/img-46.jpg') }}" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Color Face Art</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Wade Warren</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">0.043 ETH</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">0.124 ETH</span>
                                    </td>
                                    <td class="pe-0">
                                        <div class="d-flex align-items-center justify-content-end">
                                            <div class="symbol symbol-30px me-3">
                                                <img src="{{ asset('assets/media/avatars/300-11.jpg') }}" class="" alt="" />
                                            </div>
                                            <span class="text-gray-600 fw-bold d-block fs-6">1.058 ETH</span>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">5h 09m 23s</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="{{ asset('assets/media/stock/600x600/img-54.jpg') }}" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Blue to Orange Art</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Jane Cooper</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">0.092 ETH</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">0.158 ETH</span>
                                    </td>
                                    <td class="pe-0">
                                        <div class="d-flex align-items-center justify-content-end">
                                            <div class="symbol symbol-30px me-3">
                                                <img src="{{ asset('assets/media/avatars/300-10.jpg') }}" class="" alt="" />
                                            </div>
                                            <span class="text-gray-600 fw-bold d-block fs-6">0.403 ETH</span>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">7h 23m 16s</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="{{ asset('assets/media/stock/600x600/img-45.jpg') }}" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Awesome Bird Art</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Jacob Jones</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">0.824 ETH</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">1.072 ETH</span>
                                    </td>
                                    <td class="pe-0">
                                        <div class="d-flex align-items-center justify-content-end">
                                            <div class="symbol symbol-30px me-3">
                                                <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" class="" alt="" />
                                            </div>
                                            <span class="text-gray-600 fw-bold d-block fs-6">1.094 ETH</span>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">36h 18m 42s</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end: Card Body-->
            </div>
            <!--end::Table widget 12-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::List widget 23-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Lading Teams</span>
                        <span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar"></div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-5">
                    <!--begin::Items-->
                    <div class="">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-5">
                                <!--begin::Flag-->
                                <img src="{{ asset('assets/media/svg/brand-logos/atica.svg') }}" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <!--end::Flag-->
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-4 me-3">579</span>
                                <!--end::Number-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Label-->
                                    <span class="badge badge-light-success fs-base">
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>2.6%</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-3"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-5">
                                <!--begin::Flag-->
                                <img src="{{ asset('assets/media/svg/brand-logos/telegram-2.svg') }}" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <!--end::Flag-->
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Binford Ltd.</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
                                <!--end::Number-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Label-->
                                    <span class="badge badge-light-danger fs-base">
                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>0.4%</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-3"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-5">
                                <!--begin::Flag-->
                                <img src="{{ asset('assets/media/svg/brand-logos/balloon.svg') }}" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <!--end::Flag-->
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Barone LLC.</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                                <!--end::Number-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Label-->
                                    <span class="badge badge-light-success fs-base">
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>0.2%</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-3"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-5">
                                <!--begin::Flag-->
                                <img src="{{ asset('assets/media/svg/brand-logos/kickstarter.svg') }}" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <!--end::Flag-->
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
                                <!--end::Number-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Label-->
                                    <span class="badge badge-light-success fs-base">
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>4.1%</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-3"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-5">
                                <!--begin::Flag-->
                                <img src="{{ asset('assets/media/svg/brand-logos/vimeo.svg') }}" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <!--end::Flag-->
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Biffco Enterprises</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
                                <!--end::Number-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Label-->
                                    <span class="badge badge-light-success fs-base">
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>8.3%</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-3"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-5">
                                <!--begin::Flag-->
                                <img src="{{ asset('assets/media/svg/brand-logos/plurk.svg') }}" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <!--end::Flag-->
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Big Kahuna Burger</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
                                <!--end::Number-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Label-->
                                    <span class="badge badge-light-success fs-base">
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>1.9%</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Items-->
                </div>
                <!--end: Card Body-->
            </div>
            <!--end::List widget 23-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-8">
            <!--begin::Table widget 13-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Most Popular Sellers</span>
                        <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 424,567 deliveries</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
                            <!--begin::Display range-->
                            <div class="text-gray-600 fw-bold">Loading date range...</div>
                            <!--end::Display range-->
                            <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                            </i>
                        </div>
                        <!--end::Daterangepicker-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-3 pb-4">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                    <th class="p-0 min-w-200px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-125px"></th>
                                    <th class="p-0 min-w-125px"></th>
                                    <th class="p-0 w-100px"></th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol- symbol-40px me-3">
                                                <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="account/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Zuid Area</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td class="float-end text-end border-0">
                                        <div class="rating">
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                        </div>
                                        <span class="text-gray-500 fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol- symbol-40px me-3">
                                                <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="account/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Zuid Area</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td class="float-end text-end border-0">
                                        <div class="rating">
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                        </div>
                                        <span class="text-gray-500 fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol- symbol-40px me-3">
                                                <img src="{{ asset('assets/media/avatars/300-12.jpg') }}" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="account/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Zuid Area</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td class="float-end text-end border-0">
                                        <div class="rating">
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                        </div>
                                        <span class="text-gray-500 fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol- symbol-40px me-3">
                                                <img src="{{ asset('assets/media/avatars/300-11.jpg') }}" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="account/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Zuid Area</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td class="float-end text-end border-0">
                                        <div class="rating">
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                        </div>
                                        <span class="text-gray-500 fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol- symbol-40px me-3">
                                                <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="account/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Zuid Area</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td class="float-end text-end border-0">
                                        <div class="rating">
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label checked">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                        </div>
                                        <span class="text-gray-500 fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table container-->
                </div>
                <!--end: Card Body-->
            </div>
            <!--end::Table widget 13-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Engage widget 1-->
            <div class="card h-md-100" dir="ltr">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column flex-center">
                    <!--begin::Heading-->
                    <div class="mb-2">
                        <!--begin::Title-->
                        <h1 class="fw-semibold text-gray-800 text-center lh-lg">Have your tried
                        <br />new
                        <span class="fw-bolder">Invoice Manager?</span></h1>
                        <!--end::Title-->
                        <!--begin::Illustration-->
                        <div class="py-10 text-center">
                            <img src="{{ asset('assets/media/svg/illustrations/easy/2.svg') }}" class="theme-light-show w-200px" alt="" />
                            <img src="{{ asset('assets/media/svg/illustrations/easy/2-dark.svg') }}" class="theme-dark-show w-200px" alt="" />
                        </div>
                        <!--end::Illustration-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Links-->
                    <div class="text-center mb-1">
                        <!--begin::Link-->
                        <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_create_app" data-bs-toggle="modal">Try Now</a>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <a class="btn btn-sm btn-light" href="account/settings.html">Learn More</a>
                        <!--end::Link-->
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Engage widget 1-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-8">
            <!--begin::Table Widget 4-->
            <div class="card card-flush h-xl-100">
                <!--begin::Card header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">My Sales in Details</span>
                        <span class="text-gray-500 mt-1 fw-semibold fs-6">Avg. 57 orders per day</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Actions-->
                    <div class="card-toolbar">
                        <!--begin::Filters-->
                        <div class="d-flex flex-stack flex-wrap gap-4">
                            <!--begin::Destination-->
                            <div class="d-flex align-items-center fw-bold">
                                <!--begin::Label-->
                                <div class="text-gray-500 fs-7 me-2">Cateogry</div>
                                <!--end::Label-->
                                <!--begin::Select-->
                                <select class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                    <option></option>
                                    <option value="Show All" selected="selected">Show All</option>
                                    <option value="a">Category A</option>
                                    <option value="b">Category A</option>
                                </select>
                                <!--end::Select-->
                            </div>
                            <!--end::Destination-->
                            <!--begin::Status-->
                            <div class="d-flex align-items-center fw-bold">
                                <!--begin::Label-->
                                <div class="text-gray-500 fs-7 me-2">Status</div>
                                <!--end::Label-->
                                <!--begin::Select-->
                                <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-4="filter_status">
                                    <option></option>
                                    <option value="Show All" selected="selected">Show All</option>
                                    <option value="Shipped">Shipped</option>
                                    <option value="Confirmed">Confirmed</option>
                                    <option value="Rejected">Rejected</option>
                                    <option value="Pending">Pending</option>
                                </select>
                                <!--end::Select-->
                            </div>
                            <!--end::Status-->
                            <!--begin::Search-->
                            <div class="position-relative my-1">
                                <i class="ki-duotone ki-magnifier fs-2 position-absolute top-50 translate-middle-y ms-4">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="text" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12" placeholder="Search" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Filters-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-2">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-100px">Order ID</th>
                                <th class="text-end min-w-100px">Created</th>
                                <th class="text-end min-w-125px">Customer</th>
                                <th class="text-end min-w-100px">Total</th>
                                <th class="text-end min-w-100px">Profit</th>
                                <th class="text-end min-w-50px">Status</th>
                                <th class="text-end"></th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            <tr data-kt-table-widget-4="subtable_template" class="d-none">
                                <td colspan="2">
                                    <div class="d-flex align-items-center gap-3">
                                        <a href="#" class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                            <img src="" data-kt-src-path="{{ asset('assets/media/stock/ecommerce/') }}/" alt="" data-kt-table-widget-4="template_image" />
                                        </a>
                                        <div class="d-flex flex-column text-muted">
                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold" data-kt-table-widget-4="template_name">Product name</a>
                                            <div class="fs-7" data-kt-table-widget-4="template_description">Product description</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="text-gray-800 fs-7">Cost</div>
                                    <div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_cost">1</div>
                                </td>
                                <td class="text-end">
                                    <div class="text-gray-800 fs-7">Qty</div>
                                    <div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_qty">1</div>
                                </td>
                                <td class="text-end">
                                    <div class="text-gray-800 fs-7">Total</div>
                                    <div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_total">name</div>
                                </td>
                                <td class="text-end">
                                    <div class="text-gray-800 fs-7 me-3">On hand</div>
                                    <div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_stock">32</div>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGY-346</a>
                                </td>
                                <td class="text-end">7 min ago</td>
                                <td class="text-end">
                                    <a href="#" class="text-gray-600 text-hover-primary">Albert Flores</a>
                                </td>
                                <td class="text-end">$630.00</td>
                                <td class="text-end">
                                    <span class="text-gray-800 fw-bolder">$86.70</span>
                                </td>
                                <td class="text-end">
                                    <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                </td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                        <i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
                                        <i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#YHD-047</a>
                                </td>
                                <td class="text-end">52 min ago</td>
                                <td class="text-end">
                                    <a href="#" class="text-gray-600 text-hover-primary">Jenny Wilson</a>
                                </td>
                                <td class="text-end">$25.00</td>
                                <td class="text-end">
                                    <span class="text-gray-800 fw-bolder">$4.20</span>
                                </td>
                                <td class="text-end">
                                    <span class="badge py-3 px-4 fs-7 badge-light-primary">Confirmed</span>
                                </td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                        <i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
                                        <i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SRR-678</a>
                                </td>
                                <td class="text-end">1 hour ago</td>
                                <td class="text-end">
                                    <a href="#" class="text-gray-600 text-hover-primary">Robert Fox</a>
                                </td>
                                <td class="text-end">$1,630.00</td>
                                <td class="text-end">
                                    <span class="text-gray-800 fw-bolder">$203.90</span>
                                </td>
                                <td class="text-end">
                                    <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                </td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                        <i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
                                        <i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#PXF-534</a>
                                </td>
                                <td class="text-end">3 hour ago</td>
                                <td class="text-end">
                                    <a href="#" class="text-gray-600 text-hover-primary">Cody Fisher</a>
                                </td>
                                <td class="text-end">$119.00</td>
                                <td class="text-end">
                                    <span class="text-gray-800 fw-bolder">$12.00</span>
                                </td>
                                <td class="text-end">
                                    <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                </td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                        <i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
                                        <i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGD-249</a>
                                </td>
                                <td class="text-end">2 day ago</td>
                                <td class="text-end">
                                    <a href="#" class="text-gray-600 text-hover-primary">Arlene McCoy</a>
                                </td>
                                <td class="text-end">$660.00</td>
                                <td class="text-end">
                                    <span class="text-gray-800 fw-bolder">$52.26</span>
                                </td>
                                <td class="text-end">
                                    <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                </td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                        <i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
                                        <i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SKP-035</a>
                                </td>
                                <td class="text-end">2 day ago</td>
                                <td class="text-end">
                                    <a href="#" class="text-gray-600 text-hover-primary">Eleanor Pena</a>
                                </td>
                                <td class="text-end">$290.00</td>
                                <td class="text-end">
                                    <span class="text-gray-800 fw-bolder">$29.00</span>
                                </td>
                                <td class="text-end">
                                    <span class="badge py-3 px-4 fs-7 badge-light-danger">Rejected</span>
                                </td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                        <i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
                                        <i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SKP-567</a>
                                </td>
                                <td class="text-end">7 min ago</td>
                                <td class="text-end">
                                    <a href="#" class="text-gray-600 text-hover-primary">Dan Wilson</a>
                                </td>
                                <td class="text-end">$590.00</td>
                                <td class="text-end">
                                    <span class="text-gray-800 fw-bolder">$50.00</span>
                                </td>
                                <td class="text-end">
                                    <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                </td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                        <i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
                                        <i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Table Widget 4-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
</x-default-layout>
