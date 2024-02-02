<x-default-layout>
    @section('title')
        View
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('ecommerce.reports.view') }}
    @endsection

    <!--begin::Products-->
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-2 position-absolute ms-4">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
                </div>
                <!--end::Search-->
                <!--begin::Export buttons-->
                <div id="kt_ecommerce_report_views_export" class="d-none"></div>
                <!--end::Export buttons-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <!--begin::Daterangepicker-->
                <input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_views_daterangepicker" />
                <!--end::Daterangepicker-->
                <!--begin::Filter-->
                <div class="w-150px">
                    <!--begin::Select2-->
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Rating" data-kt-ecommerce-order-filter="rating">
                        <option></option>
                        <option value="all">All</option>
                        <option value="rating-5">5 Stars</option>
                        <option value="rating-4">4 Stars</option>
                        <option value="rating-3">3 Stars</option>
                        <option value="rating-2">2 Stars</option>
                        <option value="rating-1">1 Stars</option>
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
                <div id="kt_ecommerce_report_views_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
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
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_views_table">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-150px">Product</th>
                        <th class="text-end min-w-100px">SKU</th>
                        <th class="text-end min-w-100px">Rating</th>
                        <th class="text-end min-w-100px">Price</th>
                        <th class="text-end min-w-70px">Viewed</th>
                        <th class="text-end min-w-100px">Percent</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/13.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 13</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02381009</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$285.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>220000</span>
                        </td>
                        <td class="text-end pe-0">22%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/35.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 35</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02299008</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$178.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>249700</span>
                        </td>
                        <td class="text-end pe-0">24.97%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/10.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 10</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02182009</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$259.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>135760</span>
                        </td>
                        <td class="text-end pe-0">13.576%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/15.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 15</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03752006</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$42.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>139008</span>
                        </td>
                        <td class="text-end pe-0">13.9008%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/28.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 28</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01350007</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$88.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>51106</span>
                        </td>
                        <td class="text-end pe-0">5.11064%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/36.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 36</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03430004</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                            <div class="rating justify-content-end">
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
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$265.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>40885</span>
                        </td>
                        <td class="text-end pe-0">4.08851%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/18.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 18</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03668004</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$95.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>32708</span>
                        </td>
                        <td class="text-end pe-0">3.27081%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/14.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 14</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04909009</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$176.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>26167</span>
                        </td>
                        <td class="text-end pe-0">2.61665%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/50.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 50</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01891003</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$72.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>20933</span>
                        </td>
                        <td class="text-end pe-0">2.09332%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/29.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 29</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03942006</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$11.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>16747</span>
                        </td>
                        <td class="text-end pe-0">1.67465%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/6.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 6</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02234005</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$35.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>13397</span>
                        </td>
                        <td class="text-end pe-0">1.33972%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/24.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 24</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02753007</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$224.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>10718</span>
                        </td>
                        <td class="text-end pe-0">1.07178%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/7.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 7</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03697003</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$270.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>8574</span>
                        </td>
                        <td class="text-end pe-0">0.85742%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/34.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 34</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03761007</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$128.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>6859</span>
                        </td>
                        <td class="text-end pe-0">0.68594%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/41.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 41</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03243004</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$87.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>5488</span>
                        </td>
                        <td class="text-end pe-0">0.54875%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/31.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 31</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02980001</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                            <div class="rating justify-content-end">
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
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$199.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>4390</span>
                        </td>
                        <td class="text-end pe-0">0.439%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/27.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 27</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01706007</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$258.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>3512</span>
                        </td>
                        <td class="text-end pe-0">0.3512%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/45.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 45</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02678008</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$134.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>2810</span>
                        </td>
                        <td class="text-end pe-0">0.28096%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/3.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 3</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04197002</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$154.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>2248</span>
                        </td>
                        <td class="text-end pe-0">0.22477%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/39.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 39</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03644003</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$293.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>1798</span>
                        </td>
                        <td class="text-end pe-0">0.17981%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/25.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 25</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04552008</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$46.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>1439</span>
                        </td>
                        <td class="text-end pe-0">0.14385%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/26.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 26</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01178009</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$11.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>1151</span>
                        </td>
                        <td class="text-end pe-0">0.11508%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/4.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 4</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02643003</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$108.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>921</span>
                        </td>
                        <td class="text-end pe-0">0.09207%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/32.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 32</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01821009</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                            <div class="rating justify-content-end">
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
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$80.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>737</span>
                        </td>
                        <td class="text-end pe-0">0.07365%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/23.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 23</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04748007</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$107.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>589</span>
                        </td>
                        <td class="text-end pe-0">0.05892%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/11.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 11</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04212009</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$170.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>471</span>
                        </td>
                        <td class="text-end pe-0">0.04714%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/1.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 1</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01606008</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                            <div class="rating justify-content-end">
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
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$149.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>377</span>
                        </td>
                        <td class="text-end pe-0">0.03771%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/12.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 12</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01418006</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                            <div class="rating justify-content-end">
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
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$183.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>302</span>
                        </td>
                        <td class="text-end pe-0">0.03017%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/9.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 9</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03860002</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$188.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>241</span>
                        </td>
                        <td class="text-end pe-0">0.02413%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/8.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 8</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02923002</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$82.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>193</span>
                        </td>
                        <td class="text-end pe-0">0.01931%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/48.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 48</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01727003</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$20.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>155</span>
                        </td>
                        <td class="text-end pe-0">0.01545%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/40.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 40</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01222007</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$214.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>124</span>
                        </td>
                        <td class="text-end pe-0">0.01236%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/49.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 49</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02298008</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$67.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>99</span>
                        </td>
                        <td class="text-end pe-0">0.00989%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/44.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 44</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04184002</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$130.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>79</span>
                        </td>
                        <td class="text-end pe-0">0.00791%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/42.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 42</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02597008</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$181.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>63</span>
                        </td>
                        <td class="text-end pe-0">0.00633%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/2.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 2</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04294004</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                            <div class="rating justify-content-end">
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
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$15.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>51</span>
                        </td>
                        <td class="text-end pe-0">0.00506%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/17.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 17</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03689004</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$103.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>41</span>
                        </td>
                        <td class="text-end pe-0">0.00405%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/19.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 19</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02677001</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                            <div class="rating justify-content-end">
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
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$139.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>32</span>
                        </td>
                        <td class="text-end pe-0">0.00324%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/37.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 37</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02115006</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                            <div class="rating justify-content-end">
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
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$34.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>26</span>
                        </td>
                        <td class="text-end pe-0">0.00259%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/38.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 38</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03467002</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$240.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>21</span>
                        </td>
                        <td class="text-end pe-0">0.00207%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/22.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 22</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01843005</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$248.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>17</span>
                        </td>
                        <td class="text-end pe-0">0.00166%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/21.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 21</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02252009</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$190.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>13</span>
                        </td>
                        <td class="text-end pe-0">0.00133%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/47.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 47</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01535002</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                            <div class="rating justify-content-end">
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
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$38.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>11</span>
                        </td>
                        <td class="text-end pe-0">0.00106%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/20.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 20</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02496009</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$282.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>9</span>
                        </td>
                        <td class="text-end pe-0">0.00085%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/43.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 43</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01375006</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$184.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>7</span>
                        </td>
                        <td class="text-end pe-0">0.00068%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/30.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 30</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04738003</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                            <div class="rating justify-content-end">
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
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>$234.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>5</span>
                        </td>
                        <td class="text-end pe-0">0.00054%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/33.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 33</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02417003</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$145.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>4</span>
                        </td>
                        <td class="text-end pe-0">0.00043%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/5.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 5</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02225009</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$279.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>4</span>
                        </td>
                        <td class="text-end pe-0">0.00035%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/16.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 16</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02313008</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$247.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>3</span>
                        </td>
                        <td class="text-end pe-0">0.00028%</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/46.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 46</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02240002</span>
                        </td>
                        <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                            <div class="rating justify-content-end">
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
                        </td>
                        <td class="text-end pe-0">
                            <span>$112.00</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>2</span>
                        </td>
                        <td class="text-end pe-0">0.00022%</td>
                    </tr>
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Products-->

</x-default-layout>
