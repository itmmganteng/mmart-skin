<x-default-layout>
    @section('title')
    List
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('support-center.tutorials.list') }}
    @endsection

    <!--begin::Hero card-->
    <div class="card mb-12">
        <!--begin::Hero body-->
        <div class="card-body flex-column p-5">
            <!--begin::Hero content-->
            <div class="d-flex align-items-center h-lg-300px p-5 p-lg-15">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column align-items-start justift-content-center flex-equal me-5">
                    <!--begin::Title-->
                    <h1 class="fw-bold fs-4 fs-lg-1 text-gray-800 mb-5 mb-lg-10">How Can We Help You?</h1>
                    <!--end::Title-->
                    <!--begin::Input group-->
                    <div class="position-relative w-100">
                        <i class="ki-duotone ki-magnifier fs-2 text-primary position-absolute top-50 translate-middle ms-8">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <input type="text" class="form-control fs-4 py-4 ps-14 text-gray-700 placeholder-gray-500 mw-500px" name="search" value="" placeholder="Ask a question" />
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Wrapper-->
                <div class="flex-equal d-flex justify-content-center align-items-end ms-5">
                    <!--begin::Illustration-->
                    <img src="{{ asset('assets/media/illustrations/sketchy-1/20.png') }}" alt="" class="mw-100 mh-125px mh-lg-275px mb-lg-n12" />
                    <!--end::Illustration-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Hero content-->
            <!--begin::Hero nav-->
            <div class="card-rounded bg-light d-flex flex-stack flex-wrap p-5">
                <!--begin::Nav-->
                <ul class="nav flex-wrap border-transparent fw-bold">
                    <!--begin::Nav item-->
                    <li class="nav-item my-1">
                        <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="apps/support-center/overview.html">Overview</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item my-1">
                        <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="apps/support-center/tickets/list.html">tickets</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item my-1">
                        <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase active" href="apps/support-center/tutorials/list.html">Tutorials</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item my-1">
                        <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="apps/support-center/faq.html">FAQ</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item my-1">
                        <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="apps/support-center/licenses.html">Licenses</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item my-1">
                        <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="apps/support-center/contact.html">Contact US</a>
                    </li>
                    <!--end::Nav item-->
                </ul>
                <!--end::Nav-->
                <!--begin::Action-->
                <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_new_ticket" class="btn btn-primary fw-bold fs-8 fs-lg-base">Create Ticket</a>
                <!--end::Action-->
            </div>
            <!--end::Hero nav-->
        </div>
        <!--end::Hero body-->
    </div>
    <!--end::Hero card-->
    <!--begin::Home card-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body p-10 p-lg-15">
            <!--begin::Section-->
            <div class="mb-17">
                <!--begin::Title-->
                <h3 class="text-gray-900 mb-7">Latest Articles, News & Updates</h3>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="separator separator-dashed mb-9"></div>
                <!--end::Separator-->
                <!--begin::Row-->
                <div class="row">
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <!--begin::Feature post-->
                        <div class="h-100 d-flex flex-column justify-content-between pe-lg-6 mb-lg-0 mb-10">
                            <!--begin::Video-->
                            <div class="mb-3">
                                <iframe class="embed-responsive-item card-rounded h-275px w-100" src="https://www.youtube.com/embed/TWdDZYNqlg4" allowfullscreen="allowfullscreen"></iframe>
                            </div>
                            <!--end::Video-->
                            <!--begin::Body-->
                            <div class="mb-5">
                                <!--begin::Title-->
                                <a href="#" class="fs-2 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Admin Panel - How To Get Started Tutorial.
                                    <br />Create easy customizable applications</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-4">We’ve been focused on making the from v4 to v5 but we have also not been afraid to step away been focused on from v4 to v5 speaker approachable making focused a but from a step away afraid to step away been focused Writing a blog post is a little like driving; you can study the highway code (or read articles telling you how to write a blog post) for months, but nothing can prepare you for the real thing like getting behind the wheel</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="d-flex flex-stack flex-wrap">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center pe-2">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-3">
                                        <img alt="" src="{{ asset('assets/media/avatars/300-9.jpg') }}" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Text-->
                                    <div class="fs-5 fw-bold">
                                        <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">David Morgan</a>
                                        <span class="text-muted">on Apr 27 2021</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Label-->
                                <span class="badge badge-light-primary fw-bold my-2">TUTORIALS</span>
                                <!--end::Label-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Feature post-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 justify-content-between d-flex flex-column">
                        <!--begin::Post-->
                        <div class="ps-lg-6 mb-16 mt-md-0 mt-17">
                            <!--begin::Body-->
                            <div class="mb-6">
                                <!--begin::Title-->
                                <a href="#" class="fw-bold text-gray-900 mb-4 fs-2 lh-base text-hover-primary">Bootstrap Admin Theme - How To Get Started Tutorial. Create customizable applications</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 mt-4 text-gray-600 text-gray-900">We’ve been focused on making the from v4 to v5 a but we’ve also not been afraid to step away been focused on from v4 to v5 speaker approachable making focused</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="d-flex flex-stack flex-wrap">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center pe-2">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-3">
                                        <img src="{{ asset('assets/media/avatars/300-20.jpg') }}" class="" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Text-->
                                    <div class="fs-5 fw-bold">
                                        <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Jane Miller</a>
                                        <span class="text-muted">on Apr 27 2021</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Label-->
                                <span class="badge badge-light-info fw-bold my-2">BLOG</span>
                                <!--end::Label-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Post-->
                        <!--begin::Post-->
                        <div class="ps-lg-6 mb-16">
                            <!--begin::Body-->
                            <div class="mb-6">
                                <!--begin::Title-->
                                <a href="#" class="fw-bold text-gray-900 mb-4 fs-2 lh-base text-hover-primary">Angular Admin Theme - How To Get Started Tutorial.</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 mt-4 text-gray-600 text-gray-900">We’ve been focused on making the from v4 to v5 a but we’ve also not been afraid to step away</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="d-flex flex-stack flex-wrap">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center pe-2">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-3">
                                        <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" class="" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Text-->
                                    <div class="fs-5 fw-bold">
                                        <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Cris Morgan</a>
                                        <span class="text-muted">on Mar 14 2021</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Label-->
                                <span class="badge badge-light-primary fw-bold my-2">TUTORIALS</span>
                                <!--end::Label-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Post-->
                        <!--begin::Post-->
                        <div class="ps-lg-6">
                            <!--begin::Body-->
                            <div class="mb-6">
                                <!--begin::Title-->
                                <a href="#" class="fw-bold text-gray-900 mb-4 fs-2 lh-base text-hover-primary">React Admin Theme - How To Get Started Tutorial. Create best applications</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 mt-4 text-gray-600 text-gray-900">We’ve been focused on making the from v4 to v5 but we’ve also not been afraid to step away been focused</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="d-flex flex-stack flex-wrap">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center pe-2">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-3">
                                        <img src="{{ asset('assets/media/avatars/300-19.jpg') }}" class="" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Text-->
                                    <div class="fs-5 fw-bold">
                                        <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Cris Morgan</a>
                                        <span class="text-muted">on Mar 14 2021</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Label-->
                                <span class="badge badge-light-warning fw-bold my-2">NEWS</span>
                                <!--end::Label-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Post-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--begin::Row-->
            </div>
            <!--end::Section-->
            <!--begin::Section-->
            <div class="mb-17">
                <!--begin::Content-->
                <div class="d-flex flex-stack mb-5">
                    <!--begin::Title-->
                    <h3 class="text-gray-900">Video Tutorials</h3>
                    <!--end::Title-->
                    <!--begin::Link-->
                    <a href="#" class="fs-6 fw-semibold link-primary">View All Videos</a>
                    <!--end::Link-->
                </div>
                <!--end::Content-->
                <!--begin::Separator-->
                <div class="separator separator-dashed mb-9"></div>
                <!--end::Separator-->
                <!--begin::Row-->
                <div class="row g-10">
                    <!--begin::Col-->
                    <div class="col-md-4">
                        <!--begin::Feature post-->
                        <div class="card-xl-stretch me-md-6">
                            <!--begin::Image-->
                            <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('{{ asset('assets/media/stock/600x400/img-73.jpg') }}')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btornGtLwIo">
                                <img src="{{ asset('assets/media/svg/misc/video-play.svg') }}" class="position-absolute top-50 start-50 translate-middle" alt="" />
                            </a>
                            <!--end::Image-->
                            <!--begin::Body-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <a href="pages/user-profile/overview.html" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">We’ve been focused on making a the from also not been afraid to and step away been focused create eye</div>
                                <!--end::Text-->
                                <!--begin::Content-->
                                <div class="fs-6 fw-bold">
                                    <!--begin::Author-->
                                    <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Jane Miller</a>
                                    <!--end::Author-->
                                    <!--begin::Date-->
                                    <span class="text-muted">on Mar 21 2021</span>
                                    <!--end::Date-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Feature post-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4">
                        <!--begin::Feature post-->
                        <div class="card-xl-stretch mx-md-3">
                            <!--begin::Image-->
                            <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('{{ asset('assets/media/stock/600x400/img-74.jpg') }}')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btornGtLwIo">
                                <img src="{{ asset('assets/media/svg/misc/video-play.svg') }}" class="position-absolute top-50 start-50 translate-middle" alt="" />
                            </a>
                            <!--end::Image-->
                            <!--begin::Body-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <a href="pages/user-profile/overview.html" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">We’ve been focused on making the from v4 to v5 but we have also not been afraid to step away been focused</div>
                                <!--end::Text-->
                                <!--begin::Content-->
                                <div class="fs-6 fw-bold">
                                    <!--begin::Author-->
                                    <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Cris Morgan</a>
                                    <!--end::Author-->
                                    <!--begin::Date-->
                                    <span class="text-muted">on Apr 14 2021</span>
                                    <!--end::Date-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Feature post-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4">
                        <!--begin::Feature post-->
                        <div class="card-xl-stretch ms-md-6">
                            <!--begin::Image-->
                            <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('{{ asset('assets/media/stock/600x400/img-47.jpg') }}')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/TWdDZYNqlg4">
                                <img src="{{ asset('assets/media/svg/misc/video-play.svg') }}" class="position-absolute top-50 start-50 translate-middle" alt="" />
                            </a>
                            <!--end::Image-->
                            <!--begin::Body-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <a href="pages/user-profile/overview.html" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">We’ve been focused on making the from v4 to v5 but we’ve also not been afraid to step away been focused</div>
                                <!--end::Text-->
                                <!--begin::Content-->
                                <div class="fs-6 fw-bold">
                                    <!--begin::Author-->
                                    <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Carles Nilson</a>
                                    <!--end::Author-->
                                    <!--begin::Date-->
                                    <span class="text-muted">on May 14 2021</span>
                                    <!--end::Date-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Feature post-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Section-->
            <!--begin::Section-->
            <div class="mb-17">
                <!--begin::Content-->
                <div class="d-flex flex-stack mb-5">
                    <!--begin::Title-->
                    <h3 class="text-gray-900">Hottest Bundles</h3>
                    <!--end::Title-->
                    <!--begin::Link-->
                    <a href="#" class="fs-6 fw-semibold link-primary">View All Offers</a>
                    <!--end::Link-->
                </div>
                <!--end::Content-->
                <!--begin::Separator-->
                <div class="separator separator-dashed mb-9"></div>
                <!--end::Separator-->
                <!--begin::Row-->
                <div class="row g-10">
                    <!--begin::Col-->
                    <div class="col-md-4">
                        <!--begin::Hot sales post-->
                        <div class="card-xl-stretch me-md-6">
                            <!--begin::Overlay-->
                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ asset('assets/media/stock/600x400/img-23.jpg') }}') }}">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{ asset('assets/media/stock/600x400/img-23.jpg') }}')"></div>
                                <!--end::Image-->
                                <!--begin::Action-->
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="ki-duotone ki-eye fs-2x text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--end::Action-->
                            </a>
                            <!--end::Overlay-->
                            <!--begin::Body-->
                            <div class="mt-5">
                                <!--begin::Title-->
                                <a href="#" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3">We’ve been focused on making a the from also not been eye</div>
                                <!--end::Text-->
                                <!--begin::Text-->
                                <div class="fs-6 fw-bold mt-5 d-flex flex-stack">
                                    <!--begin::Label-->
                                    <span class="badge border border-dashed fs-2 fw-bold text-gray-900 p-2">
                                        <span class="fs-6 fw-semibold text-gray-500">$</span>28</span>
                                    <!--end::Label-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-sm btn-primary">Purchase</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Hot sales post-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4">
                        <!--begin::Hot sales post-->
                        <div class="card-xl-stretch mx-md-3">
                            <!--begin::Overlay-->
                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ asset('assets/media/stock/600x600/img-14.jpg') }}') }}">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{ asset('assets/media/stock/600x600/img-14.jpg') }}')"></div>
                                <!--end::Image-->
                                <!--begin::Action-->
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="ki-duotone ki-eye fs-2x text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--end::Action-->
                            </a>
                            <!--end::Overlay-->
                            <!--begin::Body-->
                            <div class="mt-5">
                                <!--begin::Title-->
                                <a href="#" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3">We’ve been focused on making a the from also not been eye</div>
                                <!--end::Text-->
                                <!--begin::Text-->
                                <div class="fs-6 fw-bold mt-5 d-flex flex-stack">
                                    <!--begin::Label-->
                                    <span class="badge border border-dashed fs-2 fw-bold text-gray-900 p-2">
                                        <span class="fs-6 fw-semibold text-gray-500">$</span>27</span>
                                    <!--end::Label-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-sm btn-primary">Purchase</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Hot sales post-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4">
                        <!--begin::Hot sales post-->
                        <div class="card-xl-stretch ms-md-6">
                            <!--begin::Overlay-->
                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ asset('assets/media/stock/600x400/img-71.jpg') }}') }}">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{ asset('assets/media/stock/600x400/img-71.jpg') }}')"></div>
                                <!--end::Image-->
                                <!--begin::Action-->
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="ki-duotone ki-eye fs-2x text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--end::Action-->
                            </a>
                            <!--end::Overlay-->
                            <!--begin::Body-->
                            <div class="mt-5">
                                <!--begin::Title-->
                                <a href="#" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3">We’ve been focused on making a the from also not been eye</div>
                                <!--end::Text-->
                                <!--begin::Text-->
                                <div class="fs-6 fw-bold mt-5 d-flex flex-stack">
                                    <!--begin::Label-->
                                    <span class="badge border border-dashed fs-2 fw-bold text-gray-900 p-2">
                                        <span class="fs-6 fw-semibold text-gray-500">$</span>25</span>
                                    <!--end::Label-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-sm btn-primary">Purchase</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Hot sales post-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Section-->
            <!--begin::latest instagram-->
            <div class="">
                <!--begin::Section-->
                <div class="m-0">
                    <!--begin::Content-->
                    <div class="d-flex flex-stack">
                        <!--begin::Title-->
                        <h3 class="text-gray-900">Latest Instagram Posts</h3>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <a href="#" class="fs-6 fw-semibold link-primary">View Instagram</a>
                        <!--end::Link-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed border-gray-300 mb-9 mt-5"></div>
                    <!--end::Separator-->
                </div>
                <!--end::Section-->
                <!--begin::Row-->
                <div class="row g-10 row-cols-2 row-cols-lg-5">
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Overlay-->
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ asset('assets/media/stock/900x600/16.jpg') }}">
                            <!--begin::Image-->
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{ asset('assets/media/stock/900x600/16.jpg') }}')"></div>
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
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Overlay-->
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ asset('assets/media/stock/900x600/13.jpg') }}">
                            <!--begin::Image-->
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{ asset('assets/media/stock/900x600/13.jpg') }}')"></div>
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
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Overlay-->
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ asset('assets/media/stock/900x600/19.jpg') }}">
                            <!--begin::Image-->
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{ asset('assets/media/stock/900x600/19.jpg') }}')"></div>
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
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Overlay-->
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ asset('assets/media/stock/900x600/15.jpg') }}">
                            <!--begin::Image-->
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{ asset('assets/media/stock/900x600/15.jpg') }}')"></div>
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
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Overlay-->
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ asset('assets/media/stock/900x600/12.jpg') }}">
                            <!--begin::Image-->
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{ asset('assets/media/stock/900x600/12.jpg') }}')"></div>
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
                    </div>
                    <!--end::Col-->
                </div>
                <!--begin::Row-->
            </div>
            <!--end::latest instagram-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Home card-->
    <!--begin::Modal - Support Center - Create Ticket-->
    <div class="modal fade" id="kt_modal_new_ticket" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-750px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="kt_modal_new_ticket_form" class="form" action="#">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Create Ticket</h1>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <div class="text-gray-500 fw-semibold fs-5">If you need more info, please check
                                <a href="" class="fw-bold link-primary">Support Guidelines</a>.</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Subject</span>
                                <span class="ms-2" data-bs-toggle="tooltip" title="Specify a subject for your issue">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Enter your ticket subject" name="subject" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">Product</label>
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a product" name="product">
                                    <option value="">Select a product...</option>
                                    <option value="1">HTML Theme</option>
                                    <option value="1">Angular App</option>
                                    <option value="1">Vue App</option>
                                    <option value="1">React Theme</option>
                                    <option value="1">Figma UI Kit</option>
                                    <option value="3">Laravel App</option>
                                    <option value="4">Blazor App</option>
                                    <option value="5">Django App</option>
                                </select>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">Assign</label>
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="user">
                                    <option value="">Select a user...</option>
                                    <option value="1">Karina Clark</option>
                                    <option value="2">Robert Doe</option>
                                    <option value="3">Niel Owen</option>
                                    <option value="4">Olivia Wild</option>
                                    <option value="5">Sean Bean</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">Status</label>
                                <select class="form-select form-select-solid" data-control="select2" data-placeholder="Open" data-hide-search="true">
                                    <option value=""></option>
                                    <option value="1" selected="selected">Open</option>
                                    <option value="2">Pending</option>
                                    <option value="3">Resolved</option>
                                    <option value="3">Closed</option>
                                </select>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">Due Date</label>
                                <!--begin::Input-->
                                <div class="position-relative d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <div class="symbol symbol-20px me-4 position-absolute ms-4">
                                        <span class="symbol-label bg-secondary">
                                            <i class="ki-duotone ki-element-11">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Datepicker-->
                                    <input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" />
                                    <!--end::Datepicker-->
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Description</label>
                            <textarea class="form-control form-control-solid" rows="4" name="description" placeholder="Type your ticket description"></textarea>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-8">
                            <label class="fs-6 fw-semibold mb-2">Attachments</label>
                            <!--begin::Dropzone-->
                            <div class="dropzone" id="kt_modal_create_ticket_attachments">
                                <!--begin::Message-->
                                <div class="dz-message needsclick align-items-center">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-file-up fs-3hx text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <!--end::Icon-->
                                    <!--begin::Info-->
                                    <div class="ms-4">
                                        <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                        <span class="fw-semibold fs-7 text-gray-500">Upload up to 10 files</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                            </div>
                            <!--end::Dropzone-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-15 fv-row">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack">
                                <!--begin::Label-->
                                <div class="fw-semibold me-5">
                                    <label class="fs-6">Notifications</label>
                                    <div class="fs-7 text-gray-500">Allow Notifications by Phone or Email</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Checkboxes-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="email" checked="checked" />
                                        <span class="form-check-label fw-semibold">Email</span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="phone" />
                                        <span class="form-check-label fw-semibold">Phone</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                <!--end::Checkboxes-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" id="kt_modal_new_ticket_cancel" class="btn btn-light me-3">Cancel</button>
                            <button type="submit" id="kt_modal_new_ticket_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end:Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Support Center - Create Ticket-->

</x-default-layout>
