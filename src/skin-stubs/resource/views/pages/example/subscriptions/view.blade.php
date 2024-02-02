<x-default-layout>
    @section('title')
    View
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('subscriptions.view') }}
    @endsection

    <!--begin::Layout-->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Content-->
        <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
            <!--begin::Card-->
            <div class="card card-flush pt-3 mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2 class="fw-bold">Product Details</h2>
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <a href="apps/subscriptions/add.html" class="btn btn-light-primary">Update Product</a>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-3">
                    <!--begin::Section-->
                    <div class="mb-10">
                        <!--begin::Title-->
                        <h5 class="mb-4">Billing Address:</h5>
                        <!--end::Title-->
                        <!--begin::Details-->
                        <div class="d-flex flex-wrap py-5">
                            <!--begin::Row-->
                            <div class="flex-equal me-5">
                                <!--begin::Details-->
                                <table class="table fs-6 fw-semibold gs-0 gy-2 gx-2 m-0">
                                    <!--begin::Row-->
                                    <tr>
                                        <td class="text-gray-500 min-w-175px w-175px">Bill to:</td>
                                        <td class="text-gray-800 min-w-200px">
                                            <a href="pages/apps/customers/view.html" class="text-gray-800 text-hover-primary">smith@kpmg.com</a>
                                        </td>
                                    </tr>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <tr>
                                        <td class="text-gray-500">Customer Name:</td>
                                        <td class="text-gray-800">Emma Smith</td>
                                    </tr>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <tr>
                                        <td class="text-gray-500">Address:</td>
                                        <td class="text-gray-800">Floor 10, 101 Avenue of the Light Square, New York, NY, 10050.</td>
                                    </tr>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <tr>
                                        <td class="text-gray-500">Phone:</td>
                                        <td class="text-gray-800">(555) 555-1234</td>
                                    </tr>
                                    <!--end::Row-->
                                </table>
                                <!--end::Details-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="flex-equal">
                                <!--begin::Details-->
                                <table class="table fs-6 fw-semibold gs-0 gy-2 gx-2 m-0">
                                    <!--begin::Row-->
                                    <tr>
                                        <td class="text-gray-500 min-w-175px w-175px">Subscribed Product:</td>
                                        <td class="text-gray-800 min-w-200px">
                                            <a href="#" class="text-gray-800 text-hover-primary">Basic Bundle</a>
                                        </td>
                                    </tr>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <tr>
                                        <td class="text-gray-500">Subscription Fees:</td>
                                        <td class="text-gray-800">$149.99 / Year</td>
                                    </tr>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <tr>
                                        <td class="text-gray-500">Billing method:</td>
                                        <td class="text-gray-800">Annually</td>
                                    </tr>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <tr>
                                        <td class="text-gray-500">Currency:</td>
                                        <td class="text-gray-800">USD - US Dollar</td>
                                    </tr>
                                    <!--end::Row-->
                                </table>
                                <!--end::Details-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="mb-0">
                        <!--begin::Title-->
                        <h5 class="mb-4">Subscribed Products:</h5>
                        <!--end::Title-->
                        <!--begin::Product table-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-4 mb-0">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="border-bottom border-gray-200 text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-150px">Product</th>
                                        <th class="min-w-125px">Subscription ID</th>
                                        <th class="min-w-125px">Qty</th>
                                        <th class="min-w-125px">Total</th>
                                        <th class="text-end min-w-70px">Actions</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-semibold text-gray-800">
                                    <tr>
                                        <td>
                                            <label class="w-150px">Basic Bundle</label>
                                            <div class="fw-normal text-gray-600">Basic yearly bundle</div>
                                        </td>
                                        <td>
                                            <span class="badge badge-light-danger">sub_4567_8765</span>
                                        </td>
                                        <td>1</td>
                                        <td>$149.99 / Year</td>
                                        <td class="text-end">
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="ki-duotone ki-setting-3 fs-3">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-6 w-200px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Pause Subscription</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-kt-subscriptions-view-action="delete">Edit Subscription</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link text-danger px-3" data-kt-subscriptions-view-action="edit">Cancel Subscription</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                            <!--end::Action-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="w-150px">Pro Bundle</label>
                                            <div class="fw-normal text-gray-500">Basic yearly bundle</div>
                                        </td>
                                        <td>
                                            <span class="badge badge-light-danger">sub_4567_3433</span>
                                        </td>
                                        <td>5</td>
                                        <td>$949.99 / Year</td>
                                        <td class="text-end">
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="ki-duotone ki-setting-3 fs-3">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-6 w-200px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Pause Subscription</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-kt-subscriptions-view-action="delete">Edit Subscription</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link text-danger px-3" data-kt-subscriptions-view-action="edit">Cancel Subscription</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                            <!--end::Action-->
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Product table-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
            <!--begin::Card-->
            <div class="card card-flush pt-3 mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Recent Events</h2>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-light-primary">View All Events</a>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-5" id="kt_table_customers_events">
                            <tbody>
                                <tr>
                                    <td class="min-w-400px">
                                    <a href="#" class="fw-bold text-gray-800 text-hover-primary me-1">Brian Cox</a>has made payment to
                                    <a href="#" class="fw-bold text-gray-800 text-hover-primary">9708-2532</a></td>
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">21 Feb 2023, 6:43 am</td>
                                </tr>
                                <tr>
                                    <td class="min-w-400px">
                                    <a href="#" class="fw-bold text-gray-800 text-hover-primary me-1">Emma Smith</a>has made payment to
                                    <a href="#" class="fw-bold text-gray-800 text-hover-primary">7600-5790</a></td>
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">20 Jun 2023, 6:05 pm</td>
                                </tr>
                                <tr>
                                    <td class="min-w-400px">Invoice
                                    <a href="#" class="fw-bold text-gray-800 text-hover-primary me-1">3107-5178</a>status has changed from
                                    <span class="badge badge-light-info me-1">In Progress</span>to
                                    <span class="badge badge-light-primary">In Transit</span></td>
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">25 Oct 2023, 9:23 pm</td>
                                </tr>
                                <tr>
                                    <td class="min-w-400px">Invoice
                                    <a href="#" class="fw-bold text-gray-800 text-hover-primary me-1">2269-3225</a>has been
                                    <span class="badge badge-light-danger">Declined</span></td>
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">25 Oct 2023, 11:05 am</td>
                                </tr>
                                <tr>
                                    <td class="min-w-400px">
                                    <a href="#" class="fw-bold text-gray-800 text-hover-primary me-1">Emma Smith</a>has made payment to
                                    <a href="#" class="fw-bold text-gray-800 text-hover-primary">7600-5790</a></td>
                                    <td class="pe-0 text-gray-600 text-end min-w-200px">10 Mar 2023, 10:10 pm</td>
                                </tr>
                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
            <!--begin::Card-->
            <div class="card card-flush pt-3 mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Invoices</h2>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Tab nav-->
                        <ul class="nav nav-stretch fs-5 fw-semibold nav-line-tabs nav-line-tabs-2x border-transparent" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a id="kt_referrals_year_tab" class="nav-link text-active-primary active" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_1">This Year</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="kt_referrals_2019_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_2">2020</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="kt_referrals_2018_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_3">2019</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="kt_referrals_2017_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_4">2018</a>
                            </li>
                        </ul>
                        <!--end::Tab nav-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-2">
                    <!--begin::Tab Content-->
                    <div id="kt_referred_users_tab_content" class="tab-content">
                        <!--begin::Tab panel-->
                        <div id="kt_customer_details_invoices_1" class="tab-pane fade show active" role="tabpanel">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table id="kt_customer_details_invoices_table_1" class="table align-middle table-row-dashed fs-6 fw-bold gs-0 gy-4 p-0 m-0">
                                    <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                        <tr class="text-start text-gray-500">
                                            <th class="min-w-100px">Order ID</th>
                                            <th class="min-w-100px">Amount</th>
                                            <th class="min-w-100px">Status</th>
                                            <th class="min-w-125px">Date</th>
                                            <th class="w-100px">Invoice</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                            </td>
                                            <td class="text-success">$38.00</td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>Nov 01, 2020</td>
                                            <td class="">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                            </td>
                                            <td class="text-danger">$-2.60</td>
                                            <td>
                                                <span class="badge badge-light-success">Approved</span>
                                            </td>
                                            <td>Oct 24, 2020</td>
                                            <td class="">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td class="text-success">$76.00</td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>Oct 08, 2020</td>
                                            <td class="">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td class="text-success">$5.00</td>
                                            <td>
                                                <span class="badge badge-light-success">Approved</span>
                                            </td>
                                            <td>Sep 15, 2020</td>
                                            <td class="">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                            </td>
                                            <td class="text-danger">$-1.30</td>
                                            <td>
                                                <span class="badge badge-light-success">Approved</span>
                                            </td>
                                            <td>May 30, 2020</td>
                                            <td class="">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table wrapper-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_customer_details_invoices_2" class="tab-pane fade" role="tabpanel">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table id="kt_customer_details_invoices_table_2" class="table align-middle table-row-dashed fs-6 fw-bold gs-0 gy-4 p-0 m-0">
                                    <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                        <tr class="text-start text-gray-500">
                                            <th class="min-w-100px">Order ID</th>
                                            <th class="min-w-100px">Amount</th>
                                            <th class="min-w-100px">Status</th>
                                            <th class="min-w-125px">Date</th>
                                            <th class="w-100px">Invoice</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                            </td>
                                            <td class="text-danger">$-1.30</td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>May 30, 2020</td>
                                            <td class="">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                            </td>
                                            <td class="text-success">$204.00</td>
                                            <td>
                                                <span class="badge badge-light-success">Approved</span>
                                            </td>
                                            <td>Apr 22, 2020</td>
                                            <td class="">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                            </td>
                                            <td class="text-success">$31.00</td>
                                            <td>
                                                <span class="badge badge-light-danger">Rejected</span>
                                            </td>
                                            <td>Feb 09, 2020</td>
                                            <td class="">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                            </td>
                                            <td class="text-success">$52.00</td>
                                            <td>
                                                <span class="badge badge-light-danger">Rejected</span>
                                            </td>
                                            <td>Nov 01, 2020</td>
                                            <td class="">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                            </td>
                                            <td class="text-danger">$-0.80</td>
                                            <td>
                                                <span class="badge badge-light-danger">Rejected</span>
                                            </td>
                                            <td>Jan 04, 2020</td>
                                            <td class="">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table wrapper-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_customer_details_invoices_3" class="tab-pane fade" role="tabpanel">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table id="kt_customer_details_invoices_table_3" class="table align-middle table-row-dashed fs-6 fw-bold gs-0 gy-4 p-0 m-0">
                                    <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                        <tr class="text-start text-gray-500">
                                            <th class="min-w-100px">Order ID</th>
                                            <th class="min-w-100px">Amount</th>
                                            <th class="min-w-100px">Status</th>
                                            <th class="min-w-125px">Date</th>
                                            <th class="w-100px">Invoice</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                            </td>
                                            <td class="text-success">$31.00</td>
                                            <td>
                                                <span class="badge badge-light-success">Approved</span>
                                            </td>
                                            <td>Feb 09, 2020</td>
                                            <td class="">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                            </td>
                                            <td class="text-success">$52.00</td>
                                            <td>
                                                <span class="badge badge-light-info">In progress</span>
                                            </td>
                                            <td>Nov 01, 2020</td>
                                            <td class="">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                            </td>
                                            <td class="text-danger">$-0.80</td>
                                            <td>
                                                <span class="badge badge-light-danger">Rejected</span>
                                            </td>
                                            <td>Jan 04, 2020</td>
                                            <td class="">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                            </td>
                                            <td class="text-success">$5.00</td>
                                            <td>
                                                <span class="badge badge-light-danger">Rejected</span>
                                            </td>
                                            <td>Sep 15, 2020</td>
                                            <td class="">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                            </td>
                                            <td class="text-success">$38.00</td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>Nov 01, 2020</td>
                                            <td class="">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table wrapper-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_customer_details_invoices_4" class="tab-pane fade" role="tabpanel">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table id="kt_customer_details_invoices_table_4" class="table align-middle table-row-dashed fs-6 fw-bold gs-0 gy-4 p-0 m-0">
                                    <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                        <tr class="text-start text-gray-500">
                                            <th class="min-w-100px">Order ID</th>
                                            <th class="min-w-100px">Amount</th>
                                            <th class="min-w-100px">Status</th>
                                            <th class="min-w-125px">Date</th>
                                            <th class="w-100px">Invoice</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                            </td>
                                            <td class="text-success">$38.00</td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>Nov 01, 2020</td>
                                            <td class="">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                            </td>
                                            <td class="text-danger">$-2.60</td>
                                            <td>
                                                <span class="badge badge-light-danger">Rejected</span>
                                            </td>
                                            <td>Oct 24, 2020</td>
                                            <td class="">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                            </td>
                                            <td class="text-success">$38.00</td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>Nov 01, 2020</td>
                                            <td class="">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                            </td>
                                            <td class="text-danger">$-2.60</td>
                                            <td>
                                                <span class="badge badge-light-success">Approved</span>
                                            </td>
                                            <td>Oct 24, 2020</td>
                                            <td class="">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                            </td>
                                            <td class="text-success">$31.00</td>
                                            <td>
                                                <span class="badge badge-light-info">In progress</span>
                                            </td>
                                            <td>Feb 09, 2020</td>
                                            <td class="">
                                                <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table wrapper-->
                        </div>
                        <!--end::Tab panel-->
                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content-->
        <!--begin::Sidebar-->
        <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-300px mb-10 order-1 order-lg-2">
            <!--begin::Card-->
            <div class="card card-flush mb-0" data-kt-sticky="true" data-kt-sticky-name="subscription-summary" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Summary</h2>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::More options-->
                        <a href="#" class="btn btn-sm btn-light btn-icon" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-dots-square fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-6 w-200px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Pause Subscription</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-subscriptions-view-action="delete">Edit Subscription</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link text-danger px-3" data-kt-subscriptions-view-action="edit">Cancel Subscription</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                        <!--end::More options-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0 fs-6">
                    <!--begin::Section-->
                    <div class="mb-7">
                        <!--begin::Details-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-60px symbol-circle me-3">
                                <img alt="Pic" src="{{ asset('assets/media/avatars/300-5.jpg') }}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-2">Sean Bean</a>
                                <!--end::Name-->
                                <!--begin::Email-->
                                <a href="#" class="fw-semibold text-gray-600 text-hover-primary">sean@dellito.com</a>
                                <!--end::Email-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Seperator-->
                    <div class="separator separator-dashed mb-7"></div>
                    <!--end::Seperator-->
                    <!--begin::Section-->
                    <div class="mb-7">
                        <!--begin::Title-->
                        <h5 class="mb-4">Product details</h5>
                        <!--end::Title-->
                        <!--begin::Details-->
                        <div class="mb-0">
                            <!--begin::Plan-->
                            <span class="badge badge-light-info me-2">Basic Bundle</span>
                            <!--end::Plan-->
                            <!--begin::Price-->
                            <span class="fw-semibold text-gray-600">$149.99 / Year</span>
                            <!--end::Price-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Seperator-->
                    <div class="separator separator-dashed mb-7"></div>
                    <!--end::Seperator-->
                    <!--begin::Section-->
                    <div class="mb-10">
                        <!--begin::Title-->
                        <h5 class="mb-4">Payment Details</h5>
                        <!--end::Title-->
                        <!--begin::Details-->
                        <div class="mb-0">
                            <!--begin::Card info-->
                            <div class="fw-semibold text-gray-600 d-flex align-items-center">Mastercard
                            <img src="{{ asset('assets/media/svg/card-logos/mastercard.svg') }}" class="w-35px ms-2" alt="" /></div>
                            <!--end::Card info-->
                            <!--begin::Card expiry-->
                            <div class="fw-semibold text-gray-600">Expires Dec 2024</div>
                            <!--end::Card expiry-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Seperator-->
                    <div class="separator separator-dashed mb-7"></div>
                    <!--end::Seperator-->
                    <!--begin::Section-->
                    <div class="mb-10">
                        <!--begin::Title-->
                        <h5 class="mb-4">Subscription Details</h5>
                        <!--end::Title-->
                        <!--begin::Details-->
                        <table class="table fs-6 fw-semibold gs-0 gy-2 gx-2">
                            <!--begin::Row-->
                            <tr class="">
                                <td class="text-gray-500">Subscription ID:</td>
                                <td class="text-gray-800">sub_4567_8765</td>
                            </tr>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <tr class="">
                                <td class="text-gray-500">Started:</td>
                                <td class="text-gray-800">15 Apr 2021</td>
                            </tr>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <tr class="">
                                <td class="text-gray-500">Status:</td>
                                <td>
                                    <span class="badge badge-light-success">Active</span>
                                </td>
                            </tr>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <tr class="">
                                <td class="text-gray-500">Next Invoice:</td>
                                <td class="text-gray-800">15 Apr 2022</td>
                            </tr>
                            <!--end::Row-->
                        </table>
                        <!--end::Details-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Actions-->
                    <div class="mb-0">
                        <a href="apps/subscriptions/add.html" class="btn btn-primary" id="kt_subscriptions_create_button">Edit Subscription</a>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Sidebar-->
    </div>
    <!--end::Layout-->

</x-default-layout>
