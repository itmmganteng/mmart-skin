<x-default-layout>
    @section('title')
        Returns
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('ecommerce.reports.returns') }}
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
                <div id="kt_ecommerce_report_returns_export" class="d-none"></div>
                <!--end::Export buttons-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <!--begin::Daterangepicker-->
                <input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_returns_daterangepicker" />
                <!--end::Daterangepicker-->
                <!--begin::Export dropdown-->
                <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <i class="ki-duotone ki-exit-up fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>Export Report</button>
                <!--begin::Menu-->
                <div id="kt_ecommerce_report_returns_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
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
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_returns_table">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-100px">Date</th>
                        <th class="text-end min-w-75px">No. Orders Returned</th>
                        <th class="text-end min-w-75px">No. Orders Refunded</th>
                        <th class="text-end min-w-75px">No. Orders Replaced</th>
                        <th class="text-end min-w-100px">Total Refunded</th>
                        <th class="text-end min-w-100px">Total Replaced</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    <tr>
                        <td>Sep 22, 2023</td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$38.00</td>
                    </tr>
                    <tr>
                        <td>Jun 20, 2023</td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">$40.00</td>
                        <td class="text-end">$94.00</td>
                    </tr>
                    <tr>
                        <td>Mar 10, 2023</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">$79.00</td>
                        <td class="text-end">$142.00</td>
                    </tr>
                    <tr>
                        <td>May 05, 2023</td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">$100.00</td>
                        <td class="text-end">$150.00</td>
                    </tr>
                    <tr>
                        <td>Nov 10, 2023</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$67.00</td>
                    </tr>
                    <tr>
                        <td>Feb 21, 2023</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">6</td>
                        <td class="text-end pe-0">$19.00</td>
                        <td class="text-end">$70.00</td>
                    </tr>
                    <tr>
                        <td>Apr 15, 2023</td>
                        <td class="text-end pe-0">6</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">6</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$38.00</td>
                    </tr>
                    <tr>
                        <td>Feb 21, 2023</td>
                        <td class="text-end pe-0">7</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">5</td>
                        <td class="text-end pe-0">$63.00</td>
                        <td class="text-end">$138.00</td>
                    </tr>
                    <tr>
                        <td>Jun 24, 2023</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$30.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$56.00</td>
                    </tr>
                    <tr>
                        <td>Sep 22, 2023</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">$72.00</td>
                        <td class="text-end">$147.00</td>
                    </tr>
                    <tr>
                        <td>Dec 20, 2023</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">5</td>
                        <td class="text-end pe-0">$99.00</td>
                        <td class="text-end">$136.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">6</td>
                        <td class="text-end pe-0">$74.00</td>
                        <td class="text-end">$145.00</td>
                    </tr>
                    <tr>
                        <td>Nov 10, 2023</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">$34.00</td>
                        <td class="text-end">$95.00</td>
                    </tr>
                    <tr>
                        <td>Sep 22, 2023</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$98.00</td>
                    </tr>
                    <tr>
                        <td>Jun 20, 2023</td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$39.00</td>
                    </tr>
                    <tr>
                        <td>Sep 22, 2023</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$46.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$63.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$41.00</td>
                    </tr>
                    <tr>
                        <td>Feb 21, 2023</td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$72.00</td>
                    </tr>
                    <tr>
                        <td>Oct 25, 2023</td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">$48.00</td>
                        <td class="text-end">$100.00</td>
                    </tr>
                    <tr>
                        <td>Jun 20, 2023</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$51.00</td>
                    </tr>
                    <tr>
                        <td>Dec 20, 2023</td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$74.00</td>
                    </tr>
                    <tr>
                        <td>Dec 20, 2023</td>
                        <td class="text-end pe-0">7</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">6</td>
                        <td class="text-end pe-0">$28.00</td>
                        <td class="text-end">$60.00</td>
                    </tr>
                    <tr>
                        <td>Sep 22, 2023</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$26.00</td>
                    </tr>
                    <tr>
                        <td>Sep 22, 2023</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$66.00</td>
                    </tr>
                    <tr>
                        <td>Jun 24, 2023</td>
                        <td class="text-end pe-0">7</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">5</td>
                        <td class="text-end pe-0">$79.00</td>
                        <td class="text-end">$121.00</td>
                    </tr>
                    <tr>
                        <td>Nov 10, 2023</td>
                        <td class="text-end pe-0">10</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end pe-0">$64.00</td>
                        <td class="text-end">$87.00</td>
                    </tr>
                    <tr>
                        <td>Jun 24, 2023</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$69.00</td>
                    </tr>
                    <tr>
                        <td>Jul 25, 2023</td>
                        <td class="text-end pe-0">7</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end pe-0">$96.00</td>
                        <td class="text-end">$194.00</td>
                    </tr>
                    <tr>
                        <td>Feb 21, 2023</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$35.00</td>
                    </tr>
                    <tr>
                        <td>Apr 15, 2023</td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$99.00</td>
                    </tr>
                    <tr>
                        <td>May 05, 2023</td>
                        <td class="text-end pe-0">5</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">5</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$36.00</td>
                    </tr>
                    <tr>
                        <td>Mar 10, 2023</td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">$56.00</td>
                        <td class="text-end">$135.00</td>
                    </tr>
                    <tr>
                        <td>Aug 19, 2023</td>
                        <td class="text-end pe-0">10</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">10</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$98.00</td>
                    </tr>
                    <tr>
                        <td>Apr 15, 2023</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$18.00</td>
                    </tr>
                    <tr>
                        <td>Sep 22, 2023</td>
                        <td class="text-end pe-0">6</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">$36.00</td>
                        <td class="text-end">$134.00</td>
                    </tr>
                    <tr>
                        <td>Jun 20, 2023</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$68.00</td>
                    </tr>
                    <tr>
                        <td>Jun 20, 2023</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">5</td>
                        <td class="text-end pe-0">$52.00</td>
                        <td class="text-end">$73.00</td>
                    </tr>
                    <tr>
                        <td>Oct 25, 2023</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$15.00</td>
                    </tr>
                    <tr>
                        <td>Apr 15, 2023</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">$15.00</td>
                        <td class="text-end">$97.00</td>
                    </tr>
                    <tr>
                        <td>Oct 25, 2023</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">6</td>
                        <td class="text-end pe-0">$40.00</td>
                        <td class="text-end">$128.00</td>
                    </tr>
                    <tr>
                        <td>Jun 24, 2023</td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">$92.00</td>
                        <td class="text-end">$138.00</td>
                    </tr>
                    <tr>
                        <td>May 05, 2023</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">6</td>
                        <td class="text-end pe-0">$88.00</td>
                        <td class="text-end">$167.00</td>
                    </tr>
                    <tr>
                        <td>Nov 10, 2023</td>
                        <td class="text-end pe-0">9</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">7</td>
                        <td class="text-end pe-0">$82.00</td>
                        <td class="text-end">$99.00</td>
                    </tr>
                    <tr>
                        <td>Feb 21, 2023</td>
                        <td class="text-end pe-0">5</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">$36.00</td>
                        <td class="text-end">$66.00</td>
                    </tr>
                    <tr>
                        <td>Jun 20, 2023</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$22.00</td>
                    </tr>
                    <tr>
                        <td>Feb 21, 2023</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$85.00</td>
                    </tr>
                    <tr>
                        <td>Oct 25, 2023</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">0</td>
                        <td class="text-end pe-0">2</td>
                        <td class="text-end pe-0">$0.00</td>
                        <td class="text-end">$95.00</td>
                    </tr>
                    <tr>
                        <td>Oct 25, 2023</td>
                        <td class="text-end pe-0">7</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">4</td>
                        <td class="text-end pe-0">$96.00</td>
                        <td class="text-end">$125.00</td>
                    </tr>
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Products-->

</x-default-layout>
