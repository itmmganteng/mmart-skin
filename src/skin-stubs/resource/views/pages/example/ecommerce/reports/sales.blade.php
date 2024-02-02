<x-default-layout>
    @section('title')
        Sales
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('ecommerce.reports.sales') }}
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
                <div id="kt_ecommerce_report_sales_export" class="d-none"></div>
                <!--end::Export buttons-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <!--begin::Daterangepicker-->
                <input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_sales_daterangepicker" />
                <!--end::Daterangepicker-->
                <!--begin::Export dropdown-->
                <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <i class="ki-duotone ki-exit-up fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>Export Report</button>
                <!--begin::Menu-->
                <div id="kt_ecommerce_report_sales_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
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
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_sales_table">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-100px">Date</th>
                        <th class="text-end min-w-75px">No. Orders</th>
                        <th class="text-end min-w-75px">Products Sold</th>
                        <th class="text-end min-w-75px">Tax</th>
                        <th class="text-end min-w-100px">Total</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    <tr>
                        <td>Jun 24, 2023</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">7</td>
                        <td class="text-end pe-0">$29.00</td>
                        <td class="text-end">$192.00</td>
                    </tr>
                    <tr>
                        <td>Jul 25, 2023</td>
                        <td class="text-end pe-0">11</td>
                        <td class="text-end pe-0">15</td>
                        <td class="text-end pe-0">$82.00</td>
                        <td class="text-end">$548.00</td>
                    </tr>
                    <tr>
                        <td>Jul 25, 2023</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">7</td>
                        <td class="text-end pe-0">$21.00</td>
                        <td class="text-end">$138.00</td>
                    </tr>
                    <tr>
                        <td>May 05, 2023</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">5</td>
                        <td class="text-end pe-0">$32.00</td>
                        <td class="text-end">$211.00</td>
                    </tr>
                    <tr>
                        <td>Nov 10, 2023</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end pe-0">$36.00</td>
                        <td class="text-end">$242.00</td>
                    </tr>
                    <tr>
                        <td>Jul 25, 2023</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">$65.00</td>
                        <td class="text-end">$431.00</td>
                    </tr>
                    <tr>
                        <td>Apr 15, 2023</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">6</td>
                        <td class="text-end pe-0">$47.00</td>
                        <td class="text-end">$311.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td class="text-end pe-0">20</td>
                        <td class="text-end pe-0">24</td>
                        <td class="text-end pe-0">$24.00</td>
                        <td class="text-end">$157.00</td>
                    </tr>
                    <tr>
                        <td>Apr 15, 2023</td>
                        <td class="text-end pe-0">6</td>
                        <td class="text-end pe-0">10</td>
                        <td class="text-end pe-0">$75.00</td>
                        <td class="text-end">$499.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td class="text-end pe-0">13</td>
                        <td class="text-end pe-0">18</td>
                        <td class="text-end pe-0">$50.00</td>
                        <td class="text-end">$331.00</td>
                    </tr>
                    <tr>
                        <td>May 05, 2023</td>
                        <td class="text-end pe-0">16</td>
                        <td class="text-end pe-0">20</td>
                        <td class="text-end pe-0">$62.00</td>
                        <td class="text-end">$410.00</td>
                    </tr>
                    <tr>
                        <td>May 05, 2023</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">10</td>
                        <td class="text-end pe-0">$56.00</td>
                        <td class="text-end">$374.00</td>
                    </tr>
                    <tr>
                        <td>Sep 22, 2023</td>
                        <td class="text-end pe-0">10</td>
                        <td class="text-end pe-0">12</td>
                        <td class="text-end pe-0">$85.00</td>
                        <td class="text-end">$566.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">10</td>
                        <td class="text-end pe-0">$63.00</td>
                        <td class="text-end">$423.00</td>
                    </tr>
                    <tr>
                        <td>Nov 10, 2023</td>
                        <td class="text-end pe-0">11</td>
                        <td class="text-end pe-0">13</td>
                        <td class="text-end pe-0">$42.00</td>
                        <td class="text-end">$277.00</td>
                    </tr>
                    <tr>
                        <td>Apr 15, 2023</td>
                        <td class="text-end pe-0">7</td>
                        <td class="text-end pe-0">11</td>
                        <td class="text-end pe-0">$33.00</td>
                        <td class="text-end">$223.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td class="text-end pe-0">18</td>
                        <td class="text-end pe-0">23</td>
                        <td class="text-end pe-0">$54.00</td>
                        <td class="text-end">$359.00</td>
                    </tr>
                    <tr>
                        <td>Sep 22, 2023</td>
                        <td class="text-end pe-0">10</td>
                        <td class="text-end pe-0">12</td>
                        <td class="text-end pe-0">$54.00</td>
                        <td class="text-end">$357.00</td>
                    </tr>
                    <tr>
                        <td>Nov 10, 2023</td>
                        <td class="text-end pe-0">13</td>
                        <td class="text-end pe-0">17</td>
                        <td class="text-end pe-0">$49.00</td>
                        <td class="text-end">$328.00</td>
                    </tr>
                    <tr>
                        <td>Jun 24, 2023</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">7</td>
                        <td class="text-end pe-0">$50.00</td>
                        <td class="text-end">$330.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end pe-0">$52.00</td>
                        <td class="text-end">$346.00</td>
                    </tr>
                    <tr>
                        <td>Jun 20, 2023</td>
                        <td class="text-end pe-0">14</td>
                        <td class="text-end pe-0">17</td>
                        <td class="text-end pe-0">$85.00</td>
                        <td class="text-end">$567.00</td>
                    </tr>
                    <tr>
                        <td>Sep 22, 2023</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">6</td>
                        <td class="text-end pe-0">$38.00</td>
                        <td class="text-end">$251.00</td>
                    </tr>
                    <tr>
                        <td>Apr 15, 2023</td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">$11.00</td>
                        <td class="text-end">$71.00</td>
                    </tr>
                    <tr>
                        <td>Nov 10, 2023</td>
                        <td class="text-end pe-0">14</td>
                        <td class="text-end pe-0">18</td>
                        <td class="text-end pe-0">$40.00</td>
                        <td class="text-end">$267.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td class="text-end pe-0">7</td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end pe-0">$74.00</td>
                        <td class="text-end">$492.00</td>
                    </tr>
                    <tr>
                        <td>May 05, 2023</td>
                        <td class="text-end pe-0">12</td>
                        <td class="text-end pe-0">15</td>
                        <td class="text-end pe-0">$70.00</td>
                        <td class="text-end">$469.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td class="text-end pe-0">5</td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end pe-0">$67.00</td>
                        <td class="text-end">$449.00</td>
                    </tr>
                    <tr>
                        <td>Mar 10, 2023</td>
                        <td class="text-end pe-0">18</td>
                        <td class="text-end pe-0">22</td>
                        <td class="text-end pe-0">$65.00</td>
                        <td class="text-end">$432.00</td>
                    </tr>
                    <tr>
                        <td>Jun 24, 2023</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">$70.00</td>
                        <td class="text-end">$469.00</td>
                    </tr>
                    <tr>
                        <td>Apr 15, 2023</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end pe-0">$43.00</td>
                        <td class="text-end">$284.00</td>
                    </tr>
                    <tr>
                        <td>May 05, 2023</td>
                        <td class="text-end pe-0">17</td>
                        <td class="text-end pe-0">19</td>
                        <td class="text-end pe-0">$75.00</td>
                        <td class="text-end">$499.00</td>
                    </tr>
                    <tr>
                        <td>Dec 20, 2023</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">7</td>
                        <td class="text-end pe-0">$51.00</td>
                        <td class="text-end">$340.00</td>
                    </tr>
                    <tr>
                        <td>Oct 25, 2023</td>
                        <td class="text-end pe-0">19</td>
                        <td class="text-end pe-0">21</td>
                        <td class="text-end pe-0">$58.00</td>
                        <td class="text-end">$386.00</td>
                    </tr>
                    <tr>
                        <td>Feb 21, 2023</td>
                        <td class="text-end pe-0">6</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">$64.00</td>
                        <td class="text-end">$425.00</td>
                    </tr>
                    <tr>
                        <td>May 05, 2023</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">6</td>
                        <td class="text-end pe-0">$89.00</td>
                        <td class="text-end">$590.00</td>
                    </tr>
                    <tr>
                        <td>Sep 22, 2023</td>
                        <td class="text-end pe-0">20</td>
                        <td class="text-end pe-0">22</td>
                        <td class="text-end pe-0">$29.00</td>
                        <td class="text-end">$190.00</td>
                    </tr>
                    <tr>
                        <td>Feb 21, 2023</td>
                        <td class="text-end pe-0">12</td>
                        <td class="text-end pe-0">17</td>
                        <td class="text-end pe-0">$13.00</td>
                        <td class="text-end">$86.00</td>
                    </tr>
                    <tr>
                        <td>Mar 10, 2023</td>
                        <td class="text-end pe-0">17</td>
                        <td class="text-end pe-0">20</td>
                        <td class="text-end pe-0">$73.00</td>
                        <td class="text-end">$487.00</td>
                    </tr>
                    <tr>
                        <td>Jun 20, 2023</td>
                        <td class="text-end pe-0">6</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">$48.00</td>
                        <td class="text-end">$319.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td class="text-end pe-0">7</td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end pe-0">$58.00</td>
                        <td class="text-end">$385.00</td>
                    </tr>
                    <tr>
                        <td>Jun 24, 2023</td>
                        <td class="text-end pe-0">19</td>
                        <td class="text-end pe-0">24</td>
                        <td class="text-end pe-0">$69.00</td>
                        <td class="text-end">$461.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end pe-0">12</td>
                        <td class="text-end pe-0">$30.00</td>
                        <td class="text-end">$200.00</td>
                    </tr>
                    <tr>
                        <td>Dec 20, 2023</td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end pe-0">13</td>
                        <td class="text-end pe-0">$59.00</td>
                        <td class="text-end">$391.00</td>
                    </tr>
                    <tr>
                        <td>Apr 15, 2023</td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end pe-0">$50.00</td>
                        <td class="text-end">$333.00</td>
                    </tr>
                    <tr>
                        <td>Nov 10, 2023</td>
                        <td class="text-end pe-0">12</td>
                        <td class="text-end pe-0">15</td>
                        <td class="text-end pe-0">$57.00</td>
                        <td class="text-end">$380.00</td>
                    </tr>
                    <tr>
                        <td>May 05, 2023</td>
                        <td class="text-end pe-0">6</td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end pe-0">$53.00</td>
                        <td class="text-end">$353.00</td>
                    </tr>
                    <tr>
                        <td>Mar 10, 2023</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">12</td>
                        <td class="text-end pe-0">$81.00</td>
                        <td class="text-end">$542.00</td>
                    </tr>
                    <tr>
                        <td>Jul 25, 2023</td>
                        <td class="text-end pe-0">5</td>
                        <td class="text-end pe-0">7</td>
                        <td class="text-end pe-0">$53.00</td>
                        <td class="text-end">$351.00</td>
                    </tr>
                    <tr>
                        <td>Apr 15, 2023</td>
                        <td class="text-end pe-0">12</td>
                        <td class="text-end pe-0">15</td>
                        <td class="text-end pe-0">$69.00</td>
                        <td class="text-end">$463.00</td>
                    </tr>
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Products-->

</x-default-layout>
