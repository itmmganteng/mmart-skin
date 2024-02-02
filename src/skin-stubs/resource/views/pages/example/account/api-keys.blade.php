<x-default-layout>
    @section('title')
    API Keys
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('account.api-keys') }}
    @endsection

    @include('pages.example.account.navbar')

    <!--begin::API Overview-->
    <div class="card mb-5 mb-xxl-10">
        <!--begin::Header-->
        <div class="card-header">
            <!--begin::Title-->
            <div class="card-title">
                <h3>API Overview</h3>
            </div>
            <!--end::Title-->
            <!--begin::Toolbar-->
            <div class="card-toolbar">
                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" checked="checked" value="1" />
                    <span class="form-check-label text-muted">Test mode</span>
                </label>
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-10">
            <!--begin::Row-->
            <div class="row mb-10">
                <!--begin::Col-->
                <div class="col-md-6 pb-10 pb-lg-0">
                    <h2>How to set API</h2>
                    <p class="fs-6 fw-semibold text-gray-600 py-2">Use images to enhance your post, improve its flow, add humor
                        <br />and explain complex topics</p>
                    <a href="#" class="btn btn-light btn-active-light-primary">Get Started</a>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <h2>Developer Tools</h2>
                    <p class="fs-6 fw-semibold text-gray-600 py-2">Plan your blog post by choosing a topic, creating an outline conduct
                        <br />research, and checking facts</p>
                    <a href="#" class="btn btn-light btn-active-light-primary">Create Rule</a>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Notice-->
            <!--begin::Notice-->
            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                <!--begin::Icon-->
                <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>
                <!--end::Icon-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-grow-1">
                    <!--begin::Content-->
                    <div class="fw-semibold">
                        <div class="fs-6 text-gray-700">Two-factor authentication adds an extra layer of security to your account. To log in, in you'll need to provide a 4 digit amazing and create outstanding products to serve your clients
                            <a class="fw-bold" href="#">Learn More</a>.</div>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Notice-->
            <!--end::Notice-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::API overview-->
    <!--begin::Login sessions-->
    <div class="card mb-5 mb-xxl-10">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Heading-->
            <div class="card-title">
                <h3>Login Sessions</h3>
            </div>
            <!--end::Heading-->
            <!--begin::Toolbar-->
            <div class="card-toolbar">
                <div class="my-1 me-4">
                    <!--begin::Select-->
                    <select class="form-select form-select-sm form-select-solid w-125px" data-control="select2" data-placeholder="Select Hours" data-hide-search="true">
                        <option value="1" selected="selected">1 Hours</option>
                        <option value="2">6 Hours</option>
                        <option value="3">12 Hours</option>
                        <option value="4">24 Hours</option>
                    </select>
                    <!--end::Select-->
                </div>
                <a href="#" class="btn btn-sm btn-primary my-1">View All</a>
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body p-0">
            <!--begin::Table wrapper-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                    <!--begin::Thead-->
                    <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                        <tr>
                            <th class="min-w-250px">Location</th>
                            <th class="min-w-100px">Status</th>
                            <th class="min-w-150px">Device</th>
                            <th class="min-w-150px">IP Address</th>
                            <th class="min-w-150px">Time</th>
                        </tr>
                    </thead>
                    <!--end::Thead-->
                    <!--begin::Tbody-->
                    <tbody class="fw-6 fw-semibold text-gray-600">
                        <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">USA(5)</a>
                            </td>
                            <td>
                                <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                            </td>
                            <td>Chrome - Windows</td>
                            <td>236.125.56.78</td>
                            <td>2 mins ago</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">United Kingdom(10)</a>
                            </td>
                            <td>
                                <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                            </td>
                            <td>Safari - Mac OS</td>
                            <td>236.125.56.78</td>
                            <td>10 mins ago</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">Norway(-)</a>
                            </td>
                            <td>
                                <span class="badge badge-light-danger fs-7 fw-bold">ERR</span>
                            </td>
                            <td>Firefox - Windows</td>
                            <td>236.125.56.10</td>
                            <td>20 mins ago</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">Japan(112)</a>
                            </td>
                            <td>
                                <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                            </td>
                            <td>iOS - iPhone Pro</td>
                            <td>236.125.56.54</td>
                            <td>30 mins ago</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">Italy(5)</a>
                            </td>
                            <td>
                                <span class="badge badge-light-warning fs-7 fw-bold">WRN</span>
                            </td>
                            <td>Samsung Noted 5- Android</td>
                            <td>236.100.56.50</td>
                            <td>40 mins ago</td>
                        </tr>
                    </tbody>
                    <!--end::Tbody-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table wrapper-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Login sessions-->
    <!--begin::API keys-->
    <div class="card">
        <!--begin::Header-->
        <div class="card-header card-header-stretch">
            <!--begin::Title-->
            <div class="card-title">
                <h3>API Keys</h3>
            </div>
            <!--end::Title-->
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body p-0">
            <!--begin::Table wrapper-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9" id="kt_api_keys_table">
                    <!--begin::Thead-->
                    <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                        <tr>
                            <th class="min-w-175px ps-9">Label</th>
                            <th class="min-w-250px px-0">API Keys</th>
                            <th class="min-w-100px">Created</th>
                            <th class="min-w-100px">Status</th>
                            <th class="w-100px"></th>
                            <th class="w-100px"></th>
                        </tr>
                    </thead>
                    <!--end::Thead-->
                    <!--begin::Tbody-->
                    <tbody class="fs-6 fw-semibold text-gray-600">
                        <tr>
                            <td class="ps-9">none set</td>
                            <td data-bs-target="license" class="ps-0">fftt456765gjkkjhi83093985</td>
                            <td>
                                <button data-action="copy" class="btn btn-active-color-primary btn-color-gray-500 btn-icon btn-sm btn-outline-light">
                                    <i class="ki-duotone ki-copy fs-2"></i>
                                </button>
                            </td>
                            <td>Nov 01, 2020</td>
                            <td>
                                <span class="badge badge-light-success fs-7 fw-semibold">Active</span>
                            </td>
                            <td class="pe-9">
                                <div class="w-100px position-relative">
                                    <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                        <option value=""></option>
                                        <option value="2">Options 1</option>
                                        <option value="3">Options 2</option>
                                        <option value="4">Options 3</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <button data-action="copy" class="btn btn-color-gray-500 btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                    <i class="ki-solid ki-copy fs-2"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-9">Navitare</td>
                            <td data-bs-target="license" class="ps-0">jk076590ygghgh324vd33</td>
                            <td>
                                <button data-action="copy" class="btn btn-active-color-primary btn-color-gray-500 btn-icon btn-sm btn-outline-light">
                                    <i class="ki-duotone ki-copy fs-2"></i>
                                </button>
                            </td>
                            <td>Sep 27, 2020</td>
                            <td>
                                <span class="badge badge-light-primary fs-7 fw-semibold">Review</span>
                            </td>
                            <td class="pe-9">
                                <div class="w-100px position-relative">
                                    <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                        <option value=""></option>
                                        <option value="2">Options 1</option>
                                        <option value="3">Options 2</option>
                                        <option value="4">Options 3</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <button data-action="copy" class="btn btn-color-gray-500 btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                    <i class="ki-solid ki-copy fs-2"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-9">Docs API Key</td>
                            <td data-bs-target="license" class="ps-0">fftt456765gjkkjhi83093985</td>
                            <td>
                                <button data-action="copy" class="btn btn-active-color-primary btn-color-gray-500 btn-icon btn-sm btn-outline-light">
                                    <i class="ki-duotone ki-copy fs-2"></i>
                                </button>
                            </td>
                            <td>Jul 09, 2020</td>
                            <td>
                                <span class="badge badge-light-danger fs-7 fw-semibold">Inactive</span>
                            </td>
                            <td class="pe-9">
                                <div class="w-100px position-relative">
                                    <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                        <option value=""></option>
                                        <option value="2">Options 1</option>
                                        <option value="3">Options 2</option>
                                        <option value="4">Options 3</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <button data-action="copy" class="btn btn-color-gray-500 btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                    <i class="ki-solid ki-copy fs-2"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-9">Identity Key</td>
                            <td data-bs-target="license" class="ps-0">jk076590ygghgh324vd3568</td>
                            <td>
                                <button data-action="copy" class="btn btn-active-color-primary btn-color-gray-500 btn-icon btn-sm btn-outline-light">
                                    <i class="ki-duotone ki-copy fs-2"></i>
                                </button>
                            </td>
                            <td>May 14, 2020</td>
                            <td>
                                <span class="badge badge-light-success fs-7 fw-semibold">Active</span>
                            </td>
                            <td class="pe-9">
                                <div class="w-100px position-relative">
                                    <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                        <option value=""></option>
                                        <option value="2">Options 1</option>
                                        <option value="3">Options 2</option>
                                        <option value="4">Options 3</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <button data-action="copy" class="btn btn-color-gray-500 btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                    <i class="ki-solid ki-copy fs-2"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-9">Remore Interface</td>
                            <td data-bs-target="license" class="ps-0">hhet6454788gfg555hhh4</td>
                            <td>
                                <button data-action="copy" class="btn btn-active-color-primary btn-color-gray-500 btn-icon btn-sm btn-outline-light">
                                    <i class="ki-duotone ki-copy fs-2"></i>
                                </button>
                            </td>
                            <td>Dec 30, 2019</td>
                            <td>
                                <span class="badge badge-light-success fs-7 fw-semibold">Active</span>
                            </td>
                            <td class="pe-9">
                                <div class="w-100px position-relative">
                                    <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                        <option value=""></option>
                                        <option value="2">Options 1</option>
                                        <option value="3">Options 2</option>
                                        <option value="4">Options 3</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <button data-action="copy" class="btn btn-color-gray-500 btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                    <i class="ki-solid ki-copy fs-2"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-9">none set</td>
                            <td data-bs-target="license" class="ps-0">fftt456765gjkkjhi83093985</td>
                            <td>
                                <button data-action="copy" class="btn btn-active-color-primary btn-color-gray-500 btn-icon btn-sm btn-outline-light">
                                    <i class="ki-duotone ki-copy fs-2"></i>
                                </button>
                            </td>
                            <td>Inactive</td>
                            <td>
                                <span class="badge badge-light-danger fs-7 fw-semibold">Active</span>
                            </td>
                            <td class="pe-9">
                                <div class="w-100px position-relative">
                                    <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                        <option value=""></option>
                                        <option value="2">Options 1</option>
                                        <option value="3">Options 2</option>
                                        <option value="4">Options 3</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <button data-action="copy" class="btn btn-color-gray-500 btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                    <i class="ki-solid ki-copy fs-2"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-9">Test App</td>
                            <td data-bs-target="license" class="ps-0">jk076590ygghgh324vd33</td>
                            <td>
                                <button data-action="copy" class="btn btn-active-color-primary btn-color-gray-500 btn-icon btn-sm btn-outline-light">
                                    <i class="ki-duotone ki-copy fs-2"></i>
                                </button>
                            </td>
                            <td>Apr 03, 2019</td>
                            <td>
                                <span class="badge badge-light-success fs-7 fw-semibold">Active</span>
                            </td>
                            <td class="pe-9">
                                <div class="w-100px position-relative">
                                    <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                        <option value=""></option>
                                        <option value="2">Options 1</option>
                                        <option value="3">Options 2</option>
                                        <option value="4">Options 3</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <button data-action="copy" class="btn btn-color-gray-500 btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                    <i class="ki-solid ki-copy fs-2"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                    <!--end::Tbody-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table wrapper-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::API keys-->

</x-default-layout>
