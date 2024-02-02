<x-default-layout>
    @section('title')
    List
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('support-center.tickets.list') }}
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
                        <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase active" href="apps/support-center/tickets/list.html">tickets</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item my-1">
                        <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="apps/support-center/tutorials/list.html">Tutorials</a>
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
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-xl-row p-7">
                <!--begin::Content-->
                <div class="flex-lg-row-fluid me-xl-15 mb-20 mb-xl-0">
                    <!--begin::Tickets-->
                    <div class="mb-0">
                        <!--begin::Search form-->
                        <form method="post" action="#" class="form mb-15">
                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <i class="ki-duotone ki-magnifier fs-1 text-primary position-absolute top-50 translate-middle ms-9">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="text" class="form-control form-control-lg form-control-solid ps-14" name="search" value="" placeholder="Search" />
                            </div>
                            <!--end::Input wrapper-->
                        </form>
                        <!--end::Search form-->
                        <!--begin::Heading-->
                        <h1 class="text-gray-900 mb-10">Public Tickets</h1>
                        <!--end::Heading-->
                        <!--begin::Tickets List-->
                        <div class="mb-10">
                            <!--begin::Ticket-->
                            <div class="d-flex mb-10">
                                <!--begin::Symbol-->
                                <i class="ki-duotone ki-file-added fs-2x me-5 ms-n1 mt-2 text-success">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex flex-column">
                                    <!--begin::Content-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Title-->
                                        <a href="apps/support-center/tickets/view.html" class="text-gray-900 text-hover-primary fs-4 me-3 fw-semibold">How to use Netronic with Django Framework?</a>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light my-1">React</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Text-->
                                    <span class="text-muted fw-semibold fs-6">By Keenthemes to save tons and more to time money projects are listed amazing
                                        <br />outstanding projects are listed</span>
                                    <!--end::Text-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Ticket-->
                            <!--begin::Ticket-->
                            <div class="d-flex mb-10">
                                <!--begin::Symbol-->
                                <i class="ki-duotone ki-add-files fs-2x me-5 ms-n1 mt-2 text-warning">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex flex-column">
                                    <!--begin::Content-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Title-->
                                        <a href="apps/support-center/tickets/view.html" class="text-gray-900 text-hover-primary fs-4 me-3 fw-semibold">Admin theme npm issue</a>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light my-1">Angular</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Text-->
                                    <span class="text-muted fw-semibold fs-6">By Keenthemes to save tons and more to time money projects</span>
                                    <!--end::Text-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Ticket-->
                            <!--begin::Ticket-->
                            <div class="d-flex mb-10">
                                <!--begin::Symbol-->
                                <i class="ki-duotone ki-file-added fs-2x me-5 ms-n1 mt-2 text-success">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex flex-column">
                                    <!--begin::Content-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Title-->
                                        <a href="apps/support-center/tickets/view.html" class="text-gray-900 text-hover-primary fs-4 me-3 fw-semibold">Admin theme authentication to node.js / strapi backend</a>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light my-1">warning</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Text-->
                                    <span class="text-muted fw-semibold fs-6">By Keenthemes to save tons and more to time money projects</span>
                                    <!--end::Text-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Ticket-->
                            <!--begin::Ticket-->
                            <div class="d-flex mb-10">
                                <!--begin::Symbol-->
                                <i class="ki-duotone ki-file-added fs-2x me-5 ms-n1 mt-2 text-success">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex flex-column">
                                    <!--begin::Content-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Title-->
                                        <a href="apps/support-center/tickets/view.html" class="text-gray-900 text-hover-primary fs-4 me-3 fw-semibold">How to use Admin theme with Django Framework?</a>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light my-1">HTML</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Text-->
                                    <span class="text-muted fw-semibold fs-6">By Keenthemes to save tons and more to time money projects are listed amazing
                                        <br />outstanding projects are listed</span>
                                    <!--end::Text-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Ticket-->
                            <!--begin::Ticket-->
                            <div class="d-flex mb-10">
                                <!--begin::Symbol-->
                                <i class="ki-duotone ki-add-files fs-2x me-5 ms-n1 mt-2 text-warning">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex flex-column">
                                    <!--begin::Content-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Title-->
                                        <a href="apps/support-center/tickets/view.html" class="text-gray-900 text-hover-primary fs-4 me-3 fw-semibold">Reducing footprint of Start theme</a>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light my-1">Angular</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Text-->
                                    <span class="text-muted fw-semibold fs-6">By Keenthemes to save tons and more to time money projects</span>
                                    <!--end::Text-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Ticket-->
                            <!--begin::Ticket-->
                            <div class="d-flex mb-10">
                                <!--begin::Symbol-->
                                <i class="ki-duotone ki-file-added fs-2x me-5 ms-n1 mt-2 text-success">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex flex-column">
                                    <!--begin::Content-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Title-->
                                        <a href="apps/support-center/tickets/view.html" class="text-gray-900 text-hover-primary fs-4 me-3 fw-semibold">Admin theme node.js / strapi backend</a>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light my-1">React</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Text-->
                                    <span class="text-muted fw-semibold fs-6">By Keenthemes to save tons and more to time money projects are listed amazing
                                        <br />outstanding projects are listed</span>
                                    <!--end::Text-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Ticket-->
                            <!--begin::Ticket-->
                            <div class="d-flex mb-10">
                                <!--begin::Symbol-->
                                <i class="ki-duotone ki-add-files fs-2x me-5 ms-n1 mt-2 text-warning">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex flex-column">
                                    <!--begin::Content-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Title-->
                                        <a href="apps/support-center/tickets/view.html" class="text-gray-900 text-hover-primary fs-4 me-3 fw-semibold">Admin theme npm issue</a>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light my-1">View</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Text-->
                                    <span class="text-muted fw-semibold fs-6">By Keenthemes to save tons and more to time money projects</span>
                                    <!--end::Text-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Ticket-->
                            <!--begin::Ticket-->
                            <div class="d-flex">
                                <!--begin::Symbol-->
                                <i class="ki-duotone ki-file-added fs-2x me-5 ms-n1 mt-2 text-success">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex flex-column">
                                    <!--begin::Content-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Title-->
                                        <a href="apps/support-center/tickets/view.html" class="text-gray-900 text-hover-primary fs-4 me-3 fw-semibold">How to use Admin theme with Django Framework?</a>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light my-1">PHP</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Text-->
                                    <span class="text-muted fw-semibold fs-6">By Keenthemes to save tons and more to time money projects are listed amazing
                                        <br />outstanding projects are listed</span>
                                    <!--end::Text-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Ticket-->
                        </div>
                        <!--end::Tickets List-->
                        <!--begin::Pagination-->
                        <ul class="pagination">
                            <li class="page-item previous disabled">
                                <a href="#" class="page-link">
                                    <i class="previous"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">4</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">5</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">6</a>
                            </li>
                            <li class="page-item next">
                                <a href="#" class="page-link">
                                    <i class="next"></i>
                                </a>
                            </li>
                        </ul>
                        <!--end::Pagination-->
                    </div>
                    <!--end::Tickets-->
                </div>
                <!--end::Content-->
                <!--begin::Sidebar-->
                <div class="flex-column flex-lg-row-auto w-100 mw-lg-300px mw-xxl-350px">
                    <!--begin::More channels-->
                    <div class="card-rounded bg-primary bg-opacity-5 p-10 mb-15">
                        <!--begin::Title-->
                        <h2 class="text-gray-900 fw-bold mb-11">More Channels</h2>
                        <!--end::Title-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-10">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-calendar fs-1 text-primary me-5">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <!--end::Icon-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column">
                                <h5 class="text-gray-800 fw-bold">Project Briefing</h5>
                                <!--begin::Section-->
                                <div class="fw-semibold">
                                    <!--begin::Desc-->
                                    <span class="text-muted">Check out our</span>
                                    <!--end::Desc-->
                                    <!--begin::Link-->
                                    <a href="#" class="link-primary">Support Policy</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-10">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-notification-status fs-1 text-primary me-5">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                            <!--end::Icon-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column">
                                <h5 class="text-gray-800 fw-bold">More to discuss?</h5>
                                <!--begin::Section-->
                                <div class="fw-semibold">
                                    <!--begin::Desc-->
                                    <span class="text-muted">Email us to</span>
                                    <!--end::Desc-->
                                    <!--begin::Link-->
                                    <a href="#" class="link-primary">support@keenthemes.com</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-10">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-twitter fs-1 text-primary me-5">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <!--end::Icon-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column">
                                <h5 class="text-gray-800 fw-bold">Latest News</h5>
                                <!--begin::Section-->
                                <div class="fw-semibold">
                                    <!--begin::Desc-->
                                    <span class="text-muted">Follow us at</span>
                                    <!--end::Desc-->
                                    <!--begin::Link-->
                                    <a href="#" class="link-primary">KeenThemes Twitter</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-github fs-1 text-primary me-5">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <!--end::Icon-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column">
                                <h5 class="text-gray-800 fw-bold">Github Access</h5>
                                <!--begin::Section-->
                                <div class="fw-semibold">
                                    <!--begin::Desc-->
                                    <span class="text-muted">Our github repo</span>
                                    <!--end::Desc-->
                                    <!--begin::Link-->
                                    <a href="#" class="link-primary">KeenThemes Github</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::More channels-->
                    <!--begin::Documentations-->
                    <div class="card-rounded bg-primary bg-opacity-5 p-10 mb-15">
                        <!--begin::Title-->
                        <h1 class="fw-bold text-gray-900 mb-9">Documentation</h1>
                        <!--end::Title-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-right fs-2 ms-n1 me-3"></i>
                            <!--end::Icon-->
                            <!--begin::Subtitle-->
                            <a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">Angular Admin</a>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-right fs-2 ms-n1 me-3"></i>
                            <!--end::Icon-->
                            <!--begin::Subtitle-->
                            <a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">React Admin</a>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-right fs-2 ms-n1 me-3"></i>
                            <!--end::Icon-->
                            <!--begin::Subtitle-->
                            <a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">Vue Dashboard</a>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-right fs-2 ms-n1 me-3"></i>
                            <!--end::Icon-->
                            <!--begin::Subtitle-->
                            <a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">Niche Theme</a>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-right fs-2 ms-n1 me-3"></i>
                            <!--end::Icon-->
                            <!--begin::Subtitle-->
                            <a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">Dashboard Admin</a>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-right fs-2 ms-n1 me-3"></i>
                            <!--end::Icon-->
                            <!--begin::Subtitle-->
                            <a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">Dorsey Front-end</a>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-right fs-2 ms-n1 me-3"></i>
                            <!--end::Icon-->
                            <!--begin::Subtitle-->
                            <a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">CRM Admin</a>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-right fs-2 ms-n1 me-3"></i>
                            <!--end::Icon-->
                            <!--begin::Subtitle-->
                            <a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">Admin Dashbaord</a>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-right fs-2 ms-n1 me-3"></i>
                            <!--end::Icon-->
                            <!--begin::Subtitle-->
                            <a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">Intranet Admin</a>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Documentations-->
                </div>
                <!--end::Sidebar-->
            </div>
            <!--end::Layout-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
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
