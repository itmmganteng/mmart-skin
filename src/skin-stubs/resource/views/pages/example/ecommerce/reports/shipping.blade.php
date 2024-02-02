<x-default-layout>
    @section('title')
        Shipping
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('ecommerce.reports.shipping') }}
    @endsection

    <!--begin::Products-->
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
                </div>
                <!--end::Search-->
                <!--begin::Export buttons-->
                <div id="kt_ecommerce_report_shipping_export" class="d-none"></div>
                <!--end::Export buttons-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <!--begin::Daterangepicker-->
                <input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_shipping_daterangepicker" />
                <!--end::Daterangepicker-->
                <!--begin::Filter-->
                <div class="w-150px">
                    <!--begin::Select2-->
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
                        <option></option>
                        <option value="all">All</option>
                        <option value="Completed">Completed</option>
                        <option value="In Transit">In Transit</option>
                        <option value="Pending">Pending</option>
                        <option value="Cancelled">Cancelled</option>
                    </select>
                    <!--end::Select2-->
                </div>
                <!--end::Filter-->
                <!--begin::Export dropdown-->
                <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <i class="ki-duotone ki-exit-up fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>Export Report</button>
                <!--begin::Menu-->
                <div id="kt_ecommerce_report_shipping_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">Copy to clipboard</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">Export as Excel</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">Export as CSV</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">Export as PDF</a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
                <!--end::Export dropdown-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_shipping_table">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-100px">Date</th>
                        <th class="min-w-100px">Shipping Type</th>
                        <th class="min-w-100px">Shipping ID</th>
                        <th class="min-w-100px">Status</th>
                        <th class="text-end min-w-75px">No. Orders</th>
                        <th class="text-end min-w-100px">Total</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    <tr>
                        <td>Feb 21, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0061379</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">In Transit</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">18</td>
                        <td class="text-end">$358.00</td>
                    </tr>
                    <tr>
                        <td>Sep 22, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0057842</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Cancelled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end">$113.00</td>
                    </tr>
                    <tr>
                        <td>Oct 25, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0033972</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">19</td>
                        <td class="text-end">$226.00</td>
                    </tr>
                    <tr>
                        <td>Feb 21, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0068009</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end">$139.00</td>
                    </tr>
                    <tr>
                        <td>Feb 21, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0042917</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end">$474.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0046780</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">20</td>
                        <td class="text-end">$263.00</td>
                    </tr>
                    <tr>
                        <td>Apr 15, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0068172</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">20</td>
                        <td class="text-end">$296.00</td>
                    </tr>
                    <tr>
                        <td>May 05, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0041567</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">19</td>
                        <td class="text-end">$540.00</td>
                    </tr>
                    <tr>
                        <td>May 05, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0067463</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end">$474.00</td>
                    </tr>
                    <tr>
                        <td>Sep 22, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0064161</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">In Transit</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">19</td>
                        <td class="text-end">$275.00</td>
                    </tr>
                    <tr>
                        <td>Jul 25, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0039579</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end">$281.00</td>
                    </tr>
                    <tr>
                        <td>Mar 10, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0038800</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">17</td>
                        <td class="text-end">$131.00</td>
                    </tr>
                    <tr>
                        <td>Jul 25, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0027255</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">13</td>
                        <td class="text-end">$438.00</td>
                    </tr>
                    <tr>
                        <td>Mar 10, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0057883</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">20</td>
                        <td class="text-end">$190.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0051839</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">20</td>
                        <td class="text-end">$462.00</td>
                    </tr>
                    <tr>
                        <td>Jul 25, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0050580</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">In Transit</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end">$210.00</td>
                    </tr>
                    <tr>
                        <td>Jun 24, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0063414</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">In Transit</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end">$156.00</td>
                    </tr>
                    <tr>
                        <td>May 05, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0054193</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">12</td>
                        <td class="text-end">$600.00</td>
                    </tr>
                    <tr>
                        <td>Mar 10, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0032356</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">20</td>
                        <td class="text-end">$309.00</td>
                    </tr>
                    <tr>
                        <td>Feb 21, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0037452</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-warning">Pending</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end">$534.00</td>
                    </tr>
                    <tr>
                        <td>Jun 24, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0029593</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">13</td>
                        <td class="text-end">$51.00</td>
                    </tr>
                    <tr>
                        <td>Jun 20, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0056820</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end">$65.00</td>
                    </tr>
                    <tr>
                        <td>Jul 25, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0069504</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">19</td>
                        <td class="text-end">$503.00</td>
                    </tr>
                    <tr>
                        <td>Nov 10, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0040531</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end">$462.00</td>
                    </tr>
                    <tr>
                        <td>Nov 10, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0068575</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">In Transit</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end">$363.00</td>
                    </tr>
                    <tr>
                        <td>Jul 25, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0040758</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">In Transit</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">17</td>
                        <td class="text-end">$85.00</td>
                    </tr>
                    <tr>
                        <td>Sep 22, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0045799</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end">$596.00</td>
                    </tr>
                    <tr>
                        <td>Mar 10, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0043001</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end">$83.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0025478</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">18</td>
                        <td class="text-end">$50.00</td>
                    </tr>
                    <tr>
                        <td>Jun 20, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0050705</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">14</td>
                        <td class="text-end">$585.00</td>
                    </tr>
                    <tr>
                        <td>Feb 21, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0066445</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-warning">Pending</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end">$383.00</td>
                    </tr>
                    <tr>
                        <td>Apr 15, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0054187</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Cancelled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end">$479.00</td>
                    </tr>
                    <tr>
                        <td>Apr 15, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0041095</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">In Transit</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">6</td>
                        <td class="text-end">$149.00</td>
                    </tr>
                    <tr>
                        <td>Feb 21, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0038698</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">In Transit</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end">$86.00</td>
                    </tr>
                    <tr>
                        <td>Dec 20, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0057041</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end">$318.00</td>
                    </tr>
                    <tr>
                        <td>Oct 25, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0069638</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">11</td>
                        <td class="text-end">$168.00</td>
                    </tr>
                    <tr>
                        <td>Apr 15, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0026264</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">In Transit</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">11</td>
                        <td class="text-end">$333.00</td>
                    </tr>
                    <tr>
                        <td>Oct 25, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0047924</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end">$415.00</td>
                    </tr>
                    <tr>
                        <td>Jun 20, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0049262</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end">$365.00</td>
                    </tr>
                    <tr>
                        <td>Nov 10, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0042244</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">In Transit</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">7</td>
                        <td class="text-end">$154.00</td>
                    </tr>
                    <tr>
                        <td>Dec 20, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0041827</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-warning">Pending</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">17</td>
                        <td class="text-end">$115.00</td>
                    </tr>
                    <tr>
                        <td>Oct 25, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0054334</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Cancelled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end">$366.00</td>
                    </tr>
                    <tr>
                        <td>Dec 20, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0053242</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">10</td>
                        <td class="text-end">$51.00</td>
                    </tr>
                    <tr>
                        <td>Dec 20, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0028636</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-warning">Pending</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">11</td>
                        <td class="text-end">$552.00</td>
                    </tr>
                    <tr>
                        <td>Jun 24, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0060895</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Cancelled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">11</td>
                        <td class="text-end">$398.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0041749</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-warning">Pending</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">13</td>
                        <td class="text-end">$391.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0025751</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end">$418.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0061164</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end">$505.00</td>
                    </tr>
                    <tr>
                        <td>Dec 20, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0048985</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end">$419.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td>Flat Shipping Rate</td>
                        <td>
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0066714</a>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">In Transit</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">6</td>
                        <td class="text-end">$264.00</td>
                    </tr>
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Products-->

</x-default-layout>
