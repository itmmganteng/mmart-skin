<x-default-layout>
    @section('title')
        Logistics
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard.logistics') }}
    @endsection

    <!--begin::Row-->
    <div class="row gy-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4 mb-xl-10">
            <!--begin::Engage widget 1-->
            <div class="card h-md-100" dir="ltr">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column flex-center">
                    <!--begin::Heading-->
                    <div class="mb-2">
                        <!--begin::Title-->
                        <h1 class="fw-semibold text-gray-800 text-center lh-lg">Quick form to
                        <br />
                        <span class="fw-bolder">Bid a New Shipment</span></h1>
                        <!--end::Title-->
                        <!--begin::Illustration-->
                        <div class="py-10 text-center">
                            <img src="{{ asset('assets/media/svg/illustrations/easy/3.svg') }}" class="theme-light-show w-200px" alt="" />
                            <img src="{{ asset('assets/media/svg/illustrations/easy/3-dark.svg') }}" class="theme-dark-show w-200px" alt="" />
                        </div>
                        <!--end::Illustration-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Links-->
                    <div class="text-center mb-1">
                        <!--begin::Link-->
                        <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_bidding" data-bs-toggle="modal">Start Now</a>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <a class="btn btn-sm btn-light" href="apps/invoices/view/invoice-2.html">Quick Guide</a>
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
        <div class="col-xl-8 mb-5 mb-xl-10">
            <!--begin::Row-->
            <div class="row g-lg-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-md-6 col-xl-6 mb-5 mb-xl-10">
                    <!--begin::Card widget 12-->
                    <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                            <!--begin::Statistics-->
                            <div class="mb-4 px-9">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Value-->
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">47,769,700</span>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <span class="d-flex align-items-end text-gray-500 fs-6 fw-semibold">Tons</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Description-->
                                <span class="fs-6 fw-semibold text-gray-500">Total Online Sales</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Statistics-->
                            <!--begin::Chart-->
                            <div id="kt_card_widget_12_chart" class="min-h-auto" style="height: 125px"></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 12-->
                    <!--begin::Card widget 10-->
                    <div class="card card-flush h-md-50 mb-lg-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Amount-->
                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">69,700</span>
                                <!--end::Amount-->
                                <!--begin::Subtitle-->
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">Expected Earnings This Month</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-0">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center flex-wrap">
                                <!--begin::Chart-->
                                <div class="d-flex me-7 me-xxl-10">
                                    <div id="kt_card_widget_10_chart" class="min-h-auto" style="height: 78px; width: 78px" data-kt-size="78" data-kt-line="11"></div>
                                </div>
                                <!--end::Chart-->
                                <!--begin::Labels-->
                                <div class="d-flex flex-column content-justify-center flex-grow-1">
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-6px rounded-2 bg-success me-3"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="fs-6 fw-semibold text-gray-500 flex-shrink-0">Used Truck freight</div>
                                        <!--end::Label-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed min-w-10px flex-grow-1 mx-2"></div>
                                        <!--end::Separator-->
                                        <!--begin::Stats-->
                                        <div class="ms-auto fw-bolder text-gray-700 text-end">45%</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center my-1">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="fs-6 fw-semibold text-gray-500 flex-shrink-0">Used Ship freight</div>
                                        <!--end::Label-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed min-w-10px flex-grow-1 mx-2"></div>
                                        <!--end::Separator-->
                                        <!--begin::Stats-->
                                        <div class="ms-auto fw-bolder text-gray-700 text-end">21%</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="fs-6 fw-semibold text-gray-500 flex-shrink-0">Used Plane freight</div>
                                        <!--end::Label-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed min-w-10px flex-grow-1 mx-2"></div>
                                        <!--end::Separator-->
                                        <!--begin::Stats-->
                                        <div class="ms-auto fw-bolder text-gray-700 text-end">34%</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Labels-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 10-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-xl-6 mb-md-5 mb-xl-10">
                    <!--begin::Card widget 13-->
                    <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                            <!--begin::Statistics-->
                            <div class="mb-4 px-9">
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Value-->
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">259,786</span>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <!--end::Label-->
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Description-->
                                <span class="fs-6 fw-semibold text-gray-500">Total Shipments</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Statistics-->
                            <!--begin::Chart-->
                            <div id="kt_card_widget_13_chart" class="min-h-auto" style="height: 125px"></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 13-->
                    <!--begin::Card widget 7-->
                    <div class="card card-flush h-md-50 mb-lg-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Amount-->
                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">604</span>
                                <!--end::Amount-->
                                <!--begin::Subtitle-->
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">New Customers This Month</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-column justify-content-end pe-0">
                            <!--begin::Title-->
                            <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
                            <!--end::Title-->
                            <!--begin::Users group-->
                            <div class="symbol-group symbol-hover flex-nowrap">
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                    <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                    <img alt="Pic" src="{{ asset('assets/media/avatars/300-11.jpg') }}" />
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                    <img alt="Pic" src="{{ asset('assets/media/avatars/300-2.jpg') }}" />
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                    <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                    <img alt="Pic" src="{{ asset('assets/media/avatars/300-12.jpg') }}" />
                                </div>
                                <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                    <span class="symbol-label bg-light text-gray-400 fs-8 fw-bold">+42</span>
                                </a>
                            </div>
                            <!--end::Users group-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 7-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row gy-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4 mb-xl-10">
            <!--begin::List widget 10-->
            <div class="card card-flush h-lg-100">
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
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-8 mb-5 mb-xl-10">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 h-xxl-50 mb-0 mb-xl-10">
                <!--begin::Col-->
                <div class="col-xxl-6">
                    <!--begin::Chart widget 6-->
                    <div class="card card-flush h-lg-100">
                        <!--begin::Header-->
                        <div class="card-header py-7 mb-3">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Top Selling Categories</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="apps/ecommerce/sales/listing.html" class="btn btn-sm btn-light">View All</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-0 ps-6 mt-n12">
                            <div id="kt_charts_widget_6"></div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Chart widget 6-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xxl-6 mb-5 mb-xl-0">
                    <!--begin::List widget 8-->
                    <div class="card card-flush h-lg-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7 mb-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Visits by Country</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">20 countries share 97% visits</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="apps/ecommerce/sales/listing.html" class="btn btn-sm btn-light">View All</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <!--begin::Items-->
                            <div class="m-0">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="{{ asset('assets/media/flags/united-states.svg') }}" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">United States</a>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct link clicks</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-6 me-3 d-block">9,763</span>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>2.6%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="{{ asset('assets/media/flags/brazil.svg') }}" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Brasil</a>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">All Social Channels</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-6 me-3 d-block">4,062</span>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-danger fs-base">
                                                <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>0.4%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="{{ asset('assets/media/flags/turkey.svg') }}" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Turkey</a>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Mailchimp Campaigns</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-6 me-3 d-block">1,680</span>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>0.2%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="{{ asset('assets/media/flags/france.svg') }}" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">France</a>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Impact Radius visits</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-6 me-3 d-block">849</span>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>4.1%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="{{ asset('assets/media/flags/india.svg') }}" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">India</a>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Many Sources</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-6 me-3 d-block">604</span>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-danger fs-base">
                                                <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>8.3%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="{{ asset('assets/media/flags/sweden.svg') }}" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Sweden</a>
                                            <!--end::Title-->
                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-6 me-3 d-block">237</span>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>1.9%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::LIst widget 8-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row h-xxl-50">
                <!--begin::Col-->
                <div class="col">
                    <!--begin::Chart widget 10-->
                    <div class="card card-flush h-xxl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Freight Tonnage</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">3,567,457 tons</span>
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
                        <div class="card-body d-flex flex-column justify-content-between pb-5 px-0">
                            <!--begin::Nav-->
                            <ul class="nav nav-pills nav-pills-custom mb-3 mx-9">
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" data-bs-toggle="pill" id="kt_charts_widget_10_tab_1" href="#kt_charts_widget_10_tab_content_1">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="ki-duotone ki-ship fs-1 p-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Ship</span>
                                        <!--end::Title-->
                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_10_tab_2" href="#kt_charts_widget_10_tab_content_2">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="ki-duotone ki-truck fs-1 p-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Truck</span>
                                        <!--end::Title-->
                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_10_tab_3" href="#kt_charts_widget_10_tab_content_3">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="ki-duotone ki-airplane-square fs-1 p-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Plane</span>
                                        <!--end::Title-->
                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_10_tab_4" href="#kt_charts_widget_10_tab_content_4">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="ki-duotone ki-bus fs-1 p-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Train</span>
                                        <!--end::Title-->
                                        <!--begin::Bullet-->
                                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav-->
                            <!--begin::Tab Content-->
                            <div class="tab-content ps-4 pe-6">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade active show" id="kt_charts_widget_10_tab_content_1">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_10_chart_1" class="min-h-auto" style="height: 270px"></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_charts_widget_10_tab_content_2">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_10_chart_2" class="min-h-auto" style="height: 270px"></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_charts_widget_10_tab_content_3">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_10_chart_3" class="min-h-auto" style="height: 270px"></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_charts_widget_10_tab_content_4">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_10_chart_4" class="min-h-auto" style="height: 270px"></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Chart widget 10-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row gy-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::List widget 11-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-7 mb-3">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Our Fleet Tonnage</span>
                        <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 1,247 vehicles</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle='tooltip' data-bs-dismiss='click' data-bs-custom-class="tooltip-inverse" title="Logistics App is coming soon">Review Fleet</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-4">
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-5">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                                <span class="symbol-label">
                                    <i class="ki-duotone ki-ship text-gray-600 fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Content-->
                            <div class="me-5">
                                <!--begin::Title-->
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Ships</a>
                                <!--end::Title-->
                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">234 Ships</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Wrapper-->
                        <div class="text-gray-500 fw-bold fs-7 text-end">
                        <!--begin::Number-->
                        <span class="text-gray-800 fw-bold fs-6 d-block">2,345,500</span>
                        <!--end::Number-->Tons</div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-5">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                                <span class="symbol-label">
                                    <i class="ki-duotone ki-truck text-gray-600 fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Content-->
                            <div class="me-5">
                                <!--begin::Title-->
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Trucks</a>
                                <!--end::Title-->
                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">1,460 Trucks</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Wrapper-->
                        <div class="text-gray-500 fw-bold fs-7 text-end">
                        <!--begin::Number-->
                        <span class="text-gray-800 fw-bold fs-6 d-block">457,200</span>
                        <!--end::Number-->Tons</div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-5">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                                <span class="symbol-label">
                                    <i class="ki-duotone ki-airplane-square text-gray-600 fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Content-->
                            <div class="me-5">
                                <!--begin::Title-->
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Planes</a>
                                <!--end::Title-->
                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">8 Aircrafts</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Wrapper-->
                        <div class="text-gray-500 fw-bold fs-7 text-end">
                        <!--begin::Number-->
                        <span class="text-gray-800 fw-bold fs-6 d-block">1,240</span>
                        <!--end::Number-->Tons</div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-5">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                                <span class="symbol-label">
                                    <i class="ki-duotone ki-bus text-gray-600 fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Content-->
                            <div class="me-5">
                                <!--begin::Title-->
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Trains</a>
                                <!--end::Title-->
                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">36 Trains</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Wrapper-->
                        <div class="text-gray-500 fw-bold fs-7 text-end">
                        <!--begin::Number-->
                        <span class="text-gray-800 fw-bold fs-6 d-block">804,300</span>
                        <!--end::Number-->Tons</div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Item-->
                    <div class="text-center pt-9">
                        <a href="apps/ecommerce/catalog/add-product.html" class="btn btn-primary">Add Vehicle</a>
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::List widget 11-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-8">
            <!--begin::Chart widget 17-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">Sales Statistics</span>
                        <span class="text-gray-500 pt-2 fw-semibold fs-6">Top Selling Countries</span>
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
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-100px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Remove</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Mute</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-5">
                    <!--begin::Chart container-->
                    <div id="kt_charts_widget_16_chart" class="w-100 h-350px"></div>
                    <!--end::Chart container-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Chart widget 17-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
</x-default-layout>
