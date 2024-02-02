<x-default-layout>
    @section('title')
        Customer Orders
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('ecommerce.reports.customer-orders') }}
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
                <div id="kt_ecommerce_report_customer_orders_export" class="d-none"></div>
                <!--end::Export buttons-->
            </div>
            <!--end::Card title==

<!==begin::Card toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <!--begin::Daterangepicker-->
                <input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_customer_orders_daterangepicker" />
                <!--end::Daterangepicker-->
                <!--begin::Filter-->
                <div class="w-150px">
                    <!--begin::Select2-->
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
                        <option></option>
                        <option value="all">All</option>
                        <option value="active">Active</option>
                        <option value="locked">Locked</option>
                        <option value="disabled">Disabled</option>
                        <option value="banned">Banned</option>
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
                <div id="kt_ecommerce_report_customer_orders_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
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
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_customer_orders_table">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-100px">Customer Name</th>
                        <th class="min-w-100px">Email</th>
                        <th class="min-w-100px">Status</th>
                        <th class="min-w-100px">Date Joined</th>
                        <th class="text-end min-w-75px">No. Orders</th>
                        <th class="text-end min-w-75px">No. Products</th>
                        <th class="text-end min-w-100px">Total</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Emma Smith</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">smith@kpmg.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-danger">Banned</div>
                        </td>
                        <td>22 Sep 2023, 10:30 am</td>
                        <td class="text-end pe-0">84</td>
                        <td class="text-end pe-0">93</td>
                        <td class="text-end">$1995.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Melody Macy</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">melody@altbox.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>25 Jul 2023, 5:30 pm</td>
                        <td class="text-end pe-0">91</td>
                        <td class="text-end pe-0">99</td>
                        <td class="text-end">$4156.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Max Smith</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">max@kt.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>25 Jul 2023, 11:30 am</td>
                        <td class="text-end pe-0">28</td>
                        <td class="text-end pe-0">33</td>
                        <td class="text-end">$3540.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Sean Bean</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">sean@dellito.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-danger">Banned</div>
                        </td>
                        <td>22 Sep 2023, 5:30 pm</td>
                        <td class="text-end pe-0">23</td>
                        <td class="text-end pe-0">29</td>
                        <td class="text-end">$2877.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Brian Cox</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">brian@exchange.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>19 Aug 2023, 2:40 pm</td>
                        <td class="text-end pe-0">70</td>
                        <td class="text-end pe-0">80</td>
                        <td class="text-end">$1004.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Mikaela Collins</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">mik@pex.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-info">Disabled</div>
                        </td>
                        <td>05 May 2023, 6:05 pm</td>
                        <td class="text-end pe-0">35</td>
                        <td class="text-end pe-0">40</td>
                        <td class="text-end">$1347.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Francis Mitcham</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">f.mit@kpmg.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>25 Oct 2023, 11:05 am</td>
                        <td class="text-end pe-0">8</td>
                        <td class="text-end pe-0">16</td>
                        <td class="text-end">$1200.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Olivia Wild</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">olivia@corpmail.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>25 Jul 2023, 2:40 pm</td>
                        <td class="text-end pe-0">28</td>
                        <td class="text-end pe-0">36</td>
                        <td class="text-end">$2761.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Neil Owen</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">owen.neil@gmail.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>21 Feb 2023, 10:10 pm</td>
                        <td class="text-end pe-0">71</td>
                        <td class="text-end pe-0">80</td>
                        <td class="text-end">$1697.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Dan Wilson</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">dam@consilting.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>19 Aug 2023, 9:23 pm</td>
                        <td class="text-end pe-0">99</td>
                        <td class="text-end pe-0">109</td>
                        <td class="text-end">$1174.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Emma Bold</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">emma@intenso.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>19 Aug 2023, 5:20 pm</td>
                        <td class="text-end pe-0">11</td>
                        <td class="text-end pe-0">18</td>
                        <td class="text-end">$1214.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Ana Crown</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">ana.cf@limtel.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>25 Oct 2023, 5:30 pm</td>
                        <td class="text-end pe-0">1</td>
                        <td class="text-end pe-0">14</td>
                        <td class="text-end">$4754.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Robert Doe</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">robert@benko.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>25 Jul 2023, 11:30 am</td>
                        <td class="text-end pe-0">73</td>
                        <td class="text-end pe-0">87</td>
                        <td class="text-end">$5064.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">John Miller</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">miller@mapple.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>20 Jun 2023, 5:20 pm</td>
                        <td class="text-end pe-0">74</td>
                        <td class="text-end pe-0">89</td>
                        <td class="text-end">$3976.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Lucy Kunic</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">lucy.m@fentech.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>20 Jun 2023, 5:20 pm</td>
                        <td class="text-end pe-0">22</td>
                        <td class="text-end pe-0">27</td>
                        <td class="text-end">$2829.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Ethan Wilder</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">ethan@loop.com.au</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>15 Apr 2023, 9:23 pm</td>
                        <td class="text-end pe-0">23</td>
                        <td class="text-end pe-0">31</td>
                        <td class="text-end">$2919.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Dan Wilson</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">dam@consilting.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>21 Feb 2023, 6:05 pm</td>
                        <td class="text-end pe-0">25</td>
                        <td class="text-end pe-0">33</td>
                        <td class="text-end">$97.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Emma Smith</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">smith@kpmg.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>20 Dec 2023, 6:43 am</td>
                        <td class="text-end pe-0">67</td>
                        <td class="text-end pe-0">72</td>
                        <td class="text-end">$1914.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Melody Macy</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">melody@altbox.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>20 Jun 2023, 9:23 pm</td>
                        <td class="text-end pe-0">19</td>
                        <td class="text-end pe-0">25</td>
                        <td class="text-end">$341.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Max Smith</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">max@kt.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>21 Feb 2023, 5:30 pm</td>
                        <td class="text-end pe-0">53</td>
                        <td class="text-end pe-0">60</td>
                        <td class="text-end">$1303.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Sean Bean</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">sean@dellito.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>05 May 2023, 5:30 pm</td>
                        <td class="text-end pe-0">39</td>
                        <td class="text-end pe-0">49</td>
                        <td class="text-end">$1898.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Brian Cox</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">brian@exchange.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>24 Jun 2023, 2:40 pm</td>
                        <td class="text-end pe-0">28</td>
                        <td class="text-end pe-0">42</td>
                        <td class="text-end">$2396.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Mikaela Collins</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">mik@pex.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>22 Sep 2023, 6:43 am</td>
                        <td class="text-end pe-0">16</td>
                        <td class="text-end pe-0">23</td>
                        <td class="text-end">$901.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Francis Mitcham</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">f.mit@kpmg.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>25 Jul 2023, 10:30 am</td>
                        <td class="text-end pe-0">40</td>
                        <td class="text-end pe-0">48</td>
                        <td class="text-end">$3016.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Olivia Wild</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">olivia@corpmail.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>20 Dec 2023, 6:43 am</td>
                        <td class="text-end pe-0">37</td>
                        <td class="text-end pe-0">51</td>
                        <td class="text-end">$2573.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Neil Owen</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">owen.neil@gmail.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>25 Jul 2023, 11:30 am</td>
                        <td class="text-end pe-0">3</td>
                        <td class="text-end pe-0">16</td>
                        <td class="text-end">$270.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Dan Wilson</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">dam@consilting.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-info">Disabled</div>
                        </td>
                        <td>25 Oct 2023, 8:43 pm</td>
                        <td class="text-end pe-0">34</td>
                        <td class="text-end pe-0">44</td>
                        <td class="text-end">$1161.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Emma Bold</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">emma@intenso.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>25 Oct 2023, 10:10 pm</td>
                        <td class="text-end pe-0">64</td>
                        <td class="text-end pe-0">74</td>
                        <td class="text-end">$3067.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Ana Crown</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">ana.cf@limtel.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>10 Nov 2023, 11:05 am</td>
                        <td class="text-end pe-0">96</td>
                        <td class="text-end pe-0">106</td>
                        <td class="text-end">$1010.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Robert Doe</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">robert@benko.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>05 May 2023, 9:23 pm</td>
                        <td class="text-end pe-0">32</td>
                        <td class="text-end pe-0">38</td>
                        <td class="text-end">$2287.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">John Miller</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">miller@mapple.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-info">Disabled</div>
                        </td>
                        <td>21 Feb 2023, 6:05 pm</td>
                        <td class="text-end pe-0">65</td>
                        <td class="text-end pe-0">71</td>
                        <td class="text-end">$1338.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Lucy Kunic</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">lucy.m@fentech.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>10 Mar 2023, 8:43 pm</td>
                        <td class="text-end pe-0">100</td>
                        <td class="text-end pe-0">106</td>
                        <td class="text-end">$2005.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Ethan Wilder</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">ethan@loop.com.au</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>21 Feb 2023, 8:43 pm</td>
                        <td class="text-end pe-0">79</td>
                        <td class="text-end pe-0">88</td>
                        <td class="text-end">$1897.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Emma Smith</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">smith@kpmg.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>10 Mar 2023, 11:30 am</td>
                        <td class="text-end pe-0">84</td>
                        <td class="text-end pe-0">96</td>
                        <td class="text-end">$2467.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Emma Smith</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">smith@kpmg.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-warning">Locked</div>
                        </td>
                        <td>20 Jun 2023, 11:30 am</td>
                        <td class="text-end pe-0">28</td>
                        <td class="text-end pe-0">42</td>
                        <td class="text-end">$3649.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Melody Macy</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">melody@altbox.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>25 Oct 2023, 2:40 pm</td>
                        <td class="text-end pe-0">77</td>
                        <td class="text-end pe-0">92</td>
                        <td class="text-end">$4840.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Max Smith</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">max@kt.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>10 Mar 2023, 11:30 am</td>
                        <td class="text-end pe-0">16</td>
                        <td class="text-end pe-0">23</td>
                        <td class="text-end">$2087.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Sean Bean</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">sean@dellito.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>15 Apr 2023, 9:23 pm</td>
                        <td class="text-end pe-0">68</td>
                        <td class="text-end pe-0">80</td>
                        <td class="text-end">$2819.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Brian Cox</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">brian@exchange.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>25 Oct 2023, 5:20 pm</td>
                        <td class="text-end pe-0">84</td>
                        <td class="text-end pe-0">93</td>
                        <td class="text-end">$4977.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Mikaela Collins</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">mik@pex.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>10 Nov 2023, 6:05 pm</td>
                        <td class="text-end pe-0">34</td>
                        <td class="text-end pe-0">39</td>
                        <td class="text-end">$2727.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Francis Mitcham</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">f.mit@kpmg.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-warning">Locked</div>
                        </td>
                        <td>05 May 2023, 6:05 pm</td>
                        <td class="text-end pe-0">10</td>
                        <td class="text-end pe-0">18</td>
                        <td class="text-end">$3509.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Olivia Wild</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">olivia@corpmail.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>22 Sep 2023, 9:23 pm</td>
                        <td class="text-end pe-0">44</td>
                        <td class="text-end pe-0">51</td>
                        <td class="text-end">$3341.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Neil Owen</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">owen.neil@gmail.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>05 May 2023, 6:43 am</td>
                        <td class="text-end pe-0">88</td>
                        <td class="text-end pe-0">98</td>
                        <td class="text-end">$4885.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Dan Wilson</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">dam@consilting.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>05 May 2023, 10:30 am</td>
                        <td class="text-end pe-0">90</td>
                        <td class="text-end pe-0">98</td>
                        <td class="text-end">$3915.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Emma Bold</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">emma@intenso.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>20 Dec 2023, 11:30 am</td>
                        <td class="text-end pe-0">31</td>
                        <td class="text-end pe-0">42</td>
                        <td class="text-end">$1469.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Ana Crown</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">ana.cf@limtel.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>05 May 2023, 9:23 pm</td>
                        <td class="text-end pe-0">78</td>
                        <td class="text-end pe-0">88</td>
                        <td class="text-end">$1170.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Robert Doe</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">robert@benko.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>10 Nov 2023, 10:30 am</td>
                        <td class="text-end pe-0">78</td>
                        <td class="text-end pe-0">89</td>
                        <td class="text-end">$1180.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">John Miller</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">miller@mapple.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-warning">Locked</div>
                        </td>
                        <td>20 Dec 2023, 2:40 pm</td>
                        <td class="text-end pe-0">56</td>
                        <td class="text-end pe-0">68</td>
                        <td class="text-end">$2528.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Lucy Kunic</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">lucy.m@fentech.com</a>
                        </td>
                        <td>
                            <div class="badge badge-light-success">Active</div>
                        </td>
                        <td>20 Dec 2023, 10:10 pm</td>
                        <td class="text-end pe-0">99</td>
                        <td class="text-end pe-0">112</td>
                        <td class="text-end">$1971.00</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Ethan Wilder</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">ethan@loop.com.au</a>
                        </td>
                        <td>
                            <div class="badge badge-light-info">Disabled</div>
                        </td>
                        <td>15 Apr 2023, 11:05 am</td>
                        <td class="text-end pe-0">47</td>
                        <td class="text-end pe-0">57</td>
                        <td class="text-end">$1598.00</td>
                    </tr>
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Products-->
</x-default-layout>
